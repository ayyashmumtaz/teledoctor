    <div class="page-content-wrapper">
      <br>
        <table border="0">
<tr>
<td><img style="padding: 0px 5px 0px 5px;" src="<?= base_url('img/wellness/Anak.png');?>" alt=""></td>
<td><img style="padding: 0px 5px 0px 5px;" src="<?= base_url('img/wellness/Kandungan.png');?>" alt=""></td>
<td><img style="padding: 0px 5px 0px 5px;" src="<?= base_url('img/wellness/Jantung.png');?>" alt=""></td>
<td><img style="padding: 0px 5px 0px 5px;" src="<?= base_url('img/Wellness/Gigi.png');?>" alt=""></td>
<td><img style="padding: 0px 5px 0px 5px;" src="<?= base_url('img/Wellness/Lainnya.png');?>" alt=""></td>
</tr>
</table>
      <!-- Catagory Single Image-->
      <!--div class="catagory-single-img"><img class="w-100" src="<?= base_url('img/bg-img/bg-belanja.png'); ?>" alt=""></div>
      <!-- Top Products-->
 
      <div class="top-products-area mt-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">List Dokter</h6>
          </div>
          <div class="row">
            <!-- Single Top Product Card-->
            <?php foreach($dokter as $product) : ?>
            <div class="col-6 col-sm-4">
              <div class="card top-product-card mb-3">
                <div class="card-body"><a class="wishlist-btn" href="#"></a><a class="product-thumbnail d-block" href="<?php echo site_url('reservasi/detail/'.$product->id) ?>"><?= img([
                  'class' => 'mb-2',
        'src'   => 'img/dokter/' . $product->image,

        
        ])?></a><a class="product-title d-block" href="<?php echo site_url('reservasi/detail/'.$product->id) ?>"><?=$product->nama?></a>
        <div class="progress-title"><small><?=$product->spesialisasi?></small></a></div>
                  <p class="sale-price">Rp. 
              
              <?php $angka = "$product->harga";
 
echo number_format($angka);?></p>
                  
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
          <?php endforeach; ?>
          </div>
       
