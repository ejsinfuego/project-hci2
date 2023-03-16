<?php
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Brgy. Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link type="image/png" sizes="96x96" rel="icon" href=".../icons8-contact-info-96.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<style>


body {

  background-color: white;
}

#loginform {
  margin-top: 8rem; 
}
#residents-icon {

  background-color: #e62739;
  border-radius: 50px;
  padding: 20px;
  color: white;
  height: 200px;
}

#about-us {

  background-color: #9068be;
  border-radius: 50px;
  padding: 20px;
  color: white;
  height: 200px;
  
}

#register {

  background-color:  #6ed3cf;
  border-radius: 50px;
  padding: 20px;
  color: white;
  height: 200px;
  
}

.navbar {
  background-color: hsl(242,38%,16%);

  
}

.nav-link {
  color: white;
}

.form-control{

  background-color: #ffffff80;

}
.login-btn{

  border: 1px solid rgb(63,70,173); 
  color: rgb(63,70,173);
}

.login-btn:hover{

  color: #ffffff;
  background-color: rgb(63, 70, 173);
  
}

a:hover {

  color:  rgb(63, 200, 200);

}

.form-control {

 background-color: #ffffff50;

}

label {

  font-family: 'Montserrat', sans-serif;
}

</style>



</head>

<div class="row mb-2 z-0 position-absolute" style="margin-top: -200px;">
  <div class="col" id="loginform">
    <img src="backgroundd.jpg" class="img-fluid" style="height: 800px; opacity: 50%;">
  </div>
 
</div>
<body>

<div class="container-fluid login z-1 position-absolute" style="background-image: linear-gradient(rgba(255, 255, 255, 0) 2%, rgba(255, 255, 255, 1.00)); font-family: 'Montserrat', sans-serif;">
    <div class="row" style="height: 60px;">

    </div>
    <div class="row pt-4 d-flex" style="background-image: linear-gradient(rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1.00)); font-family: 'Monsterrat', sans-serif;" >
      <div class="col-3">
      </div>
        <div class="col-3 ps-2 pt-5 mt-4 z-1"  style="background-image: linear-gradient( rgba(255, 255, 255, 0.0) , rgba(255, 255, 255, 0.0));">
          <img src="https://th.bing.com/th/id/R.f620109cf09c199e74ff5cdc68609608?rik=NH%2ftiz7F1TZBTw&riu=http%3a%2f%2fwww.newdesignfile.com%2fpostpic%2f2016%2f05%2fvector-logo-templates_403097.png&ehk=noSy1RiiCIO3MC3VGzniSWAzCKvExLFgJe4zLJu6dMg%3d&risl=&pid=ImgRaw&r=0" class="ps-4"style="height: 250px;">
          <h4 class="pt-3 fw-bold">Welcome to Brgy. Sample</h4>
        </div>
        <div class="col-4">
            <form action="logins.php" method="post" class="ps-5 pe-5 pt-4">
                <h2 class="pt-4 fw-semibold pb-2" style="text-align: center; font-family: 'Montserrat', sans-serif;">LOGIN</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>

                <?php  } ?>
                <div class="mb-3">
                <label for="FormControlInput1" class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com"></br>
                </div>

                <div class="mb-3">
                <label for="formControlInput2" class="form-label fw-semibold">Password</label>
                <input type="password" name="password" class="form-control" placeholder="********"><br>
                <div class="d-flex justify-content-center">
                <button type="submit" class='btn login-btn'>Login</button>
                </div>
               
                </div>
                <div class="col d-flex justify-content-center">
              <p>or Register <a href="register/registration.php" class="text-decoration-none">here.</a></p>
              </div>

              <div class="col d-flex justify-content-center">
              <a href="register/registration.php" class="text-decoration-none">forgot password?</a>
            </div>
            </form>

        <div class="col-2">

        </div>

            
           
        </div>
        
    </div>
  <div class="row d-flex justify-content-center" style="background-color: white;">
    <div class="col-2"></div>
      <div class="col-8 text-center pt-5 fw-semibold">
         This is the official website of Brgy. Sample where you can check information about the barangay. Residents can create an account where they can request permits and other necessary documents. 
      </div>
    <div class="col-2">
      
    </div>       
  </div>

  <div class="row pt-4" style="background-color: white;">
    <div class="col text-center">
      <a href="#contact" class="text-decoration-none fs-4 fw-bold">Urulay kita?</a>
    </div>
  </div>
     

  <div class="row rounded" style="height: 100px; background-color: white;"></div>

  <div class="row p-5" id="contact">
        <div class="row mt-5 pb-2">
        <div class="col-2"></div>
        <div class="col-4">
          <h1 class="text-left">Urulay kita.</h1>
          <h4 class="text-left">Leave us your comment and suggestion.</h4>
        </div>
        <div class="col-4 ps-5">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fejsinfuego07&tabs=profile&width200&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=219745933957601" width="100" height="130" style="border:none;overflow:hidden;border-radius:5px;width:500px;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
      </div>
  
        <div class="row">
        <div class="col-2"></div>
        <div class="col-4 p-4" style="height: 300px; border-right: 2px solid hsl(242,38%,16%)">
          <form class="form-inline">
          <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="5" placeholder="leave your comments and suggestions here...."></textarea>
          <div class="d-flex justify-content-center">
            <button class="btn" style="background-color: rgb(63,70,173); color: white;" type="submit">Submit</button>
          </div>
          </form>
        </div>
        <div class="col-4">
              <p class="fs-5 ps-3">Leave us your contact information and we will get back to you.</p>
              <div class="mb-3 ps-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control " name="" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
                or<br>
                
                <input type="integer" class="form-control mb-2" name="" id="" aria-describedby="emailHelpId" placeholder="09*********">
                <label for="" class="form-label fw-semibold">Phone Number</label>
  
                <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="2" placeholder="tell us what we can do more... 
  urulay kita..."></textarea>
                <div class="d-flex justify-content-center">
                  <button class="btn" style="background-color: rgb(63,70,173); color: white;" type="submit">Submit</button>
                  
                </div>
                
              </div>
          </div>
          <div class="col-3"></div>
          <div class="col-6 text-center">
            <a type="submit" href="#loginform" class='btn login-btn text-center fw-bold'>CREATE AN ACCOUNT OR LOGIN HERE</a>  
          </div>
          <div class="col-6"></div>
      </div>
  </div>
  <div class="row" style="height:50px;">

  </div>
      
      
     
</div>

      
      
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>

?>
