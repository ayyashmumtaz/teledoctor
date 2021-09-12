 <div class="page-content-wrapper">
      <div class="container">
        <!-- Cart Wrapper-->
        <div class="cart-wrapper-area py-3">
          <div class="cart-table card mb-3">
            <div class="table-responsive card-body">
              <table class="table mb-0">
                <tbody>
                  <tr>
                    <?php $i = 1; ?>
                    <?php foreach ($this->cart->contents() as $items): ?>
                      <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                    <th scope="row"><a class="remove-product" href="<?php echo site_url('cart/hapus/'.$items['rowid']); ?>"><i class="lni-close"></i></a></th>
                  
                    <td><a href="single-product.html"><?php echo $items['name']; ?><span><h6>Rp. <?php $angka = $items['price'];
 
echo number_format($angka);?></span></a></td>
                    <td>
                     <h6>Rp. <?php $toga = $items['price']*$items['qty'];
 
echo number_format($toga);?>
                    </td>
                  </tr>
                </tbody>
                <?php endforeach; ?>
              </table>
            </div>
          </div>
          <!-- Coupon Area-->
          <div class="card coupon-card mb-3">
            <div class="card-body">
              <div class="apply-coupon">
                <h6 class="mb-0">Ada kode promo?</h6>
                <p class="mb-2">Masukan kode dibawah ini &amp; dapatkan diskon yang menarik!</p>
                <div class="coupon-form">
                  <form action="#">
                    <input class="form-control" type="text" placeholder="293YRGGR9">
                    <button class="btn btn-primary" type="submit">Apply</button>
                  </form>

                </div>
              </div>
            </div>
          </div>
          
          <!-- Cart Amount Area-->
          <div class="card cart-amount-area">
            <div class="card-body d-flex align-items-center justify-content-between">
              <h6 class="total-price mb-0">Grand Total : Rp. <?= number_format($this->cart->total(),0,',','.'); ?></h6><a href="<?php echo base_url('cart/store') ?>" class="btn btn-primary btn-sm">Lanjut Ke Pembayaran</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
  
    $('#pay-button').click(function (event) {
      event.preventDefault();
    
    
    $.ajax({
      url: '<?=site_url()?>/snap/token',
      cache: false,

      success: function(data) {
        //location = data;

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

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