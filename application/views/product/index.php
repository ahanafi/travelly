<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: url('<?= assets("images/bg-login.jpeg") ?>') !important;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Produk
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
                  <a href="<?= adminRoute('product/create') ?>" class="btn btn-primary">
                     <i class="fa fa-plus"></i>
                     <span>&nbsp;Tambah Data</span>
                  </a>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-md-12">
                        <table class="table table-bordered table-responsive">
                           <thead>
                              <tr>
                                 <th class="text-center">No.</th>
                                 <th>Gambar</th>
                                 <th>Produk</th>
                                 <th>Konten</th>
                                 <th>Harga</th>
                                 <th>Aksi</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php if (count($product) > 0): ?>
                                 <?php foreach ($product as $pro): ?>
                                    <tr>
                                       <td class="text-center"><?= $no++; ?></td>
                                       <td class="text-center">
                                          <?php if (!file_exists('./upload/images/'.$pro->gambar)  || empty(trim($pro->gambar))): ?>
                                             <img src="<?= assets('images/not-available.jpg') ?>" alt="" style="width:120px;">
                                          <?php else: ?>
                                             <img src="<?= base_url('/upload/images/'.$pro->gambar) ?>" alt="" style="width:120px;">
                                          <?php endif ?>
                                       </td>
                                       <td><?= $pro->produk; ?></td>
                                       <td><?= substr($pro->konten, 0,240).".."; ?></td>
                                       <td><?= $pro->harga; ?></td>
                                       <td>
                                          <a href="<?= adminRoute('product/edit/'.$pro->id); ?>" class="btn btn-default" data-toggle="tooltip" title="Edit">
                                             <i class="fa fa-pencil"></i>
                                          </a>
                                          <a onclick="askFirst()" href="<?= adminRoute('product/delete/'.$pro->id); ?>" class="btn btn-default btn-del" data-toggle="tooltip" title="Hapus">
                                             <i class="fa fa-trash"></i>
                                          </a>
                                       </td>
                                    </tr>
                                 <?php endforeach ?>
                              <?php endif ?>
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