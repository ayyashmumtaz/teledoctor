<body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <br>
        <h2>Form Pembayaran</h2>
       
      </div>

      <div class="row">
        <div class="col-md-4 offset-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">ID Order</h6>
              
              </div>
              <!-- href="<?= site_url('product/detail/').$product->id;?>"> -->
              <a class="text"><?= isset($product->id) ? $product->id : $product->id_order  ?></a>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nama Produk</h6>
        
              </div>
              <span class="text-muted"><?= isset($product->name) ? $product->name : $product->dokter ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Jumlah</h6>
        
              </div>
              <span class="text-muted"><?= isset($product->qty) ? $product->qty : '1'  ?></li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Total Belanja</h6>
           
              </div>
              <span class="text-muted">Rp. <?php $angka = isset($product->price) ? $product->price : $product->harga ;
 
echo number_format($angka);?></span>
            </li>
           
            <li class="list-group-item d-flex justify-content-between">
              <h6 class="my-0">Status</h6>
<?php
switch (isset($product->status) ? $product->status : $product->payment_status ) {
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
            <?php
              if($product->status == 0){
            ?>
            <button id="pay-button" data-id="<?= isset($product->id_order) ? $product->id_order : $product->id ?>" data-harga="<?= isset($product->price) ? $product->price : $product->harga ?>" class="btn btn-primary btn-lg btn-block" type="submit"> <span class="text">Bayar Sekarang </span> <i class="fa fa-spin fa-spinner loading" hidden></i></button>
            <?php
              }
            ?>

            
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



<script type="text/javascript">
  
  $('#pay-button').click(function (event) {
    event.preventDefault();
    var id = $(this).data('id')
    var harga = $(this).data('harga')
    $('.loading').removeAttr('hidden');
    $('.text').attr('hidden', '');
    
  $.ajax({
    url: '<?=site_url()?>/snap/token',
    cache: false,
    data: {'id': id, 'harga': harga},

    success: function(data) {
      //location = data;
      console.log('token = '+data);
      var resultType = document.getElementById('result-type');
      var resultData = document.getElementById('result-data');

      $('.loading').attr('hidden', '');
      $('.text').removeAttr('hidden');
      function changeResult(type,data){
        $("#result-type").val(type);
        $("#result-data").val(JSON.stringify(data));
        //resultType.innerHTML = type;
        //resultData.innerHTML = JSON.stringify(data);
      }

      snap.pay(data, {
        
        onSuccess: function(result){
          changeResult('success', result);
          console.log(result.status_message);
          console.log(result);
          $("#payment-form").submit();
        },
        onPending: function(result){
          changeResult('pending', result);
          console.log(result.status_message);
          $("#payment-form").submit();
        },
        onError: function(result){
          changeResult('error', result);
          console.log(result.status_message);
          $("#payment-form").submit();
        }
      });
    }
  });
});

</script>