<?php
include_once('header.php');
?>
<?php include('functions.php') ?>

<div class="container">
  <div class="row">
    <div class="col-md-7">

    </div>
    <div class="col-md-5">
        <div class="row">
          <div class="col-md-6">
            <h2 class="text-left">Registration Form</h2>
          </div>
          <div class="col-md-6">
            <span class="glyphicon glyphicon-pencil"></span>
          </div>
        </div>
          <hr />
          
            <form method="post" action="registration.php">
              <?php echo display_error(); ?>
              <div class="row">
                <label class="label col-md-2 control-label">Full Name</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" placeholder="Enter name" name="name" value ="<?php echo $username; ?>" required>
                </div>
              </div>
              <div class="row">
                <label class="label col-md-2 control-label">Email</label>
                <div class="col-md-10">
                <input type="text" class="form-control" placeholder="Enter Email" name="email" value ="<?php echo $email; ?>" required>
                </div>
              </div>
              <div class="row">
                <label class="label col-md-2 control-label">Password</label>
                <div class="col-md-10">
                <input type="password" class="form-control" placeholder="Password" name="password_1" required>
                </div>
              </div>
              <div class="row">
                <label class="label col-md-2 control-label">Confirm</label>
                <div class="col-md-10">
                <input type="password" class="form-control" placeholder="Confirm Password" name="password_2" required>
                </div>
              </div>
              <div class="row">
                <label class="label col-md-2 control-label">District</label>
                <div class="col-md-10">
                <select name="district" class="form-control" required>
                    <option value=""> - </option>
                    <option value="tvm">Thiruvanathapuram</option>
                    <option value="kollam">kollam</option>
                    <option value="patm">Pathanamthitta</option>
                    <option value="alapuzha">Alapuzha</option>
                    <option value="kotym">Kottayam</option>
                    <option value="idukki">Idukki</option>
                    <option value="ernakulam">Ernakulam</option>
                    <option value="thirssur">Thrissur</option>
                    <option value="palakad">palakad</option>
                    <option value="malapuram">malapuram</option>
                    <option value="kozhikode">kozhikode</option>
                    <option value="wayanad">wayanad</option>
                    <option value="kannur">Kannur</option>
                    <option value="kasargod">Kasargod</option>
                </select>
                </div>
              </div>
              <div class="row">
                <label class="label col-md-3 control-label">Register as </label>
                <div class="col-md-9">
                <select name="user_type" class="form-control" required>
                    <option value=""> - </option>
                    <option value="seller">seller</option>
                    <option value="buyer">buyer</option>
                    <option value="admin">Admin</option>
                </select>
                </div>
              </div>
              
              <button type="submit" name="register_btn" class="btn btn-info">Register</button>

              <div class="row">
                <p class="lead text-center">
                  Already have account? Login now.<br><a href="login.php">
                  <strong>Login Here</strong></a>
                </p>
              </div>
              
            </form>
 
      </div>
          </div>
        </div>
    </div>
      









</div>
</div>