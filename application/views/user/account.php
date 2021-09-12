<div class="page-content-wrapper">
  <div class="container">
    <?php $i = 0 ?>
    <?php foreach ($user as $key => $user) : ?>
      <?php if($i > 0){ continue; } $i++; ?>
      <div class="profile-wrapper-area py-3">
        <!-- User Information-->
        <div class="card user-info-card">
          <div class="card-body p-4 d-flex align-items-center">
            <div class="user-profile mr-3"><img src="<?= base_url('img/profile/default.png'); ?>" alt=""></div>
            <div class="user-info">
              <p class="mb-0 text-white">@<?= $user->username ?></p>
              <h5 class="mb-0"><?= $user->nama ?></h5>
            </div>
          </div>
        </div>
        <!-- User Meta Data-->
        <div class="card user-data-card">
          <div class="card-body">
            <div class="single-profile-data d-flex align-items-center justify-content-between">
              <div class="title d-flex align-items-center"><i class="lni-user"></i><span>Username</span></div>
              <div class="data-content"><?= $user->username ?></div>
            </div>
            <div class="single-profile-data d-flex align-items-center justify-content-between">
              <div class="title d-flex align-items-center"><i class="lni-user"></i><span>Full Name</span></div>
              <div class="data-content"><?= $user->nama ?></div>
            </div>
            <div class="single-profile-data d-flex align-items-center justify-content-between">
              <div class="title d-flex align-items-center"><i class="lni-phone-handset"></i><span>Phone</span></div>
              <div class="data-content"><?= $user->no_telp ?></div>
            </div>
            <div class="single-profile-data d-flex align-items-center justify-content-between">
              <div class="title d-flex align-items-center"><i class="lni-envelope"></i><span>Email Address</span></div>
              <div class="data-content"><?= $user->email ?></div>
            </div>

            <!-- Settings Wrapper-->
            <div class="settings-wrapper py-3">
              <div class="card settings-card">
                <div class="card-body">
                  <!-- Single Settings-->
                  <div class="single-settings d-flex align-items-center justify-content-between">
                    <div class="title"><i class="lni-user"></i><span>Edit Profile</span></div>
                    <div class="data-content"><a href="<?= site_url('account/profile'); ?>"><i class="lni-chevron-right"></i></a></div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
            </div>
          </div>
        </div>