<?php

require 'headerassign3.php'; 


function get_reorder_message($stock)
{
    return ($stock < 10) ? 'Yes' : 'No'; 
}

function get_total_value($price, $quantity)
{
    // Price * Quantity.
    return $price * $quantity;
}


function get_tax_due($price, $quantity, $tax_rate_percent)
{
    
    $total_value = get_total_value($price, $quantity); 

    
    return $total_value * ($tax_rate_percent / 100);
}



// Product Inventory Data

// Data Array
$inventory_products = [
    'Classic Leather Backpack' => ['price' => 1299.00, 'stock' => 12],
    'Elegant Tote Bag'        => ['price' => 899.00, 'stock' => 0],
    'Travel Duffel Bag'       => ['price' => 1599.00, 'stock' => 5],
    'Crossbody Shoulder Bag'  => ['price' => 749.50, 'stock' => 1],
    'Minimalist Sling Bag'    => ['price' => 550.00, 'stock' => 25], 
    'Vintage Canvas Satchel'  => ['price' => 950.00, 'stock' => 8],  
    'Laptop Messenger Bag'    => ['price' => 1899.00, 'stock' => 15], 
];



?>

<div class="container">
    <h2>Stock Control & Inventory Monitoring</h2>
    
    <table>
    <thead>
        <tr>
            <th>Bag Name</th>
            <th>Stock Level</th>
            <th>Re-Order?</th>
            <th>Total Stock Value</th>
            <th>Tax Due (<?php echo $tax_rate; ?>%)</th> 
        </tr>
    </thead>
    <tbody>

    <?php
    // Use Foreach Loop through all the bags.
    foreach($inventory_products as $product_name => $data) {
        
        // Get price and stock from array.
        $price = $data['price'];
        $stock = $data['stock'];

        // Check Re-Order Status.
        $reorder_message = get_reorder_message($stock);
        
        // Calculate Total Value.
        $total_value = get_total_value($price, $stock);
        
        // Calculate Tax Due.
        $tax_due = get_tax_due($price, $stock, $tax_rate);
        
        // Ternary check for table row color.
        $reorder_class = ($reorder_message === 'Yes') ? 'reorder-yes' : 'reorder-no';
        
        
        ?>
        <tr>
            <td><strong><?php echo $product_name; ?></strong></td> 
            
            <td><?php echo $stock; ?></td> 
            
            <td class="<?php echo $reorder_class; ?>">
                <?php echo $reorder_message; ?>
            </td> 
            
            <td>
                <?php echo $currency . number_format($total_value, 2); ?>
            </td> 
            
            <td>
                <?php echo $currency . number_format($tax_due, 2); ?>
            </td>
        </tr>
    <?php
    } 
    ?>

    </tbody>
    </table>
    

<?php

require 'footerassign3.php';
?>