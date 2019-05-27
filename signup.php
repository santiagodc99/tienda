<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
	function comprobarClave(){
		var a1 = document.form1.pswd.value
		var a2 = document.form1.pswd2.value
		if (a1 == a2)
			document.form1.submit()
		else
			alert("Passwords do not match")
	}
</script>
</head>
<body>

<div class="container">
  <h2>Sign Up</h2>
  <p>Registro de usuario</p>
  <form name="form1"action="uregister.php" class="was-validated" method="POST">
    <div class="form-group">
      <label for="uname">Fisrtname:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Firstname" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname">Lastname:</label>
      <input type="text" class="form-control" id="ulastname" placeholder="Enter Lastname" name="ulastname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="id">Id:</label>
      <input type="number" class="form-control" id="id" placeholder="Enter ID" name="id" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
	<div class="form-group">
      <label for="uname">Gender:</label>
      <select class="form-control" name="gender" >
      <option value='M'>Male</option>
	  <option value='F'>Female</option>
	  <option value='O'>Other</option>
	  </select>
	  <div class="invalid-feedback">Please fill out this field.</div>
	</div>
    <div class="form-group">
      <label for="uname">Email:</label>
      <input type="email" class="form-control" id="uemail" placeholder="Enter email" name="uemail" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Confirmar password:</label>
      <input type="password" class="form-control" id="pwd2" placeholder="Enter password" name="pswd2" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="img">Image:</label><br>
      <input type="file" id="image" name="image" accept="image/png, .jpeg, .jpg, image/gif">
    </div>
    <button type="button" class="btn btn-primary" onClick="comprobarClave()">Register</button>
  </form>
</div>

</body>
</html>
