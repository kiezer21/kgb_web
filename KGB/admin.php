<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KGB Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #loginForm {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        button:active {
            background-color: #0056b3;
            transform: translateY(1px);
        }

        button:focus {
            outline: none;
        }

        .error {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div id="container">
        <form id="loginForm">
            <h2>Admin Login Page</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit">Sign In</button>
            <p id="errorMsg" class="error"></p>
        </form>
        
    </div>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            // Hardcoded admin credentials
            const hardcodedUsername = "kgbadmin123";
            const hardcodedPassword = "kgbstore123";

            // Get the entered username and password
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            // Check if the entered credentials match the hardcoded ones
            if (username === hardcodedUsername && password === hardcodedPassword) {
                alert("Login successful.");

                // Redirect to the admin panel page
                window.location.href = "admin_panel/index.php";
            } else {
                document.getElementById("errorMsg").innerText = "Login failed. Please try again.";
            }
        });
    </script>
</body>
</html>
