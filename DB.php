<?php
  $mysqli = new mysqli('localhost', 'root','123','chatbox');
  if( $mysqli->connect_error ){
    die('error');
  }
?>