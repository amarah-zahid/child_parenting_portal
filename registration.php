<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
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
        .required:after {
            content: " *";
            color: red;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="date"], input[type="tel"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
    </style>
</head>
<body>

<div class="container">
    <h2>Registration Form</h2>
    <form action="process.php" method="POST">
        <h3>Basic Information</h3>
        <label class="required" for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" placeholder="First Name, Last Name" required>

        <label class="required" for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="Your email" required>

        <label class="required" for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label class="required" for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>

        <h3>Child Information (if applicable)</h3>
        <label class="required" for="childName">Child's Name:</label>
        <input type="text" id="childName" name="childName" placeholder="First and Last Name" required>

        <label class="required" for="childAge">Child's Age:</label>
        <input type="date" id="childAge" name="childAge" required>

        <label class="required" for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="specialNeeds">Special Needs:</label>
        <input type="text" id="specialNeeds" name="specialNeeds" placeholder="Any specific requirements (optional)">

        <h3>Contact Information</h3>
        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Optional, for urgent communication">

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" placeholder="Street, City, State, Zip Code">

        <h3>Preferences</h3>
        <label class="required" for="role">Role:</label>
        <select id="role" name="role" required>
            <option value="">Select Role</option>
            <option value="parent">Parent</option>
            <option value="guardian">Guardian</option>
            <option value="caregiver">Caregiver</option>
        </select>

        <label for="interests">Interests:</label>
        <input type="text" id="interests" name="interests" placeholder="e.g., health, education, activities">

        <button type="submit" name="submit">Register</button>
    </form>
</div>
<script>
    // Handle registration form submission
    document.getElementById('registrationForm').onsubmit = function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Show alert for successful registration
        alert("You have been registered to our website!");

        // Redirect to home page
        window.location.href = "home.html"; 
    };
</script>
</body>
</html>