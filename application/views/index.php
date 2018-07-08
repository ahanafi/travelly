<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: url('<?= assets("images/bg-login.jpeg") ?>') !important;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Dashboard
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Dashboard</li>
      </ol>
   </section>

   <!-- Main content -->
   <section class="content">
      <!-- Info boxes -->
      <div class="row">
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
               <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

               <div class="info-box-content">
                  <span class="info-box-text">Total Users</span>
                  <span class="info-box-number"><?= $users; ?></span>
               </div>
               <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
               <span class="info-box-icon bg-green"><i class="fa fa-cubes"></i></span>

               <div class="info-box-content">
                  <span class="info-box-text">Products</span>
                  <span class="info-box-number"><?= $product; ?></span>
               </div>
               <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         </div>
         <!-- /.col -->

         <!-- fix for small devices only -->
         <div class="clearfix visible-sm-block"></div>

         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
               <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>

               <div class="info-box-content">
                  <span class="info-box-text">Profile</span>
                  <span class="info-box-number"><?= $profile; ?></span>
               </div>
               <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
               <span class="info-box-icon bg-yellow"><i class="fa fa-th"></i></span>

               <div class="info-box-content">
                  <span class="info-box-text">Visi &amp; Misi</span>
                  <span class="info-box-number"><?= $visi_misi; ?></span>
               </div>
               <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
         <div class="col-md-8">
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Dashboard</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body" style="min-height: 300px;">
                  <h2>Hallo <?= $_SESSION['user']['nama_lengkap'] ?>!</h2>
                  <p>
                     Bagaimana kabar hari ini ?
                  </p>

               </div>
               <!-- ./box-body -->
            </div>
            <!-- /.box -->
         </div>
         <!-- /.col -->

         <div class="col-md-4">
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
         </div>
      </div>
      <!-- /.row -->

      <!-- PRODUCT LIST -->
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>