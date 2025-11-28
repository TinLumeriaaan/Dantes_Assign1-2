<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syris Bagstore</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f0ff; /* Light purple-ish background */
        }
        
        header {
            background-color: #9b7ec4; /* Medium purple header */
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
        }
        
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }
        
        .product-card {
            background-color: white;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 8px rgba(155, 126, 196, 0.4); 
            
            min-height: 400px; 
            display: flex;
            flex-direction: column;
        }
        
        .product-card img {
            width: 100%;
            height: 250px; 
            object-fit: cover; 
            border-radius: 5px;
            background-color: #e8dff5;
            margin-bottom: 10px; /* Added spacing below the image */
        }
        
        .product-card h3 {
            color: #7952b3; /* Darker purple for headings */
            margin: 10px 0;
        }
        
        .product-card p {
            color: #666;
            font-size: 14px;
            flex-grow: 1; 
        }
        
        .price {
            color: #9b7ec4; /* Header purple for price */
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0 0 0; 
        }
        
        .category {
            display: inline-block;
            background-color: #e8dff5;
            color: #7952b3;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
            margin-bottom: 5px; 
        }
    </style>
</head>
<body>

<?php
// Simple array of bags for the store
$bag_data = array(
    array(
        "name" => "Classic Leather Backpack",
        "price" => 1299.00,
        "category" => "Men",
        "description" => "Durable leather backpack perfect for daily use (kinda big)",
        "image_url" => "https://dynamic.zacdn.com/YB7W17ePVjAoN_HRuefStu6f3Ns=/filters:quality(70):format(webp)/https://static-ph.zacdn.com/p/aoking-0406-0671862-2.jpg"
    ),
    array(
        "name" => "Elegant Tote Bag",
        "price" => 899,
        "category" => "Women",
        "description" => "Stylish tote bag for work or casual outings, everyone needs one",
        "image_url" => "https://vonbaer.com/cdn/shop/files/von_baer_elegance_leather_tote_bag_cognac_tan_color_on_beautiful_female_model_outside.jpg?v=1756795186&width=1000"
    ),
    array(
        "name" => "Travel Duffel Bag",
        "price" => 1599,
        "category" => "Men",
        "description" => "Spacious bag ideal for weekend trips, carry a lot of stuff",
        "image_url" => "https://i5.walmartimages.com/seo/Leather-Large-32-inch-duffel-bags-for-men-holdall-leather-travel-bag-overnight-gym-sports-weekend-bag_1467681e-fd57-4e25-af62-58394bb35b83.0f66e63555711d33be90227da30794a6.jpeg"
    ),
    array(
        "name" => "Crossbody Shoulder Bag",
        "price" => 749.50,
        "category" => "Women",
        "description" => "Compact and trendy crossbody bag, hands-free!",
        "image_url" => "https://www.senreve.com/cdn/shop/articles/circa_crossbody_blog_750x.jpg?v=1656453274"
    ),
    array(
        "name" => "Laptop Messenger Bag",
        "price" => 1099,
        "category" => "Men",
        "description" => "Professional messenger bag with laptop compartment, very secure",
        "image_url" => "https://www.oribags.com/cdn/shop/files/TomtocExplorerT21LaptopMessengerBag14-inch-Black12_700x.png?v=1726256175"
    ),
    array(
        "name" => "Mini Fashion Handbag",
        "price" => 650,
        "category" => "Women",
        "description" => "Cute mini handbag for evening occasions - can only hold your keys and phone",
        "image_url" => "https://www.refinery29.com/images/11697608.png?format=webp&width=1090&height=1273&quality=85"
    )
);
?>

<header>
    <h1>⋆.˚˖࿔ ࣪ Syris Bag Store ⋆.˚˖࿔ ࣪</h1>
    <p>Find the perfect bag for your style</p>
</header>

<div class="container">
    <h2 style="color: #7952b3;">Our Collection</h2>
    
    <div class="products">
<?php
        // Loop through all the bags in the array
        foreach($bag_data as $item) { 
?>
        <div class="product-card">
            
            <img src="<?php echo $item['image_url']; ?>" 
                 alt="<?php echo $item['name']; ?>">
            
            <span class="category"><?php echo $item['category']; ?></span>
            
            <h3><?php echo $item['name']; ?></h3>
            
            <p><?php echo $item['description']; ?></p>
            
            <?php 
                // Using a variable just for the price to show calculation steps
                $display_price = number_format($item['price'], 2);
            ?>
            
            <div class="price">₱<?php echo $display_price; ?></div>
        </div>
<?php
        } 
?>
    </div>
</div>

</body>
</html>
