<div id="popup" class="modal">
       <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                 <div class="modal-header">
                      <p> Popup Header </p>
                       </div>
                 <div class="modal-body">
                 <div class="container">
<h1 class='text-center'>Registration Form</h1>
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