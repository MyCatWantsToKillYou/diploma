<?php

require("phpDocx.php");
use morphos\Russian\NounDeclension;
use morphos\Russian\GeographicalNamesInflection;
use morphos\Russian\CardinalNumeralGenerator;
use morphos\Russian\NounPluralization;
use morphos\S;
use morphos\Gender;

$paths = [
    // as a root package or phar
    __DIR__.'/vendor/autoload.php',
    // as a dependency from bin
    __DIR__.'/../autoload.php',
    // as a dependency from package folder
    __DIR__.'/../../../autoload.php',
    ];
function init_composer(array $paths) {
    foreach ($paths as $path) {
        if (file_exists($path)) {
            require_once $path;
            return true;
        }
    }
    return false;
}
if (!init_composer($paths)) die('Run `composer install` firstly.'.PHP_EOL);

//echo morphos\Russian\NounDeclension::getCase('Муниципальное', 'родительный');


$arr_length = count($_FILES['userfile']['name']);


for($i=0;$i<$arr_length;$i++) 
{ 
$phpdocx = new phpdocx("templates/".$_FILES['userfile']['name'][$i]);
//if (!empty($_POST["orgName"])&&!empty($_POST["orgAddr"])&&!empty($_POST["survDate"])&&!empty($_POST["postElectr"])&&!empty($_POST["contractDate"])&&!empty($_POST["phoneQuantity"])&&!empty($_POST["fireSec"])&&!empty($_POST["alarm"])&&!empty($_POST["compService"])&&!empty($_POST["site"])&&!empty($_POST["orgSite"])){
	$nameabbr=stristr($_POST["orgName"],'«',true);
	$name=stristr($_POST["orgName"],'«');
	$words=explode(" ", $nameabbr);
	for($j=0;$j<count($words);$j++){
		if(iconv_strlen($words[$j])==1){
			unset($words[$j]);
		}
	}
	for($j=0;$j<count($words);$j++){
	$declension[$j]=morphos\Russian\NounDeclension::getCase($words[$j], 'родительный');
	$substr[$j]=mb_substr($words[$j],0,1);	
}
$orgName=implode(" ",$declension)." ".$name;
$comma_separated=mb_strtoupper(implode("",$substr))." ".$name;

	$substr=array();
	$words=array();
	$manName=$_POST["FirstPerson"];
	$words=explode(" ",$manName);
	for($j=1;$j<count($words);$j++){
		$substr[$j-1]=mb_strtoupper(mb_substr($words[$j],0,1).".");
	}
$manager=implode(" ",$substr)." ".$words[0];
$lines=$_POST["phoneQuantity"]."(".CardinalNumeralGenerator::getCase($_POST["phoneQuantity"], 'именительный', Gender::FEMALE).")";
$phpdocx->assignBlock("general", array(array(
	"{shortname}"=>$comma_separated,
	"{managerPost}"=>$_POST["FirstPersonPost"],
	"{manager}"=>$manager,
	"{year}"=>date("Y"),
	"{name}"=>$orgName,
	"{survDate}"=>$_POST["survDate"],
	"{contractNum}"=>$_POST["contractNum"],
	"{contractDate}"=>$_POST["contractDate"],
	"{namegenitive}"=>$comma_separated,
	"{postElectr}"=>$_POST["postElectr"],
	"{respName}"=>$_POST["respName"],
	"{phoneQuantity}"=>$lines,
	"{fireSec}"=>$_POST["fireSec"],
	"{alarm}"=>$_POST["alarm"],
	"{site}"=>$_POST["site"],
	"{orgSite}"=>$_POST["orgSite"]
         ))
      );
	$j=1;
	$roomNames = array(array("{roomName}"=>$_POST["roomName1".$j]));
do{
$phpdocx->assignBlock("rooms", array(array("{roomName}"=>$_POST["roomName1".$j])

	       )
      );
$j++;
} while(array_key_exists("roomName1".$j, $_POST));
$phpdocx->save("docs/".$_FILES['userfile']['name'][$i]);
}
foreach($_POST as $key => $val)
echo '[ '.$key.' ] => '.$val."<br />";

//}

?>



