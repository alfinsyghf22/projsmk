<div class="container">
<div class="row mt-3">
	<div class="col-md-6">

		<div class="card">
		  <div class="card-header">
		    Tempat Untuk Menambah Data Baru
		  </div>
		  <div class="card-body">
		  	<?php if( validation_errors() ) : ?>
		  	<div class="alert alert-warning" role="alert">
				 <?= validation_errors(); ?>
				</div> 
			<?php endif; ?>
		  	<form action="" method="post">
		<form>
		  <div class="form-group">
    <label for="exampleInputPassword1">Satuan Barang</label>
    <br>
    <select class="custom-select" name="satuan">
      <option selected>Pilih Satuan</option>
      <option value="1">Buah</option>
      <option value="2">Pcs</option>
      <option value="3">Set</option>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kondisi Barang</label>
    <div class="form-group">
    <br>
    <select class="custom-select" name="kondisi">
      <option selected>Tentukan Kondisi</option>
      <option value="1">Sangat Baik</option>
      <option value="2">Baik</option>
      <option value="3">Rusak Ringan</option>
      <option value="4">Rusak</option>
</select>
  </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah Barang</label>
    <input type="text" class="form-control" placeholder="Jumlah Barang" name="jumlah">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Keterangan</label>
    <input type="text" class="form-control" placeholder="Keterangan Barang" name="keterangan">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-primary">Tambahkan Data!</button>
        </form>
      </div>
    </div>
  </div>
</div>
		</form>
		</form>
		  </div>
		</div>
		

</div>


</div>