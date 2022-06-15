<?php
$age=array("Harvey"=>"35","Kimberly"=>"21","Devi"=>"17","Spectre"=>"28","Malone"=>"25");
echo "Harvey is ".$age['Harvey']." years old";
echo "<br>";
foreach ($age as $x => $value) {
    echo "$x=$value<br>";
}

$num= array(22,89,9,20,19,76,40,69);
sort($num);
var_dump($num);

unset($num[3]);
echo "<br>";
var_dump($num);

$num=array_values($num);

