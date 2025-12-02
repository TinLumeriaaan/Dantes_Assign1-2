<?php
require 'headerassign3.php'; 


$discount_rate = 0.15; 
$total_products = 4; 

$bag_data = array(
    array(
        "name" => "Classic Leather Backpack",
        "price" => 1299.00,
        "category" => "Men",
        "stock" => 12, 
        "image_url" => "https://dynamic.zacdn.com/YB7W17ePVjAoN_HRuefStu6f3Ns=/filters:quality(70):format(webp)/https://static-ph.zacdn.com/p/aoking-0406-0671862-2.jpg"
    ),
    array(
        "name" => "Elegant Tote Bag",
        "price" => 899,
        "category" => "Women",
        "stock" => 0, 
        "image_url" => "https://vonbaer.com/cdn/shop/files/von_baer_elegance_leather_tote_bag_cognac_tan_color_on_beautiful_female_model_outside.jpg?v=1756795186&width=1000"
    ),
    array(
        "name" => "Travel Duffel Bag",
        "price" => 1599,
        "category" => "Men",
        "stock" => 5,
        "image_url" => "https://i5.walmartimages.com/seo/Leather-Large-32-inch-duffel-bags-for-men-holdall-leather-travel-bag-overnight-gym-sports-weekend-bag_1467681e-fd57-4e25-af62-58394bb35b83.0f66e63555711d33be90227da30794a6.jpeg"
    ),
    array(
        "name" => "Crossbody Shoulder Bag",
        "price" => 749.50,
        "category" => "Women",
        "stock" => 1, 
        "image_url" => "https://www.senreve.com/cdn/shop/articles/circa_crossbody_blog_750x.jpg?v=1656453274"
    ),
);
?>

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
    // FOREACH LOOP 
    foreach($bag_data as $item) { 
        
        // Operator calculation
        $discount_amount = $item['price'] * $discount_rate;
        $final_price = $item['price'] - $discount_amount;
        
        // If/Elseif/Else for price message
        $price_message = $currency . number_format($final_price, 2); 
        if ($item['category'] == 'Women') {
            $price_message .= ' (Women\'s Sale!)';
        } elseif ($item['category'] == 'Men') {
            $price_message .= ' (Men\'s Sale!)';
        }

        //  If/Elseif/Else for stock status, quantity, and button.
        if ($item['stock'] == 0) {
            $stock_status_text = '<span style="color: red; font-weight: 500;">SOLD OUT</span>';
            $stock_quantity_text = 'Stock: Out of production!';
            $action_button_html = '<span class="cart-action out-btn">Out of Stock</span>';
        } elseif ($item['stock'] <= 2) {
            $stock_status_text = '<span style="color: green; font-weight: 500;">In Stock</span>';
            $stock_quantity_text = '<span style="color: orange; font-weight: bold;">Stock: LOW! (Only ' . $item['stock'] . ')</span>';
            $action_button_html = '<a href="#" class="cart-action add-btn">Add to Cart</a>';
        } else {
            $stock_status_text = '<span style="color: green; font-weight: 500;">In Stock</span>';
            $stock_quantity_text = 'Stock: Plenty';
            $action_button_html = '<a href="#" class="cart-action add-btn">Add to Cart</a>';
        }
        
        // Start table row
        ?>
        <tr>
            
            <td class="product-img-cell">
                <img src="<?php echo $item['image_url']; ?>" alt="<?php echo $item['name']; ?>">
            </td>
            
            <td>
                <strong><?php echo $item['name']; ?></strong> <br>
                <?php echo $stock_status_text; ?>
            </td>

            <td>
                <small>Category: <?php echo $item['category']; ?></small><br>
                <?php echo $stock_quantity_text; ?>
            </td>
            
            <td>
                <del><?php echo $currency . number_format($item['price'], 2); ?></del>
            </td>
            
            <td class="discount-price">
                <?php echo $price_message; ?>
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
            Stock status (In Stock, Sold Out, Low) is updated automatically. 
        </p>
    </center>

<?php
require 'footerassign3.php'; 
?>