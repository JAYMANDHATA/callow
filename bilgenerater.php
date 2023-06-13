<?php 
    require "dbconnection.php";

    $uncompleteOrderQuery = "SELECT * FROM orders WHERE PRODUCTID  > 1640 AND (STATUS = 'UNCOMPLETE' OR STATUS = 'CONFERM' )";
    $uncompleteOrderResult = mysqli_query($conn, $uncompleteOrderQuery);





echo "</table>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Customer Information</title>
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }

        .container {
            display: grid;
            width: 99%;
            margin: 5px;
            grid-gap: 5px;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: repeat(4, 1fr);
        }

        .box {
            font-size: 15px;
            border: 1px solid #ccc;
            /* margin: 10px 0; */
            padding: 0px 0px 0px 3px;
        }
        .box p {
            line-height:10px;
        }

        .product-id {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php 
            while ($uncompleteOrder = mysqli_fetch_assoc($uncompleteOrderResult)) {
                $paymethod = $uncompleteOrder["ONLINE"] ? "ONLINE" : "OFFLINE";

                $string = $uncompleteOrder["TIME"];
                $first_ten_chars = substr($string, 0, 10);
                echo '
                <div class="box">
                <h2>Callow.in</h2>
                <p>Customer Name: '.$uncompleteOrder["NAME"].'</p>
                <p>Institute Name: '.$uncompleteOrder["ADDRESS"].'</p>
                <p>Product Name:'.$uncompleteOrder["PRODUCT"].'</p>
                <p>Date: '.$first_ten_chars.'</p>
                <p>Price: '.$uncompleteOrder["PRICE"].'</p>
                <p>Delivery Time: 9:45</p>
                <p>Payment Method: '.$paymethod.'</p>
                <p>Product ID: <span class="product-id">'.$uncompleteOrder["PRODUCTID"].'</span></p>
                </div>';
            }
        ?>
        

        <!-- Add more divs here -->
    </div>
</body>

</html>
