<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA MOTOR SPORT</h3>

	<?php foreach($motor as $mtr ) : ?>
		<form method="post" action="<?php echo base_url().'admin/sport/update' ?>">
			<div class="form-group">
				<label>Nama Motor</label>
				<input type="hidden" name="id_motor" class="form-control" value="<?php echo $mtr->id_motor ?>">
				<input type="text" name="nama_motor" class="form-control" value="<?php echo $mtr->nama_motor ?>">
			</div>
			<div class="form-group">
				<label>Warna Motor</label>
				<input type="text" name="warna_motor" class="form-control" value="<?php echo $mtr->warna_motor ?>">
			</div>
			<div class="form-group">
				<label>Type Motor</label>
				<select name="type_motor" class="form-control" value="<?php echo $mtr->type_motor ?>">
					<option>Sport</option>
					<option>Matic</option>
					<option>Moped</option>
				</select>
			</div>
			<div class="form-group">
				<label>CC Motor</label>
				<input type="text" name="cc_motor" class="form-control" value="<?php echo $mtr->cc_motor ?>">
			</div>
			<div class="form-group">
				<label>DP Motor</label>
				<input type="text" name="dp_motor" class="form-control" value="<?php echo $mtr->dp_motor ?>">
			</div>
			<div class="form-group">
				<label>Angsuran 23</label>
				<input type="text" name="angsuran23" class="form-control" value="<?php echo $mtr->angsuran23 ?>">
			</div>
			<div class="form-group">
				<label>Angsuran 29</label>
				<input type="text" name="angsuran29" class="form-control" value="<?php echo $mtr->angsuran29 ?>">
			</div>
			<div class="form-group">
				<label>Angsuran 35</label>
				<input type="text" name="angsuran35" class="form-control" value="<?php echo $mtr->angsuran35 ?>">
			</div>
			<button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
		</form>
	<?php endforeach; ?>

</div>