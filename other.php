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
				<li class="active"><a href="create.html">CREATE</a></li>
				<li><a href="voting.php">VOTING</a></li>
				<li><a href="delete.html">DELETE</a></li>
				<li><a href="other.html">OTHER</a></li>
			</ul>
		</div>
	</nav>
	<!-- 內容   -->
	<div class="container-fluid" id="create_php">
		<div class="row">
			<div class="text-center">
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
$db_link = @new mysqli($servername, $username, $password, $dbname);
//設定字元集與編碼
$db_link->query("SET NAMES 'utf8'");

//Insert Data
$q_id=$_GET["Q_id"];
$email=$_GET["email"];
$other=$_GET["other"];
if(empty($_GET["code"])) $code='0';
else $code=$_GET["code"];
if(empty($_GET["random"])) $random='0';
else $random=$_GET["random"];
			
$sql = "INSERT INTO `contact_me`(`Random`, `code`, `Q_id`, `email`, `other`) VALUES ('".$random."','".$code."','".$q_id."','".$email."','".$other."')";
//確認編碼
mb_convert_encoding($sql, "UTF-8", "auto");
if (mysqli_query($conn, $sql)) {
    echo "<p>已經收到你的回覆摟~</p>";
	echo "<p>我們會盡快為你處理😄</p>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
     mysqli_close($conn);
?>
				<a href="other.html">
                <button class="button">謝謝</button>
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