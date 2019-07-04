
  var contentt;
  var verseNo;
  var bookName;
  var chapterName;
  function callevent(iddd, event) {
  verseNo=iddd;
  content = (document.all) ? document.selection.createRange().text : document.getSelection();
  if (content != ""){
  contentt = content;
  // t = t + "    " + idd ;
  var y = event.clientY;
  var x = event.clientX;
 
   document.getElementById("test").innerHTML = contentt;

  document.getElementById('option').style.top = y + (document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) +'px';
  document.getElementById('option').style.left = x + (document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft) +'px';
  document.getElementById('option').style.visibility = 'visible';

       }
}
function highlight(bookNamee, chapterNamee){  
 bookName = bookNamee;
 chapterName = chapterNamee;
 contentl = window.contentt;                                     // here is a problem
 
 document.getElementById("test1").innerHTML = "$$$$$" + contentl;  // this line works here but it doesn't work down below  

  var colorVerse = document.getElementById(verseNo);
  

if (colorVerse.classList.contains('unhighlight')){
  //do something
  var temp1 = document.getElementById(verseNo).innerHTML;
  temp1 = "<mark>" + temp1 + "</mark>";
  document.getElementById(verseNo).innerHTML = temp1;
  document.getElementById(verseNo).classList.remove("unhighlight")
  document.getElementById(verseNo).classList.add("highlight");
  
 // document.getElementById("test1").innerHTML = "$$$$$" + contentl;                    // here is a problem
   updateDatabase('highlight', content);
}


}
function unhighlight(bookNamee, chapterNamee){
  bookName = bookNamee;
 chapterName = chapterNamee;
 contentl = window.contentt;                   // here is a problem
 
 var dom =   document.getElementById(verseNo);
if (dom.classList.contains('highlight')){
  //do something
  var temp2 = document.getElementById(verseNo).innerHTML;
  temp2 = temp2.replace("<mark>", "");
  document.getElementById(verseNo).innerHTML = temp2;
  document.getElementById(verseNo).classList.remove("highlight")
  document.getElementById(verseNo).classList.add("unhighlight");

  document.getElementById("test1").innerHTML = "------" + contentl;     // here is a problem
  updateDatabase('unhighlight', content);
}


}
function updateDatabase(flag2, content){
   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             
            //    document.getElementById("test1").innerHTML = this.responseText;
            }
        };
        var urlForDatabase = "../updateDatabase.php?flag="+ flag2
        + "&bookName=" + bookName
        + "&chapterName=" + chapterName
        + "&verse=" + verseNo
        + "&content=" + content;
                   
        xmlhttp.open("GET", urlForDatabase, true);
        xmlhttp.send();
}
