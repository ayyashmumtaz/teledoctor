     
      <!-- End Navbar -->
      <div class="content">
         <?php 
                switch ($program) {
                  case 1:
                        echo '<a class="nav-link btn btn-danger" href="<?= site_url(); ?>/galangdana/formdokumen"><center>
             <p style="color: white">Segera lengkapi<br>
                dokumen anda 
                <br>supaya bisa menambahkan<br> campaign galang dana!</p>
              </center></a>';
                      break;
                  
                  case 2:
                        echo '<a class="nav-link btn btn-success">Status : Teraktivasi</a>';
                      break;

                }
             ?>
              <center>
        <div class="container-fluid">
     
          <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">attach_money</i>
                  </div>
                  <p class="card-category">Donasi Semua Terkumpul</p>
                  <h3 class="card-title">Rp. <?php $angka = "0";
 
echo number_format($angka);?>
                    
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                 <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Jumlah Campaign</p>
                  <h3 class="card-title"><?= $totalProgram?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Jumlah Donatur</p>
                  <h3 class="card-title"><?= $totalDonatur?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>

                          <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">block</i>
                    </div>
                    <p class="card-category">Jumlah Program Ditolak</p>
                    <h3 class="card-title"><?= $totalDonatur?></h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">update</i> Just Updated
                    </div>
                  </div>
                </div>
              </div>
          
            
            </div>

          </div>
        
          
      </div>
           