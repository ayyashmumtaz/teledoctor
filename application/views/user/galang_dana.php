  <div class="page-content-wrapper">
      <div class="top-products-area pt-3">

          <!-- User Meta Data-->
          <div class="card user-data-card">
            <div class="card-body">
                <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
              <h5>Form Pendaftaran</h5>
              <br>
              <form action="<?= site_url('beranda/tambah_aksi'); ?>" method="POST">

                <div class="form-group">
                  <div class="title mb-2"><span>Nama Lengkap</span></div>
                  <input class="form-control" type="text" name="name" required>
                </div>
                 <div class="form-group">
                  <div class="title mb-2"><span>Username</span></div>
                  <input class="form-control" name="username" type="text" id="username" autocomplete="off" required>
                    <span id='pesan_username'></span>
                </div>
                <div class="form-group">
                  <div class="title mb-2"><span>Email</span></div>
                  <input class="form-control" name="email" type="email" required>
                </div>
                <div class="form-group">
                  <div class="title mb-2"><span>Nomor Telepon</span></div>
                  <input class="form-control" name="no_telp" type="number" required>
                </div>
                <div class="form-group">
                  <div class="title mb-2"><span>Password</span></div>
                  <input class="form-control form-password" name="password" type="password" required>
                </div>
                <div class="form-group">
                  <div class="title mb-2"><span>Ulangi Password</span></div>
                  <input class="form-control form-password" type="password"  required>
                </div>
                  <input type="checkbox" class="form-checkbox"> Lihat Password
                  &nbsp



             <br>
                <button class="btn btn-success w-100" type="submit">Kirim</button>
              </form>
            </div>
          </div>
        </div>
<script type="text/javascript">
  $(document).ready(function(){   
    $('.form-checkbox').click(function(){
      if($(this).is(':checked')){
        $('.form-password').attr('type','text');
      }else{
        $('.form-password').attr('type','password');
      }
    });
  });
</script>