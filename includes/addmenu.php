<?php
require 'db.php';
if(isset($_POST['addmenu'])){
    // print_r($_POST);
   $menu_name=mysqli_real_escape_string($db,$_POST['menu-name']);
   $menu_link=mysqli_real_escape_string($db,$_POST['menu-link']);
   $query="INSERT INTO menu(name,action) VALUES ('$menu_name','$menu_link')";
   mysqli_query($db,$query);
   header('location:../admin/manage-menu.php');
}

?>