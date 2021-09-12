  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">+ Tambah Program</h4>
                  <p class="card-category">Masukan Seluruh Kriteria Program</p>
                </div>
                <div class="card-body">
                  <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
                   <form action="<?php echo site_url().'/galangdana/addProg'?>" method="post" enctype="multipart/form-data">
                    <div class="row">
  <input type="hidden" name="id_vendor" value="<?= $this->session->userdata("nama"); ?>">
                    <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Program</label>
                          <input type="text" name="name" class="form-control" required="">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Lokasi</label>
                          <input type="text" name="lokasi" class="form-control" required="">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Penyelenggara</label>
                          <select class="form-control" required="" name="vendor">
                             <?php                                
        foreach ($dd_bidang as $row) {  
      echo "<option value='".$row->name."' selected>".$row->name."</option>";
      }
      echo"
    </select>"
    ?>
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
                         
                          <input type="number" name="target_donasi" class="form-control" required="">
                        </div>
                      </div>
                      
                      <div class="col-md-3">
                         <label class="bmd-label-floating">Waktu Selesai</label>
                        <div class="form-group">
                         
                          <input type="date" name="periode" class="form-control" required="">
                        </div>
                      </div>
                      <div class="col-md-3">
                         <label class="bmd-label-floating">Jenis Usaha</label>
                        <div class="form-group">
                         
                          <select name="jenis_usaha" class="form-control" required="">
                            <option>-- SILAHKAN PILIH --</option>
                            <option value="Pertanian">Pertanian</option>
                            <option value="Peternakan">Peternakan</option>
                            <option value="Perikanan">Perikanan</option>
                            <option value="Perdagangan">Perdagangan</option>
                          </select>
                        </div>

                      </div>
                      <div class="col-md-3">
                        
                          <label class="bmd-label-floating">Thumbnail Program</label>
                          <input type="file" name="image" required="">
                        
                      </div>





                    </div>

 <div class="row">

  <div class="col-md-12">
                        <div class="form-group">
                          <label>Deskripsi Program</label>
                          <div class="form-group">
                            
                            <textarea class="form-control" name="informasi" rows="5" required=""></textarea>
                          </div>
                        </div>
                      </div>
                      <input type="hidden" name="status" value="0">
                      <input type="hidden" name="tipe" value="2">
 </div>


      
                   
                     <label class="bmd-label-floating"> Dengan menambahkan program anda berarti mematuhi seluruh syarat dan ketentuan yang berlaku.</label>
                    <button type="submit" class="btn btn-primary pull-right">Tambah Program</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>