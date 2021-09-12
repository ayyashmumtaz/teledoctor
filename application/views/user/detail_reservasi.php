
    <div class="page-content-wrapper">
      <!-- Product Slides-->
    <?= img(['class' => 'single-product-slide','src'    => 'img/dokter/' . $product->image,
                
          ])?>
      <div class="product-description pb-3">
        <!-- Product Title & Meta Data-->
        <div class="product-title-meta-data bg-white mb-3 py-3">
          <div class="container d-flex justify-content-between">
            <div class="p-title-price">
              <h6 class="mb-1"><?=$product->nama?></h6>
              <p class="sale-price mb-0">Rp. <?php $angka = "$product->harga";
 
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

        <div class="card user-data-card">
          <div class="card-body">
            <form action="<?php echo base_url('reservasi/addRes') ?>" method="POST">
              <div class="form-group">
                <div class="title mb-2"><span>Nama Pasien</span></div>
                  <input class="form-control" type="text" name="nama_pasien" value="<?= $this->session->userdata('nama');?>" required>
              </div>

              <div class="form-group">
                <div class="title mb-2"><span>Catatan</span></div>
                <input class="form-control" type="text" name="catatan" value="" placeholder="Catatan">
              </div>

              <div class="form-group">
                <div class="title mb-2"><span>Tanggal</span></div>
                <input class="form-control" type="date" name="tgl_reservasi" required>
                <input type="hidden" name="dokter" value="<?=$product->nama?>" required>
                <input type="hidden" name="dokter_username" value="<?=$product->username?>" required>
                <input type="hidden" name="harga" value="<?=$product->harga?>" required>
              </div>
              
              <div class="form-group">
                <div class="title"><span>Waktu</span></div>
                
                <div class="time_area" style="margin-top:20px;">
                <!-- btn  -->
                <div class="btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-outline-secondary" style="border-radius: 40px;margin-top:15px;">
                    <input type="radio" name="waktu_reservasi" autocomplete="off" value="08:00"> 08:00
                  </label>
                  <label class="btn btn-outline-secondary" style="border-radius: 40px;margin-top:15px;">
                    <input type="radio" name="waktu_reservasi" autocomplete="off" value="09:00"> 09:00
                  </label>
                  <label class="btn btn-outline-secondary" style="border-radius: 40px;margin-top:15px;">
                    <input type="radio" name="waktu_reservasi" autocomplete="off" value="10:00"> 10:00
                  </label>
                  <label class="btn btn-outline-secondary" style="border-radius: 40px;margin-top:15px;">
                    <input type="radio" name="waktu_reservasi" autocomplete="off" value="11:00"> 11:00
                  </label>
                  <label class="btn btn-outline-secondary" style="border-radius: 40px;margin-top:15px;">
                    <input type="radio" name="waktu_reservasi" autocomplete="off" value="14:00"> 14:00
                  </label>
                  <label class="btn btn-outline-secondary" style="border-radius: 40px;margin-top:15px;">
                    <input type="radio" name="waktu_reservasi" autocomplete="off" value="15:00"> 15:00
                  </label>
                  <label class="btn btn-outline-secondary" style="border-radius: 40px;margin-top:15px;">
                    <input type="radio" name="waktu_reservasi" autocomplete="off" value="16:00"> 16:00
                  </label>
                </div>  
                <!-- end btn -->
              <button class="btn btn-success w-100" style="margin-top:40px;" type="submit" >Buat Reservasi</button>
            </form>
          </div>
        </div>
        
        <!-- Add To Cart-->
        <!-- <div class="cart-form-wrapper bg-white mb-3 py-3">
          <div class="container">
            <form class="cart-form" action="#" method="post">
              
              <a class="btn btn-success add2cart-notify" href="<?php echo site_url('product/add/'.$product->id); ?>">Pesan Sekarang</a>
            </form>
          </div>
        </div> -->
        <!-- Product Specification-->
        <div class="p-specification bg-white mb-3 py-3">
          <div class="container">
            <h6>Deskripsi</h6>
            <p><?=$product->deskripsi?></p>
            
          </div>
        </div>
        <!-- Rating & Review Wrapper-->
        <div class="rating-and-review-wrapper bg-white py-3 mb-3">
          <div class="container">
            <h6>Ulasan</h6>
            <div class="rating-review-content">
              <ul>
                <li class="single-user-review d-flex">
                  <div class="user-thumbnail"><img src="<?= base_url('img/profile/default.png');?>" alt=""></div>
                  <div class="rating-comment">
                    <div>Abah Huda</div>
                    <p class="comment mb-0">Very good product. It's just amazing!</p>
                  </div>
                </li>
              
              </ul>
            </div>
          </div>
        </div>
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
   