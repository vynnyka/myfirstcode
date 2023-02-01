<?php 
 /*************************************************************   * 
* File name: HW_INFO152/hw1/display_discount.php  
 * Purpose: INFO152-HW1, Build and Enhance “Product Discount”   * 
 * Author: Anna Vynnyk
 * DrexelId: av668
 * Complete Date: 2023/01/31  
 ************************************************************/ 

 // #1. av668: get the data from user input into form 
    $product_description = $_GET['product_description'];
    $list_price = $_GET['list_price'];
    $discount_percent = $_GET['discount_percent'];

// #2. av668: Calculation of discount amount and discount price 
    $discount_amount = $list_price * $discount_percent * 0.01;
    $discount_price = $list_price - $discount_amount;

// #3. av668: Converting the list_price, discount_amount, and discount_price
//            to display two decimal places
    $list_price_formatted = "$".number_format($list_price, 2);
    $discount_formatted = "$".number_format($discount_amount, 2);
    $discount_price_formatted = "$".number_format($discount_price, 2);


//#4. av668: Converting the discount percent to display 1 decimal place
    $discount_percent_formatted = .number_format($discount_percent, 1)"%";



//#5. av668: 3 variables + values
    $author = 'Anna Vynnyk';
    $hw = 'INFO152-HW1';
    $current_date = date('l');

//#8. av668: 
    $product_description_out = htmlspecialchars($product_description);

?> 


<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
<!--#7. av668: Changed the text in h1-->
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description_out; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br>
    </main>
</body>
</html>