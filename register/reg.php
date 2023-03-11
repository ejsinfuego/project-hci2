
<?php 
session_start(); 
include "..\conn.php";

if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['phoneNumber'])
    && isset($_POST['password']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $firstName = validate($_POST['firstName']);
    $lastName = validate($_POST['lastName']);
    $lastName = validate($_POST['number']);
	$email = validate($_POST['email']);
    $phoneNumber = validate($_POST['phoneNumber']);
	$password = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
    

	$user_data = 'email='. $email. '&name='. $firstName;

    if (empty($firstName)) {
        header("Location: registration.php?error=First Name is required&$user_data");
        exit();

        if (empty($lastName)) {
            header("Location: registration.php?error=Last Name is required&$user_data");
            exit();
        } else if (empty($password)) {
            header("Location: registration.php?error=Password is required&$user_data");
            exit();
        } else if (empty($email)) {
            header("Location: registration.php?error=Email is required&$user_data");
            exit();
        } else if (empty($phoneNumber)) {
            header("Location: registration.php?error=Phone Number is required&$user_data");
            exit();
        } else if (empty($re_pass)) {
            header("Location: registration.php?error=Re Password is required&$user_data");
            exit();
        } else if ($password !== $re_pass) {
            header("Location: registration.php?error=The confirmation password  does not match&$user_data");
            exit();
        }
    }
	else{

		// hashing the password
        $password = md5($password);

	    $sql = "SELECT * FROM users WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: registration.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(firstname, lastname, email, phoneNumber, password) VALUES('$firstName', '$lastName', '$email', '$phoneNumber','$password')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: registration.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: registration.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: registration.php");
	exit();
}

?>
