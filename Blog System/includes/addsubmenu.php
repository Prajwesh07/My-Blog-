<?php
require 'db.php';
if(isset($_POST['addsubmenu'])){
    // print_r($_POST);
   $submenu_name = mysqli_real_escape_string($db, $_POST['submenu-name']);
   $parent_id = mysqli_real_escape_string($db, $_POST['parent-id']);
   $submenu_link = mysqli_real_escape_string($db, $_POST['submenu-link']);
   
   $query = "INSERT INTO submenu (name, parent_menu_id, action) VALUES ('$submenu_name', $parent_id, '$submenu_link')";
   mysqli_query($db, $query);
   header('location:../admin/manage-menu.php');
}
?>
