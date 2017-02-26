<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: chartreuse;background: rgba(0, 0, 0, 0) linear-gradient(to right, #008000 32%, #277763 50%, #008300 68%) repeat scroll 0 0;
    border-bottom: 4px solid #e67817;color:white;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color:white;
text-transform: uppercase;">SOKOTO STATE UNIVERSITY online STORE SYSTEM</a>
        </div>
   <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right" id="nav" style="color: #fff; text-transform: uppercase;">
<?php if(isset($_POST['logout'])){
// remove all session variables
session_unset();
// destroy the session
session_destroy();
header("location:index.php");}
if(isset($_POST['print'])){
echo "<script>window.print();</script>";
}

 ?>
          <?php if (isset($_SESSION['email'])){ echo '<li  > <a  href="#" style="color: #fff;" class="btn btn-danger"><form method="post" action="#"><i class="glyphicon glyphicon-log-out"></i> <input type="submit"name=" logout" class="btn btn-danger"value="logout"></form></a></li>          
            <li class="btn btn-success"><a style="color: #fff;" href="home.php"><i class="glyphicon glyphicon-saved"></i> Register New Item</a></li>

            <li class="btn btn-success"><a style="color: #fff;" href="report.php"><i class="glyphicon glyphicon-briefcase"></i> Manage Items</a></li>


            <li class="btn btn-success"><a  style="color: #fff;" href="tlog.php"><i class="glyphicon glyphicon-bookmark"></i> Transaction Log</a></li>
            <li ><a style="color: #fff;" href="#" class="btn btn-success"><form method="post"><button class="btn btn-primary" name="print"><i class="glyphicon glyphicon-print"> </i></button></form></a></li>
            ';} else { echo '<li><a style="color: #fff;" href="index.php"><i class="glyphicon glyphicon-log-in"></i> Login</a></li>';}?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    