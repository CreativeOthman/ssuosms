  <?php 
              session_start();  //i stated the email session

          include("include/db.php");
    if (isset($_POST['login'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $check_email="select * from user_tbl where email='$email' and password='$password'";
      $run_email = mysqli_query($db,$check_email);

      $result =mysqli_num_rows($run_email);

      if ($result == 1) {

          $_SESSION['email'] = $email;
          header("location:dash.php");  // to redirect the user to the dashboard
          exit();
        } 
             else {

          header("location:index.php?err=". urlencode("incorect email or password"));// else we create a get variable to display the error
          exit();
        }


      }
    
        
?>
 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>SSU: LOGIN Page</title>
  <?php include("include/stylelinks.php");?>


<div class="container">
 <nav class="navbar navbar-inverse navbar-fixed-top" id="header" style="background-color: chartreuse;background: rgba(0, 0, 0, 0) linear-gradient(to right, #008000 32%, #277763 50%, #008300 68%) repeat scroll 0 0;
    border-bottom: 4px solid #e67817;color:white;" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="padding: 0px 15px;"><img src="img/ssufor_the_bold_ribbon.png"></a>
        </div>
   <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>





    <div class="container body-content" style="height: 500px;background: #fff;">
      <div class="row">
        <div class="col-xs-12 col-sm-4"> 
           
          </div>
          <div class="col-xs-12 col-sm-4">
     
            <div class="modal-body" id="login_panel">
           <fieldset>
    <center><legend>ONLINE STORE SYSTEM</legend></center>
     <?php if (isset($_GET['err'])) { ?> 
                     <div class="alert alert-danger"> <?php echo $_GET['err'];?></div> 
                     <?php } ?>
              <form method="post" action="#">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password"id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="checkbox">
                  <label>
                  <input type="checkbox" name="checkbox"> Check me out
                  </label><br/>

                  <div class="info"><a href="forgot.php">Forget Password |</a><a href="register.php"> Register New Account</a></div>
                  </div>
                  <button type="submit" name="login" class="btn btn-default">Login</button>
              </form>
            </div>
            </fieldset> 
             <p style="text-align:center;">Copyright 2016 Ver 1.0</p>
          </div>
          
          <div class="col-xs-12 col-sm-4"> 

           <style type="text/css">
              
           .info {

            background: white;
            color: #000;
            margin-top: 15px;
           }
           .info a{
            color:#000;
           }

           </style>
          </div>
      </div>
    </div>
         <script src="js/demo.js"></script>
<script src="Content/js/jquery.min.js"></script>
<script src="Content/js/bootstrap.js"></script>
   
</body>
</html>
