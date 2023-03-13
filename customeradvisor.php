<html><body>
<?php
    $cid = $_GET['cid'];
    $link= mysqli_connect('localhost','root','','dbcustomer2') or die('Unable To connect');
    $sql = "select * from customer where cid='$cid'";
    $result = mysqli_query($link, $sql);
    $data = mysqli_fetch_array($result);

    echo "cid : ".$data['cid']."<br>";
    echo "cname : ".$data['cname']."<br>";
    echo "cphone : ".$data['cphone']."<br><br>";
?>
<a href="salesmanadd.php?cid=<?=$data['cid']?>">add salesman</a>
<table border=1>
    <tr>
    <td>ccid</td><td>csid</td><td>sname</td><td>delete</td>
    </tr>
<?php
    $sql = "select ccid,csid,sname from care,salesman where csid=sid and ccid='$cid'";
    $result = mysqli_query($link, $sql);
    while ($data = mysqli_fetch_array ($result))
    {
?>
    <tr>
    <td><?=$data['ccid']?></td>
    <td><?=$data['csid']?></td>
    <td><?=$data['sname']?></td>
    <td><a href="salesmandelete.php?ccid=<?=$data['ccid']?>&csid=<?=$data['csid']?>">delete</a></td>
    </tr>
<?php
    }
?>
</table><br><a href='customer.php'>customer</a></body></html>