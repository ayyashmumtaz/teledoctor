<div class="page-content-wrapper">
      <!-- Top Products-->
         <div class="catagory-single-img"><img class="w-100" src="<?= base_url('img/bg-img/bg-donasi.png'); ?>" alt=""></div>
      <div class="top-products-area pt-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">Program Donasi</h6>
            <!-- Layout Options-->
           
          </div>
          <div class="row">
            <!-- Single Weekly Product Card-->
                <?php foreach($program as $i) : ?>
            <div class="col-12">
              <div class="card weekly-product-card mb-3">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><a class="delete-btn" href="<?php echo site_url('donasi/detail/'.$i->id) ?>"><a class="product-thumbnail d-block" href="<?php echo site_url('donasi/detail/'.$i->id) ?>"> <?= img([
                  
        'src'   => 'img/program/' . $i->image,
        
        ])?></a></div>
                  <div class="product-description"><a class="product-title d-block" href="<?php echo site_url('donasi/detail/'.$i->id) ?>"><?=$i->name?></a>
                    <p class="sale-price">Rp. <?php $angka = "$i->donasikumpul";
 
echo number_format($angka);?></p>
                    <div class="product-rating"></div><a class="btn btn-success" href="<?php echo site_url('donasi/detail/'.$i->id) ?>"><i class="mr-1 lni-heart"></i>Donasi</a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
            <!-- Select All Products-->
           
        </div>
      </div>
    </div>