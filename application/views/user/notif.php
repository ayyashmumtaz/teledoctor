 <div class="page-content-wrapper">
      <div class="container">
        <!-- Notifications Area-->
        <div class="notification-area pt-3 pb-2">
          <h6 class="pl-1">Notifications</h6>
          <div class="list-group">
            <?php foreach ($program as $program) : ?>
            <!-- Single Notification--><a class="list-group-item d-flex align-items-center" href="<?= site_url('notif/detail/'. $program->id); ?>"><span class="noti-icon"><i class="lni-alarm"></i></span>
              <div class="noti-info">
                <h6 class="mb-0"><?= $program->judul;?></h6><span><?php 
$date = $program->tgl_notif;
$waktuawal  = date_create($date); //waktu di setting

$waktuakhir = date_create(); //2019-02-21 09:35 waktu sekarang

$diff  = date_diff($waktuawal, $waktuakhir);
 echo "$diff->h hours ago";

             ?></span>
              </div></a>
           <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>