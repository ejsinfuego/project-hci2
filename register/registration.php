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
<style>
 
body {

  background-color:  #e1e8f0;
  font-family: 'Roboto', sans-serif;
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


<div class="container justify-content-center p-5">
  <div class="row form-control p-5 d-flex justify-content-center">
    <div class="col-5">
        <h1 class='text-center'>Registration Form</h1>
          <p class='text-center pb-4'>Please fill out this form with the required information <br> (Simbagan ang hinahagad na maga impormasyon)</p>
          <form action="reg.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
                
                <label class="form-label">First Name (Tinaong Ngaran)</label>
                <?php if (isset($_GET['firstName'])) { ?>
                    <input type="text" 
                            name="firstName" 
                            placeholder="First Name"
                            class="form-control"
                            value="<?php echo $_GET['firstName']; ?>"><br>
                <?php }else{ ?>
                    <input type="text" 
                            name="firstName" 
                            class="form-control"
                            placeholder="First Name"><br>
                <?php }?>

                <label class="form-label">Last Name (Apelyido) </label>
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

                <label class="form-label">Phone Number</label>
                <?php if (isset($_GET['phoneNumber'])) { ?>
                    <input type="integer" 
                            name="phoneNumber" 
                            placeholder="09*********"
                            class="form-control"
                            value="<?php echo $_GET['phoneNumber']; ?>"><br>
                <?php }else{ ?>
                    <input type="integer" 
                            name="phoneNumber" 
                            class="form-control"
                            placeholder="09*********"><br>
                <?php }?>
                
                <label class="form-label">Email</label>
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
                            placeholder="example@gmail.com"><br>
                <?php }?>


            <label class="form-label">Password</label>
            <input type="password" 
                      name="password" 
                      class="form-control"
                      placeholder="Password"><br>

                <label class="form-label">Retype Password</label>
                <input type="password" 
                      name="re_password"
                      class="form-control" 
                      placeholder="Retype Password"><br>
            <div class="d-flex justify-content-center">
              <button class="btn btn-primary" type="submit">Sign Up</button>
             
            </div>
            
            </form>
            <p class="text-center" >or <br> <a href="../index.php" class="ca d-flex justify-content-center text-decoration-none">Already have an account?</a></p>
            
          </div>
        </div>

</div>

  
</body>
</html>
