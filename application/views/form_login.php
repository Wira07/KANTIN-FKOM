<div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="col-md-6">
				<div class="login-page">
					<h4 class="title">Customer Baru Kantin FKOM</h4>
					<p>Jika anda belum memiliki akun, silahkan daftar terlebih dahulu yaa :)</p>
					<div class="button1">
					   <a href="<?php echo base_url('registrasi/index') ?>"><input type="submit" name="Submit" value="Create an Account"></a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
				<div class="col-md-6">
				<div class="login-title">
	           		<h4 class="title">Login</h4>
	           		<?php echo $this->session->flashdata('pesan') ?>
					<div id="loginbox" class="loginbox">
						<form action="<?php echo base_url('auth/login') ?>" method="post" name="login" id="login-form" class="user">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">Username</label>
						      <input id="modlgn_username" type="text" name="username" class="inputbox" size="18" autocomplete="off">
						      <?php echo form_error('username', '<div class="text-danger small ml-2">','</div>'); ?>
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">Password</label>
						      <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off">
						      <?php echo form_error('password', '<div class="text-danger small ml-2">','</div>'); ?>
						    </p>
						    <div class="remember">
							    
							    <input type="submit" name="Submit" class="button" value="Login"><div class="clear"></div>
							 </div>
						  </fieldset>
						 </form>
					</div>
			      </div>
				<div class="clear"></div>
				</div>
		</div>
	</div>
</div>