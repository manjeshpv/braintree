<?php

ini_set("display_errors", "1");
error_reporting(E_ALL);
include 'db.php';
include 'functions.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Credit Card</title>
    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.creditCardValidator.js"></script>
    <script type="text/javascript" src="js/card.js"></script>

    <style>
        .xform {
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
            background-color: #f9f9f7;
            border: 1px solid #fff;
            height: auto;
            padding: 13px 20px;
            margin-top: 30px;
            width: 287px;

        }
    </style>
</head>
<body>
<div id="container">
    <div id="paymentGrid">
        <div style="margin-top:20px">
            <?php
            $cartData = getUserCartDetails($session_user_id);

            foreach ($cartData as $data) {
                //echo $data->product_name;
                # code...
            }
            ?>
<!--            table moved to end -->
        </div>
        <div style="float:left;">
            <form method="post" id="paymentForm">

                <h4>Payment details</h4>
                <ul style="width:45%;    display: inline-block;">
                    <input type="hidden" name="user_id" value="<?php echo $_GET['id'];?>" placeholder="">
                    <li>
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" id="firstname" placeholder="">
                    </li>
                    <li>
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lastname" id="lastname" placeholder="">
                    </li>
                    <li>
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" placeholder="">
                    </li>
                    <li>
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" placeholder="">
                    </li>
                    <li>
                        <label for="state">State</label>
                        <input type="text" name="state" id="state" placeholder="">
                    </li>


                    <li class="vertical">
                        <ul>
                            <li>
                                <label for="country">Country</label>
                                <input type="text" name="country" style="width: 200px" id="country" placeholder="Country">
                            </li>

                            <li style="text-align:right">
                                <label for="zip">ZIP</label>
                                <input type="text" name="zip" id="zip"  placeholder="ZIP"
                                       class="inputRight">
                            </li>
                        </ul>
                    </li>

                </ul>



                <ul style="width:45%;    display: inline-block;">
                    <li>
                        <label for="card_number">Card Number </label>
                        <input type="text" name="card_number" id="card_number" maxlength="20"
                               placeholder="1234 5678 9012 3456">
                    </li>
                    <li>
                        <label for="card_name">Name on Card</label>
                        <input type="text" name="card_name" id="card_name" placeholder="Name on Card">
                    </li>

                    <li class="vertical">
                        <ul>
                            <li>
                                <label for="expiry_date">Expires</label>
                                <input type="text" name="expiry_month" id="expiry_month" maxlength="2" placeholder="MM"
                                       class="inputLeft marginRight">
                                <input type="text" name="expiry_year" id="expiry_year" maxlength="2" placeholder="YY"
                                       class="inputLeft "><br/>
                                <span>Month</span> <span style="margin-left:35px">Year</span>
                            </li>

                            <li style="text-align:right">
                                <label for="cvv">CVV</label>
                                <input type="text" name="cvv" id="cvv" maxlength="3" placeholder="123"
                                       class="inputRight">
                            </li>
                        </ul>
                    </li>
                    <li style="clear:both;">
                        <input type="submit" id="paymentButton" value="Proceed" disabled="disabled" class="disable">
                    </li>
                </ul>
            </form>
        </div>
        <div style="float:right;width:340px;margin-top:40px">
            <div style="margin-bottom:20px">Try these demo numbers</div>
            <ul id="cards">
                <li>5105105105105100</li>
                <li>4111 1111 1111 1210</li>
                <li>4111 1111 1113 1010</li>
                <li>4000 0000 0000 0002</li>
                <li>4026 0000 0000 0002</li>
                <li>5018 0000 0009</li>
                <li>5100 0000 0000 0008</li>
                <li>6011 0000 0000 0004</li>
            </ul>
        </div>
    </div>
    <div id="orderInfo"></div>
</div>
</body>
</html>
<!--<table class="items">-->
<!--                    <thead>-->
<!--                        <tr>-->
<!--                            <th class="desc" data-property="CAT_ITEMDESCRIPTION">Item Description</th>-->
<!--                            <th class="color" data-property="CAT_COLOR">Color</th>-->
<!--                            <th class="size" data-property="CAT_SIZE">Size</th>-->
<!--                            <th class="status" data-property="GLB_STATUS">Status</th>-->
<!--                            <th class="price" data-property="CAT_PRICE">Price</th>-->
<!--                        </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    -->
<!---->
<!---->
<!--                            <tr class="item in-stock" data-longsku="120-201-0802-002" data-priceflag="1" data-sku="617454061" data-mks="CLT" data-usd-price="58.00" data-collection="95870" data-productid="5320676" data-list-price="58.00" data-offer-price="58.00000" data-name="Iconic Crew Neck Sweater">-->
<!--                                <td class="item-desc">-->
<!--                                    <ul>-->
<!--                                        <li class="img" >-->
<!--                                                <a href="#" data-seq="02" data-productid="5319592">-->
<!--                                                <img class="prod-img" src="images/macbook.png" alt="Macbook Pro">-->
<!--                                                </a><br/>-->
<!--                                                <b>Apple Macbook Pro</b>-->
<!--                                            -->
<!--                                        </li>-->
<!--                                        -->
<!--                                    </ul>-->
<!--                                </td>-->
<!--                                <td class="color" data-seq="02">SILVER</td>-->
<!--                                <td class="size">13 Inch</td>-->
<!--                                <td class="status">-->
<!--                                    In Stock-->
<!--                                </td>-->
<!--                                <td class="price">-->
<!--                                -->
<!--                                            <span class="offer-price" style="font-weight:bold">$1299.00</span>-->
<!--                                        -->
<!--                                </td>-->
<!--                            </tr>-->
<!--                        -->
<!--                    </tbody>-->
<!--                </table>-->

