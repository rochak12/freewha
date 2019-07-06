<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="../style/style.css" rel="stylesheet" type="text/css" /> -->
    <title>Document</title>
</head>
<body>
<header>

		<div class="w3-content">
		<p style="font-size:16px">Nepali-English</p>
		<p style="font-size:24px">Book of Mormon</p>
          	
</div>
		<hr />
	</header>

<!-- Book Header -->

	<div class="space">
	</div>
     
	<!-- <div class="flex-container">
		<a href="nepalibookofmormon.html"><img class="round2" src="../pictures/nepaliYSA.jpg" alt="Salt-lake YSA logo" /></a>
		<p  class="current"><a  href="1nephi1.html">1 Nephi</a></p>
		<p><a href="../2nephi/2nephi1.html">2 Nephi</a></p>
		<p><a href="../jacob/jacob1.html">Jacob</a></p>
		<p><a href="../enos/enos1.html">Enos</a></p>
		<p><a href="../jarom/jarom1.html">Jarom</a></p>
		<p><a href="../omni/omni1.html">Omni</a></p>
		<p><a href="../wordOfMormon/wordOfMormon1.html">Words of Mormon</a></p>
		<p><a href="../mosiah/mosiah1.html">Mosiah</a></p>
		<p><a href="../alma/alma1.html">Alma</a></p>
		<p><a href="../helaman/helaman1.html">Helaman</a></p>
		<p><a href="../3nephi/3nephi1.html">3 Nephi</a></p>
		<p><a href="../4nephi/4nephi1.html">4 Nephi</a></p>
		<p><a href="../mormon/mormon1.html">Mormon</a></p>
		<p><a href="../ether/ether1.html">Ether</a></p>
		<p><a href="../moroni/moroni1.html">Moroni</a></p>
	</div> -->
    <!-- Book Header -->
<!-- Chapter Header -->
	<div class="flex-container">
		<?php 
		for ($i = 1; $i <= 7 ; $i++){
			echo "<a href='jacob$i.php'><div>$i </a></div>";
		}	?>	
	</div>
	

    <!-- Chapter Header -->
</body>
</html>