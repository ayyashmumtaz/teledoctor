<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="<?= site_url('galangdana/dashboard'); ?>" class="simple-text logo-normal">
          <img src="<?= base_url('assets/log/images/gusiwan.png');?>" height="100">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">


   

          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('galangdana'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('galangdana/anggota'); ?>">
              <i class="material-icons">account_circle</i>
              <p>Profil & Anggota Saya</p>
            </a>
          </li>


         <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('galangdana/campaign'); ?>">
              <i class="material-icons">event_available</i>
              <p>Program Saya</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('galangdana/training'); ?>">
              <i class="material-icons">star</i>
              <p>Training</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('galangdana/Webminar'); ?>">
              <i class="material-icons">duo</i>
              <p>Webminar</p>
            </a>
          </li>
          
          
          
        </ul>
      </div>
    </div> 