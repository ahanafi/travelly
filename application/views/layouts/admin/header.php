<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Travelly | Dashboard</title>
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="stylesheet" href="<?= assets('bootstrap/css/bootstrap.min.css') ?>">
   <link rel="stylesheet" href="<?= assets('font-awesome/css/font-awesome.min.css') ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <link rel="stylesheet" href="<?= assets('plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>">
   <link rel="stylesheet" href="<?= assets('css/AdminLTE.min.css') ?>">
   <link rel="stylesheet" href="<?= assets('css/skins/_all-skins.min.css') ?>">
   <link rel="stylesheet" href="<?= assets('css/styles.css') ?>">
   <link rel="stylesheet" href="<?= assets('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">
</head>
<body class="hold-transition skin-green sidebar-mini">
   <div class="wrapper">

      <header class="main-header">

         <!-- Logo -->
         <a href="<?= adminRoute('/'); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>T</b>LY</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Travel</b>LY Admin</span>
         </a>

         <!-- Header Navbar: style can be found in header.less -->
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
               <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
               <ul class="nav navbar-nav">
                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="user user-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php if (!file_exists("./upload/users/".$_SESSION['user']['foto']) || $_SESSION['user']['foto'] == ""): ?>
                           <img src="<?= assets('images/user.png') ?>" class="user-image" alt="User Image">
                        <?php else: ?>
                           <img src="<?= getUpload("users/".$_SESSION['user']['foto']) ?>" class="user-image" alt="User Image">
                        <?php endif ?>
                        <span class="hidden-xs"><?= $_SESSION['user']['nama_lengkap'] ?></span>
                     </a>
                  </li>
                  <li>
                     <a href="<?= base_url('/') ?>" target="_blank" class="bg-blue">
                        <i class="fa fa-send"></i>
                        <span>Open Sites</span>
                     </a>
                  </li>
                  <li>
                     <a
                        href="#"
                        onclick="askForLogout()"
                        data-toggle="tooltip"
                        title="Logout"
                        class="bg-red"
                     >
                        <i class="fa fa-power-off"></i>
                     </a>
                  </li>
               </ul>
            </div>
            <form id="logout" action="<?= adminRoute('logout') ?>" method="POST">
               <input type="hidden" name="logout" value="1">
            </form>

         </nav>
      </header>