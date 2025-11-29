<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syris Bagstore </title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap');
        
        body {
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f0ff; 
            color: #333;
        }
        
        header {
            background-color: #7952b3;
            color: white;
            padding: 20px;
            text-align: center;
            border-bottom: 5px solid #9b7ec4;
        }

        .container {
            max-width: 850px; 
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(121, 82, 179, 0.15);
            min-height: 500px;
        }

        h2 {
            color: #7952b3;
            text-align: center;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e8dff5;
            font-size: 14px; 
        }

        th {
            background-color: #e8dff5;
            color: #5d3f9b;
            font-weight: 700;
        }

        .product-img-cell img {
            width: 90px;
            height: 70px;
            object-fit: cover;
            border-radius: 5px;
        }
        
        .discount-price {
            color: #c45a7d;
            font-weight: bold;
        }

        footer {
            text-align: center;
            padding: 15px;
            color: #7952b3;
            font-size: 14px;
            margin-top: 30px;
        }

    </style>
</head>
<body>

<?php
// PHP Variables and Arrays 
$currency = '₱'; 
$discount_rate = 0.15; 
$total_products = 4; 

// Product Array
$bag_data = array(
    array(
        "name" => "Classic Leather Backpack",
        "price" => 1299.00,
        "category" => "Men",
        "stock" => 12, 
        "description" => "Durable leather backpack for daily use",
        "image_url" => "https://dynamic.zacdn.com/YB7W17ePVjAoN_HRuefStu6f3Ns=/filters:quality(70):format(webp)/https://static-ph.zacdn.com/p/aoking-0406-0671862-2.jpg"
    ),
    array(
        "name" => "Elegant Tote Bag",
        "price" => 899,
        "category" => "Women",
        "stock" => 0, // Out of stock example
        "description" => "Stylish tote bag for work or casual outings",
        "image_url" => "https://vonbaer.com/cdn/shop/files/von_baer_elegance_leather_tote_bag_cognac_tan_color_on_beautiful_female_model_outside.jpg?v=1756795186&width=1000"
    ),
    array(
        "name" => "Travel Duffel Bag",
        "price" => 1599,
        "category" => "Men",
        "stock" => 5,
        "description" => "Spacious bag ideal for weekend trips",
        "image_url" => "https://i5.walmartimages.com/seo/Leather-Large-32-inch-duffel-bags-for-men-holdall-leather-travel-bag-overnight-gym-sports-weekend-bag_1467681e-fd57-4e25-af62-58394bb35b83.0f66e63555711d33be90227da30794a6.jpeg"
    ),
    array(
        "name" => "Crossbody Shoulder Bag",
        "price" => 749.50,
        "category" => "Women",
        "stock" => 1, // Low stock example
        "description" => "Compact and trendy crossbody bag, hands-free!",
        "image_url" => "https://www.senreve.com/cdn/shop/articles/circa_crossbody_blog_750x.jpg?v=1656453274"
    ),
);

?>

<header>
    <h1>⋆.˚˖࿔ ࣪ Syris Bag Store ⋆.˚˖࿔ ࣪</h1>
    <p>Style on the go</p>
</header>

<div class="container">
    <h2>Our Latest Collection (<?php echo $total_products; ?> Items Listed)</h2>
    
    <?php
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Photo</th>';
    echo '<th>Bag Name / Status</th>';
    echo '<th>Category / Stock</th>';
    echo '<th>Original Price</th>';
    echo '<th>Special Price</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    //LOOP 
    foreach($bag_data as $item) { 
        
        //Operator
        $discount_amount = $item['price'] * $discount_rate;
        $final_price = $item['price'] - $discount_amount;

        // Conditional Statement - Ternary Operator 
        $stock_status = ($item['stock'] > 0) ? '<span style="color: green;">In Stock</span>' : '<span style="color: red;">SOLD OUT</span>';
        
        
        echo '<tr>';