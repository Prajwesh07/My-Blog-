<?php
require 'db.php';

if (isset($_GET['id'])) {
    print_r($_POST);
    // $id = mysqli_real_escape_string($db, $_GET['id']);
    // $query = "DELETE FROM images WHERE post_id='$id'";

    // if (mysqli_query($db, $query)) {
    //     header('location:../admin/manage-post.php');
    //     exit(); // Ensure script stops execution after redirection
    // } else {
    //     echo 'Error: ' . mysqli_error($db);
    //     // Handle the error as needed (log, display a message, etc.)
    // }
}
?>
