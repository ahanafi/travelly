<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: url('<?= assets("images/bg-login.jpeg") ?>') !important;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Data Profile
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
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-md-12">
                        <form action="<?= adminRoute('profile/update/'.$profile->id) ?>" method="post" class="form-group">
                           <div class="row">
                              <label for="profile" class="col-md-1 col-md-offset-1">Profile</label>
                              <div class="col-md-8">
                                 <input type="text" class="form-control" name="profile" autocomplete="off" required value="<?= $profile->profile; ?>">
                                 <?= form_error('profile') ?>
                              </div>
                           </div>
                           <br>

                           <div class="row">
                              <label for="konten" class="col-md-1 col-md-offset-1">Konten</label>
                              <div class="col-md-8">
                                 <textarea name="konten" id="" cols="30" rows="10" class="form-control textarea"><?= $profile->konten; ?></textarea>
                                 <?= form_error('konten') ?>
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
