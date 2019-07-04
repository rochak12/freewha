<!-- 

<?php
global $obj;
global $books;
global $chapters;
global $verses;
global $newObj;


 $json = file_get_contents("json/jsoneng.json");
 $obj = json_decode($json, true);

//  rename_function('json_encode', 'override_json_encode' );
// override_function("json_encode", '$obj', 'return override_json_encode($obj);' );


 //function override_json_encode($obj){
 foreach($obj['books'] as &$books){
     foreach ($books['chapters'] as &$chapters){
         foreach($chapters['verses'] as &$verses){
             
           //  echo $verses['text'] . "<br/>";
              $verses['text'] = "";
             
        //      if (str_replace($verses['text'], " ", $verses['text'])) 
        //         echo "success";
        //         else
        //         echo "unsuccess";
        // echo "<br>";



        // echo $verses['text'] . "hcbjcvjhvchjv";
        //      if ($verses['text'] == " " )
        //      echo "it's deleted" . "<hr/>"       ;           
            }
     }
 }

 $newObj = json_encode($obj);
 file_put_contents('json/h.json', $newObj);







// $obj2 = json_decode($newObj, true); 

// foreach($obj2['books'] as $books2){
//     foreach ($books2['chapters'] as $chapters2){
//         foreach($chapters2['verses'] as $verses2){
//             if ($verses2['text'] == "" )
//             echo "it's deleted" . "<hr/>"       ;   
//             else
//             echo "it is not deleted";
//            }
//     }
// }


?> -->