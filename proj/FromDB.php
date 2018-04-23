<?php

require("phpDocx.php");

$arr_length = count($_FILES['userfile']['name']); 

for($i=0;$i<$arr_length;$i++) 
{ 
$phpdocx = new phpdocx("templates/".$_FILES['userfile']['name'][$i]);
$words=explode(" ",$obj->FIO1);
$words[1]=iconv_substr($words[1],0,1);
$words[2]=iconv_substr($words[2],0,1);
$new_str=$words[1].".".$words[2].".".$words[0];
$phpdocx->assignBlock("doc", array(array(
         "{number}"=>$obj->number,
         "{name}"=>$obj->name,
         "{FIO1}"=>$obj->FIO1,
         "{FIO2}"=>$new_str
         ))
      );
$phpdocx->save("docs/".$_FILES['userfile']['name'][$i]);
}

?>


