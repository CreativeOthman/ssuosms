 <?php
 session_start();
              include("include/db.php");// this is our database connection details 
              include("include/functions.php");
      
 if(!isset($_SESSION['email']))  // check if user email is registred to our database
  {header("location:index.php?err=" . urlencode("You Need To Login")); } 

  ?>

   <!DOCTYPE html>
<html>
<head>