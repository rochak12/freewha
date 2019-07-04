<?php 
session_start();
?>

<?php
$flag = $_GET['flag'];
$bookName = $_GET["bookName"];
$chapterName = $_GET['chapterName'];
$verse = $_GET['verse'];
$content = $_GET['content'];
?>

<?php
// default Heroku Postgres configuration URL
$dbUrl = getenv('DATABASE_URL');
if ($dbUrl){
  $dbopts = parse_url($dbUrl);


  $dbHost = $dbopts["host"];
  $dbPort = $dbopts["port"];
  $dbUser = $dbopts["user"];
  $dbPassword = $dbopts["pass"];
  $dbName = ltrim($dbopts["path"],'/');
  
  $newVar = "pgsql:host=$dbHost;port=$dbPort;dbname=$dbName";
}
else{
  $newVar = "pgsql:host=localhost;port=5432;dbname=mydb";
  $dbUser = "postgres";
  $dbPassword = "9804400785";
  
}


try {
 $db = new PDO($newVar, $dbUser, $dbPassword);
}
catch (PDOException $ex) {
 print "<p>error: " . $ex/*->getMessage() */. "</p>\n\n";
 die();
}
?>


<?php
$username = $_SESSION['username'];
if ($flag == 'highlight'){
     $db->query("insert into highlight (novel_id, book_id, chapter, verse, scripture, username) values 
                 (1, '$bookName', '$chapterName', '$verse', '$content', '$username')");
 }

 if ($flag == 'unhighlight'){
       $db->query("delete from highlight where novel_id =1 and book_id = $bookName and chapter = $chapterName and verse = $verse and username = '$username'");   
   }

?>