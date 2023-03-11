
<?php 
session_start(); 
include "conn.php";

if (isset($_POST['name']) && isset($_POST['parentsName']) && isset($_POST['dateofBirth'])
    && isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $name = validate($_POST['name']);
    $parentsName = validate($_POST['parentsName']);
	$dateofBirth = validate($_POST['dateofBirth']);
	$email = validate($_POST['email']);
    

	$user_data = 'email='. $email. '&name='. $name;

    if (empty($name)) {
        header("Location: coi.php?error= Complete Name is required&$user_data");
        exit();

        if (empty($parentsName)) {
            header("Location: coi.php?error=User Last Name is required&$user_data");
            exit();
        } else if (empty($dateOfBirth)) {
            header("Location: coi.php?error=Date of Birth is required&$user_data");
            exit();
        } else if (empty($email)) {
            header("Location: coi.php?error=Email is required&$user_data");
            exit();
        }
    }
	else{
           $sql2 = "INSERT INTO indigency(name, parentsName, dateofBirth, email) VALUES('$name', '$parentsName', '$dateofBirth', '$email')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: coi.php?success=Your request has been submitted successfully");
	         exit();
           }else {
	           	header("Location: coi.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	else{
	header("Location: coi.php");
	exit();
}

?>
