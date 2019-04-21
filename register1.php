<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.bg-img{
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

.bg-img,
.bg-img>*,
.bg-img *,{
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("rog.jpg");

  min-height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.bg-img .container {
  position: left;
  height:50%;
  right: 0;
  margin: 0px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
  opacity:0.7;
}

/* Full-width input fields */
.bg-img input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.bg-img input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.bg-img .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.bg-img .btn:hover {
  opacity: 1;
}


</style>
</head>
<body>


<div class="bg-img">
  <form action="/action_page.php" class="container">
    <h1>Login Here!!</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>



</body>
</html>
