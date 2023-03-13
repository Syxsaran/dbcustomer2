<html>
<body>
<table border=1>
<tr>
<td>รหัสลูกค้า</td><td>ชื่อลูกค้า</td><td>เบอร์ลูกค้า</td><td>รหัสพนักงานที่ดูแล</td>
</tr>
<?php
	$link = mysqli_connect('localhost','root','','dbcustomer2') or die('Unable to connect');
	$sql = "select * from customer";
	$result = mysqli_query($link,$sql);
	
	while ($data = mysqli_fetch_array($result))
	{
?>
	<tr>
		<td><?=$data['cid']?></td>
		<td><?=$data['cname']?></td>
		<td><?=$data['cphone']?></td>
		<td><?=$data['csid']?></td>
		<td><a href="customeredit.php?cid=<?=$data['cid']?>">edit</a></td>
		<td><a href="customerdelete.php?cid=<?=$data['cid']?>">delete</a></td>
		<td><a href="customeradvisor.php?cid=<?=$data['cid']?>">view customeradvisor</a></td>
	</tr>
<?php
	}
	echo "<a href=customeradd.html>insert customer</a>";
	mysqli_close($link);
?>
</table>
</body>
</html>