<!DOCTYPE html>
<html>

<head>
	<title>HTMLforM</title>
</head>

<body>

<form action="insert.php" method="POST">

<p>محرك رقم1</p>
	<p> :مقدار الزاوية
	<input type="range" min="0" max="180" value="1" id="slider1"></p>
	


	<p> محرك رقم2 </p> 
	<p>:مقدار الزاوية
	<input type="range" min="0" max="180" value="1"id="slider2">
	 </p>

	<p> محرك رقم3</p>
	<p>:مقدار الزاوية
	<input type="range" min="0" max="180" value="1" id="slider3">

	<p> محرك رقم4</p>
	<p>:مقدار الحركة
	<input type="range" min="0" max="180" value="1" id="slider4"></p>

	<p> محرك رقم5</p>
	<p>:مقدار الحركة
	<input type="range" min="0" max="180" value="1" id="slider5">
	</p>

	<p> محرك رقم6</p>
	<p>:مقدار الحركة
	<input type="range" min="0" max="180" value="1" id="slider6"><p>
	
	
	
	
	<input type="submit" value= "ON" name=on>
	
	<input type="submit" value= "OFF" name=off>
	
	<table id="hands">
	<tr>
		
	<?php
	include_once 'index.php';
	  while ($row = mysql_fetch_array($r){
   `
    echo  $row[slider_1].;
    echo . $row[slider_2].;
    echo  $row[slider_3].;
	echo  $row[slider_4].;
	echo  $row[slider_5].;
     echo . $row[slider_6].;
	  }
	  ?>
	  </table>
	  </form>
	  
	  <script> 
		 function inputOnChange(slider) {
            let thisSlider = slider.value;
            let label = document.querySelector(`r#${slider.id}`);
            label.innerHTML = thisSlider;
        }
        function initValue() {
            let sliders = document.querySelectorAll('.slider');
            sliders.forEach((slider) => document.querySelector(`p#${slider.id}`).innerHTML = slider.value);
        }
        $("#save").click(function() {
            
            let sliders= document.querySelectorAll('.slider');
            let motorState = document.getElementById("check").checked;
            
			}
		}
	  </script>




</body>
</html>