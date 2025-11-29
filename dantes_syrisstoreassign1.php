<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syris Bagstore </title>
    <style>
        /* Basic Styling for the purple-light theme */
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap');
        
        body {
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f0ff; /* Light purple background */
            color: #333;
        }
        
        header {
            background-color: #7952b3; /* Darker purple header */
            color: white;
            padding: 20px;
            text-align: center;
            border-bottom: 5px solid #9b7ec4;
        }

        .container {
            max-width: 800px;
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
        }

        th {
            background-color: #e8dff5;
            color: #5d3f9b;
            font-weight: 700;
        }

        .product-img-cell img {
            width: 100px;
            height: 80px;
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
// PHP Variables and Arrays, Discount price of the products
$currency = '₱'; 
$discount_rate = 0.15; // 15% off

// The main content structure (Product Array)
$bag_data = array(
    array(
        "name" => "Classic Leather Backpack",
        "price" => 1299.00,
        "category" => "Men",
        "description" => "Durable leather backpack for daily use",
        "image_url" => "https://dynamic.zacdn.com/YB7W17ePVjAoN_HRuefStu6f3Ns=/filters:quality(70):format(webp)/https://static-ph.zacdn.com/p/aoking-0406-0671862-2.jpg"
    ),
    array(
        "name" => "Elegant Tote Bag",
        "price" => 899,
        "category" => "Women",
        "description" => "Stylish tote bag for work or casual outings",
        "image_url" => "https://vonbaer.com/cdn/shop/files/von_baer_elegance_leather_tote_bag_cognac_tan_color_on_beautiful_female_model_outside.jpg?v=1756795186&width=1000"
    ),
    array(
        "name" => "Travel Duffel Bag",
        "price" => 1599,
        "category" => "Men",
        "description" => "Spacious bag ideal for weekend trips",
        "image_url" => "https://i5.walmartimages.com/seo/Leather-Large-32-inch-duffel-bags-for-men-holdall-leather-travel-bag-overnight-gym-sports-weekend-bag_1467681e-fd57-4e25-af62-58394bb35b83.0f66e63555711d33be90227da30794a6.jpeg"
    )
);

?>

<header>
    <h1>⋆.˚˖࿔ ࣪ Syris Bag Store ⋆.˚˖࿔ ࣪</h1>
    <p>Style on the go</p>
</header>

<div class="container">
    <h2>Our Latest Collection (<?php echo count($bag_data); ?> Items Listed)</h2>
    
    <?php
    // Print the HTML table start
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Photo</th>';
    echo '<th>Bag Name / Category</th>';
    echo '<th>Description</th>';
    echo '<th>Original Price</th>';
    echo '<th>Special Price</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Loop through the product array
    foreach($bag_data as $item) { 
        
        // Calculate the discounted price using expressions
        $discount_amount = $item['price'] * $discount_rate;
        $final_price = $item['price'] - $discount_amount;
        
        echo '<tr>';
        
        // 1. Image of the products
        echo '<td class="product-img-cell">';
        echo '<img src="' . $item['image_url'] . '" alt="' . $item['name'] . '">';
        echo '</td>';
        
        // 2. Name and Category
        echo '<td>';
        echo '<strong>' . $item['name'] . '</strong> <br>';
        echo '<small>Category: ' . $item['category'] . '</small>';
        echo '</td>';
        
        // 3. Description
        echo '<td>' . $item['description'] . '</td>';
        
        // 4. Original Price 
        echo '<td><del>' . $currency . number_format($item['price'], 2) . '</del></td>';
        
        // 5. Discounted Price
        echo '<td class="discount-price">' . $currency . number_format($final_price, 2) . '</td>';
        
        // End of the table row
        echo '</tr>';

    } 

    // Close the table
    echo '</tbody>';
    echo '</table>';
    ?>
    
    <p style="text-align: center; margin-top: 25px; font-style: italic; color: #5d3f9b;">
        All bags in the store are currently 15% off the original price!
    </p>

</div>

<footer>
    Dantes, Christine May T. | WD-201 | Syris Bag Store
</footer>

</body>

</html>
