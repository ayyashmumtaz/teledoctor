 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Order</h4>
                 <a class='btn btn-warning' href='#'>Order Masuk</a>
                 <a class='btn btn-warning' href='#'>Order Belum Dibayar</a>
                 <a class='btn btn-warning' href='#'>Order Sudah Dibayar</a>
                 <a class='btn btn-success' href='#'>Order Selesai</a>
                 <a class='btn btn-danger' href='#'>Order Dibatalkan</a>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID Order
                        </th>
                        <th>
                          Nama Pelanggan
                        </th>
                        <th>
                          Produk Dibeli
                        </th>
                        <th>
                          Jumlah
                        </th>
                        <th>
                         Total Tagihan
                        </th>
                        <th>
                          Status
                        </th>
                         <th>
                        Tindakan
                      </th>
                      </thead>
                      <tbody>
                       <?php foreach($order as $product) : ?>
                        <tr>
                          <td>
                           <?=$product->id?>
                          </td>
                          <td>
                            <?=$product->user?>
                          </td>
                          <td>
                            <?=$product->name?>
                          </td>
                          <td>
                            <?=$product->qty?>
                          </td>
                          <td>
                            <?=$product->price?>
                          </td>
                          <td>
                            <?php 
switch ($product->status) {
   case 0:
         echo "Belum Dikirim";
         break;
   case 1:
         echo "Sedang Diproses";
         break;
   case 2:
         echo "Sudah Dikirim";
         break; 
}
                            ?>
                          </td>
                         
                         
                         <td>
                         <a class='btn btn-success' href='#'>Klik Jika Sudah Dibayar</a>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                 
                    </table>
                  </div>
                </div>
              </div>
            </div>
