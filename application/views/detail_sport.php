<div class="container-fluid">
	
	<div class="card mt-3">
		<h5 class="card-header text-primary">Detail Motor Sport</h5>
 	 		<div class="card-body">
 	 			<?php foreach ($motor as $mtr) : ?>
 	 				<div class="row">
 	 					<div class="col-md-4">
 	 						<img src="<?php echo base_url(),'/uploads/'.$mtr->gambar_motor ?>" class="card-img-top">
 	 					</div>
 	 					<div class="col-md-8 table table-responsive">
 	 						<table class="table">
 	 							<tr>
 	 								<img src="<?php echo base_url(),'/uploads/'.$mtr->gambar_spesifikasi ?>" class="card-img-top">
 	 							</tr>
                <tr align="center">
                  <td colspan="3"><strong>Angsuran</strong></td>
                </tr>
 	 							<tr>
 	 								<td>23 Bulan</td>
 	 								<td>29 Bulan</td>
 	 								<td>35 Bulan</td>
 	 							</tr>
 	 							<tr class="text-danger">
 	 								<td>Rp <?php echo number_format($mtr->angsuran23,0,',','.')  ?></td>
 	 								<td>Rp <?php echo number_format($mtr->angsuran29,0,',','.') ?></td>
 	 								<td>Rp <?php echo number_format($mtr->angsuran35,0,',','.') ?></td>
 	 							</tr>
 	 						</table>
 	 					</div>	
 	 				</div>
 	 			<?php endforeach; ?>
 	 		</div>
  	</div>

    <!-- Basic Card Example -->
              <div class="card shadow ml-4 mt-3 mr-4">
                <div class="card-header">
                  <h4 class="text-primary">Persyaratan Pengajuan</h4>
                </div>
                <div class="card-body">
                  <p>
                    <strong>
                      <p>Persyaratan Wajib</p>
                      <ul>
                        <li>KTP SUAMI ISTRI <small>(wajib)</small></li>
                        <li>Kartu Keluarga <small>(wajib)</small></li>
                      </ul>
                      <p>Persyaratan Pendukung <small>(Bila Ada)</small></p>
                      <ul>
                        
                        <li>Rek Listrik</li>
                        <li>Bukti Kerja <small>(Slip Gajih / ID Card / Seragam Kerja / Nomor Kantor)</small></li>
                        <li>Bukti Usaha <small>(TEMPAT USAHA )</small></li>
                      </ul>
                    </strong>
                  </p>
                  <p><strong>Note : Rumah Kontrakan Bisa DiBantu</strong></p>
                </div>
              </div>

            </div>
</div>
</div>