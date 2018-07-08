<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: url('<?= assets("images/bg-login.jpeg") ?>') !important;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Data Users
      </h1>
      <?php echo $this->main_lib->showBreadCrumb(); ?>
   </section>

   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-md-12">
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Data Users</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-md-12">
                        <form action="<?= adminRoute('users/update/'.$users->id) ?>" method="post" class="form-group" enctype="multipart/form-data">

                           <div class="row">
                              <label for="nama_lengkap" class="col-md-1 col-md-offset-1">Nama Lengkap</label>
                              <div class="col-md-8">
                                 <input type="text" class="form-control" name="nama_lengkap" autocomplete="off" required value="<?= $users->nama_lengkap ?>">
                                 <?= form_error('nama_lengkap') ?>
                              </div>
                           </div>
                           <br>

                           <div class="row">
                              <label for="users" class="col-md-1 col-md-offset-1">Username</label>
                              <div class="col-md-8">
                                 <input type="text" class="form-control" name="username" autocomplete="off" required value="<?= $users->username ?>">
                                 <?= form_error('username') ?>
                              </div>
                           </div>
                           <br>

                           <div class="row">
                              <label for="email" class="col-md-1 col-md-offset-1">E-mail</label>
                              <div class="col-md-8">
                                 <input type="email" class="form-control" name="email" autocomplete="off" required value="<?= $users->email ?>">
                                 <?= form_error('email') ?>
                              </div>
                           </div>
                           <br>

                           <div class="row">
                              <label for="foto" class="col-md-1 col-md-offset-1">Foto</label>
                              <div class="col-md-8">
                                 <input type="file" class="form-control" name="foto">
                                 <?= form_error('foto') ?>
                              </div>
                           </div>
                           <br>

                           <div class="row">
                              <label for="" class="col-md-1 col-md-offset-1">&nbsp;</label>
                              <div class="col-md-8">
                                 <button class="btn btn-primary" type="submit" name="update">
                                    <i class="fa fa-floppy-o"></i>
                                    <span>Simpan</span>
                                 </button>
                              </div>
                           </div>
                        </form>
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
   </section>
   <!-- /.content -->
</div>
