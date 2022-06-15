<?php

$num1=18;
$num2=3;
$num3=9;
$num4="9";

//Arithmetic operators
echo $num1 + $num2; //Addition operator
echo "<br>";
echo $num1 - $num2; //Subtraction operator
echo "<br>";
echo $num1 * $num2; //Multiplication operator
echo "<br>";
echo $num1 / $num2; //Division operator
echo "<br>";
echo $num1 % $num2; //Modulus
echo "<br>";
echo $num1 ** $num2;//Exponentiation
echo "<br>";

//Comparison operators
var_dump($num3==$num4);//Equal
echo "<br>";
var_dump($num3===$num4);//Identical
echo "<br>";
var_dump($num1>$num2);//Greater than
echo "<br>";
var_dump($num1>=$num2);//Greater than or equal to
echo "<br>";
var_dump($num3<$num4);//Less than
echo "<br>";
var_dump($num4<=$num3);//Less than or equal to
echo "<br>";
var_dump($num3!=$num1);//Not equal
echo "<br>";
var_dump($num3!==$num4);//Not identical
echo "<br>";

//Logical operators
var_dump($num1<=$num3 or $num3===$num4);//or
echo "<br>";
var_dump($num1<=$num3 || $num3===$num4);//or
echo "<br>";
var_dump($num1<=$num3 and $num3===$num4);//and
echo "<br>";
var_dump($num1>=$num3 && $num3<=$num4);//and
echo "<br>";

//String operator
$name1="Malcolm ";
$name2="Njoroge";
echo $name1.$name2;