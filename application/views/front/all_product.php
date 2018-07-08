<div class="container">
   <!-- Example row of columns -->
   <div class="row">
      <div class="col-md-12" id="products" style="text-align: center;margin-bottom: 20px;">
         <h2>DAFTAR PRODUK</h2>
         <hr>
      </div>

      <?php if (count($products) > 0): ?>
         <?php foreach ($products as $prod): ?>

            <div class="col-md-4">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <img src="<?= getUpload('images/'.$prod->gambar) ?>" alt="" class="img img-responsive">
                  </div>
                  <div class="panel-body">
                     <h3><?= $prod->produk; ?></h3>
                     <p>
                        <?= substr($prod->konten, 0,120)."..."; ?>
                     </p>
                     <p>
                        <a class="btn btn-default" href="<?= base_url('product/'.$prod->slug) ?>" role="button">READ MORE &raquo;</a>
                     </p>
                  </div>
               </div>
            </div>
            
         <?php endforeach ?>
      <?php else: ?>
         <div class="col-md-12" style="text-align: center;">
            <h3>Oops... Data produk tidak ditemukan dengan keyword <strong><i><?= $this->input->get('keyword'); ?></i></strong></h3>
         </div>
      <?php endif ?>

   </div>

   <hr>
</div>