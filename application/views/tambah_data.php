<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Tambah Data Mahasiswa | PEMWA</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/font/glyphicons-halflings-regular.ttf">

</head>

<body>

  <div class="container">
    <h1>Halaman Tambah Data Mahasiswa | PEMWA</h1>
    <hr>
  </div>

  <!-- KONTEN UTAMA -->
  <div class="container">
    <h2>Tambah User</h2>
    <div class="row">
      <form action="<?= base_url() ?>index.php/home/insertdata" method="post" enctype="multipart/form-data">
        <?php echo validation_errors(); ?>
        <label>Nama</label><br>
        <input type="text" name="name" value=""><br><br>
        <label>Alamat</label><br>
        <textarea name="alamat" rows="8" cols="80"></textarea><br><br>
        <label>Tanggal</label><br>
        <input type="date" name="date" value=""><br><br>
        <label>Email</label><br>
        <input type="email" name="email" value=""><br><br>
        <label>Password</label><br>
        <input type="password" name="password" value=""><br><br>
        <label>Jurusan</label><br>
        <select name="jurusan">
          <option value="TI">Teknik Informatika</option>
          <option value="SI">Sistem Informasi</option>
          <option value="MI"> Manajemen Informatika</option>
          <option value="TK">Teknik Komputer</option>
        </select><br><br>
        <label>Jenis Kelamin</label><br>
        <input type="radio" name="gender" value="male"> Male<br>
        <input type="radio" name="gender" value="female"> Female<br><br>
        <label>Deskripsi Diri</label><br>
        <textarea name="content" id="content"></textarea><br><br>
        <label>Foto</label><br>
        <input type="file" name="fotopost"><br>
        <label>Hobi</label><br>
        <input type="checkbox" name="data" value="Membaca"> Membaca<br>
        <input type="checkbox" name="data" value="Sepak Bola"> Sepak Bola<br>
        <input type="checkbox" name="data" value="Programming"> Programming<br>
        <br><br>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        <a href="<?php echo base_url() . 'index.php/Home/index' ?>" class="btn btn-warning"><i class="fas fa-chevron-left"></i> Kembali</a>
      </form>

    </div>
  </div>
  <!-- END KONTEN UTAMA -->

  <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('content');
  </script>
</body>

</html>