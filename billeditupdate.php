<?php
$bid = $_POST['textbid'];
$bcid = $_POST['textbcid'];
$link = mysqli_connect("localhost","root","","dbcustomer2");
if(!$link)
{
	exit("can not connect database");
}
$sql = "update bill set bid='$bid' where bcid='$bcid'";
echo $sql;
echo "<br>";
$result = mysqli_query($link,$sql);
if(!$result)
{
	exit("can not edit bill");
}
echo "edit completed<br>";
echo "<a href=buy.php>back to page buy</a>";
mysqli_close($link);
?>