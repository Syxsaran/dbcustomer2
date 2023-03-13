<?php
$cid = $_POST['textcid'];
$cname = $_POST['textcname'];
$cphone = $_POST['textcphone'];
$csid = $_POST['textcsid'];
$link = mysqli_connect("localhost","root","","dbcustomer2");
if(!$link)
{
	exit("can not connect database");
}
$sql = "update customer set cname='$cname', cphone='$cphone', csid='$csid' where cid='$cid'";
echo $sql;
echo "<br>";
$result = mysqli_query($link,$sql);
if(!$result)
{
	exit("can not update customer");
}
echo "update completed<br>";
echo "<a href=customer.php>show customer</a>";
mysqli_close($link);
?>