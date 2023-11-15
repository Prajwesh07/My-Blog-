<?php
require('db.php');
if(isset($_POST['submit'])){
    
    print_r($_POST);
    // $ptitle=mysqli_real_escape_string($db,$_POST['post_full_name']);
    // $pcontent=mysqli_real_escape_string($db,$_POST['post_email']);
    // $cid=$_POST['post_phone_no'];
    // $cid2=$_POST['post_image'];
    // $query="INSERT INTO admin (full_name,email,phone_no,image) VALUES ('$ptitle','$pcontent','$cid')";
    // $run=mysqli_query($db,$query);
    // $post_id=mysqli_insert_id($db);
    // $image_name=$_FILES['post_image']['name'];
    // $image_tmp=$_FILES['post_image']['tmp_name'];
    //  header('location:../admin/index.php?managepost');
}