<?php  ?>
<div class="main">
      <div class="shop_top">
	     <div class="container">
						<form method="post" action="<?php echo base_url('registrasi/index') ?>" class="user"> 
								<div class="register-top-grid">
										<h3>INFORMASI PRIBADI</h3>
										<div>
											<span>Nama<label>*</label></span>
											<input type="text" name="nama"> 
											<?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>') ?>
										</div>
										<div>
											<span>Username<label>*</label></span>
											<input type="text" name="username">
											<?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>') ?> 
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<h3>INFORMASI LOGIN</h3>
										<div>
											<span>Password<label>*</label></span>
											<input type="text" name="password_1">
											<?php echo form_error('password_1', '<div class="text-danger small ml-2">', '</div>') ?>
										</div>
										<div>
											<span>Ulangi Password<label>*</label></span>
											<input type="text" name="password_2">
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<input type="submit" value="submit">
						</form>
					</div>
		   </div>
	  </div>