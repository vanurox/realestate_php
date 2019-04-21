<?php include("header2.php");?>


<!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
<div class="container" style="margin-top: 5%;">
	<div class="row">
		<div class="col-sm-4"> </div>
				<div class="col-md-4">
  
					<h1 class="text-center text-success"> Register yourself with VIVOCASA</h1>
				<br/>

				<div class="col-sm-12">

		<ul class="nav nav-pills" >



		<li class="" style="width:50%"><a class="btn btn-lg btn-default" data-toggle="tab" href="#home">Buy/Sell</a></li>
   
		<li class=" " style="width:48%"><a class=" btn btn-lg btn-default" data-toggle="tab" href="#menu1">Rent</a></li>
	 



	</ul>

			<br/>


		<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
			<form action="#">

  <div class="form-group">
    <label for="UserName">Name</label>
    <input type="text" class="form-control" id="email">
  </div>
  
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>

  <div class="form-group">
    <label for="pwd">Confirm Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>



  <button type="submit" class="btn btn-default btn-lg">Submit</button>
  <button type="submit" class=" pull-right btn-link"><a href="www.google.com">Forget password</a></button>

</form>
<br/>
<a href="#" class="pull-right btn btn-block btn-danger" > Already Register ? Click me   </a>



    </div>

    <div id="menu1" class="tab-pane fade">

<form action="#">

  <div class="form-group">
    <label for="UserName">UserName</label>
    <input type="text" class="form-control" id="email">
  </div>
  
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>

  <div class="form-group">
    <label for="pwd">Confirm Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>



  <button type="submit" class="btn btn-default">Submit</button>

  <button type="submit" class=" pull-right btn-link"><a href="www.google.com">Forget password</a></button>

</form>
<br/>
<a href="#" class="pull-right btn btn-block btn-success" > Already Register ?   </a>


    



    </div>
   </div>
  </div>
</div>
</div>
</div>
<!-- This design is created by manoj chauhan  -->
<?php include("footer.php");?>

