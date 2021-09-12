

<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('assets/learn/img/favicon.png" type="image/png">
    <title>Selamat Belajar - Syaauqi Zaaidan</title>
    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/learn/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/learn/vendors/linericon/style.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/learn/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/learn/vendors/owl-carousel/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/learn/vendors/lightbox/simpleLightbox.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/learn/vendors/nice-select/css/nice-select.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/learn/vendors/animate-css/animate.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/learn/vendors/popup/magnific-popup.css');?>">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/learn/css/style.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/learn/css/responsive.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/learn/css/materi_style.css');?>">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>

</head>

<body style="overflow-x:hidden;background-color:#fbf9fa">

    <!-- Start Navigation Bar -->
    <header class="header_area" style="background-color: white !important;">
        
    </header>
    <!-- End Navigation Bar -->


    <!-- Start Greeting Cards -->
    <div class="container">
        <div class="bg-white mx-auto p-4 buat-text" data-aos="fade-down" data-aos-duration="1400"
            style="width: 100%; border-radius:10px;">
            <div class="row" style="color: black; font-family: 'poppins';">
                <div class="col-md-12 mt-1 ml-4">
                	
                   <h3 class="display-4" style="color: black; font-family:'poppins';" data-aos="fade-down"
                        data-aos-duration="1400">Smart Video Conference
                    </h3>
                    <h4 data-aos="fade-down" data-aos-duration="1700">Gus Iwan - Smart Training</h3>
                        <p> </p>
                        <hr align="left" width="600;">
                        <p style="line-height: 3px;"> </p>
                        <h3 class="font-weight-bold mt--5">
                            Pertanian
                        </h3>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Greeting Cards -->


    <!-- Start Video Player -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto mt-4">
                <video  id="localVideo" autoplay playsinline width="1280" height="720">
                </video>
                <br>
                <center>
<button id="startButton">Start</button>
    <button id="callButton">Call</button>
    <button id="hangupButton">Hang Up</button>
</center>


            </div>
        </div>
        <div>
          
 
  </div>
    </div>
    <!-- End Video Player -->

    <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
    <!-- Start Deskripsi Materi -->
<script src="<?= base_url('assets/js/webrtc.js');?>">
</script>
    <!-- Start Disqus Comment -->

    <!-- Start Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <!-- End Animate On Scroll -->