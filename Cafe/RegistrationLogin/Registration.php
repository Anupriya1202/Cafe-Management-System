<!--
Into this file, we create a layout for registration page.
-->
<?php
include_once('header.php');
include_once('link.php');
?>

<div id="frmRegistration">
<form class="form-horizontal" action="registration_code.php" method="POST">
	<h1>User Registration</h1><br><br><br>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">First Name:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
    <div class="col-sm-6">
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Gender:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
	  <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Submit</button>
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
	background-image: url("table.jpg") repeat 0 0;
	background-size:cover;
	background-repeat: no-repeat;
	background-position: center;
	height: 150vh;
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

<script type="text/javascript">
  function formValidation(){
  var firstname = document.registration.firstname;
  var lastname = document.registration.lastname;
  var email = document.registration.email;
  var password = document.registration.password;
  if (allLetter(firstname)) {
    if (allLetter(lastname)) {
      if (ValidateEmail(email)) {
		if (passid_validation(passid, 7, 12)) {
         
        }
      }
    }
  }
return false;
}


function allLetter(firstname) {
  var letters = /^[A-Za-z ]+$/;
  if (fisrtname.value.match(letters)) {
      return true;
  } else {
      alert('Username must have alphabet characters only');
      firstname.focus();
      return false;
  }
}

function allLetter(lastname) {
  var letters = /^[A-Za-z ]+$/;
  if (lastname.value.match(letters)) {
      return true;
  } else {
      alert('Username must have alphabet characters only');
      lastname.focus();
      return false;
  }
}

function ValidateEmail(email) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (email.value.match(mailformat)) {
      return true;
  } else {
      alert("You have entered an invalid email address!");
      email.focus();
      return false;
  }
}



function passid_validation(password, mx, my) {
  var password_len = password.value.length;
  if (password_len == 0 || password_len >= my || password_len < mx) {
      alert("Password should not be empty / length be between " + mx + " to " + my);
      password.focus();
      return false;
  }
  return true;
}


</script>

<script type="text/javascript">
   
   function slideshow(){
      var x = document.getElementById('check-class');
      if(x.style.display === "none"){
        x.style.display="block";
      } else{
        x.style.display="none";
      }
   }
 
 </script>