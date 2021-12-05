<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$fname = $lname = $gender = $email = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO tbluser (Firstname,Lastname,Gender,Email,Password) VALUES ('$fname','$lname','$gender','$email','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}
?>



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