  <div class="content">
    <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">Reservasi
        <a class="btn btn-default" href="<?= site_url('admin/form_tambah_dokter'); ?>" style="float: right;display: block;" >+ ADD</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                ID
              </th>
              <th>
                Nama Pasien
              </th>
              <th>
                Tanggal Pemesanan
              </th>
              <th>
                Status Pembayaran
              </th>
              <th>
                Aksi
              </th>
            </thead>
            <tbody>
              <?php foreach($data as $dokter) : ?>
              <tr>
                          <td>
                           <?=$dokter->id?>
                          </td>
                          <td>
                            <?=$dokter->nama_pasien?>
                          </td>
                          <td>
                            <?=$dokter->tgl_reservasi?>
                          </td>
                          <td class="text-center">
                            <?php 
                              if($dokter->payment_status == 0){
                                echo "Menunggu Pembayaran";
                              }elseif($dokter->payment_status == 1){
                                echo "<i class='fa fa-check text-success'> </i>";
                              } 
                            ?>                          
                          </td>
                          <td>
                          <a class="btn btn-success" href="<?php echo site_url('doctor/reservasidetail/'.$dokter->id) ?>">Detail</a>
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach; ?>
                    </table>
          <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
  </div>
  </div>
  
      </div>
    </div>
  </div>


                  