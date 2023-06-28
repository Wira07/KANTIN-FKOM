<div class="container-fluid">
<div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top ml-3">
				<div class="row text-center mt-4">

				<?php foreach ($barang as $brg) : ?>					
				<div class="col-md-3 shop_box" style="margin-bottom: 5%;"><a href="single.html">
					 <img src="<?php echo base_url().'uploads/'.$brg->gambar ?>" class="card-img-top" alt="..." height="180px">
					<div class="shop_desc">
						<h3><a href="#"><?php echo $brg->nama_barang ?></a></h3>
						<p><?php echo $brg->keterangan ?> </p>
						<span class="actual"><b>Rp. <?php echo number_format($brg->harga, 0,',','.')  ?></b></span>
						<ul class="buttons">
							<li class="cart"><a href="#"><?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_barang,'Tambah ke keranjang') ?></a></li>
							<li class="shop_btn"><a href="#"><?php echo anchor('dashboard/detail/'.$brg->id_barang,'Detail') ?></a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<?php endforeach; ?>

				</div>
			</div>
		</div>
	</div>
</div>
</div>