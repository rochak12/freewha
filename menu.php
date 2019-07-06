
<HTML>
<HEAD>
</HEAD>

<BODY onload="check()">

<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="#" onclick="changeLanguage();return false;" class="w3-bar-item w3-button w3-theme-l1">Language</a>
    <p style="margin:0px; padding:0px" href="#" class="w3-bar-item">&nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<span class="w3-hide-small">   &nbsp; &nbsp;</span></p>
    <a href="../login/login.php" class="w3-bar-item w3-button  w3-hover-white">Login</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
    <a href="#" class="w3-bar-item w3-button  w3-hide-small w3-hover-white">Values</a>
    <a href="../logout.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Logout</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Clients</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Partners</a>
  </div>
</div>  

<script>
function changeLanguage(){
   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
        
          hide(this.responseText.trim());          
            }
        };
        var url = "../session.php?change='yes'";
                   
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
}


function check(){
  var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
        
            document.getElementById("test1").innerHTML = "33" + this.responseText.trim() + "44";
            hide(this.responseText);          
            }
        };
        var url = "../session.php?check='yes'";
                   
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
}

function hide(strin){
  document.getElementById("test").innerHTML = "123" + strin + "545";


  if (strin == 'both'){
    document.getElementById("test1").innerHTML = "diplay both";

    var a = document.getElementsByClassName('nepali');
    for (var i = 0; i < a.length; i ++){
      a[i].style.display = "initial";
    }
    var b = document.getElementsByClassName('english');
    for (var i = 0; i < b.length; i ++){
      b[i].style.display = "initial";
    }
  }

  if (strin == "english"){
    document.getElementById("test1").innerHTML = "diplay eng";


    var a = document.getElementsByClassName('nepali');
    for (var i = 0; i < a.length; i ++){
      a[i].style.display = "none";
    }
    var b = document.getElementsByClassName('english');
    for (var i = 0; i < b.length; i ++){
      b[i].style.display = "initial";
    }
  }



  if (strin == "nepali"){
    document.getElementById("test1").innerHTML = "diplay nep";


    var a = document.getElementsByClassName('nepali');
    for (var i = 0; i < a.length; i ++){
      a[i].style.display = "initial";
    }
    var b = document.getElementsByClassName('english');
    for (var i = 0; i < b.length; i ++){
      b[i].style.display = "none";
    }
  }
}

</script>





<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

<!--Menu Starts
.
.
.
.
.
-->

<style>
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}


.collapsible2 {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible2:hover {
  background-color: #555;
}

.collapsible2:after {
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}
</style>

  <button class="collapsible">1 Nephi</button>
  <div class="content"> 
  <?php 
  for ($i = 1 ; $i <= 22 ; $i++){
    echo "<a class='w3-bar-item w3-button w3-hover-black' href='../1nephi/1nephi$i'>1 Nephi $i</a>";
  } 
?>
</div>
<button class="collapsible">2 Nephi</button>
<div class="content">
<?php 
  for ($i = 1 ; $i <= 33 ; $i++){
    echo "<a class='w3-bar-item w3-button w3-hover-black' href='../2nephi/2nephi$i'>2 Nephi $i</a>";
  } 
?>
</div>
<button class="collapsible">Jacob</button>
<div class="content">
  <?php 
  for ($i = 1 ; $i <= 7 ; $i++){
    echo "<a class='w3-bar-item w3-button w3-hover-black' href='../jacob/jacob$i'>Jacob $i</a>";
  } 
?></div>


<a href="../enos/enos1"><button class="collapsible2">   Enos</button></a>
<a href="../jarom/jarom1"><button class="collapsible2"> Jarom</button></a>
<a href="../omni/omni1"><button class="collapsible2">   Omni</button></a>
<a href="../wordsOfMormon/wordsOfMormon1"><button class="collapsible2">  Words of Mormon</button></a>

<button class="collapsible">Mosiah</button>
<div class="content">
  <?php 
  for ($i = 1 ; $i <= 29 ; $i++){
    echo "<a class='w3-bar-item w3-button w3-hover-black' href='../mosiah/mosiah$i'>Mosiah $i</a>";
  } 
?></div>


<button class="collapsible">Alma</button>
<div class="content">
  <?php 
  for ($i = 1 ; $i <= 63 ; $i++){
    echo "<a class='w3-bar-item w3-button w3-hover-black' href='../alma/alma$i'>Alma $i</a>";
  } 
?></div>

<button class="collapsible">Helaman</button>
<div class="content">
  <?php 
  for ($i = 1 ; $i <= 16 ; $i++){
    echo "<a class='w3-bar-item w3-button w3-hover-black' href='../helaman/helaman$i'>Helaman $i</a>";
  } 
?></div>

<button class="collapsible">3 Nephi</button>
<div class="content">
  <?php 
  for ($i = 1 ; $i <= 30 ; $i++){
    echo "<a class='w3-bar-item w3-button w3-hover-black' href='../3nephi/3nephi$i'>3 Nephi $i</a>";
  } 
?></div>

<a href="../4nephi/4nephi1"><button class="collapsible2">4 Nephi</button></a>

<button class="collapsible">Mormon</button>
<div class="content">
  <?php 
  for ($i = 1 ; $i <= 9 ; $i++){
    echo "<a class='w3-bar-item w3-button w3-hover-black' href='../mormon/mormon$i'>Mormon $i</a>";
  } 
?></div>


<button class="collapsible">Ether</button>
<div class="content">
  <?php 
  for ($i = 1 ; $i <= 15 ; $i++){
    echo "<a class='w3-bar-item w3-button w3-hover-black' href='../ether/ether$i'>Ether $i</a>";
  } 
?></div>


<button class="collapsible">Moroni</button>
<div class="content">
  <?php 
  for ($i = 1 ; $i <= 10 ; $i++){
    echo "<a class='w3-bar-item w3-button w3-hover-black' href='../moroni/moroni$i'>Moroni $i</a>";
  } 
?></div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

<!-- Menu ends 
.
.
.
.
.
-->
  
 

</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
</BODY>
</HTML>