<?php
$state="Daddy cool";
$state2="Eia foss Juans";

echo "$state";
echo "<br>";
echo "$state2";

$integer=999;
echo "<br>";
var_dump($integer);
echo "<br>";

$decimal=10.999;
var_dump($decimal);
echo "<br>";

$x=true;
$y=false;
echo "<br>";

$cars= array("Lexus","Tesla","BMW","Rolls Royce");
var_dump($cars);
echo "<br>";

class Females {
    public $name;
    public $opinion;
    public $rating;
    public function __construct($name, $opinion, $rating) {
        $this->name = $name;
        $this->opinion = $opinion;
        $this->rating=$rating;
    }
    public function message() {
        return "This female   " . $this->name . " is   " . $this->opinion . "a solid"   .   $this->rating . "!";
    }
}

$myCar = new Females("Maite Perroni", "gorgeous ", 9);
echo $myCar -> message();
echo "<br>";
$myCar = new Females("Doja cat", "fine ", 7);
echo $myCar -> message();
echo "<br>";
$myCar= new Females("Aliyah Khan", "average ", 6.5);
echo $myCar->message();
echo "<br>";


