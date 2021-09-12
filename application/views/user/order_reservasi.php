    <div class="page-content-wrapper">
      <br>
      <!-- Catagory Single Image-->
      <!--div class="catagory-single-img"><img class="w-100" src="<?= base_url('img/bg-img/bg-belanja.png'); ?>" alt=""></div>
      <!-- Top Products-->
      <div class="top-products-area mt-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">Reservasi Saya</h6>
          </div>
          <div class="row">
            <!-- Single Top Product Card-->
            <?php foreach($reservasi as $product) : ?>
            <div class="col-6 col-sm-4">
              <div class="card top-product-card mb-3">
                <div class="card-body text-center">
                <?php
                  $time = explode(':',$product->waktu_reservasi);
                ?>
                <span class="bad ge badge-success"><?= $time[0].':'.$time[1]?></span>
                  <a class="product-thumbnail d-block"><?= img(['class' => 'mb-2', 'src'   => 'img/dokter/'.$product->image])?>
                  </a>
                  <a><span class="product-title"><?=$product->dokter?> </span>
                  </a>
                  <br>
                  <a><span class="" style="font-size:14px; color:#bbbbbb"><?=date_custom($product->tgl_reservasi)?> </span>
                  </a>
                  <br>
                    <a style="font-size:12px; margin-top:40px;cursor:pointer" class="<?= $product->id ?> text-danger pay-button" data-id="<?= $product->id ?>" data-harga=<?= $product->harga ?>> <?php 
                      if($product->payment_status < 1){
                        echo "Bayar Sekarang";
                      }
                    ?></a>
                    <i class="fa fa-spin fa-spinner loading<?= $product->id ?>" hidden></i>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
          <?php endforeach; ?>
          </div>
       

  <script type="text/javascript">
  
    $('.pay-button').click(function (event) {
      event.preventDefault();
      var id = $(this).data('id')
      var harga = $(this).data('harga')
      $('.loading'+id).removeAttr('hidden');
      $('.'+id).attr('hidden', '');
      
    $.ajax({
      url: '<?=site_url()?>/snap/tokenReservasi',
      cache: false,
      data: {'id': id, 'harga': harga},

      success: function(data) {
        //location = data;
        console.log('token = '+data);
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        $('.loading'+id).attr('hidden', '');
        $('.'+id).removeAttr('hidden');
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
