<?php
include_once ("mahasiswa_model.php");
$mahasiswa = new mahasiswa_model();
if($_POST){
  $nrp = $_POST['nrp'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $mahasiswa->insert_data($nrp,$nama,$kelas);
}

?>
<html>
  <head>
    <title>Insert</title>
  </head>

  <body>
    <form action="" method="POST">
      <input type="text" name="nrp" placeholder="nrp">
      <input type="text" name="nama" placeholder="nama">
      <input type="text" name="kelas" placeholder="kelas">
      <input type="submit">
    </form>
  </body>

</html>
