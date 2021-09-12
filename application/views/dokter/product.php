 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Produk<a class="btn btn-default" href="<?= site_url('admin/add'); ?>" style="float: right;
    display: block;" >+ ADD</a>
                 

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID
                        </th>
                        <th>
                          Nama Produk
                        </th>
                        <th>
                          Stok
                        </th>
                        <th>
                          Harga
                        </th>
                        <th>
                         Deskripsi
                        </th>
                         <th>
                         Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach($data->result() as $product) : ?>
                        <tr>
                          <td>
                           <?=$product->id?>
                          </td>
                          <td>
                            <?=$product->name?>
                          </td>
                          <td>
                            <?=$product->stock?>
                          </td>
                          <td>
                            <?=$product->price?>
                          </td>
                           <td>
                            <?=$product->informasi?>
                          </td>
                          <td>
                            <a href="<?php echo site_url('admin/edit/'.$product->id) ?>">Edit</a>
                            <a href="<?php echo site_url('admin/delete/'.$product->id) ?>">Hapus</a>
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach; ?>
                    </table>
                    <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
                  </div>
                </div>
              </div>
            </div>