	<?php var_dump($_SESSION)?>
<div class="wrapper">
	<form class="form-signin" action="" method="POST">       
		<h2 class="form-signin-heading text-center">Đăng nhập</h2>

		<input type="text" class="form-control" name="id" placeholder="Mã sinh viên" required="" autofocus="" value="<?php echo set_value('id')?>"/>
		<div class="text-danger"><?php echo form_error('id')?></div>

		<input type="password" class="form-control" name="password" placeholder="Mật khẩu" required="" autofocus="" value="<?php echo set_value('password')?>" /> 
		<div class="text-danger"><?php echo form_error('password')?></div>     

		<button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>   
	</form>
</div>

		