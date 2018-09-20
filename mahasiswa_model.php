<?php
include 'conf.php';

class mahasiswa_model{
  function __construct(){
    $db = new conf();
  }

  function insert_data($nrp,$nama,$kelas){
    $sql = "insert into tbl_mahasiswa (`id`,`nrp`,`nama`,`kelas`) VALUES (null,'$nrp','$nama','$kelas')";
    $query = mysql_query($sql);
    return $query;
  }

}

?>
