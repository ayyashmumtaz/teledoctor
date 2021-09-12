 <div class="page-content-wrapper">
      <div class="container">
        <!-- Notifications Area-->
        <div class="notification-area pt-3 pb-2">
          <h6 class="pl-1">Donasi Saya</h6>
          <div class="list-group">

            <div class="single-order-status">
            <div class="d-flex align-items-center mb-2">
              <div class="order-icon"><i class="lni-dropbox"></i></div>
              <div class="order-status">Sudah Terkonfirmasi</div>
            </div>
             
           <div class="single-order-status">
            <div class="d-flex align-items-center mb-2">
              <div class="order-icon"><i class="lni-cross-circle"></i></div>
              <div class="order-status">Belum Dikonfirmasi</div>
            </div>

       <div class="list-group">

              <?php foreach($program as $program  ) : ?>

<a class="list-group-item d-flex align-items-center" href="<?= site_url('order/donasidetail/'. $program->id); ?>"><span class="noti-icon"><i class="lni-alarm"></i></span>
              <div class="noti-info">

                <h6 class="mb-0">Donatur : <?=$program->donatur?></h6><span>Rp. <?php $angka = "$program->donasi";
 
echo number_format($angka);?></span>
              </div></a>


             <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>