<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pemwa - Halaman Edit</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/font/glyphicons-halflings-regular.ttf">

</head>

<body>

  <div class="container">
    <h1>Halaman Edit - Pemwa</h1>
    <hr>
  </div>

  <!-- KONTEN UTAMA -->
  <div class="container">
    <h2>Edit User</h2>
    <div class="row">
      <form action="<?= base_url() ?>index.php/home/updatedata" method="post" enctype="multipart/form-data">
        <label>Nama</label><br>
        <input type="text" name="name" value="<?= $data->name ?>"><br><br>
        <label>Alamat</label><br>
        <textarea name="alamat" rows="8" cols="80"><?= $data->alamat ?></textarea><br><br>
        <label>Date</label><br>
        <input type="date" name="date" value="<?= $data->date ?>"><br><br>
        <label>Email</label><br>
        <input type="email" name="email" value="<?= $data->email ?>"><br><br>
        <label>Password</label><br>
        <input type="password" name="password" value="<?= $data->password ?>"><br><br>
        <label>Jurusan</label><br>
        <select name="jurusan">
          <option value="TI" <?php if ($data->jurusan == "TI") {
                                echo "selected=\"selected\"";
                              } ?>>
            Teknik Informatika</option>
          <option value="SI" <?php if ($data->jurusan == "SI") {
                                echo "selected=\"selected\"";
                              } ?>>
            Sistem Informasi</option>
          <option value="MI" <?php if ($data->jurusan == "MI") {
                                echo "selected=\"selected\"";
                              } ?>>
            Manajemen Informatika</option>
          <option value="TK" <?php if ($data->jurusan == "TK") {
                                echo "selected=\"selected\"";
                              } ?>>
            Teknik Komputer</option>
        </select><br><br>
        <label>Jenis Kelamin</label><br>
        <input type="radio" name="gender" value="male" <?php if($data->gender == 'male') echo 'checked'?>>
        Laki-Laki<br>
        <input type="radio" name="gender" value="female" <?php if($data->gender == 'female') echo 'checked'?>> Perempuan<br><br>
        <label>Deskripsi Diri</label><br>
        <textarea name="content" id="content"><?= $data->content ?>"</textarea><br><br>
        <label>Foto</label><br>
        <input type="file" name="fotopost"><br>
        <?php $update_data = explode(",",$data->data); ?>
        <label>Hobi</label><br>
        <input type="checkbox" name="data[]" value="Membaca" <?php in_array ('Membaca', $update_data) ? print "checked" : ""; ?>> Membaca<br>
        <input type="checkbox" name="data[]" value="Sepak Bola" <?php in_array ('Sepak Bola', $update_data) ? print "checked" : ""; ?>> Sepak Bola<br>
        <input type="checkbox" name="data[]" value="Programming" <?php in_array ('Programming', $update_data) ? print "checked" : ""; ?>> Programming<br>
        <br><br>

        <!-- file lama -->
        <input type="hidden" name="filelama" value="<?= $data->foto ?>">
        <!-- ID -->
        <input type="hidden" name="id" value="<?= $data->id ?>">

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
