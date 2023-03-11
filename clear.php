
<?php 
session_start(); 
include "../conn.php";

if (isset($_POST['name'])  && isset($_POST['dateofBirth'])
    && isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $name = validate($_POST['name']);
	$dateofBirth = validate($_POST['dateofBirth']);
	$email = validate($_POST['email']);
    

	$user_data = 'email='. $email. '&name='. $name;

    if (empty($name)) {
        header("Location: clearance.php?error= Complete Name is required&$user_data");
        exit();
        } else if (empty($dateofBirth)) {
            header("Location: clearance.php?error=Date of Birth is required&$user_data");
            exit();
        } else if (empty($email)) {
            header("Location: clearance.php?error=Email is required&$user_data");
            exit();
        }
         else{
           $sql2 = "INSERT INTO clear(name, dateofBirth, email) VALUES('$name', '$dateofBirth', '$email')";
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
	header("Location: clearance.php");
	exit();
}

?>
