<div class="login-wrapper d-flex align-items-center justify-content-center text-center">
      <!-- Background Shape-->
      <div class="background-shape"></div>
      <div class="container">
        
        <img style="max-width:50%; margin-top:50px;" src="<?= base_url('img/core-img/cexup_logo.png');?>" alt="">
        <!-- Register Form-->

<script>
    
</script>
        <div class="register-form mt-5 px-4">
          <form action="<?= site_url('register/tambah');?>" class="form-user" method="post">
              <div class="form-group text-left mb-4"><span>Nama Depan</span>
              <label for="username"><i class="lni-user"></i></label>
              <input class="form-control" type="text" name="nama" id="form" placeholder="Masukan Nama Depan..." required="">
            </div>
            <div class="form-group text-left mb-4"><span>Username</span>
              <label for="username"><i class="lni-user"></i></label>
              <input class="form-control" type="text" name="username" placeholder="Masukan Username...." required="">
            </div>
            <div class="form-group text-left mb-4"><span>Email</span>
              <label for="email"><i class="lni-envelope"></i></label>
              <input class="form-control" type="email" name="email" placeholder="user@contoh.com" required="">
            </div>
            <div class="form-group text-left mb-4"><span>Password</span>
              <label for="password"><i class="lni-lock"></i></label>
              <input class="input-psswd form-control form-password" name="password" id="registerPassword" type="password" placeholder="***********" required="">
            </div>
            <div class="form-group text-left mb-4"><span>Ulangi Password</span>
              <label for="password"><i class="lni-lock"></i></label>
              <input class="input-psswd form-control form-password"  type="password" placeholder="***********" required="">
              <input type="checkbox" class="form-checkbox "> Lihat Password
                
            </div>
              <div class="form-group text-left mb-4"><span>Nomor Telepon</span>
              <label for="username"><i class="lni-phone"></i></label>
              <input class="form-control" type="number" name="no_telp" placeholder="08" required="">
            </div>
            <button class="btn btn-primary btn-lg w-100 tombol-simpan" type="submit">Daftar</button>
          </form>
        </div>
        <!-- Login Meta-->
        <div class="login-meta-data">
          <p class="text-white mt-3 mb-0">Sudah memiliki akun?<a class="ml-2" href="<?= site_url('login'); ?>">Login</a></p>
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
    
    <?php if ($this->session->flashdata('success')): ?>
        <script>
  Swal.fire({
    icon: 'success',
    title: 'Pendaftaran Berhasil!',
    text: 'Silahkan cek email anda untuk melakukan verifikasi!',
    showConfirmButton: false,
    timer: 3500
})
</script>
         
        <?php endif; ?>