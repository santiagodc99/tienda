<?php
  require("database.php");

  $email=$_POST['email'];
  $pswd=password_hash($_POST['pswd'],PASSWORD_DEFAULT);

    $sql_validation2 = mysql_query("SELECT * FROM usuarios WHERE email='$email'");
    if($result2=mysql_fe)
