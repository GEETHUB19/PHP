<?php
$link=mysqli_connect("localhost","root","");
var_dump($link);
if(!$link)
{
die("Connection failed".mysqli_connect_error());
}
echo "<br> This code is executed by GEETIKA 2220100287";
?>