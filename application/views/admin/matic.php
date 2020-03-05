<div class="container-fluid mt-4">
	<button class="btnbtn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_data">
		<i class="fas fa-plus fa-sm">Tambah Data</i>
	</button>

	<table class="table table-bordered text-center">
		<tr>
			<th>No</th>
			<th>Nama Motor</th>
			<th>Warna Motor</th>
			<th>Type Motor</th>
			<th>CC Motor</th>
			<th>DP MOTOR</th>
            <th>Angsuran 23</th>
            <th>Angsuran 29</th>
            <th>Angsuran 35</th>
			<th colspan="2">AKSI</th>
		</tr>
	<?php $no = 1; ?>
	<?php foreach ($motor as $mtr) : ?>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $mtr->nama_motor ?></td>
			<td><?php echo $mtr->warna_motor ?></td>
			<td><?php echo $mtr->type_motor ?></td>
			<td><?php echo $mtr->cc_motor ?></td>
			<td><?php echo number_format( $mtr->dp_motor,0,',','.') ?></td>
            <td><?php echo number_format($mtr->angsuran23,0,',','.') ?></td>
            <td><?php echo number_format($mtr->angsuran29,0,',','.') ?></td>
            <td><?php echo number_format($mtr->angsuran35,0,',','.') ?></td>
			<td>
				<?php echo anchor('admin/matic/edit/'.$mtr->id_motor,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
			</td>
			<td>
				<?php echo anchor('admin/matic/hapus/'.$mtr->id_motor,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>'); ?>
			</td>
		</tr>
	<?php $no++; ?>
	<?php endforeach; ?>
		
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'admin/matic/tambah_data'; ?>" enctype="multipart/form-data">
        	<div class="form-group">
        		<label>Nama Motor</label>
        		<input type="text" name="nama_motor" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Warna Motor</label>
        		<input type="text" name="warna_motor" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Type Motor</label>
        		<select name="type_motor" class="form-control">
                    <option></option>
                    <option>Matic</option>
                    <option>Moped</option>
                    <option>Sport</option>      
                </select>
        	</div>
        	<div class="form-group">
        		<label>CC Motor</label>
        		<input type="text" name="cc_motor" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>DP Motor</label>
        		<input type="text" name="dp_motor" class="form-control">
        	</div>
            <div class="form-group">
                <label>Angsuran 23</label>
                <input type="text" name="angsuran23" class="form-control">
            </div>
            <div class="form-group">
                <label>Angsuran 29</label>
                <input type="text" name="angsuran29" class="form-control">
            </div>
            <div class="form-group">
                <label>Angsuran 35</label>
                <input type="text" name="angsuran35" class="form-control">
            </div>
        	<div class="form-group">
        		<label>Gambar Motor</label>
        		<input type="file" name="gambar_motor" class="form-control">
        	</div>
            <div class="form-group">
                <label>Gambar Spesifikasi</label>
                <input type="file" name="gambar_spesifikasi" class="form-control">
            </div>
        	<div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save</button>
		    </div>
        </form>
      </div>
    </div>
  </div>
</div>
