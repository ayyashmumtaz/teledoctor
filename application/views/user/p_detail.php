
    <div class="page-content-wrapper">
      <!-- Product Slides-->
    <?= img(['class' => 'single-product-slide','src'		=> 'img/product/' . $product->image,
								
					])?>
      <div class="product-description pb-3">
        <!-- Product Title & Meta Data-->
        <div class="product-title-meta-data bg-white mb-3 py-3">
          <div class="container d-flex justify-content-between">
            <div class="p-title-price">
              <h6 class="mb-1"><?=$product->name?></h6>
              <p class="sale-price mb-0">Rp. <?php $angka = "$product->price";
 
echo number_format($angka);?></p>
            </div>
            <div class="p-wishlist-share"><a href="wishlist-grid.html"><i class="lni-heart-filled"></i></a><a href="#"><i class="lni-share"></i></a></div>
          </div>
          <!-- Ratings-->
          <br>
          <div class="product-ratings">
            <div class="container d-flex align-items-center justify-content-between">
              Rating :<div class="ratings"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
             
            </div>
          </div>
        </div>
        <!-- Selection Panel-->
        
        <!-- Add To Cart-->
        <div class="cart-form-wrapper bg-white mb-3 py-3">
          <div class="container">
            <form class="cart-form" action="#" method="post">
              <a class="btn btn-success add2cart-notify" href="<?php echo site_url('product/add/'.$product->id); ?>">Pesan Sekarang</a>
            </form>
          </div>
        </div>
        <!-- Product Specification-->
        <div class="p-specification bg-white mb-3 py-3">
          <div class="container">
            <h6>Deskripsi</h6>
            <p><?=$product->informasi?></p>
            
          </div>
        </div>
        <!-- Rating & Review Wrapper-->

        <!-- Ratings Submit Form-->
        <div class="ratings-submit-form bg-white py-3">
          <div class="container">
            <h6>Masukan Ulasan</h6>
            <form action="<?= site_url('product/rating'); ?>*" method="POST">
              
              <div class="form-group">
                <textarea class="form-control" id="comments" name="comment" cols="30" rows="10" data-max-length="200"></textarea>
              </div>
              <button class="btn btn-sm btn-primary" type="submit">Simpan Ulasan</button>
            </form>
          </div>
        </div>
      </div>
   