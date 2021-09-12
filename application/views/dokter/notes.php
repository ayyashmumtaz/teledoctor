<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php if ($this->session->flashdata('success')): ?>
                  <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                  </div>
				<?php endif; ?>
				<form method="post">
					<div class="form-group">
						<input type="hidden" name="id_order" value="<?php echo $order->id_order?>" />
						<label for="notes">Catatan Untuk Pasien</label><br/>
						<textarea name="notes" id="notes" class="notes" cols="100%" rows="10"></textarea><br/>
						<button type="submit" class="btn btn-lg bg-primary">Kirim</button>
					</div>
					<div class="form-group">
						<input type="hidden" name="id_order" value="<?php echo $order->id_order?>" />
						<label for="notes">Catatan Untuk Pasien</label><br/>
						<textarea name="notes" id="notes" class="notes" cols="100%" rows="10"></textarea><br/>
						<button type="submit" class="btn btn-lg bg-primary">Kirim</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>