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
            background-image: url('https://img.freepik.com/premium-vector/bag-background_16643-1435.jpg?semt=ais_hybrid&w=740&q=80');
            background-repeat: no-repeat;
            background-size: cover; 
            background-attachment: fixed;
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
            max-width: 900px; 
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
            padding: 10px; 
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

        
        .cart-action {
            display: inline-block;
            padding: 7px 10px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            text-align: center;
        }
        .add-btn {
            background-color: #7952b3; 
            color: white;
            border: 1px solid #7952b3;
        }
        .out-btn {
            background-color: #d1d1d1;
            color: #444;
            border: 1px solid #999;
            cursor: not-allowed;
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
        "stock" => 0, 
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
        "stock" => 1, 
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
    ?>
    <thead>
        <tr>
            <th>Photo</th>
            <th>Bag Name / Status</th>
            <th>Category / Stock</th>
            <th>Original Price</th>
            <th>Special Price</th>
            <th>Action</th> 
        </tr>
    </thead>
    <tbody>

    <?php
    foreach($bag_data as $item) { 
        
        // Operator
        $discount_amount = $item['price'] * $discount_rate;
        $final_price = $item['price'] - $discount_amount;

        // Conditional Statement - Ternary Operator 
        $stock_status = ($item['stock'] > 0) ? '<span style="color: green; font-weight: 500;">In Stock</span>' : '<span style="color: red; font-weight: 500;">SOLD OUT</span>';
        
        
        ?>
        <tr>
            
            <td class="product-img-cell">
                <img src="<?php echo $item['image_url']; ?>" alt="<?php echo $item['name']; ?>">
            </td>
            
            <td>
                <strong><?php echo $item['name']; ?></strong> <br>
                <?php echo $stock_status; ?>
            </td>

            <?php
            // Category and Stock Check (IF-ELSEIF-ELSE)
            ?>
            <td>
                <small>Category: <?php echo $item['category']; ?></small><br>
                
                <?php
                if ($item['stock'] == 0) {
                    echo 'Stock: Out of stock';
                } elseif ($item['stock'] <= 2) {
                    echo '<span style="color: orange; font-weight: bold;">Stock: LOW! (Only ' . $item['stock'] . ')</span>';
                } else {
                    echo 'Stock: Plenty';
                }
                ?>
                
            </td>
            
            <td>
                <del><?php echo $currency . number_format($item['price'], 2); ?></del>
            </td>
            
            <?php
            // Discounted Price - Switch Statement
            ?>
            <td class="discount-price">
                <?php
                switch ($item['category']) {
                    case 'Women':
                        echo $currency . number_format($final_price, 2) . ' (Women\'s Sale!)';
                        break;
                    case 'Men':
                        echo $currency . number_format($final_price, 2) . ' (Men\'s Sale!)';
                        break;
                    default:
                        echo $currency . number_format($final_price, 2);
                }
                ?>
            </td>