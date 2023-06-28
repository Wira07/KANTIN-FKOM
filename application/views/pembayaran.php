<?php  ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8" style="margin-top: 20px; margin-bottom: 20px;">
			<div class="alert alert-success">
				Silahkan Transfer ke Rekening berikut, BCA : 12345667 a.n Udin <br>
				Bukti Transfer silahkan kirim ke nomor 0895367891
			</div>
			<div class="btn btn-sm btn-success">
				<?php  
				$grand_total = 0;
				if ($keranjang = $this->cart->contents()) {
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}
				echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total, 0,',','.');
			 ?>
			</div><br><br>
			<h3>Input Alamat Pengitiman dan Pembayaran</h3>

			<form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?>">
				
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
				</div>
				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
				</div>
				<div class="form-group">
					<label>Nomor Telepon</label>
					<input type="text" name="telepon" placeholder="Nomor Telepon Anda" class="form-control">
				</div>
				<div class="form-group">
					<label>Metode Pembayaran</label>
					<select class="form-control" name="metode">
						<option value="Cash">Cash</option>
						<option value="Transfer">Transfer</option>
					</select>
				</div>

				<button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>

			</form>

			<?php 
		}else{
			echo "<h4>Keranjan Belanja Anda Masih Kosong";
		} ?>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>