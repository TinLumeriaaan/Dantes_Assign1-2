<?php

$tax_rate = 12; // 12% is the tax rate.


$currency = '₱'; 
?>
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
            background-image: url('https://images.unsplash.com/photo-1549490159-f815049b71f2?q=80&w=2000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            
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

        
        header a {
            color: #d1b1ff;
            text-decoration: none;
            margin: 0 10px;
            font-weight: 500;
        }

        header a:hover {
            color: white;
            text-decoration: underline;
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
        
       
        .reorder-yes {
            color: red;
            font-weight: bold;
        }
        .reorder-no {
            color: green;
        }

        footer {
            text-align: center;
            padding: 15px;
            color: white; 
            font-size: 14px;
            margin-top: 30px;
        }

    </style>
</head>
<body>

<header>
    <h1>⋆.˚˖࿔ ࣪ Syris Bag Store ⋆.˚˖࿔ ࣪</h1>
    <p>
        <a href="dantesassign2.php">Main Sales Page</a>
        |
        <a href="stock_control.php">Stock Control</a>
    </p>
</header>