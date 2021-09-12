<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="<?= site_url('admin'); ?>" class="simple-text logo-normal">
          <img height="50px" src="<?= base_url('img/core-img/cexup.png');?>">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('doctor'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
              <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('doctor/pasien'); ?>">
              <i class="material-icons">face</i>
              <p>Antrian Telp</p>
            </a>
          </li>
          </li>
              <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('doctor/reservasi'); ?>">
              <i class="material-icons">face</i>
              <p>Reservasi</p>
            </a>
          </li>
          
          
        </ul>
      </div>
    </div> 