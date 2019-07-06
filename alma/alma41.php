<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<HEAD>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="../style/style.css" rel="stylesheet" type="text/css" />
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>
<script type="text/javascript" src="../javascript.js"></script>
</HEAD>


<body>
<?//php include ($_SERVER['DOCUMENT_ROOT']."/navbar.php");?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/menu.php");?>



<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">
  <div class="w3-row w3-padding-64">
 
     <div class="w3-content w3-container">
      <!-- <h1 class="w3-text-teal">1 Nephi 1</h1> -->
      <!--changes must be done below this-->


      <?php include ($_SERVER['DOCUMENT_ROOT']."/alma/almaChapters.php");?>
      <?php include ($_SERVER['DOCUMENT_ROOT']."/databaseConnection.php");?>
    


      <!--include the whole php page of each page here -->



      <table>
<tr><td class="caption"> <span class="english"> Alma 41 </span><span class="nepali">/ अल्मा 41</span></td></tr>

<div class="wrap" id="demo"></div> 








<?php
   $json = file_get_contents("../json/jsoneng.json");
   $obj = json_decode($json, true);

   $json2 = file_get_contents("../json/jsonnep.json");
   $obj2 = json_decode($json2, true);


    $bookName = $obj['books'][8]['book'];
    $chapterName = $obj['books'][8]['chapters'][40]['chapter'];
    $GLOBALS['i'] = 0;
   
    foreach ($db->query("SELECT * FROM book where name_book ='$bookName'") as $booklist){
      $GLOBALS['bookNo'] =  $booklist['book_id'];
    }
   foreach ($obj['books'][8]['chapters'][40]['verses'] as $print )  
   {
     $flag1 = FALSE;
     $currentVerse = $print['verse'];

     if (!isset($_SESSION['username']))
{       $username = ""; }
     else
 {    $username = $_SESSION['username']; }
     
     if ($db->query("SELECT * FROM highlight where book_id=9 and chapter=41 and verse = $currentVerse and username = '$username' ")){
    foreach ($db->query("SELECT * FROM highlight where book_id=9 and chapter=41 and username = '$username' ") as $row){
     if ($row['verse'] === $print['verse']){
        echo "<tr><td class='english highlight'  id='"  . $print['verse'] ."'" . "onmouseup='callevent(" . $print['verse'] .  ",event)'><mark>";   
        echo $print['verse'] . " " ;
        echo $print['text'] . "</mark></td></tr>" ;

        echo "<tr><td class='nepali highlight'  id='"  . $print['verse'] ."'" . "onmouseup='callevent(" . $print['verse'] .  ",event)'><mark>";   
        echo $print['verse'] . " " ;
        echo $obj2['books'][8]['chapters'][40]['verses'][$i]['text'] . "</mark></td></tr>" ;

        echo  "<tr><td class='invisible'></td></tr>" ;  
        $flag1 = TRUE;
       }
      }
    }
    if ($flag1 == TRUE) { continue;}
   echo "<tr><td class='english unhighlight'  id='"  . $print['verse'] ."'" . "onmouseup='callevent(" . $print['verse'] .  ",event)'>";   
   echo $print['verse'] . " " ;
   echo $print['text'] . "</td></tr>" ;

   echo "<tr><td class='nepali unhighlight'  id='"  . $print['verse'] ."'" . "onmouseup='callevent(" . $print['verse'] .  ",event)'>";   
   echo $print['verse'] . " " ;
   echo $obj2['books'][8]['chapters'][40]['verses'][$i]['text'] . "</td></tr>" ;

   echo  "<tr><td class='invisible'></td></tr>" ;

   $i++;
  }




     
 
?>

</table>

<div class='option' id='option'>   
  <button type='button' style='background:white' onclick="unhighlight( <?php echo $bookNo . ',' .  $chapterName ; ?>)"></button>
    <button type=button style='background:yellow' onclick="highlight( <?php echo $bookNo. ',' .  $chapterName ; ?>)"></button>
   </div>

<div style="display:none">
   <p id=test> test </P>  
   <p id=test1> test1 </P>

</div>
        <!-- changes must be done above this-->
      </div>
    </div>
    <?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php");?>
</div>
</body>
</html>
