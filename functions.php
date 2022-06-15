<?php
function eMobilis(){

    $num1=29;
    $num2=999;

    echo "The product of $num1 and $num2 is " . $num1*$num2 ,"<br>";
}
eMobilis();
eMobilis();
eMobilis();
echo "<br>";
function studentname($firstname ,$lastname ,$age){
    echo "My name is ".$firstname ." ". $lastname . " and I am ". $age . " years old". "<br>";


}
studentname("David","Davidson",20);
studentname("Pendo","Matendo",14);
studentname("Zack","Snyder",35);
studentname("Evelyn","Evans",21);
echo "<br>";

//function that calculates BMI
function BMI($mass,$height) {
 echo "The BMI is ".   $mass/($height*$height)."<br>";

}
BMI(60,1.7);
BMI(70,1.8);
BMI(80,1.75);

