<?php 
session_start();
?>
<?php include ($_SERVER['DOCUMENT_ROOT']."../databaseConnection.php");?>

<?php
$userName = $_GET['uname'];
$password = $_GET['psw'];
$GLOBALS['hash'] = "";

if (!isset($userName) || $userName == ""
	|| !isset($password) || $password == "")
{
	header("Location: login.php");
	die(); 
}

foreach($db->query("select * from userInfo where user_id='$userName'") as $list){
  $hash = $list['user_password'];
}

if (password_verify($password, $hash)) {
   // session 
   $_SESSION['username'] = $userName; 
    header ("Location: ../1nephi/1nephi1.php");
} else {
    header ("Location: login.php?message=Wrong UserName or Password");
}

?>