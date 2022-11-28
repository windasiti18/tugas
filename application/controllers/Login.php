<?php

class Login extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('m_data');
    }
    
    function index() {
        $this->load->view('tampil_login');
    }

    function aksi_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5 ($password)
            );
        $cek = $this->m_data->cek_login("admin",$where)->num_rows();
        if($cek > 0){

            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );

            $this->session->set_userdata($data_session);

            redirect (base_url ("kampus"));

        }else{
            echo "<script language=\"javascript\">alert (\"Username atau Password Salah\") ;document.location=\"../login\"</script>";
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}