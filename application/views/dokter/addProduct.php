  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Form Data Produk</h4>
                  <p class="card-category">Masukan Seluruh Kriteria Produk</p>
                </div>
                <div class="card-body">
                   <form action="<?php echo site_url().'/admin/addProduct'?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Produk</label>
                          <input type="text" name="name" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Stok</label>
                          <input type="text" name="stock" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Harga</label>
                         <input type="number" name="price" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        
                          <label class="bmd-label-floating">Foto Produk</label>
                         <input type="file" name="image" class="form-control">
                      
                    </div>
                  </div>

                  
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Deskripsi Produk</label>
                          <div class="form-group">
                           
                            <textarea class="form-control" name="informasi" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                     <label class="bmd-label-floating"> Dengan menambahkan Produk anda berarti mematuhi seluruh syarat dan ketentuan yang berlaku.</label>
                    <button type="submit" class="btn btn-primary pull-right">Tambah Produk</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>