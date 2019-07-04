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