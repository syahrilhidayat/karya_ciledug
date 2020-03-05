<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/mxking_biru.jpg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/nmax.jpg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/r15_biru.jpg') ?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<h5><strong>Yukz Ajukan Kredit Motor Disini</strong></h5>
  <ul>
    <li>Website kredit Motor Yamaha Termurah seJABODETABEK</li>
    <li>Dapatkan Promo Terbaik Motor Yamaha</li>
    <li>STNK Bisa Dikirim Melalui POS,JNE,JNT,GOJEK/GRAB</li>
    <li>Proses Mudah dan Cepat</li>
    <li><strong>DP Setelah Motor Turun</strong></li>
    <li>Rumah Ngontrak?? , Tenang Saja Bisa Kami Bantu</li>
    <li>Dapatkan DP / Angsurang lebih murah dengan cara mengKLIK ajukan dan mulai negosiasi dengan Mar</li>
    <li>Kami Juga di Support oleh beberapa leasing terbesar dan terpercaya di Indonesia</li>
  </ul>
 <fieldset>
   <h3 class="card-header text-primary mt-3">Leasing Support</h3>
     <div class="row mt-2">
    <?php foreach($leasing as $lsng) : ?> 
    <div class="card ml-3 mb-4 border-bottom-primary" style="width: 20rem;">
      <img src="<?php echo base_url('uploads/'.$lsng->gambar_leasing) ?>" class="card-img-top" alt="...">
    </div>
    <?php endforeach; ?>
   </div>   
 </fieldset> 
 <fieldset>
   <h3 class="card-header text-primary">Lokasi Dealer</h3>
    <div class="row mt-2">
      <iframe src="https://goo.gl/maps/EBHGJfTJpKBfKjWx7"></iframe>
   </div>   
 </fieldset> 
 <br><br><br>
</div> 
