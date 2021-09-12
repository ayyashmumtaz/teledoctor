<body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <br>
        <img class="d-block mx-auto mb-4" src="<?= base_url('assets/log/images/gusiwan.png'); ?>" alt="" width="100" height="100">
        <h2>Hasil Pembelajaran</h2>
       
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">ID Kelas</h6>
              
              </div>
              <a class="text" href="<?= site_url('product/detail/').$product->id;?>"><?= $product->id?></a>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nama Kelas </h6>
        
              </div>
              <span class="text-muted"><?= $product->name?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Jawaban Dikerjakan</h6>
        
              </div>
              <span class="text-muted"><button class="btn btn-sm btn-primary" disabled="">14</button></li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Jawaban Kosong</h6>
        
              </div>
              <span class="text-muted"><button class="btn btn-sm btn-danger" disabled="">5</button></li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nilai Tes</h6>
        
              </div>
              <span class="text-muted"><strong><button class="btn btn-sm btn-secondary" disabled="">78</button></strong></li>
           
           
            <li class="list-group-item d-flex justify-content-between">
              <h6 class="my-0">Status</h6>
<?php
switch ($product->status) {
  case 0:
    echo '<strong><button class="btn btn-sm btn-secondary" disabled="">PENDING</button></strong>';
    break;
  case 1:
    echo '<strong><button class="btn btn-sm btn-primary" disabled="">SUDAH DIBAYAR</button></strong>';
    break;
  case 2:
    echo '<strong><button class="btn btn-sm btn-success" disabled="">KELAS SELESAI</button></strong>';
    break;
}
?>

              
            </li>
          </ul>

        
         

            

            
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

