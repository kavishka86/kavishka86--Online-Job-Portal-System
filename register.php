<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Name = $_POST['Name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $Password=$_POST['Password'];
    $password_repeat=$_POST['password_repeat'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'job');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO registration ( name, email, PhoneNumber, password, repassword) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $Name, $email, $mobile,$Password,$password_repeat );

    

        if ($stmt->execute()) {
            echo "Registration successful.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}
?>
