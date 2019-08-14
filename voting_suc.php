<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- 選擇性佈景主題 -->
	<!-- nav bar   -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
	<link rel="stylesheet" href="animate.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VOTE</title>
</head>

<body id="myPage">
	<div class="jumbotron text-center" id="topic"> <strong><h1>VOTE</h1></strong> </div>
	<!-- nav   -->
	<nav class="navbar navbar-inverse navbar-default" data-spy="affix" data-offset-top="390">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand active" href="#myPage">VOTE</a> </div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="about.html">ABOUT</a></li>
				<li><a href="create.html">CREATE</a></li>
				<li class="active"><a href="voting.php">VOTING</a></li>
				<li><a href="delete.html">DELETE</a></li>
				<li><a href="other.html">OTHER</a></li>
			</ul>
		</div>
	</nav>
	<!-- 內容   -->
	<div class="container-fluid" id="voting_suc">
		<div class="row">
			<div style="height: 100px;"> </div>
			<div class="text-center">
				<?php
require_once("class.TemplatePower.inc.php");
//include概念是像C，就是放進來。require是需要的時候才會放進來。once代表只進來一次，曾經進過就不放了
//只是效率問題，其實沒有差很多

//資料庫操作
$servername = "localhost";
$username = "40447010S";
$password = "y12210387";
$dbname = "40447010S";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$gender=$_GET['gender'];
$id=$_GET['id'];
$G_code=$_GET['G_code'];
$sql="SELECT * FROM `ask` WHERE id='".$id."'";
$result=mysqli_query($conn, $sql);
$row = mysqli_fetch_array ($result);
$code=$row['code'];
$A1=$row['A1'];
$N1=$row['N1'];
$A2=$row['A2'];
$N2=$row['N2'];
$A3=$row['A3'];
$N3=$row['N3'];
$A4=$row['A4'];
$N4=$row['N4'];
if($code==$G_code){
	if($gender==$A1){
		$N1++;
		$update="UPDATE `ask` SET `N1`='".$N1."'  WHERE `id`='".$id."'";
	}
		if($gender==$A2){
		$N2++;
		$update="UPDATE `ask` SET `N2`='".$N2."'  WHERE `id`='".$id."'";
	}
		if($gender==$A3){
		$N3++;
		$update="UPDATE `ask` SET `N3`='".$N3."'  WHERE `id`='".$id."'";
	}
		if($gender==$A4){
		$N4++;
		$update="UPDATE `ask` SET `N4`='".$N4."'  WHERE `id`='".$id."'";
	}
	$result=mysqli_query($conn, $update);
	if($result){
		echo "<p><font color='blue'>投票成功!</font></p>"	;
	}else{
		echo "<p><font color='red'>ERROR</font></p>"	;
	}
}else{
	echo "<p><font color='red'>投票失敗</font></p>";	
}	?>
				<a href="voting.php">
                <button class="button">看其他投票</button>
            </a>
			</div>
		</div>
		<div style="height: 100px;"> </div>
	</div>
	<!--    <div style="height: 10000px;"></div>-->
	<!--FOOTER section-->
	<footer class="container-fluid text-center">
		<a href="#myPage" title="back to top"> <span class="glyphicon glyphicon-triangle-top"></span> </a>
		<p>&copy; 2018, Penny, All Rights Reserved.</p>
	</footer>
</body>

</html>