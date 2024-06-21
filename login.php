<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root', '', 'job');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("SELECT * FROM registration WHERE Email = ?");
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                if ($password == $row['password']) {
                    // Login successful
                    $_SESSION['user_id'] = $row['id'];
                    // Redirect to the desired page
                    header("Location: dashboard.php");
                    exit();
                } else {
                    // Incorrect password
                    echo "Incorrect password.";
                }
            } else {
                // User not found
                echo "User not found.";
            }
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}
?>