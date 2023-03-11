
<?php 
session_start(); 
include "conn.php";

if (isset($_POST['name'])  && isset($_POST['businessName'])
    && isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $name = validate($_POST['name']);
	$businessName = validate($_POST['businessName']);
	$email = validate($_POST['email']);
    

	$user_data = 'email='. $email. '&name='. $name;

    if (empty($name)) {
        header("Location: permit.php?error= Complete Name is required&$user_data");
        exit();
        } else if (empty($businessName)) {
            header("Location: permit.php?error=Busines Nam is required&$user_data");
            exit();
        } else if (empty($email)) {
            header("Location: permit.php?error=Email is required&$user_data");
            exit();
        }
         else{
           $sql2 = "INSERT INTO permit(name, businessName, email) VALUES('$name', '$businessName', '$email')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: clearance.php?success=Your request has been submitted successfully");
	         exit();
           }else {
	           	header("Location: clearance.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
    }      
    else{
	header("Location: permit.php");
	exit();
}

?>
