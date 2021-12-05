<!--
Into this file, we create a layout for login page.
-->

<?php
include_once('header.php');
include_once('link.php');

?>

<div id="frmRegistration">
<form class="form-horizontal" method="POST" action="login_code.php"><br><br>
	<h1>User Login</h1><br><br><br>
	
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>
</div>

<style>
*{
	margin: 0px;
	padding: 0px;
	box-sizing: border-box;
}

body{
	font-size: 20px;
	overflow-x: hidden;
	color: white;
	font-family: 'Flamenco', cursive;
  background-image: url("background.jpg");
  background-size: 200vh;
}

header{
	background-image: url("../imgs/table.jpg") repeat 0 0;
	
	background-repeat: no-repeat;
	background-position: center;
	height: 100vh;
}

.clearfix:after{
	content: ".";
    visibility: hidden;
    display: block;
    height: 0px;
    clear: both;
}

.row{
	max-width: 1180px;
	margin: 0 auto;
}

.logo{
	height: 200px;
	width: auto;
	float: left;
	margin-top: 20px;	
}
.main-nav{
	float: right;
	margin-top: 60px;
}

.main-nav li{
	display: inline-block;
	list-style: none;
	margin-left: 40px;
}

.main-nav li a{
	padding: 5px 0;
	color: #fff;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 90%;
	font-weight: 100;
}

.main-nav li a:hover{
	border-bottom: 2px solid #bf55ec; 
}

.main-content-header{
	width: 900px;
	height: 240px;
	position: absolute;
	/*border: 1px solid red;*/
	top: 60%;
	left: 50%;
	transform: translate(-50%, -50%);

}


</style>