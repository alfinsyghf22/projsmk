<div class="container">
	<div class="row mt-4">
		<div class="col -md-6">
		
		<div class="card">
		  <div class="card-header">
		    Detail Barang
		  </div>
		  <div class="card-body">
		    <blockquote class="blockquote mb-0">
		    	<h5 class="card-title"><?= $master_barang['nama_barang']; ?></h5>
		      <p class="card-text"> <b>Rp. <?= $master_barang['satuan']; ?>.-</b></p>
		       <p class="card-text"> <b>Rp. <?= $master_barang['keterangan']; ?>.-</b></p>
		      <footer class="blockquote-footer"> Terima Kasih Telah Berkunjung dan Memesan Makanan di KEDAI EXPERIMENT</footer>
		      <a href="<?= base_url(); ?>barang" class="btn btn-primary" style="margin-top: 20px">Kembali!</a>
		    </blockquote>
		  </div>
		</div>


		</div>
	</div>
</div>