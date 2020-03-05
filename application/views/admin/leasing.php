<div class="container-fluid">
  <div class="btn btn-primary mt-4 ml-2" data-toggle="modal" data-target="#data_leasing">
    <i class="fas fa-plus fa-sm">Tambah Data</i>
  </div>
  <div class="card shadow ml-2 mt-3">
       <div class="card-header">
          <h4 class="text-primary">Leasing Support</h4>
            <div class="row">    
              <?php foreach($leasing as $lsng) : ?>
              <div class="card ml-3 mt-5 border-bottom-primary"  style="width: 20rem;"  max-width="300px" max-heigth="300px">
              <img src="<?php echo base_url().'/uploads/'.$lsng->gambar_leasing ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <?php echo anchor('admin/leasing/delete/'.$lsng->id_leasing,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
              </div>
              </div>

            <?php endforeach; ?>
          </div>
       </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="data_leasing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Leasing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'admin/leasing/tambah_data'; ?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Leasing</label>
            <input type="text" name="nama_leasing" class="form-control">
          </div>
          <div class="form-group">
            <label>Gambar Leasing</label>
            <input type="file" name="gambar_leasing" class="form-control">
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
</div>