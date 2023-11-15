<?php
require('../includes/db.php');
require('../includes/function.php');
$admin=getAdminInfo($db,$_SESSION['email']);
if(!isset($_SESSION['isUserLoggedIn']) ){
  header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Manage Menu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <?php  include_once('profile-nav.php') ?>

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php  include_once('sidebar.php')  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage Menu</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Manage Menu</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<br>
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
  <!-- ======= Sidebar ======= -->
  <?php  include_once('sidebar.php')  ?>


    <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th> Menu</th>
            <th>Link</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
$menus = getMenu($db);
$count=1;
foreach($menus as $menu){
  ?>

<tr>
            <td> <?=$count ?>  </td>
            <td><?=$menu['name'] ?> </td>
            <td><?=$menu['action'] ?> </td>
            <td>
                <a class="btn btn-danger" href="../includes/removemenu.php?id=<?=$menu['id'] ?> ">Remove</a>
            </td>
        </tr>
        <!-- Add more rows as needed -->
  <?php
  $count++;
}
        ?>
        
    </tbody>
</table>
            


      </div>
      <form role="form" method="post" action="../includes/addmenu.php">
    <h4>Add New Menu</h4>
    <br>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Menu Title</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="menu-name" id="exampleFormControlInput1" placeholder="Enter Menu Name ...">
        </div>
    </div>
    

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label"> Menu Link</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" name="menu-link" id="exampleFormControlInput1" value="#" placeholder="Enter Sub-Menu Link ...">
    </div>
</div>

    <button type="submit" name="addmenu" class="btn btn-primary">Add</button>
</form>
 <br>
<hr>
<br>



<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>Sub Menu</th>
            <th>Parent Menu </th>
            <th>Link</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
$submenus = getAllSubMenu($db);
$count=1;
foreach($submenus as $submenu){
  ?>

<tr>
            <td> <?=$count ?>  </td>
            <td><?=$submenu['name'] ?> </td>
            <td><?=getMenuName($db,$submenu['parent_menu_id']) ?> </td>
            <td><?=$submenu['action']?></td>
            <td>
                <a class="btn btn-danger" href="../includes/removesubmenu.php?id=<?=$submenu['id'] ?> ">Remove</a>
            </td>
        </tr>
        <!-- Add more rows as needed -->
  <?php
  $count++;
}
        ?>
        
    </tbody>
</table>
            


      </div>
      <form role="form" method="post" action="../includes/addsubmenu.php">
    <h4>Add New Sub-Menu</h4>
    <br>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Sub-Menu Title</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="submenu-name" id="exampleFormControlInput1" placeholder="Enter Sub-Menu Name ...">
        </div>
    </div>

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label"> Select Parent Menu</label>
    <div class="col-sm-6">
    <select name="parent-id" class="form-control"  id="exampleFormControlInput1" >
      <?php
      $mlist = getAllMenu($db);
      foreach($mlist as $m){
?>
<option value="<?=$m['id'] ?>" ><?=$m['name']  ?> </option>
<?php
      }
      ?>
       
    </select>
    </div>
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label"> Sub-Menu Link</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" name="submenu-link" id="exampleFormControlInput1" value="#" placeholder="Enter Sub-Menu Link ...">
    </div>
</div>

    <button type="submit" name="addsubmenu" class="btn btn-primary">Add</button>
</form>

    </section>
  </main>
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>