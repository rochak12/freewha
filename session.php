<?php 
session_start();
?>

<?php
if (isset($_GET['change'])){
  
    if (!isset($_SESSION['language'])){
        $_SESSION['language'] = 'both';
        return('both');
    }

  if ($_SESSION['language'] == 'both') {
    $_SESSION['language'] = "english";
    print("english");
    return;
  }
  if ($_SESSION['language'] == 'english'){
    $_SESSION['language'] = "nepali";
    print ("nepali");
    return;
  }

  if  ($_SESSION['language'] == 'nepali'){
    $_SESSION['language'] = 'both';
    echo("both");
    return;
  }
}


if (isset($_GET['check'])){
 print ($_SESSION['language']);
}
?>