<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
            <title>Wallet</title>
            <style>
                @media only screen and (max-width: 600px) {
                    body {
                        font: 16px "Helvetica Neue", Helvetica, sans-serif;
                        background: #fbfbfb;
                        color: #666;
                        -webkit-font-smoothing: antialiased;
                    }
                    .panel {
                        width: 95%;
                        margin: 0 auto;
                        text-align: center;
                    }
                    @font-face {
                        font-family: "OCRA";
                        src: url("fonts/OCRA.otf");
                        src: url("fonts/OCRA.otf?#iefix") format("embedded-opentype"), url("fonts/OCRA.ttf") format("truetype");
                    }
                    .card {
                        font: 16px/1.5 "Helvetica Neue", Helvetica, sans-serif;
                        position: relative;
                        display: inline-block;
                        vertical-align: middle;
                        width: 100%;
                        height: 220px;
                        text-align: left;
                        padding: 30px;
                        color: #fff;
                        border-radius: 10px;
                        box-sizing: border-box;
                        background: url(data:image/jpg;base64,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) no-repeat 0 0 #141819;
                    }
                    
                    .card__number {
                        font-size: 30px;
                        padding: 30px 0 15px;
                        text-align: center;
                    }
                    .card__expiry-date {
                        font-size: 14px;
                        padding-bottom: 20px;
                        text-align: center;
                    }
                    .card__owner {
                        text-align: left;
                    }
                    .card__logo {
                        position: absolute;
                        right: 20px;
                        bottom: 20px;
                    }
                    .card--front {
                        font-size: 16px;
                        font-family: "Source Code Pro";
                        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.6);
                    }

                    /* pay buttun */
                    .formDesign{
                        width: 95%;
                        margin: 10px auto;
                        text-align: center;
                    }
                    .InputDesign{
                        height:40px;
                        font-size:17px;
                        padding-left:5px;
                        width: 70%;
                        padding: 10px;
                        border: 1px solid #ccc;
                        border-radius: 2px;
                        box-sizing: border-box;
                        font-family: Arial, sans-serif;
                        font-size: 14px;
                        outline: none;
                        background-color: rgba(255, 255, 255, 0.5);
                    }
                    .ButtonDesign{
                        width: 20%;
                        height: 40px;
                        background: linear-gradient(to bottom, #f7dfa5, #f0c14b);
                        border: 1px solid #a88734;
                        color: #111;
                        font-size: 14px;
                        font-weight: bold;
                        border-radius: 2px;
                        cursor: pointer;
                        text-align: center;
                        text-decoration: none;
                        text-transform: uppercase;
                        margin: 10px 0;
                        transition: all 0.3s ease;
                    }
                    .ButtonDesign:hover {
                        transform: translateY(-1px);
                        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
                        
                    }
                    
            }
            
            .form {
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            font-family: sans-serif;
            flex-direction: column;
            align-items: center;
        }

        .option {
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 4px 4px 8px #c4c4c4, -4px -4px 8px #ffffff;
            transition: box-shadow 0.3s ease;
            width: 90%;
            text-align: center;
            margin: 5px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .option.selected {
            box-shadow: 4px 4px 8px orange, -4px -4px 8px #ffffff;
            color: orange;
        }

        input[type="button"] {
            background-color: #ff9900;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
            box-shadow: 8px 8px 16px #c4c4c4, -8px -8px 16px #ffffff;
            width: 90%;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        input[type="button"]:hover {
            background-color: #ff7f00;
        }

        @media screen and (max-width: 480px) {
            .form{
                margin: 10px;
                padding: 10px;
                border-radius: 5px;
                display: flex;
                flex-direction: column;
                align-items: center;
                /*background-color: #f0f0f0;*/
            }

            .option {
                font-size: 16px;
                margin-bottom: 5px;
                padding: 8px;
                height: 50px;
            }

            input[type="button"] {
                padding: 8px 16px;
                font-size: 16px;
                border-radius: 10px;
                height: 50px;
            }

            .select {
                background-color: pink;
            }
        }
        </style>
        </head>
        <body>
            <?php 
            require 'dbconnection.php';
            if (isset($_COOKIE["auth_token"])) {
                $UUID = $_COOKIE["auth_token"];
                $query =  "SELECT * FROM wallet WHERE UUID = '$UUID' ";
                $result = $conn->query($query);

                 if ($result->num_rows > 0) {
                    //India time (GMT+5:30)
                    date_default_timezone_set("Asia/Calcutta");
                    
                    if (isset($_POST["Amount"])) {
                        $row = $result->fetch_assoc();
                        $money = $row['MONEY'];
                        $amount = $_POST["Amount"];

                        if ($money >= $amount) {
                            $queryformob =  "SELECT * FROM user WHERE UUID = '$UUID' ";
                            $result2 = $conn->query($queryformob);
                            $row2 = $result2->fetch_assoc();
                            $mob = $row['MOBILE'];
                            
// date ******************************************************************************************************************************************************************************************
                            $update2 ="UPDATE  orders
                            SET    ONLINE = 1
                            WHERE (MOBILE = '$mob') AND (TIME REGEXP '^2023-10-04') AND (STATUS='UNCOMPLETE')";
                            $update_query2 = $conn->query($update2);

// date ******************************************************************************************************************************************************************************************
                            $update4 ="UPDATE  orders
                            SET  STATUS='CONFERM'
                            WHERE (MOBILE =  '$mob') AND (TIME REGEXP '^2023-10-04') AND  (STATUS='UNCOMPLETE') ";
                            $update_query4 = $conn->query($update4);

                            $newmoney =$money-$amount;
                            $update3 ="UPDATE  wallet
                            SET    MONEY  = $newmoney
                            WHERE (MOBILE = '$mob') ";
                            $update_query3 = $conn->query($update3);

                            echo '
                            <br>
                            <div class="panel">
                                <div class="card card--front">
                                    <div class="card__number">';
                                        $UUID = $_COOKIE["auth_token"];
                                        $query =  "SELECT * FROM wallet WHERE UUID = '$UUID' ";
                                        $result = $conn->query($query);
                                
                                        if ($result->num_rows > 0) {
                                            $row = $result->fetch_assoc();
                                            $money = $row['MONEY'];
                                            echo strtolower($row['MONEY']);
                                        }
                                        else {
                                            echo 0;
                                        }

                                        echo
                                        ' RUPEE
                                    </div>
                                    <div class="card__expiry-date">Total</div>
                                    <div class="card__owner">';
                                        echo strtolower($row['NAME']);
                                    echo'</div>
                                    <img class="card__logo"  src="data:image/png;base64,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TUw6Y29tLmFkb2JlLnhtcAAAAAAAPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS40LjAiPgogICA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgICAgICAgICB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIgogICAgICAgICAgICB4bWxuczpleGlmPSJodHRwOi8vbnMuYWRvYmUuY29tL2V4aWYvMS4wLyI+CiAgICAgICAgIDx4bXA6TW9kaWZ5RGF0ZT4yMDE1LTAxLTEyVDE5OjAxOjgxPC94bXA6TW9kaWZ5RGF0ZT4KICAgICAgICAgPHhtcDpDcmVhdG9yVG9vbD5QaXhlbG1hdG9yIDMuMi4xPC94bXA6Q3JlYXRvclRvb2w+CiAgICAgICAgIDx0aWZmOk9yaWVudGF0aW9uPjE8L3RpZmY6T3JpZW50YXRpb24+CiAgICAgICAgIDx0aWZmOkNvbXByZXNzaW9uPjU8L3RpZmY6Q29tcHJlc3Npb24+CiAgICAgICAgIDx0aWZmOlJlc29sdXRpb25Vbml0PjE8L3RpZmY6UmVzb2x1dGlvblVuaXQ+CiAgICAgICAgIDx0aWZmOllSZXNvbHV0aW9uPjcyPC90aWZmOllSZXNvbHV0aW9uPgogICAgICAgICA8dGlmZjpYUmVzb2x1dGlvbj43MjwvdGlmZjpYUmVzb2x1dGlvbj4KICAgICAgICAgPGV4aWY6UGl4ZWxYRGltZW5zaW9uPjEyMDwvZXhpZjpQaXhlbFhEaW1lbnNpb24+CiAgICAgICAgIDxleGlmOkNvbG9yU3BhY2U+MTwvZXhpZjpDb2xvclNwYWNlPgogICAgICAgICA8ZXhpZjpQaXhlbFlEaW1lbnNpb24+NDA8L2V4aWY6UGl4ZWxZRGltZW5zaW9uPgogICAgICA8L3JkZjpEZXNj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"/>    
                                </div>
                            </div>';

                            $Pendding = 0;
                         

                            echo '
                            <h3 style="margin-left: 25px; margin-top: 17px;">Pay Online </h3>
                            <form method="post" class="formDesign" action="'; echo $_SERVER['PHP_SELF']; echo'">
                            <input type="text"class="InputDesign"  name="Amount" value="'; echo $Pendding; echo'" readonly>
                            <input type="submit" class="ButtonDesign" value="PAY">
                            </form>';

                            echo '<h1 style="margin-left: 25px; margin-top: 17px;"> Yor Payment is completed succesfuly </h1>'  ;
                        }
                        else {
                            echo '
                            <br>
                            <div class="panel">
                                <div class="card card--front">
                                    <div class="card__number">';
                                        $UUID = $_COOKIE["auth_token"];
                                        $query =  "SELECT * FROM wallet WHERE UUID = '$UUID' ";
                                        $result = $conn->query($query);
                                
                                        if ($result->num_rows > 0) {
                                            $row = $result->fetch_assoc();
                                            $money = $row['MONEY'];
                                            echo strtolower($row['MONEY']);
                                        }
                                        else {
                                            echo 0;
                                        }

                                        echo
                                        ' RUPEE
                                    </div>
                                    <div class="card__expiry-date">Total</div>
                                    <div class="card__owner">';
                                        echo strtolower($row['NAME']);
                                    echo'</div>
                                    <img class="card__logo"  src="data:image/png;base64,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TUw6Y29tLmFkb2JlLnhtcAAAAAAAPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS40LjAiPgogICA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgICAgICAgICB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIgogICAgICAgICAgICB4bWxuczpleGlmPSJodHRwOi8vbnMuYWRvYmUuY29tL2V4aWYvMS4wLyI+CiAgICAgICAgIDx4bXA6TW9kaWZ5RGF0ZT4yMDE1LTAxLTEyVDE5OjAxOjgxPC94bXA6TW9kaWZ5RGF0ZT4KICAgICAgICAgPHhtcDpDcmVhdG9yVG9vbD5QaXhlbG1hdG9yIDMuMi4xPC94bXA6Q3JlYXRvclRvb2w+CiAgICAgICAgIDx0aWZmOk9yaWVudGF0aW9uPjE8L3RpZmY6T3JpZW50YXRpb24+CiAgICAgICAgIDx0aWZmOkNvbXByZXNzaW9uPjU8L3RpZmY6Q29tcHJlc3Npb24+CiAgICAgICAgIDx0aWZmOlJlc29sdXRpb25Vbml0PjE8L3RpZmY6UmVzb2x1dGlvblVuaXQ+CiAgICAgICAgIDx0aWZmOllSZXNvbHV0aW9uPjcyPC90aWZmOllSZXNvbHV0aW9uPgogICAgICAgICA8dGlmZjpYUmVzb2x1dGlvbj43MjwvdGlmZjpYUmVzb2x1dGlvbj4KICAgICAgICAgPGV4aWY6UGl4ZWxYRGltZW5zaW9uPjEyMDwvZXhpZjpQaXhlbFhEaW1lbnNpb24+CiAgICAgICAgIDxleGlmOkNvbG9yU3BhY2U+MTwvZXhpZjpDb2xvclNwYWNlPgogICAgICAgICA8ZXhpZjpQaXhlbFlEaW1lbnNpb24+NDA8L2V4aWY6UGl4ZWxZRGltZW5zaW9uPgogICAgICA8L3JkZjpEZXNj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"/>    
                                </div>
                            </div>';
                            
                            
// date ******************************************************************************************************************************************************************************************
                            $queryformob =  "SELECT * FROM user WHERE UUID = '$UUID' ";
                            $result2 = $conn->query($queryformob);
                            $row2 = $result2->fetch_assoc();
                            $mob = $row['MOBILE'];
                            $Pendding = 0;
                            $last_row = "SELECT * 
                                                    FROM orders 
                                                    WHERE (TIME REGEXP '^2023-10-04' AND STATUS='UNCOMPLETE') AND (MOBILE=$mob)   ";
                                                    $productid_query = $conn->query($last_row);
                                                    
// date ******************************************************************************************************************************************************************************************
                            while ($productid_fetch = $productid_query->fetch_assoc()) {
                                $time = $productid_fetch["TIME"] ;
                                $date=  $time[0].$time[1].$time[2].$time[3].$time[4].$time[5].$time[6].$time[7].$time[8].$time[9];
                                if ($date == "2023-10-04") {
                                    $Price = $productid_fetch["PRICE"];
                                    $Priceinnum = (int)$Price[0].$Price[1].$Price[2];
                                    $Priceinnum =  (int)$Priceinnum;
                                
                                    // echo $Priceinnum;
                                    if ($Price == "FREE") {
                                        $Pendding = $Pendding + 0;
                                        break;
                                    }
                                    else {
                                        $Pendding =  $Pendding + $Priceinnum;
                                        break;
                                    }
                                }   
                            }

                            echo '
                            <h3 style="margin-left: 25px; margin-top: 17px;">Pay Online </h3>
                            <form method="post" class="formDesign" action="'; echo $_SERVER['PHP_SELF']; echo'">
                            <input type="text"class="InputDesign"  name="Amount" value="'; echo $Pendding; echo'" readonly>
                            <input type="submit" class="ButtonDesign" value="PAY">
                            </form>';

                            echo '<h1 style="margin-left: 25px; margin-top: 17px;"> Not enough money in walllet </h1>'  ;

                        }
                    }
                    else {
                        echo '
                        <br>
                        <div class="panel">
                            <div class="card card--front">
                                <div class="card__number">';
                                    $UUID = $_COOKIE["auth_token"];
                                    $query =  "SELECT * FROM wallet WHERE UUID = '$UUID' ";
                                    $result = $conn->query($query);
                                
                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                                        $money = $row['MONEY'];
                                        echo strtolower($row['MONEY']);
                                    }
                                    else {
                                        echo 0;
                                    }

                                    echo
                                    ' RUPEE
                                </div>
                                <div class="card__expiry-date">Total</div>
                                <div class="card__owner">';
                                    echo strtolower($row['NAME']);
                                echo'</div>
                                <img class="card__logo"  src="data:image/png;base64,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TUw6Y29tLmFkb2JlLnhtcAAAAAAAPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS40LjAiPgogICA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgICAgICAgICB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIgogICAgICAgICAgICB4bWxuczpleGlmPSJodHRwOi8vbnMuYWRvYmUuY29tL2V4aWYvMS4wLyI+CiAgICAgICAgIDx4bXA6TW9kaWZ5RGF0ZT4yMDE1LTAxLTEyVDE5OjAxOjgxPC94bXA6TW9kaWZ5RGF0ZT4KICAgICAgICAgPHhtcDpDcmVhdG9yVG9vbD5QaXhlbG1hdG9yIDMuMi4xPC94bXA6Q3JlYXRvclRvb2w+CiAgICAgICAgIDx0aWZmOk9yaWVudGF0aW9uPjE8L3RpZmY6T3JpZW50YXRpb24+CiAgICAgICAgIDx0aWZmOkNvbXByZXNzaW9uPjU8L3RpZmY6Q29tcHJlc3Npb24+CiAgICAgICAgIDx0aWZmOlJlc29sdXRpb25Vbml0PjE8L3RpZmY6UmVzb2x1dGlvblVuaXQ+CiAgICAgICAgIDx0aWZmOllSZXNvbHV0aW9uPjcyPC90aWZmOllSZXNvbHV0aW9uPgogICAgICAgICA8dGlmZjpYUmVzb2x1dGlvbj43MjwvdGlmZjpYUmVzb2x1dGlvbj4KICAgICAgICAgPGV4aWY6UGl4ZWxYRGltZW5zaW9uPjEyMDwvZXhpZjpQaXhlbFhEaW1lbnNpb24+CiAgICAgICAgIDxleGlmOkNvbG9yU3BhY2U+MTwvZXhpZjpDb2xvclNwYWNlPgogICAgICAgICA8ZXhpZjpQaXhlbFlEaW1lbnNpb24+NDA8L2V4aWY6UGl4ZWxZRGltZW5zaW9uPgogICAgICA8L3JkZjpEZXNj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"/>    
                            </div>
                        </div>';
                        
// date ******************************************************************************************************************************************************************************************
                        $queryformob =  "SELECT * FROM user WHERE UUID = '$UUID' ";
                        $result2 = $conn->query($queryformob);
                        $row2 = $result2->fetch_assoc();
                        $mob = $row['MOBILE'];
                        $Pendding = 0;
                        $last_row = "SELECT * 
                                                FROM orders 
                                                WHERE (TIME REGEXP '^2023-10-04') AND (STATUS='UNCOMPLETE') AND (MOBILE=$mob)  ";
                                                $productid_query = $conn->query($last_row);
                                                
// date ******************************************************************************************************************************************************************************************
                        while ($productid_fetch = $productid_query->fetch_assoc()) {
                            $time = $productid_fetch["TIME"] ;
                            $date=  $time[0].$time[1].$time[2].$time[3].$time[4].$time[5].$time[6].$time[7].$time[8].$time[9];
                            if ($date == "2023-10-04") {
                                $Price = $productid_fetch["PRICE"];
                                $Priceinnum = (int)$Price[0].$Price[1].$Price[2];
                                $Priceinnum =  (int)$Priceinnum;
                                
                                // echo $Priceinnum;
                                if ($Price == "FREE") {
                                    $Pendding = $Pendding + 0;
                                
                                }
                                else {
                                    $Pendding =  $Pendding + $Priceinnum;
                                
                                }
                            }   
                        }

                        if ($productid_fetch["STATUS"]=="CONFERM") {
                           echo '
                            <h3 style="margin-left: 25px; margin-top: 17px;">Pay Online </h3>
                            <form method="post" class="formDesign" >
                            <input type="text"class="InputDesign"  name="Amount" value="0" readonly>
                            <input type="submit" class="ButtonDesign" value="PAY">
                            </form>';
                        }
                        else {
                            echo '
                            <h3 style="margin-left: 25px; margin-top: 17px;">Pay Online </h3>
                            <form method="post" class="formDesign" action="'; echo $_SERVER['PHP_SELF']; echo'">
                            <input type="text"class="InputDesign"  name="Amount" value="'; echo $Pendding; echo'" readonly>
                            <input type="submit" class="ButtonDesign" value="PAY">
                            </form>';
                        } 
                        
                    }
                }
                else {
                    echo "<h1> you are not eligeble for this future </h1>";
                }
            }
            else {
                echo "<h1> Please make your acoount </h1>";
            }
            ?>
                        <?php 
if (isset($_GET["cancel"])) {
    $timecancel =$_GET["cancel"];
    $update7 ="UPDATE  money_record
                            SET    STATUS = 'Cancel'
                            WHERE TIME = '$timecancel' ";
    
    $update_query7 = $conn->query($update7);
}
?>

                    <!-- tables -->
        <style>
            .container {
	 max-width: 1000px;
	 margin-left: auto;
	 margin-right: auto;
	 padding-left: 5px;
	 padding-right: 5px;
}
 h2 {
	 font-size: 26px;
	 margin: 20px 0;
	 text-align: center;
}
 h2 small {
	 font-size: 0.5em;
}
 .responsive-table li {
	 border-radius: 3px;
	 padding: 25px 30px;
	 display: flex;
	 justify-content: space-between;
	 margin-bottom: 25px;
}
 .responsive-table .table-header {
	 background-color: #95a5a6;
	 font-size: 14px;
	 text-transform: uppercase;
	 letter-spacing: 0.03em;
}
 .responsive-table .table-row {
	 background-color: #fff;
	 box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
}
 .responsive-table .col-1 {
	 flex-basis: 40%;
}
 .responsive-table .col-2 {
	 flex-basis: 35%;
}
 .responsive-table .col-3 {
	 flex-basis:25%;
}
        </style>

        <div class="container">
            <ul class="responsive-table">
                
            <?php 
                    if (isset($_COOKIE["auth_token"])){
                        $uuid2=$_COOKIE["auth_token"];
                        $getinfo = "SELECT * 
                                                FROM money_record
                                                WHERE (UUID = '$UUID') AND (STATUS='Active')  ";
                        $productid_query5 = $conn->query($getinfo);
                        
                        if ($productid_query5->num_rows > 0) {
                        while ($row = $productid_query5->fetch_assoc()) {
                            echo "
                            <li class='table-row'>
                            <div class='col col-1' data-label='Name'>".$row['MONEY']." RUPEE</div>
                            <div class='col col-2' data-label='Amount'>ACTIVE</div>
                            <a href='https://callow.in/wallet.php?cancel=".$row["TIME"]."'style='background-color:red;color:white;' class='cancel-link'>Cancel</a>
                            </li>";
                        }
                    }
                    }
                
            ?>
            
            <form class="form">
                <h3>Make rquest below</h3> <br>
                <div class="option" data-value="5">मुझे 5 रुपए ऑफलाइन चाहिए</div>
                <div class="option" data-value="10">मुझे 10 रुपए ऑफलाइन चाहिएूं</div>
                <div class="option" data-value="20">मुझे 20 रुपए ऑफलाइन चाहिएूं</div>
                <div class="option" data-value="50">मुझे 50 रुपए ऑफलाइन चाहिएूं</div>
                <input type="button" onclick="addMoney()" value="Add money">
            </form>
            <?php 
                    if (isset($_GET["howmuch"])){
                        //India time (GMT+5:30)
                        date_default_timezone_set("Asia/Calcutta");

                        $time = time();
                        $uuid=$_COOKIE["auth_token"];
                        $money =$_GET["howmuch"];
                        $addmoney = "INSERT INTO money_record (UUID,MONEY,STATUS,TIME) VALUES ('$uuid','$money','Active','$time')";
                        if ($conn->query($addmoney)) {
                            echo "ok";
                        }
                        else {
                            echo mysqli_error($conn);
                        }
                    }
            ?>
            <br><br><br>
               <script>




            // get all divs with "option" class
            const options = document.querySelectorAll('.option');
            
            // variable to store selected data-value
            let selectedValue = null;
            
            // loop through each div and add a click event listener
            options.forEach(option => {
                option.addEventListener('click', () => {
                    // remove "select" class from all divs
                    options.forEach(option => {
                        option.classList.remove('select');
                    });

                    // add "select" class to clicked div
                    option.classList.add('select');
                });
            });

            function addMoney() {
                const selectedOption = document.querySelector('.select');
                window.location.href = `https://callow.in/wallet.php?howmuch=${selectedOption.dataset.value}`;
            }
        </script>
            <?php include 'bottomnav.php'; ?>
            <style>
            .wallet{
                color:hsl(var(--hue), var(--sat), 40%);
            }
            .Home{
                color:hsl(var(--hue), 12%, 15%);
            }
    </style>
        </body>
    </html>
