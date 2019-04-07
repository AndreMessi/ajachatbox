<?php
  include_once "DB.php";
  if (isset($_POST['chatname'])) {
    $chatname = $_POST['chatname'];
    $message  = $_POST['message'];
    $query = $mysqli -> query("INSERT INTO chat(chatname,message) VALUES('$chatname','$message');");
  }
  $mysqli ->close();
?>