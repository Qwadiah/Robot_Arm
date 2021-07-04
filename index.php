

<html>
<head>
<meta charset="UTF-8">
<title> GOTit<title>
</head>
<body>
<?php


$con = mysqli_connect("localhost","root","","robot");

echo "Connected Successfully";
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



?>
</body>
</html>