 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  
                  <h4 class="card-title ">List Dokter<a class="btn btn-default" href="<?= site_url('admin/form_tambah_dokter'); ?>" style="float: right;
    display: block;" >+ ADD</a>
                 

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID
                        </th>
                        <th>
                          Nama Dokter
                        </th>
                        <th>
                          Spesialisasi
                        </th>
                        <th>
                          Harga
                        </th>
                        <th>
                         Deskripsi
                        </th>
                         <th>
                         Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach($data->result() as $dokter) : ?>
                        <tr>
                          <td>
                           <?=$dokter->id?>
                          </td>
                          <td>
                            <?=$dokter->nama?>
                          </td>
                          <td>
                            <?=$dokter->spesialisasi?>
                          </td>
                          <td>
                            <?=$dokter->harga?>
                          </td>
                           <td>
                            <?=$dokter->deskripsi?>
                          </td>
                          <td>
                            <a href="<?php echo site_url('admin/edit_dokter/'.$dokter->id) ?>">Edit</a>
                            <a href="<?php echo site_url('admin/hapus_dokter/'.$dokter->id) ?>">Hapus</a>
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