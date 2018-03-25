<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teacher Resgister</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="row">
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<form action="" method="POST" role="form">
				<legend class="text-center">Teacher Resgister</legend>
				<div class="form-row">
				<div class="form-group col-4">
						<label for="">Teacher ID</label>
						<input type="number" class="form-control" id="" placeholder="123">
					</div>

					<div class="form-group col-4">
						<label for="">Name</label>
						<input type="text" class="form-control" id="" placeholder="Nguyễn Văn A">
					</div>
				</div>
			
				<div class="form-group">
      				<label for="inputState">Degree</label>
     				<select id="inputState" class="form-control">
       					<option selected>Doctor</option>
        				<option>Msters</option>
        				<option>...</option>
      				</select>
    			</div>

    			<div class="form-row">
				    <div class="form-group col-4">
				      <label for="inputEmail4">Email</label>
				      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
				    </div>
				    <div class="form-group col-4">
				      <label for="inputPhoneNumber4">Phone Number</label>
				      <input type="number" class="form-control" id="inputPhoneNumber4" placeholder="PhoneNumber">
				    </div>
				</div>
				
				<label for="form-check">Specialized</label>
				<div class="form-check">
					  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
					  <label class="form-check-label" for="exampleRadios1">
					    ...
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
					  <label class="form-check-label" for="exampleRadios2">
					    ...
					  </label>
				</div>

				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" id="" placeholder="">
				</div>
			
				<button type="submit" class="btn btn-primary">ADD</button>
				<button type="reset" class="btn btn-primary">RESET</button>


			</form>
		</div>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>	
	</div>
</body>
</html>