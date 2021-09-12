    <div class="page-content-wrapper">
            <br>
        <table border="0">
<tr>
<td><img style="width: 500px; " src="<?= base_url('img/dokter/Anak.png');?>" alt=""></td>
<td><img style="width: 500px; " src="<?= base_url('img/dokter/Kandungan.png');?>" alt=""></td>
<td><img style="width: 500px; " src="<?= base_url('img/dokter/Jantung.png');?>" alt=""></td>
<td><img style="width: 500px; " src="<?= base_url('img/dokter/Gigi.png');?>" alt=""></td>
<td><img style="width: 500px; " src="<?= base_url('img/dokter/Lainnya.png');?>" alt=""></td>
</tr>
</table>
      <!-- Catagory Single Image-->
      <!--div class="catagory-single-img"><img class="w-100" src="<?= base_url('img/bg-img/bg-belanja.png'); ?>" alt=""></div>
      <!-- Top Products-->
      <br>
      <div class="top-products-area mt-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">List Dokter</h6>
          </div>
          <div class="row">
            <!-- Single Top Product Card-->
            <?php foreach($products as $product) : ?>
            <div class="col-6 col-sm-4">
              <div class="card top-product-card mb-3">
                <div class="card-body"><a class="wishlist-btn" href="#"></a><a class="product-thumbnail d-block" href="<?php echo site_url('product/detail_reservasi/'.$product->id) ?>"><?= img([
                  'class' => 'mb-2',
        'src'   => 'img/product/' . $product->image,

        
        ])?></a><a class="product-title d-block" href="<?php echo site_url('product/detail_reservasi/'.$product->id) ?>"><?=$product->name?></a>
        <div class="progress-title"><small><?=$product->stock?></small></a></div>
                  <p class="sale-price">Rp. 
              
              <?php $angka = "$product->price";
 
echo number_format($angka);?></p>
                  
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
          <?php endforeach; ?>
          </div>
       
