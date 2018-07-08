<?php
$firstUri = $this->uri->segment(1);

$home = "";
$profile = "";
$product = "";
$visi_misi = "";

if (empty(trim($firstUri))) {
   $home = "active";
} else {
   if ($firstUri == "profile") {
      $profile = "active";
   } elseif ($firstUri == "product") {
      $product = "active";
   } elseif ($firstUri == "visi-misi") {
      $visi_misi = "active";
   }   
}

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Travelly | Travelling mudah, murah, berhadiah!</title>
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="stylesheet" href="<?= assets('bootstrap/css/bootstrap.min.css') ?>">
   <link rel="stylesheet" href="<?= assets('font-awesome/css/font-awesome.min.css') ?>">
   <link rel="stylesheet" href="<?= assets('css/front.css') ?>">
</head>
<body>
   <nav class="navbar navbar-default" id="top">
      <div class="container">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="<?= base_url('/'); ?>">
                  <img src="<?= assets('images/logo.png') ?>" alt="">
               </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                  <li class="<?= $home ?>"><a href="<?= base_url('/'); ?>"><i class="fa fa-home"></i> Home</a></li>
                  <li class="<?= $profile ?>"><a href="<?= base_url('profile'); ?>">Profil</a></li>
                  <li class="<?= $product ?>"><a href="<?= base_url('product') ?>">Daftar Produk</a></li>
                  <!-- <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span>Produk</span>
                        <span class="caret"></span>
                     </a>
                     <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                     </ul>
                  </li> -->
                  <li class="<?= $visi_misi ?>"><a href="<?= base_url('/visi-misi'); ?>">Visi &amp; Misi</a></li>
               </ul>
               <form action="<?= base_url('search') ?>" class="navbar-form navbar-right" method="GET">
                  <div class="input-group">
                     <input type="text" name="keyword" placeholder="Keyword" class="form-control">
                     <div class="input-group-btn">
                        <button type="submit" class="btn btn-success">
                           <i class="fa fa-search"></i>
                           <span>Cari</span>
                        </button>
                     </div>
                  </div>
               </form>
            </div><!--/.navbar-collapse -->
         </div>
      </div>
   </nav>

