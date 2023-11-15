<?php
require('db.php');
if(isset($_POST['editpost'])){
    
    $post_id = $_POST['post_id'];
    $ptitle = mysqli_real_escape_string($db, $_POST['post_title']);
    $pcontent = mysqli_real_escape_string($db, $_POST['post_content']);
    $cid = $_POST['post_category'];

    // Update post details
    $query = "UPDATE posts SET title='$ptitle', content='$pcontent', category_id='$cid' WHERE id='$post_id'";
    $run = mysqli_query($db, $query);

    // Delete existing images for the post
    $deleteQuery = "DELETE FROM images WHERE post_id='$post_id'";
    $runDelete = mysqli_query($db, $deleteQuery);

    // Insert new images
    if(isset($_FILES['post_image'])){
        $image_name = $_FILES['post_image']['name'];
        $image_tmp = $_FILES['post_image']['tmp_name'];

        foreach ($image_name as $index => $img) {
            if(move_uploaded_file($image_tmp[$index], "../images/$img")) {
                $insertImageQuery = "INSERT INTO images (post_id, image) VALUES ('$post_id', '$img')";
                $runInsertImage = mysqli_query($db, $insertImageQuery);
            }
        }
    }

    header('location:../admin/index.php?managepost');
}
?>
