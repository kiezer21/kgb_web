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
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];

            $sql = "SELECT * FROM services WHERE id = $id";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
        ?>
                <h1>Product Details</h1>
                <p><strong>Name:</strong> <?php echo $row["service_name"]; ?></p>
                <p><strong>Price:</strong> $<?php echo $row["s_price"]; ?></p>

                <h2>Customer Information</h2>
                <form action="scheckout.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" required><br>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br>
                    <label for="contact">Contact Number:</label><br>
                    <input type="contact" id="contact" name="contact" pattern="[0-9]*" inputmode="numeric" required><br>


                    <input type="submit" value="Proceed to Checkout">
                </form>
        <?php
            } else {
                echo "Service not found.";
            }
        } else {
            echo "Invalid product ID.";
        }
        ?>
    </div>
</body>
</html>
