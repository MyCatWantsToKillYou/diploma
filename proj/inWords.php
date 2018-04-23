<?php

function num2str($num) {
	$nul='ноль';
	$ten=array(
		array('','Один','Два','Три','Четыре','Пять','Шесть','Семь', 'Восемь','Девять'),
		array('','Один','Два','Три','Четыре','Пять','Шесть','Семь', 'Восемь','Девять'),
	);
	$a20=array('Десять','Одиннадцать','Двенадцать','Тринадцать','Четырнадцать' ,'Пятнадцать','Шестнадцать','Семнадцать','Восемнадцать','Девятнадцать');
	$tens=array(2=>'Двадцать','Тридцать','Сорок','Пятьдесят','Шестьдесят','Семьдесят' ,'Восемьдесят','Девяносто');
	$hundred=array('','Сто','Двести','Триста','Четыреста','Пятьсот','Шестьсот', 'Семьсот','Восемьсот','Девятьсот');
	$unit=array( // Units
		array('копейка' ,'копейки' ,'копеек',	 1),
		array('рубль'   ,'рубля'   ,'рублей'    ,0),
		array('тысяча'  ,'тысячи'  ,'тысяч'     ,1),
		array('миллион' ,'миллиона','миллионов' ,0),
		array('миллиард','милиарда','миллиардов',0),
	);
	//
	list($rub,$kop) = explode('.',sprintf("%015.2f", floatval($num)));
	$out = array();
	if (intval($rub)>0) {
		foreach(str_split($rub,3) as $uk=>$v) { // by 3 symbols
			if (!intval($v)) continue;
			$uk = sizeof($unit)-$uk-1; // unit key
			$gender = $unit[$uk][3];
			list($i1,$i2,$i3) = array_map('intval',str_split($v,1));
			// mega-logic
			$out[] = $hundred[$i1]; # 1xx-9xx
			if ($i2>1) $out[]= $tens[$i2].' '.$ten[$gender][$i3]; # 20-99
			else $out[]= $i2>0 ? $a20[$i3] : $ten[$gender][$i3]; # 10-19 | 1-9
			// units without rub & kop
			if ($uk>1) $out[]= morph($v,$unit[$uk][0],$unit[$uk][1],$unit[$uk][2]);
		} //foreach
	}
	else $out[] = $nul;
	$out[] = morph(intval($rub), $unit[1][0],$unit[1][1],$unit[1][2]); // rub
	$out[] = $kop.' '.morph($kop,$unit[0][0],$unit[0][1],$unit[0][2]); // kop
	return trim(preg_replace('/ {2,}/', ' ', join(' ',$out)));
}


function morph($n, $f1, $f2, $f5) {
	$n = abs(intval($n)) % 100;
	if ($n>10 && $n<20) return $f5;
	$n = $n % 10;
	if ($n>1 && $n<5) return $f2;
	if ($n==1) return $f1;
	return $f5;
}

global $N0, $Ne0, $Ne1, $Ne2, $Ne3, $Ne6;

$N0 = 'ноль';

$Ne0 = array(
             0 => array('','один','два','три','четыре','пять','шесть',
                        'семь','восемь','девять','десять','одиннадцать',
                        'двенадцать','тринадцать','четырнадцать','пятнадцать',
                        'шестнадцать','семнадцать','восемнадцать','девятнадцать'),
             1 => array('','одна','две','три','четыре','пять','шесть',
                        'семь','восемь','девять','десять','одиннадцать',
                        'двенадцать','тринадцать','четырнадцать','пятнадцать',
                        'шестнадцать','семнадцать','восемнадцать','девятнадцать')
             );

$Ne1 = array('','десять','двадцать','тридцать','сорок','пятьдесят',
             'шестьдесят','семьдесят','восемьдесят','девяносто');

$Ne2 = array('','сто','двести','триста','четыреста','пятьсот',
             'шестьсот','семьсот','восемьсот','девятьсот');

$Ne3 = array(1 => 'тысяча', 2 => 'тысячи', 5 => 'тысяч');

$Ne6 = array(1 => 'миллион', 2 => 'миллиона', 5 => 'миллионов');

function written_number($i, $female=false) {
  global $N0;
  if ( ($i<0) || ($i>=1e9) || !is_int($i) ) {
    return false; // Аргумент должен быть неотрицательным целым числом, не превышающим 1 миллион
  }
  if($i==0) {
    return $N0;
  }
  else {
    return preg_replace( array('/s+/','/\s$/'),
                         array(' ',''),
                         num1e9($i, $female));
    return num1e9($i, $female);
  }
}

function num_125($n) {
  /* форма склонения слова, существительное с числительным склоняется
   одним из трех способов: 1 миллион, 2 миллиона, 5 миллионов */
  $n100 = $n % 100;
  $n10 = $n % 10;
  if( ($n100 > 10) && ($n100 < 20) ) {
    return 5;
  }
  elseif( $n10 == 1) {
    return 1;
  }
  elseif( ($n10 >= 2) && ($n10 <= 4) ) {
    return 2;
  }
  else {
    return 5;
  }
}

function num1e9($i, $female) {
  global $Ne6;
  if($i<1e6) {
    return num1e6($i, $female);
  }
  else {
    return num1000(intval($i/1e6), false) . ' ' .
      $Ne6[num_125(intval($i/1e6))] . ' ' . num1e6($i%1e6, $female);
  }
}

function num1e6($i, $female) {
  global $Ne3;
  if($i<1000) {
    return num1000($i, $female);
  }
  else {
    return num1000(intval($i/1000), true) . ' ' .
      $Ne3[num_125(intval($i/1000))] . ' ' . num1000($i%1000, $female);
  }
}

function num1000($i, $female) {
  global $Ne2;
  if( $i<100) {
    return num100($i, $female);
  }
  else {
    return $Ne2[intval($i/100)] . (($i%100)?(' '. num100($i%100, $female)):'');
  }
}

function num100($i, $female) { 
  global $Ne0, $Ne1;
  $gender = $female?1:0;
  if ($i<20) {
    return $Ne0[$gender][$i];
  }
  else {
    return $Ne1[intval($i/10)] . (($i%10)?(' ' . $Ne0[$gender][$i%10]):'');
  }
}

?>