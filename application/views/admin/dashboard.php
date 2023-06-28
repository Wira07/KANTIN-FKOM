<div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="<?php echo base_url('assets/images/boxes.png') ?>" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">Total Barang</a></h3>
						<p>Total Semua Barang </p>
						<?php 
							$data = $this->db->get('tb_barang');
                            $total = $data->num_rows();
                        ?>
						<span class="actual"><?php echo $total; ?></span><br>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="<?php echo base_url('assets/images/food.png') ?>" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">Makanan</a></h3>
						<p>Kategori Makanan </p>
						<?php 
							$this->db->where('kategori', "makanan");
							$data = $this->db->get('tb_barang');
                            $total = $data->num_rows();
                        ?>
						<span class="actual"><?php echo $total; ?></span><br>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="<?php echo base_url('assets/images/drink.png') ?>" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">Minuman</a></h3>
						<p>Kategori Minuman </p>
						<?php 
							$this->db->where('kategori', "minuman");
							$data = $this->db->get('tb_barang');
                            $total = $data->num_rows();
                        ?>
						<span class="actual"><?php echo $total; ?></span>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="<?php echo base_url('assets/images/tshirt.png') ?>" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">Pakaian</a></h3>
						<p>Kategori Pakaian </p>
						<?php 
							$this->db->where('kategori', "pakaian");
							$data = $this->db->get('tb_barang');
                            $total = $data->num_rows();
                        ?>
						<span class="actual"><?php echo $total ?></span>
				    </div>
				</a></div>
		 </div>
	   </div>
	  </div>