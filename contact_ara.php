<!DOCTYPE html>
<html lang="en">
<head>
  <title>Brgy. Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  
<style>
 
body {

  background-color:  #e1e8f0;
  font-family: 'Roboto', sans-serif;
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

</style>



</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark" id="navbar-try">
<div class="container">
<i class="fa-solid fa-house"></i>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-light" id="navbarNav">
      <ul class="navbar-nav text-light">
        <li class="nav-item">
          <a class="nav-link pe-5" href="home.php" id="home">Home</a>
        </li>
       
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle pe-5 active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="services">
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
          <a class="nav-link pe-5" href="#child" id="residents">Residents</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="other">
            Others </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="register/registration.php">Registration</a></li>
                <li><a class="dropdown-item" href="#" id="contact">Contact Us</a></li>
                <li><a class="dropdown-item" href="#" id="feedback">Feedback</a></li>
          
            </ul>
        </li>
      </ul>
      <div class="col-6 ms-3 me-5">
      </div>
          <a href="logout.php" class="btn btn-outline-warning ms-5" id="logout">Log out</a>
      </div>
  
  </div>
  
</nav>

<div class="container justify-content-center" id="form">
  <div class="row form-control p-5 d-flex justify-content-center">
    <div class="col-5">
      <h1 class='text-center'>CONTACT US</h1>
          <p class='text-center pb-4'>Please use this form to contact us and we will gte back to you as soon as possible</p>
          <form action="indigency.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
                
                <label class="form-label">Name (Kumpletong Ngaran)</label>
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
                <label class="form-label">Parent's Name (Ngaran kan Magurang)</label>
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
                
                <label class="form-label">SUBJECT</label>
                <?php if (isset($_GET['dateofBirth'])) { ?>
                    <input type="text" 
                            name="dateofBirth" 
                            placeholder="Date of Birth"
                            class="form-control"
                            value="<?php echo $_GET['dateofBirth']; ?>"><br>
                <?php }else{ ?>
                    <input type="text" 
                            name="dateofBirth"
                            class="form-control" 
                            placeholder="Write your insights here."><br>
                <?php }?>

                <div class="row">
                <div class="col-md-12 form-group mb-5">
                  <label for="message" class="col-form-label">Message (Mensahe)</label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message here."></textarea>
                </div>

           <center> <div class="d-flex justify-content-center">
            <button class="btn align-content-center" type="SENDMESSAGE" style="background-color: #3f46ad; color : white;">SENDMESSAGE</button>
            </div></center>
        </form>
       </div>
      
</div>

</div>
</div>
    
</body>
</html>
