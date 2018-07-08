<div class="jumbotron" style="background: url('<?= getUpload('images/'.$product->gambar) ?>');">
   <div class="container">
      <div class="container">
         <h2 class="title">
            <?= strtoupper($product->produk); ?>
         </h2>
      </div>
   </div>
</div>

<div class="container">
   <!-- Example row of columns -->
   <div class="row">
      <div class="col-md-12">
         <h2><?= strtoupper($product->produk); ?></h2>
         <hr>
         <p>
            <?= $product->konten; ?>
         </p>
      </div>
   </div>

   <hr>
</div>