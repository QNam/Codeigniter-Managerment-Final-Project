
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
			
		</div>
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<form action="login" method="POST" class="form-group">
				<label>Mã SV: </label>
				<input type="text" name="id" class="form-control" value="<?php echo set_value('id')?>">
				<div class="text-danger"><?php echo form_error('id')?></div>

				<label>Password: </label>
				<input type="text" name="password" class="form-control" value="<?php echo set_value('password')?>">
				<div class="text-danger"><?php echo form_error('password')?></div>

				<button class="btn btn-info" type="submit" name="login">Đăng nhập</button>
			</form>
		</div>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
			
		</div>
	</div>
</div>

