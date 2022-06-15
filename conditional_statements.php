<?php
$num1=69;
$num2=23;
$marks=75;
$salary=700000;


//IF statement
if ($num1>$num2){
 echo "$num1 is greater than $num2";
}
echo "<br>";
if ($num2<$num1){
    echo "$num2 is less than $num1";
}
echo "<br>";

//IF...ELSE statement
if ($num1<$num2){
    echo "$num2 is less than $num1";

}
else{
    echo "$num1 is not less than $num2";
}
echo "<br>";

//if...else if...else statement
if ($marks <= "40" and $marks >= "0") {
    echo "Failed";
} elseif ($marks <= "60" and $marks > "40") {
    echo "passed";
} elseif ($marks >= "60" and $marks <= "80") {
    echo "Credit";
} elseif ($marks > "80" and $marks <= "100"){
    echo "distinction";
}else{
    echo "invalid input";
}
echo "<br>";

//Solo run
if ($salary <= "5000" and $salary >= "0") {
    echo "Struggling";
} elseif ($salary <= "10000" and $salary > "5000") {
    echo "minimum wage";
} elseif ($salary > "10000" and $salary <= "30000") {
    echo "Hustling";
} elseif ($salary > "30000" and $salary <= "80000"){
    echo "well-off";
}elseif ($salary > "80000" and $salary <= "150000"){
    echo "comfortable";
}elseif ($salary > "150000" and $salary <= "300000"){
    echo "Upper class";
}elseif ($salary > "300000" and $salary <= "600000"){
    echo "High fashion";
}elseif ($salary > "600000" and $salary <= "1000000"){
    echo "Baller alert!";
}else{
    echo "Rich$$$";
}

?>




