<?php

$server="localhost";
$username="root";
$password="";
$dbname="robot";
$tbl="hands";

try{
$conn =new PDO(" mysqli:host=$server;dbname=$dbname",$username,$password);
//set the PDO error mod to exception
$conn->setAttribute(PDO::ATT_ERRMODDE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException ){
echo $server[0];
}



if($_SERVER['REQUEST_METHOD']=='POST')
{$veriable=$POST['slider_e'];
echo"$veriable";
}

$محرك_رقم1=$_POST['slider_1'];
$محرك_رقم2=$_POST['slider_2'];
$محرك_رقم3=$_POST['slider_3'];
$محرك_رقم4=$_POST['slider_4'];
$محرك_رقم5=$_POST['slider_5'];
$محرك_رقم6=$_POST['slider_6'];
 
$inser_data=$conn->$query("INSERT INTO hands ('$slider_1','$slider_2','$slider_3','$slider_4','$slider_5','$slider_6')
VALUS('محرك رقم1','محرك رقم2','محرك رقم3','محرك رقم4','محرك رقم5','')"

$select_data=$conn->$query_POST(SELECT
 [slider_1]
,[slider_2]
,[slider_3]
,[slider_4]
,[slider_5]
,[slider_6]
from [hands];
(if ($inser_data))== TRUE {     
	 "تم إضافة البيانات للجدول"
};
else
 {
	  "خطأ في إضافة البيانات" 
 }
 {
$conn-->close()
 }
?>