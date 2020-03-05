<div class="container-fluid">

	<div class="row text-center mt-4">
		<?php foreach ($motor as $mtr) : ?>

			<div class="card ml-3" style="width: 16rem;">
  				<img src="<?php echo base_url().'/uploads/'.$mtr->gambar_motor ?>" class="card-img-top" alt="...">
  				<div class="card-body ml-3">
    				<h5 class="card-title"><?php echo $mtr->nama_motor ?></h5>
    				<h5><span class="badge badge-success mb-3">DP Rp.<?php echo number_format($mtr->dp_motor,0,',','.') ?></span></h5>
    				<a href="https://api.whatsapp.com/send?phone=087709990278&text=Permisi%20%2c%20Saya%20Ingin%20Tanya%20Tanya%20Dulu%20Terkait%20Kredit%20Motor%20Yamaha%20Nya&source=&data=" class="btn btn-sm btn-primary">Kredit</a>
    				<?php echo anchor('sport/detail/'.$mtr->id_motor,'<div class="btn btn-sm btn-danger">Detail</div>') ?>
  				</div>
			</div>

		<?php endforeach; ?>
	</div>

</div>