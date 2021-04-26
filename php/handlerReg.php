<?php
  header("Access-Control-Allow-Origin: *");
  $mysqli = new mysqli('localhost','v90377xk_0201','L6Ted&jv','v90377xk_0201');
  $name = $_POST['register-form-name'];
  $lastname = $_POST['register-form-username'];
  $email = trim(mb_strtolower($_POST['register-form-email']));
  $pass = trim($_POST['register-form-password']);
  $pass = password_hash($register-form-password, PASSWORD_DEFAULT);
  $result = $mysqli->query("SELECT id FROM `user` WHERE `register-form-email`='$email'");
  if($result->num_rows){
    echo json_encode(['result'=>'exist']);
  }else{
    $mysqli->query("INSERT INTO `user`(`register-form-name`, `register-form-username`, `register-form-email`, `register-form-password`) VALUES ('$name','$lastname','$email','$pass')");
    echo json_encode(['result'=>'success']);
  }
?>