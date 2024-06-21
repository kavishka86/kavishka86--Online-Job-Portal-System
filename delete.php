<?php

include 'conect.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM  `jobd` WHERE J_ID = $id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('Location: display.php');
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}

?>
