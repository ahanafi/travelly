<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: url('<?= assets("images/bg-login.jpeg") ?>') !important;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Tambah Data Produk
      </h1>
      <?php echo $this->main_lib->showBreadCrumb(); ?>
   </section>

   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-md-12">
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Data Produk</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-md-12">
                        <form action="<?= adminRoute('product/create') ?>" method="post" class="form-group" enctype="multipart/form-data">
                           <div class="row">
                              <label for="product" class="col-md-1 col-md-offset-1">Produk</label>
                              <div class="col-md-8">
                                 <input type="text" class="form-control" name="product" autocomplete="off" required value="<?= set_value('product') ?>">
                                 <?= form_error('product') ?>
                              </div>
                           </div>
                           <br>

                           <div class="row">
                              <label for="konten" class="col-md-1 col-md-offset-1">Konten</label>
                              <div class="col-md-8">
                                 <textarea name="konten" id="" cols="30" rows="10" class="form-control textarea"><?= set_value('konten') ?></textarea>
                                 <?= form_error('konten') ?>
                              </div>
                           </div>
                           <br>

                           <div class="row">
                              <label for="harga" class="col-md-1 col-md-offset-1">Harga</label>
                              <div class="col-md-8">
                                 <input type="number" class="form-control" name="harga" autocomplete="off" required value="<?= set_value('harga') ?>">
                                 <?= form_error('harga') ?>
                              </div>
                           </div>
                           <br>

                           <div class="row">
                              <label for="gambar" class="col-md-1 col-md-offset-1">Produk</label>
                              <div class="col-md-8">
                                 <input type="file" class="form-control" name="gambar" required>
                                 <?= form_error('gambar') ?>
                              </div>
                           </div>
                           <br>

                           <div class="row">
                              <label for="" class="col-md-1 col-md-offset-1">&nbsp;</label>
                              <div class="col-md-8">
                                 <button class="btn btn-primary" type="submit" name="create">
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
