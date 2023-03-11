<!DOCTYPE html>
<html lang="en">
<head>
  <title>Brgy. Website - Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  
<style>
 
body {

  background-color:  #e1e8f0;
  font-family: 'Montserrat', sans-serif;
  color: #323648;

}

.container .mb-3 {
    padding: 10px;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

#form{
  margin-top: 100px;
  margin-bottom: 100px;
  color: #323648;
}

.navbar {
  background-color: hsl(242,38%,16%);
  height: 80px;
}

.dropdown-menu{

background-color: hsl(242,38%,16%);
}

</style>



</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark fw-bold" id="navbar-try" style="font-family: 'Montserrat', sans-serif;">
<div class="container">
<i class="fa-solid fa-house"></i>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-light" id="navbarNav">
      <ul class="navbar-nav text-light">
        <li class="nav-item ps-4">
          <a class="nav-link pe-4" href="#start" id="home">Home</a>
        </li>
       
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle pe-4" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="services">
            Services
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="coi.php">Certificates of Indegency</a></li>
            <li><a class="dropdown-item" href="clearance.php">Barangay Clearance</a></li>
            <li><a class="dropdown-item" href="blotter.php">Online Blotter</a></li>
            <li><a class="dropdown-item" href="permit.php">Business Permit</a></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link pe-4" href="#statistics" id="residents">Residents</a>
        </li>
   
       
        <li class="nav-item"><a class="nav-link pe-4" href="home.php#contactus" id="contact">Contact Us</a></li>
        <li class="nav-item"><a class="nav-link pe-4" href="home.php#history" id="feedback">History</a></li>
        <li class="nav-item"><a class="nav-link pe-4" href="register/registration.php">Registration</a></li>

  
      </ul>
      <div class="col-4 ms-5 me-4">
      </div>
          <a href="logout.php" class="btn btn-outline-warning" id="logout">Log out</a>
      </div>
  
  </div>
  
</nav>
<div class="container justify-content-center" id="form">
  <div class="row form-control p-5 d-flex justify-content-center">
    <div class="col-5">
      <h1 class='text-center'>Online Blotter</h1>
          <p class='text-center pb-4'>Please fill out this form with the required information</p>
          <form action="indigency.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
                
                <label class="form-label">Name of Complainant (Kumpletong Ngaran)</label>
                <?php if (isset($_GET['name'])) { ?>
                    <input type="text" 
                            name="name" 
                            placeholder="Last Name, First Name, Middle Initial."
                            class="form-control"
                            value="<?php echo $_GET['name']; ?>"><br>
                <?php }else{ ?>
                    <input type="text" 
                            name="name" 
                            class="form-control"
                            placeholder="Last Name, First Name, Middle Initial."><br>
                <?php }?>
                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
                  
                <?php 
		           if(isset($successMsg))
		            {
			          echo "<div class='success-msg'>";
			         print_r($successMsg);
			         echo "</div>";
		          }
	            ?>
		           <label>Complaints:</label>
		
		         <div>
			       <textarea rows="5" cols="60" name="content" required></textarea>
		         </div>
		            </br>
                <label class="form-label"> Name of Complainee (Kumpletong Ngaran)</label>
                <?php if (isset($_GET['parentsName'])) { ?>
                    <input type="text" 
                            name="parentsName" 
                            placeholder="Last Name, First Name, Middle Initial."
                            class="form-control"
                            value="<?php echo $_GET['parentsName']; ?>"><br>
                <?php }else{ ?>
                    <input type="text" 
                            name="parentsName" 
                            class="form-control"
                            placeholder="Last Name, First Name, Middle Initial."><br>
                <?php }?>
                
              

                <label class="form-label">Email / Phone Number</label>
                <?php if (isset($_GET['email'])) { ?>
                    <input type="text" 
                            name="email" 
                            placeholder="example@gmail.com"
                            class="form-control"
                            value="<?php echo $_GET['email']; ?>"><br>
                <?php }else{ ?>
                    <input type="text" 
                            name="email"
                            class="form-control" 
                            placeholder="example@gmail.com / 09*******"><br>
                <?php }?>
            <div class="d-flex justify-content-center">
            <button class="btn align-content-center" type="submit" style="background-color: #3f46ad; color : white;">Submit</button>
            </div>
        </form>
       </div>
       <div class="row pt-5">
      <p class="text-center fst-italic"><b>Disclaimer: </b>An update will be sent to your email or phone number once the processed is completed and the authority will summon the complainee immidiately to take an action to the issue. The Barangay Captain shall summon the respondent/s, with notice to the complainant/s, to appear before him for a mediation of their conflicting interests during the following working day.

</div>

</div>
</div>
    
</body>
</html>
