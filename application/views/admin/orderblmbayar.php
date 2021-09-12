 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">List Order Belum Dibayar</h4>
                 
                 <a class='btn btn-default' href='<?= site_url('admin/order_blm_bayar');?>'>Order Belum Dibayar</a>
                 <a class='btn btn-warning' href='<?= site_url('admin/order_sdh_bayar');?>'>Order Sudah Dibayar</a>
                 <a class='btn btn-warning' href='<?= site_url('admin/order_finish');?>'>Order Selesai</a>
                 <a class='btn btn-warning' href='<?= site_url('admin/order_cancel');?>'>Order Dibatalkan</a>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID Order
                        </th>
                        <th>
                          Tanggal order
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
                          <td style="border-left: <?= isset($product->id_order) ? '10px solid #efefef' : '10px solid blue' ?>">
                            <?= isset($product->id_order) ? $product->id_order : $product->id  ?>
                          </td>
                            <td>
                           <?= $product->tgl_order?>
                          </td>
                          <td>
                            <?= isset($product->user) ? $product->user : $product->username ?>
                          </td>
                          <td>
                            <?= isset($product->name) ? $product->name : $product->dokter ?>
                          </td>
                          <td>
                            <?= isset($product->qty)  ? $product->qty : '1' ?>
                          </td>
                          <td>
                            Rp. <?= isset($product->price) ? number_format($product->price) : number_format($product->harga) ?>
                          </td>
                          <td>
                            <?php 
switch (isset($product->status) ? $product->status : $product->payment_status) {
   case 0:
         echo "Belum Dikirim";
         break;
   case 1:
         echo "Sedang Diproses";
         break;
   case 2:
         echo "Selesai";
         break; 
}
                            ?>
                          </td>
                         
                         
                         <td>
                         <?php
                          $id_ord = isset($product->id_order) ? $product->id_order : $product->id;
                         ?>
                         <a class='btn btn-success' href="<?= site_url('admin/accorder/'.$id_ord.'/1');?>">Klik Jika Sudah Dibayar</a>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                 
                    </table>
                  </div>
                </div>
              </div>
            </div>
