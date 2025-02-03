
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
        .signup-link {
            text-align: center;
            margin-top: 15px;
        }
        .signup-link a {
            color: #5cb85c;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Login</h2>
    <form id="loginForm">
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <button type="submit">Login</button>
    </form>
    <div class="signup-link">
        <p>Not registered? <a href="registration.php">Sign Up</a></p>
    </div>
</div>
<script>
    // Handle login form submission
    document.getElementById('loginForm').onsubmit = function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Show alert for successful login (optional)
        alert("Login successful!");

        // Redirect to home page
        window.location.href = "home.html"; 
    };
</script>


</body>
</html>