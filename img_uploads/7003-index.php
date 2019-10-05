<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootsrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="style.css">
<!--FONTS -->


<link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">

</head>


<body style="background-color: #3D3C3B;">

<center>
<div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <source src="https://www.youtube.com/watch?v=rcnLTnGGBU0" type="video/mp4">
    </video>
</div>	
<H1 style="color:white;">[[ The Calculator ]]  </H1>

<form method="post">
  <img width="%20" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/512/calculator-icon.png" class="img-fluid" alt="calc_photo
  ">
<div class="container">
<label for="fnum"><b>Enter First Number:</b></label><br>
<input style="color:black" type="text" placeholder="Enter First Number" name="first_value"required>
<br>
<label for="snum"><b>Enter Second Number:</b></label><br>

<input style="color:black" type="text" placeholder="Enter Second Number" name="second_value" required>
<br>
<label for="opr"><b>Select The Operator:</b></label>
<br>

	<select style="color:black"name="ops">
		<option value="?">Enter The Operator</option>

		<option value="+">+</option>

		<option value="-">-</option>

		<option value="*">*</option>

		<option value="/">/</option>


	</select>
<br><p></p>
<button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
</div>
</form>
<h5 style="color:white;">The Result is : </h5>

<?php 

error_reporting(0);
if (isset($_POST['submit'])){

$v1 = $_POST['first_value'];
$v2 =  $_POST['second_value'];
$oprator = $_POST['ops'];
switch ($oprator) {
	case '?':
	echo "<br> Please enter the operator <br>";
	break;
		case '+':
		echo $v1 + $v2;
		break;
	case '-':
		echo $v1 - $v2;
		break;
	case '*':
		echo $v1 * $v2;
		break;
	case '/':
		echo $v1 / $v2;
break;
}


}
?>
</center>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>





