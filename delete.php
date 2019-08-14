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
				<li><a href="voting.php">VOTING</a></li>
				<li class="active"><a href="delete.html">DELETE</a></li>
				<li><a href="other.html">OTHER</a></li>
			</ul>
		</div>
	</nav>
	<!-- 內容   -->
	<div class="container-fluid" id="delete_">
		<div class="row" id="n">
			<?php
$servername = "localhost";
$username = "40447010S";
$password = "y12210387";
$dbname = "40447010S";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
	echo "<p></p>";
}
				
//Insert Data
$G_id=$_GET["id"];
$G_random=$_GET["Random"];
$sql="SELECT * FROM `ask` WHERE id='".$G_id."'";
$result=mysqli_query($conn, $sql);
if ($result) {
	$row = mysqli_fetch_array ($result);
	if(!$row) {
		echo "<h2>題目不存在</h2>";
	}
	else{
    	$sqll="SELECT * FROM `ask` WHERE id='".$G_id."' AND Random='".$G_random."'";
		$resultl=mysqli_query($conn, $sqll);
		if ($resultl) {
			$del="DELETE FROM `ask` WHERE id='".$G_id."' AND Random='".$G_random."'";
			$result2=mysqli_query($conn, $del);
			if ($result2){
				echo "<h2><font color='red'>題目已成功刪除</font></h2>";
			}
			else{
				echo "<h2>ERROR</h2>";
			}
		}
		else{
			echo "<h2><font color='red'>題目刪除編碼錯誤</font></h2><h2>你沒有權限刪除此題目</h2>";
		}
	}
	
} else {
    echo "ERROR";
}
     mysqli_close($conn);
?>
				<div class="text-center">
					<a href="delete.html">
						<button class="button">返回</button>
					</a>
				</div>
		</div>
		<div style="height: 200px;"> </div>
	</div>
	<!--    <div style="height: 10000px;"></div>-->
	<!--FOOTER section-->
	<footer class="container-fluid text-center">
		<a href="#myPage" title="back to top"> <span class="glyphicon glyphicon-triangle-top"></span> </a>
		<p>&copy; 2018, Penny, All Rights Reserved.</p>
	</footer>
</body>

</html>