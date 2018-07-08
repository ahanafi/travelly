<div class="jumbotron jumbo-master" style="background: url('<?= assets('images/beach.jpg') ?>');">
   <div class="container">
      <div class="container">
         <h1>Hello, Travellers!</h1>
         <p>You can start travelling at here!</p>
         <p><a rel="m_PageScroll2id" class="btn btn-default btn-landing   btn-lg" href="#products" role="button">Lihat Produk &raquo;</a></p>
      </div>
   </div>
</div>

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
      <?php endif ?>

   </div>

   <hr>
</div>