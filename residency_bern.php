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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  
<style>
 
body {

  background-color:  #ffffff;
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
          <a class="nav-link pe-4" href="home.php" id="home">Home</a>
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




  <div class="container p-5 mt-5">
    <div class="row pb-4 border-bottom">
    <h1 class="fw-bold pt-4">Residents List</h1>
    </div>
      
      
      <form class="pb-4 pt-4 border-bottom">
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label pb-4">Name: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="name" placeholder="Kumpletong Ngaran">
          </div>
        </div>
        <div class="form-group row">
          <label for="age" class="col-sm-2 pb-4 col-form-label">Age:</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" id="age" placeholder="Edad">
          </div>
        </div>
        <div class="form-group row">
          <label for="phone" class="col-sm-2 pb-4 col-form-label">Phone Number:</label>
          <div class="col-sm-4">
            <input type="tel" class="form-control" id="phone" placeholder="Telepono">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-2 pb-4 col-form-label">Email Address:</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2"></div>
          <div class="col-sm-4">
            <button type="button" class="btn" id="addBtn" style="background-color: #3f46ad; color : white;">Add Resident</button>
          </div>
        </div>
      </form>
      <div class="row pt-4">
      <table class="table align-middle">
        <thead>
          <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Phone Number</th>
            <th>Email Address</th>
            <th></th>
          </tr>
        </thead>
        <tbody id="residentsTable" class="table-group-divider">
          <tr>
            <td>Bernel Ibalin</td>
            <td>18</td>
            <td>09998765432</td>
            <td>bernelibalin2@gmail.com</td>
            <td><button type="button" class="btn btn-danger deleteBtn">Delete</button>&nbsp<button type="button" class="btn btn-success" id="editBtn">Edit</button>
</td>
          <tr>
            <td>Edzel Sinfuego</td>
            <td>23</td>
            <td>9876543210</td>
            <td>edzelsinfuego4@gmail.com</td>
            <td><button type="button" class="btn btn-danger deleteBtn">Delete</button>&nbsp<button type="button" class="btn btn-success" id="editBtn">Edit</button>
</td>  
          <tr>
            <td>Geral Villar</td>
            <td>21</td>
            <td>09957782345</td>
            <td>geraldvillar14@gmail.com</td>
            <td><button type="button" class="btn btn-danger deleteBtn">Delete</button>&nbsp<button type="button" class="btn btn-success" id="editBtn">Edit</button>
</td>
          <tr>
            <td>Arabela Delvalle</td>
            <td>28</td>
            <td>09567892345</td>
            <td>arabeladelvalle8@gmail.com</td>
            <td><button type="button" class="btn btn-danger deleteBtn">Delete</button>&nbsp<button type="button" class="btn btn-success" id="editBtn">Edit</button>
</td>
          <tr>
            <td>Jannet Bonion</td>
            <td>16</td>
            <td>09978893456</td>
            <td>jannetbonion3@gmail.com</td>
            <td><button type="button" class="btn btn-danger deleteBtn">Delete</button>&nbsp<button type="button" class="btn btn-success" id="editBtn">Edit</button>
</td>
          </tr>
        </tbody>
      </table>
    </div>
      
      
    </div>
  
    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     
   </body>
    <script>
      // Add Resident Button Click Event
      $('#addBtn').click(function(){
  var name = $('#name').val();
  var age = $('#age').val();
  var phoneNumber = $('#phone').val();
  var email = $('#email').val();
  var row = '<tr><td>'+name+'</td><td>'+age+'</td><td>'+phoneNumber+'</td><td>'+email+'</td><td><button type="button" class="btn btn-danger deleteBtn">Delete</button></td></tr>';
  $('#residentsTable').append(row);
  $('#name').val('');
  $('#age').val('');
  $('#phone').val('');
  $('#email').val('');
});
      
      // Delete Resident Button Click Event
      $(document).on('click', '.deleteBtn', function(){
        $(this).closest('tr').remove();
      });

  // Edit Resident Button Click Event
$(document).on('click', '.editBtn', function(){
  // Perform edit functionality here
});



    </script>
</body>
</html>

