<body>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left" style="width:90%;">
					 <div class="logo">
						<a href="<?php echo base_url('dashboard') ?>"><img src="<?php echo base_url('images/logo.png') ?>" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="<?php echo base_url('images/') ?>" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="<?php echo base_url('kategori/beranda') ?>">Beranda</a></li>
						    	<li><a href="<?php echo base_url('kategori/makanan') ?>">Makanan</a></li>
						    	<li><a href="<?php echo base_url('kategori/minuman') ?>">Minuman</a></li>
						    	<li><a href="<?php echo base_url('kategori/pakaian') ?>">Pakaian</a></li>		
						    	<li><a>||</a></li>
						    	<?php if($this->session->userdata('username')) { ?>
						    	<li><b>Selamat Datang <?php echo $this->session->userdata('username') ?></b></li>
						    	<li><a>|</a></li>						
						    	<?php echo anchor('auth/logout', 'Logout') ?></li>
                                    <?php } else { ?>
                                        <li><?php echo anchor('auth/login', 'Login') ?></li>

                                    <?php } ?>
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="<?php echo base_url('js/responsive-nav.js') ?>"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form action="<?php echo base_url('dashboard/cari') ?>" method="get" >
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="cari" id="search">
									<input class="sb-search-submit" type="submit" value="cari">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="<?php echo base_url('js/classie.js') ?>"></script>
						<script src="<?php echo base_url('js/uisearch.js') ?>"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->

				    <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#"> </a>
						<ul class="sub-icon1 list">
						  <div class="product_control_buttons">
						  	<a href="#"><img src="<?= base_url('images/edit.png') ?>" alt=""/></a>
						  		<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"><img src="<?php echo base_url('images/close_edit.png') ?>" alt=""/></a>
						  </div>
						   <div class="clear"></div>
						  <?php 
						  foreach ($this->cart->contents() as $items) : ?>

						  <li class="list_desc" style="margin-bottom: 25px;"><h4><a href="#"><?php echo $items['name'] ?></a></h4><span class="actual"></span></li>
                          <li class="list_desc"><h4><?php echo $items['qty'] ?> x
                          Rp. <?php echo number_format($items['price'], 0,',','.')?></h4></li>
                          <li class="list_desc"><h4>Rp. <?php echo number_format($items['subtotal'], 0,',','.')?></h4></li>

						  <?php endforeach; ?>
						  <div class="login_buttons">
							 <div class="check_button"><a href="<?php echo base_url('dashboard/pembayaran') ?>">Pembayaran</a></div>
							 <div class="login_button"><a href="<?php echo base_url('dashboard/index') ?>">Belanja</a></div>
							 <div class="clear"></div>
						  </div>

						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>

		           <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	</div>