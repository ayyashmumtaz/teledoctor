 <div class="page-content-wrapper">
      <div class="container">
        <!-- Notifications Area-->
        <div class="notification-area pt-3 pb-2">
          <h6 class="pl-1">Order Saya</h6>
          <div class="list-group">

            <div class="single-order-status">
            <div class="d-flex align-items-center mb-2">
              <div class="order-icon"><i class="lni-flag"></i></div>
              <div class="order-status">Order Selesai</div>
            </div>
                    <div class="list-group">

              <?php   foreach($produc as $item_produc  ) : ?>
              <?php if(isset($item_produc->user_doctor)) { 
                if(explode('-',$item_produc->id)[0] == 'rsv'){
                  $additional = 'Reservasi';
                }
                else{
                  $additional = 'Telp Dokter';
                }
                ?>

              <a class="list-group-item d-flex align-items-center" href="<?= site_url('order/check_result/'. $item_produc->id_order); ?>"><img style="width: 100px; margin-right:20px;" src="<?= base_url('img/dokter/'.$item_produc->image_doctor);?>">

              <?php }else{  
                $additional = '';
                ?>
               
              <a class="list-group-item d-flex align-items-center" href="<?= site_url('order/belanjadetail/'. $item_produc->id_order); ?>"><img style="width: 100px; margin-right:20px;" src="<?= base_url('img/product/'.$item_produc->image_product);?>">
              <?php } ?>

              <div class="noti-info">
                <h6 class="mb-0"><?= $item_produc->name_prod?></h6><span>Harap segera lakukan pembayaran.
                </span>
                <br>
                <h6 class="mb-0"></h6><span> <?= $additional ?>
                </span>
              </div></a>
             <?php endforeach; ?>
          </div> 
             
           <div class="single-order-status">
            <div class="d-flex align-items-center mb-2">
              <div class="order-icon"><i class="lni-cross-circle"></i></div>
              <div class="order-status">Order Dibayar</div>
            </div>

       <div class="list-group">

              <?php   foreach($product1 as $item_product1  ) : ?>
              <?php if(isset($item_product1->user_doctor)) { 
                if(explode('-',$item_product1->id)[0] == 'rsv'){
                  $additional = 'Reservasi';
                }
                else{
                  $additional = 'Telp Dokter';
                }
                ?>

              <a class="list-group-item d-flex align-items-center" href="<?= site_url('order/check_result/'. $item_product1->id_order); ?>"><img style="width: 100px; margin-right:20px;" src="<?= base_url('img/dokter/'.$item_product1->image_doctor);?>">

              <?php }else{  
                $additional = '';
                ?>
               
              <a class="list-group-item d-flex align-items-center" href="<?= site_url('order/belanjadetail/'. $item_product1->id_order); ?>"><img style="width: 100px; margin-right:20px;" src="<?= base_url('img/product/'.$item_product1->image_product);?>">
              <?php } ?>

              <div class="noti-info">
                <h6 class="mb-0"><?= $item_product1->name_prod ?></h6><span>Harap segera lakukan pembayaran.
                </span>
                <br>
                <h6 class="mb-0"></h6><span> <?= $additional ?>
                </span>
              </div></a>
             <?php endforeach; ?>
          </div>
        </div>

<div class="single-order-status">
            <div class="d-flex align-items-center mb-2">
              <div class="order-icon"><i class="lni-cross-circle"></i></div>
              <div class="order-status">Order Belum Dibayar</div>
            </div>

       <div class="list-group">
            <?php   foreach($product as $product  ) : ?>
              <?php if(isset($product->user_doctor)) { 
                if(explode('-',$product->id)[0] == 'rsv'){
                  $additional = 'Reservasi';
                }
                else{
                  $additional = 'Telp Dokter';
                }
                ?>

              <a class="list-group-item d-flex align-items-center" href="<?= site_url('order/belanjadetail/'. $product->id_order); ?>"><img style="width: 100px; margin-right:20px;" src="<?= base_url('img/dokter/'.$product->image_doctor);?>">

              <?php }else{  
                $additional = '';
                ?>
               
              <a class="list-group-item d-flex align-items-center" href="<?= site_url('order/belanjadetail/'. $product->id_order); ?>"><img style="width: 100px; margin-right:20px;" src="<?= base_url('img/product/'.$product->image_product);?>">
              <?php } ?>

              <div class="noti-info">
                <h6 class="mb-0"><?= $product->name_prod?></h6><span>Harap segera lakukan pembayaran.
                </span>
                <br>
                <h6 class="mb-0"></h6><span> <?= $additional ?>
                </span>
              </div></a>
             <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>






   