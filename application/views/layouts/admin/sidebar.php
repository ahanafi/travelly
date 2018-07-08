<?php
$secondUri = $this->uri->segment(2);
$thirdUri  = $this->uri->segment(3);
$fourthUri = $this->uri->segment(4);

$dashboard = "";
$profile   = "";
$visi_misi = "";
$product   = "";
   $all_product = "";
   $new_product = "";
$users    = "";

if (empty(trim($secondUri)) || $secondUri == "") {
   $dashboard = "active";
} else {
   if ($secondUri == "profile") {
      $profile = "active";
   } elseif ($secondUri == "visi-misi") {
      $visi_misi = "active";
   } elseif ($secondUri == "product") {
      $product = "active";
      if ($thirdUri == "create") {
         $new_product = "active";
      } else {
         $all_product = "active";
      }
   } elseif ($secondUri == "users") {
      $users = "active";
   }
}

?>

<aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
         <div class="pull-left image">
            <?php if (!file_exists("./upload/users/".$_SESSION['user']['foto']) || $_SESSION['user']['foto'] == ""): ?>
               <img src="<?= assets('images/user.png') ?>" class="img-circle" alt="User Image" style="width: 160px;">
            <?php else: ?>
               <img src="<?= getUpload("users/".$_SESSION['user']['foto']) ?>" class="img-circle" alt="User Image" style="width: 160px;">
            <?php endif ?>
         </div>
         <div class="pull-left info">
            <p><?= $_SESSION['user']['nama_lengkap'] ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
         </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
         <li class="header">MENU NAVIGATION</li>
         <li class="<?= $dashboard ?> treeview">
            <a href="<?= adminRoute('') ?>">
               <i class="fa fa-home"></i>
               <span>Dashboard</span>
            </a>
         </li>
         <li class="<?= $profile; ?> treeview">
            <a href="<?= base_url('dashboard/profile'); ?>">
               <i class="fa fa-user"></i>
               <span>Profile</span>
            </a>
         </li>
         <li class="<?= $visi_misi; ?> treeview">
            <a href="<?= adminRoute('visi-misi'); ?>">
               <i class="fa fa-th"></i>
               <span>Visi & Misi</span>
            </a>
         </li>
         <li class="<?= $product; ?> treeview">
            <a href="#">
            <i class="fa fa-cubes"></i>
               <span>Product</span>
               <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
               </span>
            </a>
            <ul class="treeview-menu">
               <li class="<?= $all_product; ?>"><a href="<?= adminRoute('product') ?>"><i class="fa fa-list"></i> All Products</a></li>
               <li class="<?= $new_product; ?>"><a href="<?= adminRoute('product/create') ?>"><i class="fa fa-plus"></i> Add New Product</a></li>
            </ul>
         </li>
         <li class="<?= $users; ?> treeview">
            <a href="<?= adminRoute('users') ?>">
               <i class="fa fa-users"></i>
               <span>Users</span>
            </a>
         </li>
      </ul>
   </section>
   <!-- /.sidebar -->
</aside>