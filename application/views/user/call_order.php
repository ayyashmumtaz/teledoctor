 <div class="page-content-wrapper">
      <div class="container">
        <!-- Notifications Area-->
        <div class="notification-area pt-3 pb-2">
          <h6 class="pl-1">List Telepon Doctor</h6>
          <div class="list-group">

            <div class="single-order-status">
            <div class="d-flex align-items-center mb-2">
              <div class="order-icon"><i class="lni-flag"></i></div>
              <div class="order-status">Telepon Selesai</div>
            </div>


                    <div class="list-group">



<?php   foreach($call_selesai as $produc  ) : ?>






    
  
<a class="list-group-item d-flex align-items-center" href="<?= site_url('call/callvideo/'.$produc->id_order.'/'.$produc->user); ?>"><span class="noti-icon"><i class="lni-video"></i></span>
              <div class="noti-info">
                <h6 class="mb-0"><?= $produc->name?></h6><span>

 </span>

              </div></a>


             <?php endforeach; ?>

          
          </div> 




             
           <div class="single-order-status">
            <div class="d-flex align-items-center mb-2">
              <div class="order-icon"><i class="lni-cross-circle"></i></div>
              <div class="order-status">Telepon Selanjutnya</div>
            </div>

       <div class="list-group">

             
<?php   foreach($call as $produc  ) : ?>






    
  
<a class="list-group-item d-flex align-items-center" href="<?= site_url('call/callvideo/'.$produc->id_order.'/'.$produc->user); ?>"><span class="noti-icon"><i class="lni-video"></i></span>
              <div class="noti-info">
                <h6 class="mb-0"><?= $produc->name?></h6><span>

 </span>

              </div></a>


             <?php endforeach; ?>

            
          </div>
        </div>
  <div class="flash-sale-wrapper pb-3">
    <div class="container">
      <div class="section-heading d-flex align-items-center justify-content-between">
        <h6 class="ml-1">Telepon Doctor Baru</h6><a class="btn btn-primary btn-sm" href="<?=site_url('dokter');?>">View All</a>
      </div>
      <!-- Flash Sale Slide-->
      <div class="flash-sale-slide owl-carousel">
        <!-- Single Flash Sale Card-->
        <?php foreach($dokterr as $dokter) : ?>
          <!-- Single Flash Sale Card-->
          <div class="card flash-sale-card">
            <div class="card-body"><a href="<?php echo site_url('dokter/detail/'.$dokter->id); ?>"><img style="height: 100px; width: auto;" src="<?= base_url('img/dokter/'.$dokter->image);?>" alt=""><span class="product-title"><?=$dokter->nama?> </span><span class="progress-title"><?=$dokter->spesialisasi?></span>
              <p class="sale-price">Rp. <?php $harga = "$dokter->harga";

              echo number_format($harga);?></p>
            </a></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>



</div>
</div>




      </div>
    </div>






   