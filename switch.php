<?php
$car="Mercedes";
$marks=87;

switch ($car){
    case "Toyota":
        echo "I like Toyota cars";
        break;
        case "Nissan";
        echo "Niece Ann cars";
        break;
    case "Mercedes":
        echo "German machine";
        break;
    case "Range rover":
        echo "It's over when the Rover comes around";
        break;
    default:
        echo "What do you mean by that??";
}
echo "<br>";
switch ($marks){
    case $marks >= "0" && $marks <= "30":
        echo "You studied for this?";
        break;
    case $marks > "30" && $marks <= "50":
        echo "meh";
        break;
    case $marks > "50" && $marks <= "70":
        echo "You actually pay attention";
        break;
    case $marks > "70" && $marks <= "85":
        echo "Nice!!";
        break;
    case $marks > "85" && $marks <= "95":
        echo "Nerd";
        break;
    case $marks > "95" && $marks <= "100":
        echo "For what??";
        break;
    default:
        echo "Invalid";

}









