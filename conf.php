<?php

define('hostname','localhost');
define('username','root');
define('password','');
define('dbname','latihan');

class conf{
  function __construct(){
  $connection = mysql_connect(hostname,username,password);
  mysql_select_db(dbname, $connection);
  }
}

?>
