<?php
    $con = mysqli_connect('localhost', 'root', '','group4','3307');
    if(!$con){
        die('Could not Connect MySql Server:' .mysql_error());
    }
    $orderCode = $_GET['orderCode'];
    $customerID = $_GET['customerID'];
    $productID = $_GET['productID'];

    $sql = "DELETE FROM orders WHERE orderCode = $orderCode AND customerID = $customerID AND productID = $productID";
    $result = $con->query($sql);
    ?> 
    <meta http-equiv="refresh" content="0;url=<?php $s = "cart.php?";
            if ($customerID != 0) {
                $s .= "customerID={$customerID}&orderCode={$orderCode}";}
            echo $s;
            ?>"> 
    <?php
?>


