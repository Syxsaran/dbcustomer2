<?php
$bcid = $_GET['bcid'];
$link = mysqli_connect("localhost","root","","dbcustomer2");
if(!$link)
{
	exit("can not connect database");
}
$sql = "select * from bill where bcid='$bcid'";
echo $sql;
echo "<br>";
$result = mysqli_query($link,$sql);
if(!$result)
{
	exit("can not select customer");
}
$data = mysqli_fetch_array($result);
$bid = $data['bid'];
$bcid = $data['bcid'];
mysqli_close($link);
?>
<html>
<body>
<form name="form1" method="post" action="billcustomereditupdate.php">
Bid:<input type="text" name="textbid" value='<?=$bid?>'readonly>
Bcid:<input type="text" name="textbcid" value='<?=$bcid?>'>
<input type="submit" value="edit bill">
</form>
</body>
</html>