<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         404 Not Found
      </h1>
      <?= $this->main_lib->showBreadCrumb(); ?>
   </section>

   <!-- Main content -->
   <section class="content">
      <div class="error-page">
         <h2 class="headline text-yellow"> 404</h2>

         <div class="error-content">
            <h3><i class="fa fa-warning text-yellow"></i> Halaman tidak dapat ditemukan!.</h3>

            <p>
               Kami tidak dapat menemukan halaman yang Anda cari.
               Atau, Anda dapat <a href="<?= adminRoute('/') ?>">kembali ke dashboard</a>.
            </p>

         </div>
         <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
   </section>
   <!-- /.content -->
</div>