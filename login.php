<?php include("header2.php");?>

<style>


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}


</style>



<div class="container" style="margin-top: 8%;margin-bottom:5%">
	<div class="row">
	<div class="col-sm-4">
	</div>
	 
		<div class="col-sm-4 center">
			
					<h1 class="text-center text-success"> </h1>
					<form action="#">

					<div class="form-group">
			<label for="email"><b>Email</b></label>
			<input type="email" placeholder="Enter Email" name="email" required/>
			</div>
		<div class="form-group">
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required/>
			</div>
			<button type="submit" class="btn">Login</button>
  </form>
</div>
<div class="col-sm-4">
	</div>
</div>
</div>




<?php include("footer.php");?>