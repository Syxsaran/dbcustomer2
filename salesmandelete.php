<html>
<body>

<?php
    $ccid = $_GET['ccid'];
    $csid = $_GET['csid'];

    $link = mysqli_connect('localhost','root','','dbcustomer2') or die('Unable To connect');
    $sql = "delete from care where ccid='$ccid' and csid='$csid'";
    echo $sql."<br>";
    $result = mysqli_query($link,$sql);
    if(!$result)
    {
        echo "cannot delete<br>";
    }else
    {
        echo "deleted<br>";
    }
?>
<a href='customeradvisor.php?cid=<?=$ccid?>'>customeradvisor.php</a>
</body>
</html>