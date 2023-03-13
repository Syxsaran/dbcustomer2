<?php 
    $link = mysqli_connect("localhost","root","","dbcustomer2");
    date_default_timezone_set("Asia/Bangkok");
    $date = date("h:i:sa");
    $customer_id = $_GET['customer_id'];
    $product_id = $_GET['product_id'];
    $amount = $_GET['amount'];
    $bill_code = uniqid();

    // insert input
    $sql0 = "INSERT INTO billproduct (bpbid, bppid, bpamount) VALUES ('$bill_code', '$product_id', '$amount')";
    $sql1 = "INSERT INTO bill (bid, bcid, bdate) VALUES ('$bill_code', '$customer_id', '$date')";
    
    if ($qry0 = mysqli_query($link, $sql0) && $qry1 = mysqli_query($link, $sql1)) { 
        $search = "SELECT * FROM customer WHERE cid = '$customer_id'";
        $qry = mysqli_query($link, $search);
        foreach ($qry as $user) {    
            $product = "SELECT * FROM product WHERE pid = '$product_id'";
            $product_data = mysqli_query($link, $product);
            foreach($product_data as $pd) {
?>
        <div class="container">
            <div class="card" style="width: 18rem;">
                    <img src="OIP (4).jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><center><?php echo $date;?></center></p>
                    <p class="card-text"><center>Name : <?php echo $user['cname'];?></center></p>
                    <p class="card-text"><center>product : <?php echo $pd['pname'];?></center></p>
                </div>
            </div>
        </div>
    <a href='customer.php'>Back</a>

<?php
            }
        }
    }else{
        echo "Failed";
    }

?>
