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
    <!-- Code ini sa navbar  -->
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
            <a class="nav-link dropdown-toggle pe-5" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="services">
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
                <a class="nav-link pe-5 active" href="residency.php" id="residents">Residents</a>
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
    <!-- Magdagdag ka after ka ning line na ni -->




</body>
</html>

