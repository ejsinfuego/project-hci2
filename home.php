<!DOCTYPE html>
<html lang="en">
<head>
  <title>Brgy. Website - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<style>

body {

  background-color:   #ffffff;
  padding-top: 10px;
}

nav {

  font-family: 'Monsterrat', sans-serif;

}

.carousel-item > img:hover {

  z-index: 1;
  height: 100%; 
  cursor: pointer;

}

.navbar {
  background-color: hsl(242,38%,16%);
  height: 80px;
  
}
.dropdown-menu{

  background-color: hsl(242,38%,16%);


}

.single_advisor_profile {
    position: relative;
    margin-bottom: 50px;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    z-index: 1;
    border-radius: 15px;
    -webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
    box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
   
}
.single_advisor_profile .advisor_thumb {
    position: relative;
    z-index: 1;
    border-radius: 15px 15px 0 0;
    margin: 0 auto;
    padding: 30px 30px 0 30px;
    background-color: hsl(242,38%,35%);
    overflow: hidden;
    margin-top: 40px;
}
.single_advisor_profile .advisor_thumb::after {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    position: absolute;
    width: 150%;
    height: 80px;
    bottom: -45px;
    left: -25%;
    content: "";
    background-color: hsl(242,38%,35%);
    -webkit-transform: rotate(-15deg);
    transform: rotate(-15deg);
}
@media only screen and (max-width: 575px) {
    .single_advisor_profile .advisor_thumb::after {
        height: 160px;
        bottom: -90px;
    }
}
.single_advisor_profile .advisor_thumb .social-info {
    position: absolute;
    z-index: 1;
    width: 100%;
    bottom: 0;
    right: 30px;
    text-align: right;

  
}
.single_advisor_profile .advisor_thumb .social-info a {
    font-size: 14px;
    color: #ffffff;
    padding: 0 5px;
}
.single_advisor_profile .advisor_thumb .social-info a:hover,
.single_advisor_profile .advisor_thumb .social-info a:focus {
    color:#ffffff;
    
}
.single_advisor_profile .advisor_thumb .social-info a:last-child {
    padding-right: 0;
}
.single_advisor_profile .single_advisor_details_info {
    position: relative;
    z-index: 1;
    padding: 30px;
    text-align: right;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    border-radius: 0 0 15px 15px;
    background-color: hsl(242,38%,35%);
    color: #ffffff;
}
.single_advisor_profile .single_advisor_details_info::after {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    position: absolute;
    z-index: 1;
    width: 50px;
    height: 3px;
    background-color: #ffffff;
    content: "";
    top: 12px;
    right: 30px;
}
.single_advisor_profile .single_advisor_details_info h6 {
    margin-bottom: 0.25rem;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single_advisor_profile .single_advisor_details_info h6 {
        font-size: 14px;
    }
}
.single_advisor_profile .single_advisor_details_info p {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    margin-bottom: 0;
    font-size: 14px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single_advisor_profile .single_advisor_details_info p {
        font-size: 12px;
    }
}
.single_advisor_profile:hover .advisor_thumb::after,
.single_advisor_profile:focus .advisor_thumb::after {
    background-color: #070a57;
}
.single_advisor_profile:hover .advisor_thumb .social-info a,
.single_advisor_profile:focus .advisor_thumb .social-info a {
    color: #ffffff;
}
.single_advisor_profile:hover .advisor_thumb .social-info a:hover,
.single_advisor_profile:hover .advisor_thumb .social-info a:focus,
.single_advisor_profile:focus .advisor_thumb .social-info a:hover,
.single_advisor_profile:focus .advisor_thumb .social-info a:focus {
    color: #ffffff;
    
}
.single_advisor_profile:hover .single_advisor_details_info,
.single_advisor_profile:focus .single_advisor_details_info {
    background-color: #070a57;
}
.single_advisor_profile:hover .single_advisor_details_info::after,
.single_advisor_profile:focus .single_advisor_details_info::after {
    background-color: #ffffff;
}
.single_advisor_profile:hover .single_advisor_details_info h6,
.single_advisor_profile:focus .single_advisor_details_info h6 {
    color: #ffffff;
}
.single_advisor_profile:hover .single_advisor_details_info p,
.single_advisor_profile:focus .single_advisor_details_info p {
    color: #ffffff;
}

.stats {
  
    padding: 30px;
    border-radius: 15px 15px;
    margin-bottom: 50px;
    height: 150px;
    box-shadow: 0 0.25rem 1rem 0 rgba(80, 87, 104, 0.4);
    margin-top: 30px;
}

.hovers {

  background-color: white;
  color: black;
}


#stats {
    margin-top: 50px;
}

.carouselExampleAutoplaying {

  float: right;
}

#history-text {

  float: none;
}


</style>

</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">

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
   
       
        <li class="nav-item"><a class="nav-link pe-4" href="#contactus" id="contact">Contact Us</a></li>
        <li class="nav-item"><a class="nav-link pe-4" href="#history" id="feedback">History</a></li>
        <li class="nav-item"><a class="nav-link pe-4" href="register/registration.php">Registration</a></li>

  
      </ul>
      <div class="col-4 ms-5 me-4">
      </div>
          <a href="logout.php" class="btn btn-outline-warning" id="logout">Log out</a>
      </div>
  
  </div>
  
</nav>

<div class="row" id="start" style="height: 50px;"></div>

<div class="container p-5" id="profiles">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <h1 style="font-family: 'Montserrat', sans-serif;" class="fw-semibold">Our Barangay<span> Officials</span></h1>
              <div class="line"></div>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>PaoLUL</h6>
                <p class="designation">Barangay Captain</p>
              </div>
            </div>
          </div>

          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Peter Parker</h6>
                <p class="designation">Secretary</p>
              </div>
            </div>
          </div>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Pewdipie</h6>
                <p class="designation">Treasurer</p>
              </div>
            </div>
          </div>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Luis Manzano</h6>
                <p class="designation">Councilor</p>
              </div>
            </div>
          </div>
        </div>
      </div>

  <div class="container mb-5 pb-5" id="statistics" style="height: 10px; margin-bottom: 40px;"></div>
  <div class="container rounded p-5" style="background-color: hsl(242,38%,56%); color: white; height: 600px;  font-family: 'Montserrat', sans-serif;">
        <div class="row">
            <h1 class="text-center pt-5 fw-bold">Statistics</h1>
            <p class="text-center">Hover the cursor on text to see details</p>
            <!-- Row for Dashboards Statistics /-->
        </div>
        <div class="row text-center">
              <div class="col-3 rounded">
              <div class="stats stats-1">
                  <img src="elder.svg" id="icon" style="height: 50px;">
                  <h4>Senior Citizens</h4>
                  <p class="text-center" id="description-e" hidden>There are 632 Senior Citizens as of November 2022.</p>
              </div>
              </div>

              <div class="col-3">
                <div class="stats stats-2">
                  <img src="student.svg" id="icon-2" style="height: 45px;">
                  <h4>Students</h4>
                  <p class="text-center" id="description-s" hidden>There are 4,028 students as of November 2022</p>
                </div>
              </div>

              
              <div class="col-3">
                <div class="stats stats-3">
                  <img src="handicap.svg" style="height: 44px;" class="p-1" id="icon-3">
                  <h4>PWDs</h4>
                  <p class="text-center" id="description-p" hidden>There are 168 PWDs as of the November 2022</p>
                </div>
              </div>


              <div class="col-3">
              <div class="stats stats-4">
                  <img src="children.svg" id="icon-4" style="height: 50px;">
                  <h4>Children</h4>
                  <p class="text-center" id="description-c" hidden>There are 3,828 children as of the November 2022</p>
              </div>
              </div>
              
        </div>
        <div class="row pt-5">
          <p class="text-center fs-4">As of January 2023 there are a total of 5,234 population in this barangay</p>
        </div>
        </div>
      <div class="container" id="history">
        <div class="row" style="height: 50px;"></div>
        <img src="https://th.bing.com/th/id/R.f620109cf09c199e74ff5cdc68609608?rik=NH%2ftiz7F1TZBTw&riu=http%3a%2f%2fwww.newdesignfile.com%2fpostpic%2f2016%2f05%2fvector-logo-templates_403097.png&ehk=noSy1RiiCIO3MC3VGzniSWAzCKvExLFgJe4zLJu6dMg%3d&risl=&pid=ImgRaw&r=0"  class="rounded mx-auto d-block pt-3" style="height: 100px;">
        <div class="row d-flex justify-content-center">
          <h1 class="text-center pt-3">Our History</h1>
          <div class="col-8">
            
          <div id="carouselExampleAutoplaying" class="carousel slide pt-5" data-bs-ride="carousel" data-bs-interval = "3000" style="float: left; width: 50%; padding: 10px;">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://images7.alphacoders.com/687/687050.jpg" class="w-100 rounded" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://www.tripbibo.com/blog/wp-content/uploads/2021/05/The-16-Most-Beautiful-Villages-In-India.jpg" class="w-100 rounded" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://th.bing.com/th/id/OIP.fNgVhIjH89FoMtyAKRi7YgHaEu?pid=ImgDet&rs=1" class="w-100 rounded" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
          </div>
            <p class="text-right pt-5 pb-5 col" id="history-text" style="float: none;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet rhoncus ante ullamcorper aliquet. Aenean fringilla lorem massa, a ornare justo tincidunt in. Integer ornare vestibulum ex, vitae imperdiet est. Etiam congue fermentum eros id tempus. Nunc in massa felis. Morbi eu nulla faucibus, sodales orci eu, semper leo. Vivamus euismod, ligula molestie molestie consectetur, leo odio eleifend turpis, ac suscipit enim quam elementum eros. Sed nec fermentum libero. Praesent elementum, elit eu tempus tempus, ipsum justo viverra erat, in gravida purus quam accumsan nunc. Aliquam ac euismod justo.<br><br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet rhoncus ante ullamcorper aliquet. Aenean fringilla lorem massa, a ornare justo tincidunt in. Integer ornare vestibulum ex, vitae imperdiet est. Etiam congue fermentum eros id tempus. Nunc in massa felis. Morbi eu nulla faucibus, sodales orci eu, semper leo. Vivamus euismod, ligula molestie molestie consectetur, leo odio eleifend turpis, ac suscipit enim quam elementum eros. Sed nec fermentum libero. Praesent elementum, elit eu tempus tempus, ipsum justo viverra erat, in gravida purus quam accumsan nunc. Aliquam ac euismod justo.
            
          </p>
         
          </div>
      
      </div>

    <div class="container pt-5 rounded" style="background-color: rgba(0, 0, 0, 0.04);" id="contactus">
        
        <div class="row mt-5" style="height: 10px;">
     
        </div>
 
      <div class="row mt-5">
        <div class="col-2"></div>
        <div class="col-4">
          <h1 class="text-left">We want to hear from you!</h1>
          <h4 class="text-left">Leave us your comment and suggestion.</h4>
        </div>
        <div class="col-4 ps-5">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fejsinfuego07&tabs=profile&width100&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=219745933957601" width="500" height="130" style="border:none;overflow:hidden;border-radius:5px;width:500px;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
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
                <label for="" class="form-label">Phone Number</label>
  
                <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="2" placeholder="tell us what we can do more... 
  urulay kita..."></textarea>
                <div class="d-flex justify-content-center">
                  <button class="btn" style="background-color: rgb(63,70,173); color: white;" type="submit">Submit</button>
                </div>
              </div>
          </div>
  
        
      </div>
      <div class="row p-5">
            <div class="col">

            </div>
            </div>
          </div>
         
      </div>
      
        
        
    </div>






</body>

<script>
  $(document).ready(function(){

    $('.stats-1').hover(function(){

      $("#description-e").removeAttr("hidden")
      $('.stats-1').css({"background-color" : "hsl(242,78%,70%)", "color" : "black" , "height" : "200px", "-webkit-transition-duration" : "500ms", "transition-duration" : "500ms" })
      $('#icon').attr("src", "elder-black.svg");},  
      function() {

        $('#description-e').attr("hidden" , "true");
        $('.stats-1').removeAttr("style")
        $('.stats-1').css({"-webkit-transition-duration" : "400ms", "transition-duration" : "400ms" })
        $('#icon').attr("src", "elder.svg");
        
      
    });

    $('.stats-2').hover(function(){

        $("#description-s").removeAttr("hidden")
        $('.stats-2').css({"background-color" : "hsl(242,78%,70%)", "color" : "black" , "height" : "200px", "-webkit-transition-duration" : "500ms", "transition-duration" : "500ms" , "cursor" : "pointer"})
        $('#icon-2').attr("src", "student-black.svg");},

        function() {

        $('#description-s').attr("hidden" , "true");
        $('.stats-2').removeAttr("style")
        $('.stats-2').css({"-webkit-transition-duration" : "400ms", "transitio-duration" : "400ms" })
        $('#icon-2').attr("src", "student.svg");
      
    });

    $('.stats-3').hover(function(){

      $("#description-p").removeAttr("hidden")
      $('.stats-3').css({"background-color" : "hsl(242,78%,70%)", "color" : "black" , "height" : "200px", "-webkit-transition-duration" : "500ms", "transitio-duration" : "500ms", "cursor" : "pointer" })
      $('#icon-3').attr("src", "handicap-black.svg");},

      function() {

      $('#description-p').attr("hidden" , "true");
      $('.stats-3').removeAttr("style")
      $('.stats-3').css({"-webkit-transition-duration" : "400ms", "transition-duration" : "400ms" });
      $('#icon-3').attr("src", "handicap.svg")
    });

    $('.stats-4').hover(function(){

      $("#description-c").removeAttr("hidden")
      $('.stats-4').css({"background-color" : "hsl(242,78%,70%)", "color" : "black" , "height" : "200px", "-webkit-transition-duration" : "500ms", "transition-duration" : "500ms", "cursor" : "pointer" })
      $('#icon-4').attr("src", "children-black.svg");},

      function() {

      $('#description-c').attr("hidden" , "true");
      $('.stats-4').removeAttr("style")
      $('.stats-4').css({"-webkit-transition-duration" : "400ms", "transition-duration" : "400ms" });
      $('#icon-4').attr("src", "children.svg");
    });    
  });
</script>
</html>
