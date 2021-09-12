  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambah Foto KTP</h4>
                  <p class="card-category">Pastikan foto dengan jelas untuk memudahkan proses verifikasi</p>
                </div>
                <div class="card-body">
                  <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
                   <form action="<?= site_url('galangdana/tes');?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$vendor->id?>">
                    <div class="row">

   

           <div class="col-md-3">
                        
                          <label class="bmd-label-floating">Foto KTP</label>
                          <input type="file" name="fotoktp" required="">
                        
                      </div>
        
       </div>          
       <br>


      
                   
                     <label class="bmd-label-floating"> Dengan menambahkan dokumen ini anda berarti mematuhi seluruh syarat dan ketentuan yang berlaku.</label>
                    <button type="submit" class="btn btn-primary pull-right">Kirim</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>