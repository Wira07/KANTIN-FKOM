<?php  ?>
<div class="container-fluid">
	<div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi'; ?>" method="post"	enctype="multipart/form-data">
        	<div class="form-group">
        		<label>Nama Barang</label>
        		<input type="text" name="nama_barang" class="form-control" autocomplete="off">
        	</div>
        	<div class="form-group">
        		<label>Keterangan</label>
        		<input type="text" name="keterangan" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Kategori</label>
        		<select class="form-control" name="kategori">
        			<option>Makanan</option>
        			<option>Minuman</option>
        			<option>Pakaian</option>
        		</select>
        	</div>
        	<div class="form-group">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Stok</label>
        		<input type="text" name="stok" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Gambar</label>
        		<input type="file" name="gambar" class="form-control">
        	</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal"><a href="<?php echo base_url('admin/data_barang') ?>">Close</a></button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
</div>