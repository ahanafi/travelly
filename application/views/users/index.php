<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: url('<?= assets("images/bg-login.jpeg") ?>') !important;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Users
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
                  <a href="<?= base_url('dashboard/users/create') ?>" class="btn btn-primary">
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
                                 <th class="text-center">Foto</th>
                                 <th>Username</th>
                                 <th>E-mail</th>
                                 <th>Aksi</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php if (count($users) > 0): ?>
                                 <?php foreach ($users as $pro): ?>
                                    <tr>
                                       <td class="text-center"><?= $no++; ?></td>
                                       <td class="text-center">
                                          <?php if (!file_exists('./upload/users/'.$pro->foto) || empty(trim($pro->foto))): ?>
                                             <img src="<?= assets('images/not-available.jpg') ?>" alt="" style="width:120px;" class="img-circle">
                                          <?php else: ?>
                                             <img src="<?= base_url('/upload/users/'.$pro->foto) ?>" alt="" style="width:120px;" class="img-circle">
                                          <?php endif ?>
                                       </td>
                                       <td><?= $pro->username; ?></td>
                                       <td>
                                          <?= $pro->email; ?>
                                       </td>
                                       <td>
                                          <a href="<?= adminRoute('users/edit/'.$pro->id); ?>" class="btn btn-default" data-toggle="tooltip" title="Edit">
                                             <i class="fa fa-pencil"></i>
                                          </a>
                                          <a onclick="askFirst()" href="<?= adminRoute('users/delete/'.$pro->id); ?>" class="btn btn-default btn-del" data-toggle="tooltip" title="Hapus">
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