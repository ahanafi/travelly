<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: url('<?= assets("images/bg-login.jpeg") ?>') !important;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Visi Misi
      </h1>
      <?php echo $this->main_lib->showBreadCrumb(); ?>
   </section>

   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-md-12">
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Data Visi Misi</h3>
                  <?php if ($visi_misi->visi): ?>
                     <a href="<?= adminRoute('visi-misi/edit/'.$visi_misi->id) ?>" class="btn btn-default" data-toggle="tooltip" title="Edit Data">
                        <i class="fa fa-pencil"></i>
                        <span>&nbsp;Edit Data</span>
                     </a>
                  <?php else: ?>
                     <a href="<?= adminRoute('visi-misi/create') ?>" class="btn btn-primary" data-toggle="tooltip" title="Tambah Data">
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
                                 <td>Visi</td>
                                 <td>:</td>
                                 <td><?= ($visi_misi->visi) ? $visi_misi->visi : ""; ?></td>
                              </tr>
                              <tr>
                                 <td>Misi</td>
                                 <td>:</td>
                                 <td><?= ($visi_misi->misi) ? $visi_misi->misi : ""; ?></td>
                              </tr>
                              <tr>
                                 <td>Konten</td>
                                 <td>:</td>
                                 <td><?= ($visi_misi->konten) ? $visi_misi->konten : ""; ?></td>
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