<?php

require("phpDocx.php");

$arr_length = count($_FILES['userfile']['name']); 

for($i=0;$i<$arr_length;$i++) 
{ 
$phpdocx = new phpdocx("templates/".$_FILES['userfile']['name'][$i]);
//if (!empty($_POST["orgName"])&&!empty($_POST["orgAddr"])&&!empty($_POST["survDate"])&&!empty($_POST["postElectr"])&&!empty($_POST["contractDate"])&&!empty($_POST["phoneQuantity"])&&!empty($_POST["fireSec"])&&!empty($_POST["alarm"])&&!empty($_POST["compService"])&&!empty($_POST["site"])&&!empty($_POST["orgSite"])){
	$nameabbr=stristr($_POST["orgName"],'«',true);
	$name=stristr($_POST["orgName"],'«');
	$words=explode(" ", $nameabbr);
	for($j=0;$j<count($words);$j++){
	$substr[$j]=mb_substr($words[$j],0,1);	
}
$comma_separated=mb_strtoupper(implode("",$substr))." ".$name;
//echo $comma_separated;
$phpdocx->assignBlock("general", array(array(
	"{shortname}"=>$comma_separated
         
         ))
      );
$phpdocx->save("docs/".$_FILES['userfile']['name'][$i]);
}
//}


?>


