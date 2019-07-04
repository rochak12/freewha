<?php require("../databaseConnection.php"); ?>


<?php

$email = $_GET['email'];
$password = $_GET['psw'];

$email = htmlspecialchars($email);

if ($db->query("Select * from userInfo where user_id = '$email'")){
   header ("Location: signUp.php?message='User Name Already Taken'");
 }

$passwordHash = password_hash($password, PASSWORD_DEFAULT);



if ($db->query("Insert into userInfo (user_id, user_password) values ('$email', '$passwordHash')")){
header ("Location: ../login/login.php");
}
?>