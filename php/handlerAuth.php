<?php
  header("Access-Control-Allow-Origin: *");
  session_start();
  $mysqli = new mysqli('localhost','n91045rw_bd','o40UW2P1','n91045rw_bd');
  $email = trim(mb_strtolower($_POST['email']));
  $pass = trim($_POST['pass']);
  $result = $mysqli->query("SELECT * FROM `users` WHERE `email`='$email'");
  $row = $result->fetch_assoc();
  var_dump($row);
  if(password_verify($pass,$row['pass'])){
    $_SESSION['name'] = $row['name'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['id'] = $row['id'];
    echo json_encode(['result'=>'success']);
  }else{
    echo json_encode(['result'=>'error']);
  }
?>