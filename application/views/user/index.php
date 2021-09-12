<script type="text/javascript">
  $.ajax({
    url: "<?php echo base_url('beranda/curl');?>",
    beforeSend: function(xhr) { 
      xhr.setRequestHeader("Authorization", "Basic " + btoa("username:password")); 
    },
    type: 'POST',
    dataType: 'json',
    contentType: 'application/json',
    processData: false,
    data: '{"foo":"bar"}',
    success: function (data) {
      console.log(data);

        var boJSON = "0";
        var bo = "0";
        var heart = "0";
        var bpJSON = "0";
        var highPressure = "0";
        var lowPressure = "0";
        var yJSON = "0";
        var temp = "0";
        var bmiJSON = "0";
        var bmi = "0";
        var glucose = "0";

      if (data.data.blood_oxygen.bo !== undefined) {
        boJSON = JSON.parse(data.data.blood_oxygen.bo);
        bo = (boJSON.Oxygen) + "%";
        heart = (boJSON.Bpm);
      }
      
       if (data.data.blood_pressure.blood_plessure !== undefined) {
        bpJSON = JSON.parse(data.data.blood_pressure.blood_plessure);
        highPressure = (bpJSON.HighPressure);
       lowPressure = (bpJSON.LowPressure);
      }

      if (data.data.temperature.temperature !== undefined) {
        yJSON = JSON.parse(data.data.temperature.temperature);
        temp = (yJSON.Temperature) + "°C";
      }
      
      if (data.data.height.height !== undefined) {
        bmiJSON = JSON.parse(data.data.height.height);
        bmi = (bmiJSON.BMI);
      }
      
      if (data.data.blood_sugar.blood_sugar !== undefined) {
        glucose = JSON.parse(data.data.blood_sugar.blood_sugar).BloodSugar;
      }
     
      document.getElementById("bloodpress").innerHTML = highPressure + "/" + lowPressure;
      document.getElementById("bmi").innerHTML = bmi ;

if (bmi < 17) {
 var greeting = "Kurus";
} else if (bmi > 17 && bmi < 23) {
 var greeting = "Normal";
} else if (bmi > 23 && bmi < 27){
 var greeting = "Gemuk";
} else if (bmi > 27){
 var greeting = "Obesitas";
}else{
 var greeting = "N/A";
}

 if (yJSON.Temperature > 36.1 && yJSON.Temperature < 37.7 && bmi > 17 && bmi < 23 && heart > 60 && heart < 100 && lowPressure > 60 && highPressure < 120 && boJSON.Oxygen > 95) {
  var summary = "<button class='btn btn-sm btn-Success'>Sangat Baik</button>";
 } else if (yJSON.Temperature > 36.1 && yJSON.Temperature < 37.7 && bmi > 17 && bmi < 23 && heart > 60 && heart < 100 && lowPressure > 60 && highPressure > 120 && boJSON.Oxygen > 95) {
  var summary = "<button class='btn btn-sm btn-primary'>Baik</button>";
 } else if (yJSON.Temperature < 36.1 && yJSON.Temperature > 37.7 && bmi > 17 && bmi < 23 && heart > 60 && heart < 100 && lowPressure < 60 && highPressure > 120 && boJSON.Oxygen > 95){
  var summary = "<button class='btn btn-sm btn-warning'>Kurang Baik</button>";
 } else if (yJSON.Temperature < 36.1 && yJSON.Temperature > 37.7 && bmi < 17 && bmi > 23 && heart < 60 && heart > 100 && lowPressure < 60 && highPressure > 120 && boJSON.Oxygen < 95){
  var summary = "<button class='btn btn-sm btn-danger'>Sangat Buruk</button>";
 }else{
  var summary = "<button class='btn btn-sm btn-secondary'>Tidak ada data</button>";
 }

    document.getElementById("bmi").innerHTML = greeting ;
    document.getElementById("summary").innerHTML = summary ;

      document.getElementById("heart").innerHTML = heart ;
      document.getElementById("temp").innerHTML = temp ;
      document.getElementById("spo").innerHTML =  bo;
      document.getElementById("glucose").innerHTML =  glucose;
      
    },
    error: function(){
      
    }
});

</script>

<div class="page-content-wrapper">
  <!-- Hero Slides-->
<p id=""></p>
  <div class="product-catagories-wrapper">
  </div>
  <!-- Product Catagories-->
  <div class="product-catagories-wrapper pt-1" style="background-color:rgb(39, 188, 221);">

    <div class="container">
      <br>
      <div class="section-heading d-flex align-items-center justify-content-between">
        <h6 class="ml-1" style="color: white;">Health Status & Recomendation</h6><a class="btn btn-primary btn-sm" href="<?=site_url('healthstat');?>">View All</a>
      </div>
      <div class="product-catagory-wrap">
        <div class="row">
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6 id="temp">N/A</h6></i><span>Temperatur</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6 id="heart">N/A</h6></i><span>Heart Rate</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6 id="bmi">N/A</h6></i><span>BMI</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6 id="bloodpress">N/A</h6></i><span>Tekanan Darah</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6 id="spo">N/A</h6></i><span>SPO2 Darah</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6 id="glucose">N/A</h6></i><span>Glukosa Darah</span></a></div>
            </div>
          </div>
          
          <div class="col-6">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i id="summary"><h6>N/A</h6></button></i><span>Kondisi Kesehatan</span></a></div>
            </div>
          </div>
          <div class="col-6">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><button class="btn btn-sm btn-primary" href="#">Aktivitas Biasa</button></i><span>Rekomendasi</span></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Flash Sale Slide-->
  <br>
  <div class="cta-area">
    <div class="container">

    </div>
  </div>
  <div class="flash-sale-wrapper pb-3">
    <div class="container">
      <div class="section-heading d-flex align-items-center justify-content-between">
        <h6 class="ml-1">Telepon Dokter</h6><a class="btn btn-primary btn-sm" href="<?=site_url('dokter');?>">View All</a>
      </div>
      <!-- Flash Sale Slide-->
      <div class="flash-sale-slide owl-carousel">
        <!-- Single Flash Sale Card-->
        <?php foreach($dokterr as $dokter) : ?>
          <!-- Single Flash Sale Card-->
          <div class="card flash-sale-card">
            <div class="card-body"><a href="<?php echo site_url('dokter/detail/'.$dokter->id); ?>"><img style="height: 100px; width: auto;" src="<?= base_url('img/dokter/'.$dokter->image);?>" alt=""><span class="product-title"><?=$dokter->nama?> </span><span class="progress-title"><?=$dokter->spesialisasi?></span>
              <p class="sale-price">Rp. <?php $harga = "$dokter->harga";
              echo number_format($harga);?></p>
            </a></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>


  </div>


 

  <iframe allowfullscreen="" class="video-height" style="margin-top:20px;" frameborder="0" height="" src="http://www.youtube.com/embed/AysyrFawzAc?start=90" width="100%"></iframe>
<div class="hero-slides owl-carousel">

  <!-- Single Hero Slide-->
  <?php foreach($banner as $pro) : ?>
    <div class="single-hero-slide">
      <div class="slide-img"><?= img([

        'src'   => 'img/bg-img/' . $pro->img,
        
        ])?></div>
        <div class="slide-content h-100 d-flex align-items-center">
          <div class="container">

          </div>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
  </div>
</div>
<br>
<div class="flash-sale-wrapper pb-3">
    <div class="container">
      <div class="section-heading d-flex align-items-center justify-content-between">
        <h6 class="ml-1">Reservasi Dokter</h6><a class="btn btn-primary btn-sm" href="<?=site_url('dokter');?>">View All</a>
      </div>
      <!-- Flash Sale Slide-->
      <div class="flash-sale-slide owl-carousel">
        <!-- Single Flash Sale Card-->
        <?php foreach($dokterr as $dokter) : ?>
          <!-- Single Flash Sale Card-->
          <div class="card flash-sale-card">
            <div class="card-body"><a href="<?php echo site_url('reservasi/detail/'.$dokter->id); ?>"><img style="height: 100px; width: auto;" src="<?= base_url('img/dokter/'.$dokter->image);?>" alt=""><span class="product-title"><?=$dokter->nama?> </span><span class="progress-title"><?=$dokter->spesialisasi?></span>
              <p class="sale-price">Rp. <?php $harga = "$dokter->harga";
              echo number_format($harga);?></p>
            </a></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  <br>
      <div class="flash-sale-wrapper pb-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">Shop</h6><a class="btn btn-primary btn-sm" href="<?=site_url('product');?>">View All</a>
          </div>
          <!-- Flash Sale Slide-->
          <div class="flash-sale-slide owl-carousel">
            <!-- Single Flash Sale Card-->
            <?php foreach($products as $product) : ?>
              <!-- Single Flash Sale Card-->
              <div class="card flash-sale-card">
                <div class="card-body"><a href="<?php echo site_url('product/detail/'.$product->id); ?>"><img style="height: 100px; width: auto;" src="<?= base_url('img/product/'.$product->image);?>" alt=""><span class="product-title"><?=$product->name?> </span><span class="progress-title">Stok : <?=$product->stock?> pcs</span>
                  <p class="sale-price">Rp. <?php $angka = "$product->price";

                  echo number_format($angka);?></p>
                </a></div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>



      <div class="flash-sale-wrapper pb-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
          </div>

          <!-- Flash Sale Slide-->
          <!--div class="flash-sale-slide owl-carousel">
            <!-- Single Flash Sale Card-->

            <!--div class="card flash-sale-card">
              <div class="card-body"-->
              </div>
            </div>
             <div class="flash-sale-wrapper pb-3">

                <div class="flash-sale-wrapper pb-3">
    <div class="container">
      <div class="section-heading d-flex align-items-center justify-content-between">
        <h6 class="ml-1">News & Tips</h6><a class="btn btn-primary btn-sm" href="<?=site_url('dokter');?>">View All</a>
      </div>
      <!-- Flash Sale Slide-->
      <div class="flash-sale-slide owl-carousel">
        <!-- Single Flash Sale Card-->
        <?php foreach($news as $dokter) : ?>
          <!-- Single Flash Sale Card-->
          <div class="card flash-sale-card">
            <div class="card-body"><a href="<?php echo site_url('news/read/').$dokter->id; ?>"><img style="height: 100px; width: auto;" src="<?= base_url('img/product/pro.jpg');?>" alt=""><span class="progress-title"></span>
              <p class="sale-price"><?=$dokter->judul?></p>
            </a></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

   
    </div>
  </div>
</div>
</div>




<br><br><br>





<?php if ($this->session->flashdata('warning')): ?>
  <script>
    Swal.fire({
      icon: 'warning',
      title: 'Anda Sudah Login!',
      text: 'Jika tidak dialihkan ke menu utama, silahkan reload halaman ini',
      showConfirmButton: false,
      timer: 3000
    })
  </script>

<?php endif; ?>



<?php if ($this->session->flashdata('success-login')): ?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Login Berhasil!',
      text: 'Selamat Datang di Teledoctor!',
      showConfirmButton: false,
      timer: 3000
    })
  </script>

<?php endif; ?>


<?php if ($this->session->flashdata('success-logout')): ?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Logout Berhasil!',
      text: 'Sampai jumpa! Terimakasih telah mengunjungin Teledoctor!',
      showConfirmButton: false,
      timer: 3000
    })
  </script>

<?php endif; ?>
<!-- Single Weekly Product Card-->


<!-- Top Products-->




<!-- Cool Facts Area-->

