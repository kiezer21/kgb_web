<?php
include_once "admin_panel/config/dbconnect.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center; 
        }
        .container {
            margin: 0 auto; 
            width: 50%; 
            padding: 20px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            text-align: left; 
        }
        input[type="text"],
        input[type="email"],
        input[type="contact"],
        input[type="submit"] {
            width: 100%; 
            margin-bottom: 10px; 
            padding: 8px; 
            border: 1px solid #ccc; 
            border-radius: 4px;
            box-sizing: border-box; 
        }
        input[type="submit"] {
            background-color: #f7444e;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049; 
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_GET['product_id']) && is_numeric($_GET['product_id'])) {
            $product_id = $_GET['product_id'];

            $sql = "SELECT * FROM product WHERE product_id = $product_id";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
        ?>
                <h1>Product Details</h1>
                <img src="<?php echo str_replace('./uploads/', 'admin_panel/uploads/', $row['product_image']); ?>" width="150" height="150">
                <p style="color: #f7444e; font-size: larger;"><strong>Product Name:</strong> <?php echo $row["product_name"]; ?></p>
                <p style="color: #f7444e; font-size: larger;"><strong>Price:</strong> ₱<?php echo $row["price"]; ?></p>

                <h2>Customer Information</h2>
                <form action="checkout.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $row["product_id"]; ?>">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" required><br>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br>
                    <label for="contact">Contact Number:</label><br>
                    <input type="text" id="contact" name="contact" inputmode="numeric" required><br>
                    
                    <input type="submit" value="Checkout">
                </form>
        <?php
            } else {
                echo "Product not found.";
            }
        } else {
            echo "Invalid product ID.";
        }
        ?>
    </div>
</body>
</html>
