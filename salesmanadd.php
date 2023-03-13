<html>
<body>
<?php
	$cid = $_GET['cid'];
	$link = mysqli_connect('localhost','root','','dbcustomer2') or die('Unable to connect');
	$sql = "select * from customer where cid='$cid'";
	$result = mysqli_query($link,$sql);
	$data = mysqli_fetch_array($result);
	echo "cid :".$data['cid']."<br>";
	echo "cname :".$data['cname']."<br>";
	echo "cphone :".$data['cphone']."<br>";
?>
<form name='form1' method='get' action='salesmanaddaction.php'>
<input type='hidden' name='ccid' value='<?=$data['cid']?>'>
<select name='csid'>
	<?php
	$sql = "select * from salesman where sid not in (select csid from care where ccid='$cid')";
	$result = mysqli_query($link,$sql);
	while($data=mysqli_fetch_array($result) )
	{
		echo "<option value={$data['sid']} >{$data['sname']}</option>";
	}
	?>
</select>
<input type='submit' value='save'>
<br><br>
<a href='customer.php'>customer.php</a>
</form>
</body>
</html>