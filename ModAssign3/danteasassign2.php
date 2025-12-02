<?php

require 'headerassign3.php';

// PHP Variables and Arrays 
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

<div class="container">
    <h2>Our Latest Collection (<?php echo $total_products; ?> Items Listed)</h2>
    
    <table>
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
    // FOREACH LOOP
    foreach($bag_data as $item) { 
        
        // Operator calculation.
        $discount_amount = $item['price'] * $discount_rate;
        $final_price = $item['price'] - $discount_amount;

        // Conditional Statement - Ternary Operator 
        $stock_status = ($item['stock'] > 0) ? '<span style="color: green;">In Stock</span>' : '<span style="color: red;">SOLD OUT</span>';
        
        // Conditional Logic: IF-ELSEIF-ELSE for quantity and button.
        if ($item['stock'] == 0) {
            $stock_quantity_text = 'Stock: Out of production!';
            $action_button_html = '<span class="cart-action out-btn">Out of Stock</span>';
        } elseif ($item['stock'] <= 2) {
            $stock_quantity_text = '<span style="color: orange; font-weight: bold;">Stock: LOW! (Only ' . $item['stock'] . ')</span>';
            $action_button_html = '<a href="#" class="cart-action add-btn">Add to Cart</a>';
        } else {
            $stock_quantity_text = 'Stock: Plenty';
            $action_button_html = '<a href="#" class="cart-action add-btn">Add to Cart</a>';
        }

        // Conditional Logic: SWITCH for the sale message.
        $sale_message_text = $currency . number_format($final_price, 2);
        switch ($item['category']) {
            case 'Women':
                $sale_message_text .= ' (Women\'s Sale!)';
                break;
            case 'Men':
                $sale_message_text .= ' (Men\'s Sale!)';
                break;
            default:
                
        }
        
        ?>
        <tr>
            
            <td class="product-img-cell">
                <img src="<?php echo $item['image_url']; ?>" alt="<?php echo $item['name']; ?>">
            </td>
            
            <td>
                <strong><?php echo $item['name']; ?></strong> <br>
                <?php echo $stock_status; ?>
            </td>

            <td>
                <small>Category: <?php echo $item['category']; ?></small><br>
                <?php echo $stock_quantity_text; ?>
            </td>
            
            <td>
                <del><?php echo $currency . number_format($item['price'], 2); ?></del>
            </td>
            
            <td class="discount-price">
                <?php echo $sale_message_text; ?>
            </td>
            
            <td>
                <?php echo $action_button_html; ?>
            </td>
            
        </tr>
    <?php
    } 
    ?>

    </tbody>
    </table>
    
    <center>
        <p style="margin-top: 25px; font-style: italic; color: #5d3f9b;">
            Check the status column! Items are now conditionally marked based on inventory using PHP logic.
        </p>
    </center>

<?php
require 'footerassign3.php';
?>