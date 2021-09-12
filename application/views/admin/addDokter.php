  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Form Data Dokter</h4>
              <p class="card-category">Masukan Seluruh Kriteria Dokter</p>
            </div>
            <div class="card-body">
              <form action="<?php echo site_url().'/admin/tambah_dokter'?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama Dokter</label>
                    <input type="text" name="nama" class="form-control">
                  </div>
                </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Spesialisasi</label>
                          <input type="text" name="spesialisasi" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Harga</label>
                          <input type="number" name="harga" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">

                        <label class="bmd-label-floating">Foto Dokter</label>
                        <input type="file" name="image" class="form-control">

                      </div>
                    </div>

<div class="row">
   <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" name="username" class="form-control">
                        </div>
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" name="password" class="form-control">
                        </div>
                      </div>
</div>

                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Deskripsi Dokter</label>
                          <div class="form-group">

                            <textarea class="form-control" name="deskripsi" rows="5"></textarea>
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