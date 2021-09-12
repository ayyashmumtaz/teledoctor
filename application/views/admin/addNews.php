  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">+ Tambah News & Tips</h4>
                 
                </div>
                <div class="card-body">
                  <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
                   <form action="<?php echo site_url().'/admin/addNewss'?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Judul Berita</label>
                          <input type="text" name="judul" class="form-control" required="">
                        </div>
                      </div>

                     

                     


                    
                    </div>

<br>

                    <div class="row">


                  
                      
                    
                     




                    </div>

 <div class="row">

  <div class="col-md-12">
                        <div class="form-group">
                          <label>Isi Berita</label>
                          <div class="form-group">
                            
                            <textarea class="form-control" name="news" rows="5" required=""></textarea>
                          </div>
                        </div>
                      </div>
                      <input type="hidden" name="status" value="1">
 </div>


      
                   
                     <label class="bmd-label-floating"> Dengan menambahkan anda berarti mematuhi seluruh syarat dan ketentuan yang berlaku.</label>
                    <button type="submit" class="btn btn-primary pull-right">Tambah News</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>