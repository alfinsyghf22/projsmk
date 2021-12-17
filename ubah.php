<div class="container">
<div class="row mt-3">
	<div class="col-md-6">

		<div class="card">
		  <div class="card-header">
		    Ubah Data
		  </div>
		  <div class="card-body">
		  	<?php if( validation_errors() ) : ?>
		  	<div class="alert alert-warning" role="alert">
				 <?= validation_errors(); ?>
				</div> 
			<?php endif; ?>

		<form action="<?= base_url() ?>barang/ubah/<?= $master_barang['kode_barang'] ?>" method="post">
			<input type="hidden" name="kode_barang" value="<?= $master_barang['kode_barang']; ?>"> 
		  <div class="form-group">
		    <label for="nama_barang">Masukan Nama Barang</label>
		    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $master_barang['nama_barang'];?>">
		    <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
		    <label for="nama_barang">Masukan Jumlah Barang</label>
		    <input type="text" class="form-control" id="satuan" name="satuan" value="<?= $master_barang['satuan'];?>">
		    <small class="form-text text-danger"><?= form_error('satuan'); ?></small>
		    <label for="nama_barang">Masukan Jumlah Barang</label>
		    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $master_barang['keterangan'];?>">
		    <small class="form-text text-danger"><?= form_error('satuan'); ?></small>
		  </div>
		  <button type="submit" name="tambah" class="btn btn-danger"> Ubah Data</button>
		</form>
		  </div>
		</div>
	</div>
</div>
