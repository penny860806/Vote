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

$sql = "SELECT * FROM ask ORDER BY id";
$result=mysqli_query($conn, $sql);
$data_nums = mysqli_num_rows ($result); //總資料數
$per = 5; //每頁數量
$total = ceil($data_nums/$per); //計算總共頁數
if (!isset($_GET["page"])){ //假如沒有設定值
    $page=1; //設定起始頁數
} else {
    $page = intval($_GET["page"]); //確認頁數是數值
}
$start = ($page-1)*$per; //每一頁的起始序號

$result = mysqli_query($conn,$sql.' LIMIT '.$start.', '.$per) 
         or die("Error");

//把他跟範本牽在一起
$TPL= new TemplatePower("voting.html");
//去找範本中有甚麼變數/剖析範本變數(這是這套範本才這樣用)
//->呼叫方法
$TPL->prepare();

//輸出資料內容
while ($row = mysqli_fetch_array ($result))
{
	$id=$row['id'];
	$question=$row['question'];
	$A1=$row['A1'];
	$N1=$row['N1'];
	$A2=$row['A2'];
	$N2=$row['N2'];
	$A3=$row['A3'];
	$N3=$row['N3'];
	$A4=$row['A4'];
	$N4=$row['N4'];
	$code=$row['code'];
	$src="voting_vote.php?id=".$id;
	$cou=$N1+$N2+$N3+$N4;
	if($cou==0) {
		$Q1=20;
		$Q2=20;
		$Q3=20;
		$Q4=20;
	}
	else{
		$Q1=$N1/$cou*80+20;
		$Q2=$N2/$cou*80+20;
		$Q3=$N3/$cou*80+20;
		$Q4=$N4/$cou*80+20;
	}
    //用"註解"去當作用動態區塊，所以這裡要先找那個區塊是哪裡
    $TPL->newBlock("DATA");
    //要把計算出來的東西塞到哪裡
    $TPL->assign("ID", $id);
	$TPL->assign("src", $src);
    $TPL->assign("QUESTION", $question);
    $TPL->assign("A1", $A1);
	$TPL->assign("N1", $N1);
	$TPL->assign("A2", $A2);
	$TPL->assign("N2", $N2);
	$TPL->assign("A3", $A3);
	$TPL->assign("N3", $N3);
	$TPL->assign("A4", $A4);
	$TPL->assign("N4", $N4);
	$TPL->assign("Q1", $Q1);
	$TPL->assign("Q2", $Q2);
	$TPL->assign("Q3", $Q3);
	$TPL->assign("Q4", $Q4);
}
//分頁頁碼
    //跳出動態區塊，回到原本的地方(ROOT)
    $TPL->gotoBlock("_ROOT");
    $TPL->assign("NUM", $data_nums);
    $TPL->assign("PAGE", $page); 
    $TPL->assign("TOTAL", $total);

for($i=1; $i<=$total; $i++){
	$TPL->newBlock("PN");
    $TPL->assign("N", $i);
}
//都綁好之後要一次印出來在網頁中
$TPL->printToScreen();

?>