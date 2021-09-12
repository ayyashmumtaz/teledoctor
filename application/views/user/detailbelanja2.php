<body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <br>
        <img class="d-block mx-auto mb-4" src="<?= base_url('assets/log/images/gusiwan.png'); ?>" alt="" width="100" height="100">
        <h2>Form Pembayaran Kelas</h2>
       
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
           
  <form id="payment-form">
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">ID Product</h6>
              
              </div>
              <a class="text" href="<?= site_url('product/detail/').$product->id;?>"><?= $product->id?></a>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nama Product </h6>
        
              </div>
              <span class="text-muted"><?= $product->name?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Jumlah Barang</h6>
        
              </div>
              <span class="text-muted">x <?= $product->qty?></li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Total Belanja</h6>
           
              </div>
              <span class="text-muted">Rp. <?php $angka = $product->price;
 
echo number_format($angka);?></span>
            </li>
           
            <li class="list-group-item d-flex justify-content-between">
              <h6 class="my-0">Status</h6>
<?php
switch ($product->status) {
  case 0:
    echo '<strong><button class="btn btn-sm btn-secondary" disabled="">PENDING</button></strong>';
    break;
  case 1:
    echo '<strong><button class="btn btn-sm btn-success" disabled="">SUDAH DIBAYAR</button></strong>';
    break;
  case 2:
    echo '<strong><button class="btn btn-sm btn-danger" disabled="">GAGAL</button></strong>';
    break;
}
?>

              
            </li>
          </ul>

        
         
            <hr class="mb-4">

            <button id="pay-button" class="btn btn-primary btn-lg btn-block" type="submit">Bayar Sekarang</button>

            
          </form>
        </div>
   </div>
 </span>
</li>
</ul>
</form>
</h4>
</div>
</div>
</div>
</body>

