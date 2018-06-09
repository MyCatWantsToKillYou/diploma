<?php

require("phpDocx.php");
use morphos\Russian\NounDeclension;
use morphos\Russian\GeographicalNamesInflection;
use morphos\Russian\CardinalNumeralGenerator;
use morphos\Russian\OrdinalNumeralGenerator;
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

if (!init_composer($paths)) die('Run `composer install` firstly.' . PHP_EOL);

//echo morphos\Russian\NounDeclension::getCase('Муниципальное', 'родительный');


$arr_length = count($_FILES['userfile']['name']);


for ($i=0;$i<$arr_length;$i++) { 
	$phpdocx = new phpdocx("templates/".$_FILES['userfile']['name'][$i]);
	//if (!empty($_POST["orgName"])&&!empty($_POST["orgAddr"])&&!empty($_POST["survDate"])&&!empty($_POST["postElectr"])&&!empty($_POST["contractDate"])&&!empty($_POST["phoneQuantity"])&&!empty($_POST["fireSec"])&&!empty($_POST["alarm"])&&!empty($_POST["compService"])&&!empty($_POST["site"])&&!empty($_POST["orgSite"])){

$phpdocx->assignBlock("general", array(array(
	"{shortname}"=>getShortName($_POST["orgName"]),
	"{managerPost}"=>$_POST["FirstPersonPost"],
	"{orgAddr}"=>$_POST["orgAddr"],
	"{manager}"=>getManager($_POST["FirstPerson"]),
	"{year}"=>date("Y"),
	"{name}"=>getFullName($_POST["orgName"]),
	"{survDate}"=>$_POST["survDate"],
	"{contractNum}"=>$_POST["contractNum"],
	"{contractDate}"=>$_POST["contractDate"],
	"{namegenitive}"=>getShortName($_POST["orgName"]),
	"{postElectr}"=>$_POST["postElectr"],
	"{respName}"=>$_POST["respName"],
	"{phoneQuantity}"=>getLines($_POST["phoneQuantity"]),
	"{fireSec}"=>$_POST["fireSec"],
	"{alarm}"=>$_POST["alarm"],
	"{site}"=>$_POST["site"],
	"{orgSite}"=>$_POST["orgSite"]
         ))
      );
	$j=["","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","18","19","20"];
	$k=0;
	while(array_key_exists("roomName1".$j[$k], $_POST)){
		$names[]="roomName1".$j[$k];
		$levels[]="level".$j[$k];
		$postFIOs[]="postFIO".$j[$k];
		$cabinFIOs[]="cabinFIO".$j[$k];
		$doorMats[]="doorMat".$j[$k];
		$locks[]="Lock".$j[$k];
		$winMats[]="winMat".$j[$k];
		$lattices[]="lattice".$j[$k];
		$ecity[]="electicity".$j[$k];
		$alarm[]="signalization".$j[$k];
		$phone[]="phone".$j[$k];
		$net[]="net".$j[$k];
		$amt[]="lattice".$j[$k];
		
		$temp1 = [
			"{roomName}"=>$_POST[$names[$k]],
			"{level}"=>OrdinalNumeralGenerator::getCase($_POST[$levels[$k]],'предложный', Gender::MALE),
			"{postFIO}"=>$_POST[$postFIOs[$k]],
			"{cabinFIO}"=>$_POST[$cabinFIOs[$k]],
			"{adjMatDoor}"=>NounDeclension::getCase($_POST[$doorMats[$k]], 'родительный'),
			"{adjLock}"=>NounDeclension::getCase($_POST[$locks[$k]], 'творительный'),
			"{adjMatWindow}"=>NounDeclension::getCase($_POST[$winMats[$k]], 'родительный'),
			"{no}"=> isset($_POST[$lattices[$k]]) ? "" : "не",
			"{adjMatLat}"=>isset($_POST[$amt[$k]]) ? "металлической" : "",
			"{electricity}" => isset($_POST[$ecity[$k]]) ? "электричество," : "",
			"{signalization}" => isset($_POST[$alarm[$k]]) ? "сигнализация," : "",
			"{phone}" => isset($_POST[$phone[$k]]) ? "телефон," : "",
			"{net}"=> isset($_POST[$net[$k]]) ? "локальная сеть." : ""
		];
	
	
		$phpdocx->assignBlock("rooms", array($temp1));
		$phpdocx->assignNestedBlock("room", array($temp1),array("rooms"=>1));
		$k++;
		
	}
	$m=0;
	$n=0;
	while(array_key_exists("ispdnName".$j[$m], $_POST)){
		$arms[]="ispdnArmNumber".$j[$m];
		$armNames[]=explode(" ", $_POST[$arms[$m]]);
		$ispdns[]="ispdnName".$j[$m];
		$lists[]="text".$j[$m];
		$armQuans[]="ispdnArmQuan".$j[$m];
		$temp = [
			"{ispdnName}"=>$_POST[$ispdns[$m]],
			"{ispdnList}"=>$_POST[$lists[$m]],
			"{armQuan}"=>$_POST[$armQuans[$m]],
			"{orgAddr}"=>$_POST["orgAddr"],
		
		];

		$phpdocx->assignBlock("ispdns",array($temp));
		$phpdocx->assignNestedBlock("ispdn", array($temp),array("ispdns"=>1));
		$phpdocx->assignBlock("ispdnArms",array($temp));
		$phpdocx->assignNestedBlock("ispdnArm", array($temp),array("ispdnArms"=>1));
		while($n<count($armNames[$m])){
			$temp2 = [
				
				"{armName}"=>$armNames[$m][$n],
			];
			$n++;
		}
		
			$phpdocx->assignNestedBlock("arms", array($temp2), array("ispdnArms"=>1));
			//$phpdocx->assignNestedBlock("arms", array($temp2), array("ispdnArms"=>1));

		echo $armNames[$m][0];
		$m++;
	}

$phpdocx->save("docs/".$_FILES['userfile']['name'][$i]);
}
//foreach($_POST as $key => $val){
//echo '[ '.$key.' ] => '.$val."<br />";
//}

function getShortName($fullName){
	$nameabbr=stristr($fullName,'«',true);
	$name=stristr($fullName,'«');
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
return mb_strtoupper(implode("",$substr))." ".$name;
}

function getFullName($fullName){
	$nameabbr=stristr($fullName,'«',true);
	$name=stristr($fullName,'«');
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
return implode(" ",$declension)." ".$name;

}

function getManager($manager)
{
	$words=explode(" ",$manager);
	for($j=1;$j<count($words);$j++){
		$substr[$j-1]=mb_strtoupper(mb_substr($words[$j],0,1).".");
	}
return implode(" ",$substr)." ".$words[0];
}

function getLines($number){

return $number."(".CardinalNumeralGenerator::getCase($number, 'именительный', Gender::FEMALE).")";
}

function getArms($ispdnName){
	explode(" ", $ispdnName);

	return explode(" ", $ispdnName);
}
?>



