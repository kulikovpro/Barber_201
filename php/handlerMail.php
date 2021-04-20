<?php
  $name = $_POST['name'];
  $email= $_POST['email'];
  $text = $_POST['text'];
  mail('sochi.barbershop@mail.ru','Тема письма', "\nИмя: $name\nE-mail: $email\n$text");
  echo 'success';
?>