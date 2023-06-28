<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" style="margin-bottom: 10px; margin-top: 10px; color: white;" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i><a href="<?php echo base_url('admin/data_barang/tambah') ?>">Tambah Barang</a></button>
	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NAMA BARANG</th>
			<th>KETERANGAN</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th>STOK</th>
			<th colspan="3" style="text-align: center;">AKSI</th>
		</tr>

		<?php 
		$no = 1;
		foreach($barang as $brg) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $brg->nama_barang ?></td>
				<td><?php echo $brg->keterangan ?></td>
				<td><?php echo $brg->kategori ?></td>
				<td><?php echo $brg->harga ?></td>
				<td><?php echo $brg->stok ?></td>
				<td align="center"><?php echo anchor('admin/data_barang/detail/' .$brg->id_barang, '<div class="btn btn-success btn-sm">Detail<i class="fa fa-search-plus"></i></div>') ?></td>
				<td align="center"><?php echo anchor('admin/data_barang/edit/' .$brg->id_barang, '<div class="btn btn-primary btn-sm">Edit</div>') ?></td>
				<td align="center"><?php echo anchor('admin/data_barang/delete/' .$brg->id_barang, '<div class="btn btn-danger btn-sm">Hapus<i class="fa fa-trash"></i></div>') ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
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
</div>