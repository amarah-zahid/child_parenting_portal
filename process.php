<?php
include 'database.php';

if(isset($_POST['submit'])){
    $fullname = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $childname = $_POST['childName'];
    $childage = $_POST['childAge'];
    $gender = $_POST['gender'];
    $special = $_POST['specialNeeds'];
    $phone = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $role = $_POST['role'];
    $interests = $_POST['interests'];

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO user_details (fullName, email, password, childName, childAge, gender, specialNeeds, phoneNumber, address, role, interests) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssississs", $fullname, $email, $password, $childname, $childage, $gender, $special, $phone, $address, $role, $interests);

    if($stmt->execute()){
        echo "<script>alert('New data inserted')</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    mysqli_close($con);
}
include 'home.html';
?>