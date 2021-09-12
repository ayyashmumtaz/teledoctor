  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">+ Edit Data Dokter</h4>
                  <p class="card-category">Masukan Seluruh Kriteria Dokter</p>
                </div>
                <div class="card-body">
                   <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
                  
                   <form  method="post" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?php echo $dokter->id?>" />
                    <div class="row">
                    
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Dokter</label>
                          <input type="text" name="nama" class="form-control" value="<?php echo $dokter->nama ?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Bidang Spesialis</label>
                          <input type="text" name="spesialisasi" class="form-control" value="<?php echo $dokter->spesialisasi ?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Biaya Konsultasi</label>
                         <input type="number" name="harga" class="form-control" value="<?php echo $dokter->harga ?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        
                          <label class="bmd-label-floating">Foto Dokter</label>
                         <input type="file" name="image" class="form-control-file">
                       <input type="hidden" name="old_image" class="form-control-file" value="<?php echo $dokter->image ?>">
                    </div>
                  </div>

                  <div class="row">
   <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $dokter->username ?>">
                        </div>
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password Baru</label>
                          <input type="password" name="password" class="form-control">
                        </div>
                      </div>
</div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Deskripsi Dokter</label>
                          <div class="form-group">
                           
                            <textarea class="form-control" name="deskripsi" rows="5" ><?php echo $dokter->deskripsi ?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                     <label class="bmd-label-floating"> Dengan menambahkan Dokter anda berarti mematuhi seluruh syarat dan ketentuan yang berlaku.</label>
                    <button type="submit" class="btn btn-primary pull-right">edit Dokter</button>
                    <div class="clearfix"></div>
                  </form>
             
                </div>
              </div>
            </div>