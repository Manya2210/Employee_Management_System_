<?php 
include "../session.php";
include "auth.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Management System - Employee </title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/style.min.css">
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
   <!-- ! Sidebar -->
  <aside class="sidebar" style="background:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUr_BARBrPzrotcoK_seK4iOaguxSnoeIRlAW7Rr1xz6O33xM5IwFzceff-E0UuO2kXiM&usqp=CAU); background-size: cover; background-repeat: no-repeat;">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <!-- <span class="icon logo" aria-hidden="true"></span> -->
                <div class="logo-text">
                    <span class="logo-title"><?php echo $_SESSION['name'] ?></span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                
                 <li>
                    <a class="show-cat-btn" href="emp_task.php">
                        <span class="icon edit" aria-hidden="true"></span>Dashboard
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="emp_dashboard.php">Dashboard</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a class="show-cat-btn" href="emp_task.php">
                        <span class="icon edit" aria-hidden="true"></span>See Task
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="emp_task.php">See your assigned Task</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon document" aria-hidden="true"></span>Apply for Leave
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="view_leave.php"> Show Assigned Leave</a>
                        </li>
                        <li>
                            <a href="leave.php"> Show Leave Status</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
            
        </div>
    </div> 
  </aside>

  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg"  style="box-shadow: 0px 0px 20px rgb(118 148 193)">
  <div class="container main-nav">
    <div class="main-nav-start">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Enter keywords ..." required>
      </div>
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      
       <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="./img/avatar/avatar-illustrated-04.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-04.png" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="##">
              <i data-feather="user" aria-hidden="true"></i>
              <span>Profile</span>
            </a></li>
          <li><a href="##">
              <i data-feather="settings" aria-hidden="true"></i>
              <span>Settings</span>
            </a></li>
          <li><a class="danger" href="../logout.php">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
      
    </div>
  </div>
</nav>
  
   