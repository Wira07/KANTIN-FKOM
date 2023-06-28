<body>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left" style="width: 80%;">
					 <div class="logo">
						<a href="<?php echo base_url('admin/dashboard_admin') ?>"><img src="<?php echo base_url('images/logo.png') ?>" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="<?php echo base_url('images/nav.png') ?>" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="<?php echo base_url('admin/dashboard_admin') ?>">Beranda</a></li>
						    	<li><a href="<?php echo base_url('admin/data_barang') ?>">Data Barang</a></li>
						    	<li><a href="<?php echo base_url('admin/invoice') ?>">Invoices</a></li>
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
								<form action="<?php echo base_url('admin/dashboard_admin/cari') ?>" method="get">
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="cari" id="search">
									<input class="sb-search-submit" type="submit" value="">
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
		           <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	</div>