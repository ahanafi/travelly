<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: url('<?= assets("images/bg-login.jpeg") ?>') !important;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Profile
      </h1>
      <?php echo $this->main_lib->showBreadCrumb(); ?>
   </section>

   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-md-12">
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Data Profile</h3>
                  <?php if ($profile->profile): ?>
                     <a href="<?= adminRoute('profile/edit/'.$profile->id) ?>" class="btn btn-default" data-toggle="tooltip" title="Edit Data">
                        <i class="fa fa-pencil"></i>
                        <span>&nbsp;Edit Data</span>
                     </a>
                  <?php else: ?>
                     <a href="<?= base_url('dashboard/profile/create') ?>" class="btn btn-primary" data-toggle="tooltip" title="Tambah Data">
                        <i class="fa fa-plus"></i>
                        <span>&nbsp;Tambah Data</span>
                     </a>
                  <?php endif ?>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-md-12">
                        <table class="table table-bordered table-responsive">
                           <tbody>
                              <tr>
                                 <td>Profile</td>
                                 <td>:</td>
                                 <td><?= ($profile->profile) ? $profile->profile : ""; ?></td>
                              </tr>
                              <tr>
                                 <td>Konten</td>
                                 <td>:</td>
                                 <td><?= ($profile->konten) ? $profile->konten : ""; ?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <!-- /.col -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- ./box-body -->
            </div>
            <!-- /.box -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- PRODUCT LIST -->
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>