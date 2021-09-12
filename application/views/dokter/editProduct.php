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

                    <input type="hidden" name="id" value="<?php echo $product->id?>" />
                    <div class="row">
                    
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Dokter</label>
                          <input type="text" name="name" class="form-control" value="<?php echo $product->name ?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Bidang Spesialis</label>
                          <input type="number" name="stock" class="form-control" value="<?php echo $product->stock ?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Biaya Konsultasi</label>
                         <input type="number" name="price" class="form-control" value="<?php echo $product->price ?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        
                          <label class="bmd-label-floating">Foto Dokter</label>
                         <input type="file" name="image" class="form-control-file">
                       <input type="hidden" name="old_image" class="form-control-file" value="<?php echo $product->image ?>">
                    </div>
                  </div>

                  
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Deskripsi Dokter</label>
                          <div class="form-group">
                           
                            <textarea class="form-control" name="informasi" rows="5" ><?php echo $product->informasi ?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                     <label class="bmd-label-floating"> Dengan menambahkan Dokter anda berarti mematuhi seluruh syarat dan ketentuan yang berlaku.</label>
                    <button type="submit" class="btn btn-primary pull-right">Tambah Dokter</button>
                    <div class="clearfix"></div>
                  </form>
             
                </div>
              </div>
            </div>