  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">+ Edit Program</h4>
                  <p class="card-category">Masukan Seluruh Kriteria Program</p>
                </div>
                <div class="card-body">
                  <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
                   <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $product->id?>"/>
                    <input type="hidden" name="id_vendor" value="<?php echo $product->id_vendor?>"/>
                    <div class="row">
  <input type="hidden" name="id_vendor" value="<?= $this->session->userdata("nama"); ?>">
                    <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Program</label>
                          <input type="text" name="name" class="form-control" value="<?php echo $product->name ?>" required="">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Lokasi</label>
                          <input type="text" name="lokasi" class="form-control" value="<?php echo $product->lokasi ?>" required="">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Vendor Penyelenggara</label>
                          <select class="form-control" required="" name="vendor">
           <option value="<?php echo $product->vendor ?>"><?php echo $product->vendor ?></option>
                          </select>
                        </div>
                       
                      </div>

                       <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tentukan Titik Lokasi</label>
                          <input type="button" name="geolok" class="form-control" required="">
                        </div>
                      </div>

                    
                    </div>

<br>

                    <div class="row">


                      <div class="col-md-3">
                         <label class="bmd-label-floating">Target Donasi</label>
                        <div class="form-group">
                         
                          <input type="number" name="target_donasi" class="form-control" value="<?php echo $product->target_donasi ?>" required="">
                        </div>
                      </div>
                      
                      <div class="col-md-3">
                         <label class="bmd-label-floating">Waktu Selesai</label>
                        <div class="form-group">
                         
                          <input type="date" name="periode" class="form-control" value="<?php echo $product->periode ?>" required="">
                        </div>
                      </div>
                      <div class="col-md-3">
                         <label class="bmd-label-floating">Jenis Usaha</label>
                        <div class="form-group">
                         
                          <select name="jenis_usaha" class="form-control" value="<?php echo $product->jenis_usaha ?>" required="">

                            <option value="<?php echo $product->jenis_usaha ?>" selected><?php echo $product->jenis_usaha ?></option>
                          </select>
                        </div>

                      </div>
                      <div class="col-md-3">
                        
                          <label class="bmd-label-floating">Thumbnail Program</label>
                            <input type="file" name="image" class="form-control-file" value="<?php echo $product->image ?>">
                       <input type="hidden" name="old_image" class="form-control-file" value="<?php echo $product->image ?>">
                        
                      </div>





                    </div>

 <div class="row">

  <div class="col-md-12">
                        <div class="form-group">
                          <label>Deskripsi Program</label>
                          <div class="form-group">
                            
                            <textarea class="form-control" name="informasi" rows="5" required=""><?php echo $product->informasi ?></textarea>
                          </div>
                        </div>
                      </div>
                      <input type="hidden" name="status" value="1">
 </div>


      
                   
                     <label class="bmd-label-floating"> Dengan menambahkan program anda berarti mematuhi seluruh syarat dan ketentuan yang berlaku.</label>
                    <button type="submit" class="btn btn-primary pull-right">Simpan Perubahan</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>