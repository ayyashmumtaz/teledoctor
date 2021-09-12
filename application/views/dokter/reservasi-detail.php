ta
      <!-- End Navbar -->
      <div class="content">
         <?php if ($this->session->flashdata('success-login')): ?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Login Berhasil!',
      text: 'Selamat Datang di Teledoctor!',
      showConfirmButton: false,
      timer: 3000
    })
  </script>

<?php endif; ?>
        <div class="container-fluid">
          <div class="row">
          
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">perm_contact_calendar</i>
                  </div>
                  <p class="card-category">Detail Reservasi</p>
                  <h3 class="card-title"></h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3">
                      Nama Pasien 
                    </div>
                    <div class="col-md-9 text-left">
                      : <?= $data[0]->nama_pasien ?>
                    </div>
                    <div class="col-md-3">
                      Catatan
                    </div>
                    <div class="col-md-9 text-left">
                      : <?= $data[0]->catatan ? $data[0]->catatan : '-'  ?>
                    </div>
                    <div class="col-md-3" style="margin-top:20px;">
                      <strong>Waktu</strong>
                    </div>
                    <div class="col-md-9 text-left" style="margin-top:20px;">
                      : <strong>
                      <?php
                      if(isset($data[0]->tgl_reservasi)){
                        echo date_custom($data[0]->tgl_reservasi); 
                        $time = explode(':',$data[0]->waktu_reservasi); 
                        echo $time[0].':'.$time[1];
                      }else{
                        echo "-";
                      }
                       ?>
                      </strong>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <?php 
                    if(isset($data[0]->payment_status) ? $data[0]->payment_status : $data[0]->status  == 0){
                  ?>
                    <span class="badge badge-danger p-2" style="font-size:14px;"> Menunggu Pembayaran </span>
                  <?php
                    }else{
                      ?>
                    <span class="badge badge-success p-2" style="font-size:14px;"> Lunas </span>
                  <?php
                    }
                  ?>
                </div>
              </div>
            </div>

            <!-- note -->
            <?php 
                    if(isset($data[0]->payment_status) ? $data[0]->payment_status : $data[0]->status > 0){
            ?>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">perm_contact_calendar</i>
                  </div>
                  <p class="card-category">Catatan</p>
                  <h3 class="card-title"></h3>
                </div>
                <form action="<?=base_url('doctor/note_doctor'); ?>" method="post">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <input type="hidden" name="id_reservasi" value="<?= $data[0]->reservasi_id ?>">
                      <textarea name="note" class="form-control" id="" cols="30" rows="5" placeholder="Catatan"><?= $data[0]->note_doctor ?></textarea>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
                </form>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>