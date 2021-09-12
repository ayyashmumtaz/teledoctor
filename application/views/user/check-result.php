 <div class="page-content-wrapper">
      <div class="container">
        <!-- Notifications Area-->
        <div class="notification-area pt-3 pb-2">
          <h6 class="pl-1">Hasil Periksa</h6>
          <div class="list-group">

            <div class="single-order-status">
            <div class="d-flex align-items-center mb-2">
              <div class="order-icon"><i class="lni-flag"></i></div>
              <div class="order-status">Order <?= $data[0]->reservasi_id ?></div>
            </div>
            <div class="list-group">

              <?php if(isset($data[0]->user_doctor)) { 
                if(explode('-',$data[0]->id)[0] == 'rsv'){
                  $additional = 'Reservasi';
                }
                else{
                  $additional = 'Telp Dokter';
                }
                ?>

              <a class="list-group-item d-flex align-items-center" href="#"><img style="width: 100px; margin-right:20px;" src="<?= base_url('img/dokter/'.$data[0]->image);?>">

              <?php }else{  
                $additional = '';
                ?>
               
              <?php } ?>

              <div class="noti-info">
                <h6 class="mb-0"><?= isset($data[0]->dokter) ? $data[0]->dokter : $data[0]->name ?>                
                </h6>
                <i class="fa fa-phone pt-2" style="color:green"> </i> <?= isset($data[0]->tgl_reservasi) ? date_custom($data[0]->tgl_reservasi) : '-' ?> 
                <?php 
                  if(isset($data[0]->waktu_reseravsi)){
                    $time = explode(':',$data[0]->waktu_reservasi); 
                    echo $time[0].':'.$time[1]; 
                  }
                ?>
                <br>
                <h6 class="mb-0"></h6><span> 
                   <!-- $additional ?> -->
                </span>
              </div>
            </a>
          </div>

          
          <div class="list-group">
            <a class="list-group-item d-flex align-items-center" href="#">
            <div class="noti-info">
              <h6 class="mb-0"><strong> Catatan Saya </strong></h6>
              <br>
              <h6 class="mb-0"><?= $data[0]->catatan ? $data[0]->catatan : 'Tidak ada' ?></h6><span> 
                <!-- $additional ?> -->
              </span>
            </div>
            </a>
          </div> 
        <div>
        
        <div class="list-group">
            <a class="list-group-item d-flex align-items-center" href="#">
            <div class="noti-info">
              <h6 class="mb-0"><strong> Catatan Dokter </strong></h6>
              <br>
              <h6 class="mb-0"><?= $data[0]->note_doctor ? $data[0]->note_doctor : 'Tidak ada' ?></h6><span> 
                <!-- $additional ?> -->
              </span>
            </div>
            </a>
          </div> 
        <div>

      </div> 
  </div>






   