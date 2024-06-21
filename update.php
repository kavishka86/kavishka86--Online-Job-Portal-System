<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli('localhost', 'root', '', 'job');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
$user_id = $_SESSION['user_id'];

if (isset($_POST['update_profile'])) {
    $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
    $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
    $update_mobile = mysqli_real_escape_string($conn, $_POST['update_mobile']);
    $update_password = isset($_POST['update_password']) ? $_POST['update_password'] : '';

    if (!empty($update_password)) {
        $update_password = password_hash($update_password, PASSWORD_DEFAULT);
    }

    $user_id = $_SESSION['user_id'];

    mysqli_query($conn, "UPDATE `registration` SET name = '$update_name', email = '$update_email', mobile = '$update_mobile', password = '$update_password' WHERE id ='$user_id'") or die('Query failed');

    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if (!empty($new_password) || !empty($confirm_password)) {
        if ($new_password != $confirm_password) {
            $message[] = 'Confirm password does not match!';
        } else {
            $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);
            mysqli_query($conn, "UPDATE `registration` SET password = '$hashed_new_password' WHERE id ='$user_id'") or die('Query failed');
            $message[] = 'Password updated successfully!';
        }
    }
}

$user_id = $_SESSION['user_id'];

$select = mysqli_query($conn, "SELECT * FROM `registration` WHERE user_id = '$user_id'") or die('Query failed');
if (mysqli_num_rows($select) > 0) {
    $fetch = mysqli_fetch_assoc($select);
    $name = $fetch['name'];
    $email = $fetch['email'];
    $mobile = $fetch['mobile'];
} else {
    echo "No matching user found.";
}

?>