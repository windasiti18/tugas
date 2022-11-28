<link rel="stylesheet" href="<?= base_url();?>css/styles.css">
    <center>
        <h1>Input Data Mahasiswa</h1>
        <label style="color:#FF0000"><?php echo validation_errors(); ?></label>
    </center>
    <form action="<?= base_url(); ?>kampus/tambah_aksi" method="post" enctype="multipart/form-data">
        <table style="margin:20px auto;" border="1" id="mahasiswa">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan"></td>
            </tr>
            <tr>
                <td>Upload foto</td>
                <td><input type="file" name="foto"</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"> <input type="reset" value="Batal">
                <?= anchor('kampus/','<input type=button value=kembali>'); ?></td>
            </tr>
        </table>
    </form>
