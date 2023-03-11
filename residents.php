<?php include "read.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Residents</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<style>

body {

  background-color:  #e1e8f0;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}


#welcome {
  margin-top: -20vh;
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  font-size: 2rem;
}

#nav {
    width: auto;
}
</style>
</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
<<i class="fa-solid fa-house"></i>
    <img src="home.png" alter="home">
    <a class="navbar-brand" href="home.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="coi.php">Certificates of Indegency</a></li>
            <li><a class="dropdown-item" href="coi.php">Barangay Clearance</a></li>
            <li><a class="dropdown-item" href="blotter.php">Online Blotter</a></li>
            <li><a class="dropdown-item" href="permit.php">Business Permit</a></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="residents.php">Residents</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Others </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="register/registration.php">Registration</a></li>
                <li><a class="dropdown-item" href="#">Contact Us</a></li>
                <li><a class="dropdown-item" href="#">Feedback</a></li>
          
            </ul>
        </li>
      </ul>
     
    </div>
    <div class="d-flex">
    <a href="logout.php" class="btn btn-outline-warning" id="logout">Log out</a>
    </div>
  </div>
 
 
</nav>


	<div class="container" style="margin-top: 100px;">
		<div class="box">
			<h4 class="display-5 text-center">Residents</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result) > 0) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
                  <th scope="col">#</th>
			      <th scope="col">First Name</th>
			      <th scope="col">Last Name</th>
			      <th scope="col">Email</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_array($result)){
			  	   $i++;
			  	 ?>
			    <tr>
                 <th scope="row"><?=$i?></th>
			      <td><?=$rows['firstName']?></td>
                  <td><?=$rows['lastName']?></td>
			      <td><?php echo $rows['email']; ?></td>
			      <td><a href="update.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-success">Update</a>
			      	  <a href="delete.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } else {
                echo "waw";} ?>
			<div class="link-right" style="padding: 20px;">
				<a href="registration.php" class="link-primary">Create</a>
			</div>
		</div>
	</div>
  
<div class="container" style="margin-bottom: 200px;">

<form action="search.php" method="GET" class="row g-3">

  <div class="col-sm">
    <input type="text" name="key" value="<?php if(isset($_GET['key'])) {
    echo $_GET['key'];} ?>"class="form-control" placeholder="search words">
  </div>
  <div class="col-sm">
  <button class="btn btn-primary" name="search" type="submit">Search Here</button>
  </div>
</form>
</div>

</div>

<div id="popup" class="modal">
       <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                 <div class="modal-header">
                          <h1>Registration Form</h1>
                  </div>
                 <div class="modal-body">
                 <div class="container">
    <p class='text-center'>Please fill out this form with the required information</p>
    <form action="reg.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          
          <label class="form-label">First Name</label>
          <?php if (isset($_GET['firstName'])) { ?>
               <input type="text" 
                      name="firstName" 
                      placeholder="First Name"
                      class="form-control"
                      value="<?php echo $_GET['firsName']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="firstName" 
                      class="form-control"
                      placeholder="Last Name"><br>
          <?php }?>

          <label class="form-label">User Name</label>
          <?php if (isset($_GET['lastName'])) { ?>
               <input type="text" 
                      name="lastName" 
                      placeholder="Last Name"
                      class="form-control"
                      value="<?php echo $_GET['lastName']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="lastName" 
                      class="form-control"
                      placeholder="Last Name"><br>
          <?php }?>
          
          <label class="form-label">Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" 
                      placeholder="Last Name"
                      class="form-control"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email"
                      class="form-control" 
                      placeholder="Email"><br>
          <?php }?>


     	<label class="form-label">Password</label>
     	<input type="password" 
                 name="password" 
                 class="form-control"
                 placeholder="Password"><br>

          <label class="form-label">Re Password</label>
          <input type="password" 
                 name="re_password"
                 class="form-control" 
                 placeholder="Re_Password"><br>

     	<button class="btn btn-primary" type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</div>
      </div>
                 <div class="modal-footer">
        <p> Popup Footer</p>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close the popup
                               </button>
                       </div>
                </div>
       </div>
</div>
          -->
<div class="container-fluid bg-dark">
    <div class="row" style="padding-top: 20px;">
        <div class="col-2">
        <h5 class="text-light">About Us</h5>
        <p class="text-light">Local Government Unit of Barangay Eme</p>
        </div>
    <div class="col-1">
        <h5 class="text-light">Contact Us</h5>
        <p class="text-light">09161670317</p>
    </div>
    <div class="col-2">
    <h5 class="text-light">Visit us at </h5>
     <p class="text-light">Nowhere St. Uknown City</p>
    </div>
  </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
</script>

</body>
</html>