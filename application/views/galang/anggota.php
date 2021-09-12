   <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Anggota Saya<a class="btn btn-default" href="<?= site_url('galangdana/addAnggota'); ?>" style="float: right;
    display: block;" >+ TAMBAH</a></h4>
                 

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID Anggota
                        </th>
                        <th>
                          Nama Lengkap
                        </th>
                        <th>
                          Tanggal Lahir
                        </th>
                        <th>
                          Pekerjaan
                        </th>
                        <th>
                         Foto Diri
                        </th>
                        <th>Tindakan</th>
                       
                      </thead>
                      <tbody>
                        <?php foreach($anggota as $program) : ?>
                        <tr>
                          <td>
                           <?=$program->id?>
                          </td>
                          <td>
                            <?=$program->nama?>
                          </td>
                          <td>
                            <?=$program->tgl_lahir?>
                          </td>
                          <td>
                            
                          </td>
                           <td>
                            <img src="<?=base_url('img/galang/diri/').$program->fotodiri;?>" height="100">
                          </td>
                     
                       
                          <td>
                            <a href="<?php echo site_url('galangdana/detailAnggota/'.$program->id) ?>">Detail</a>
                         
                            <a href="<?php echo site_url('galangdana/deleteAnggota/'.$program->id) ?>">Hapus</a>
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach; ?>
                    </table>

                  </div>
                </div>
              </div>
            </div>

<div class="col-md-4">
  <?php foreach($profil as $program) : ?>
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="">
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Ketua Penggalang Dana</h6>
                  <h4 class="card-title"><?=$program->name?></h4><br>
                  <p class="card-description">
                   E - Mail      : <?=$program->email?> <br>
                   Nomor Telepon : <?=$program->no_telp?> <br>
                   Status :  <?php 
                switch ($program->status) {
                  case 0:
                        echo '<button class="btn btn-sm btn-warning" disabled="">Lengkapi Dokumen Segera</button>';
                      break;
                  
                  case 1:
                        echo '<button class="btn btn-sm btn-success" disabled="">Aktif</button>';
                      break;

                  case 2:
                    echo '<button class="btn btn-sm btn-danger" disabled="">Non-Aktif</button>';
                    break;

                }
             ?>
                  </p> 
                  <a href="javascript:;" class="btn btn-primary btn-round">Edit Profil</a>
                </div>
              </div>
            </div>
 <?php endforeach; ?>
            
          </div>
        </div>
      </div>

