<?php
$servername="localhost";
$username="root";
$password="";
$myDBname="safari_mal";

//connect to database
$connect=new mysqli($servername,$username,$password,$myDBname);
//OR
//$connect=new mysqli("localhost","root","","safari_mal")

//checking connection
if ($connect->connect_error){
    die("Connection failed" . $connect->connect_error);
}else{
    echo "Connected successfully!!";
}