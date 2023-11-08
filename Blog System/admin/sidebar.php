<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">
            <a class="nav-link" href="index.php">
                <i class="bi bi-house-door"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- Other navbar items with similar logic -->
<!-- End Dashboard Nav -->

<li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'add-post.php') echo 'active'; ?>">
      <a class="nav-link" href="add-post.php">
        <i class="bi bi-plus-square"></i>
        <span>Add Posts</span>
      </a>
    </li><!-- End Add Posts Nav -->

    <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'manage-posts.php') echo 'active'; ?>">
      <a class="nav-link" href="manage-posts.php">
        <i class="bi bi-pencil-square"></i>
        <span>Manage Posts</span>
      </a>
    </li><!-- End Manage Posts Nav -->

    <li class="nav-item">
      <a class="nav-link" href="manage-comments.php">
        <i class="bi bi-chat-left-dots"></i>
        <span>Manage Comments</span>
      </a>
    </li><!-- End Manage Comments Nav -->

    <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'manage-category.php') echo 'active'; ?>">
      <a class="nav-link" href="manage-category.php?managecategory">
        <i class="bi bi-tag"></i>
        <span>Manage Category</span>
      </a>
    </li><!-- End Manage Category Nav -->

    <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'manage-menu.php') echo 'active'; ?>">
      <a class="nav-link" href="manage-menu.php">
        <i class="bi bi-list"></i>
        <span>Manage Menu</span>
      </a>
    </li><!-- End Manage Menu Nav -->

    <li class="nav-item">
      <a class="nav-link" href="user-profile.php">
        <i class="bi bi-person-square"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Nav -->

    <li class="nav-item">
  <a class="nav-link" href="../includes/logout.php" onclick="confirmLogout();">
    <i class="bi bi-box-arrow-right"></i>
    <span>Logout</span>
  </a>
</li>

  </ul>
</aside>
<style>
/* Reduced intensity deep blue neon highlight for the selected navbar block */
.nav-item.active {
    background-color: #0000CD; /* Deep Blue color, change to your preference */
    color: #fff; /* Text color for highlighted item */
    box-shadow: 0 0 3px #0000CD, 0 0 6px #0000CD, 0 0 9px #0000CD; /* Reduced intensity deep blue neon box shadow */
}






</style>
  <script>
function confirmLogout() {
  if (confirm("Are you sure you want to log out?")) {
    // If the user confirms, redirect to the logout page.
    window.location.href = "../includes/logout.php";
  }
}
</script>

