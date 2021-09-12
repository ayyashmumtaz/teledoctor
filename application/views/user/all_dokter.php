<div class="page-content-wrapper">
	<div class="top-products-area pt-3">
		<div class="container">
			<div class="section-heading d-flex align-items-center justify-content-between">
				<h6 class="ml-1">List Dokter</h6>
			</div>

			
			<div class="row">
				<?php foreach($dokterr as $dokter) : ?>
				<div class="col-6 col-sm-4">
				  <div class="card flash-sale-card mb-3">
					<div class="card-body"><a href="<?=base_url("dokter/detail/".$dokter->id)?>"><img src="<?=base_url("/img/dokter/".$dokter->image)?>" alt=""><span class="product-title"><?=$dokter->nama?></span>
						<p class="sale-price">Rp. <?=$dokter->harga?></p><span class="progress-title"><?=$dokter->spesialisasi?></span>
						
						</div></a></div>
				  </div>
				
				<?php endforeach; ?>
			</div>
			

		</div>
	</div>
</div>