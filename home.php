 <?php 
  session_start();
              include("include/config.php");
              include("include/db.php");

if (isset($_POST['submit'])) {
      $itemName = $_POST['itemName'];
      $itemModel = $_POST['modelNo'];
      $itemQuantity = $_POST['quantity'];
      $addedBy = $_POST['addedBy'];
      $dateAdded = date("Y-m-d H:i:s");
      $regItems="insert into items_tbl (itemName,modelNo,itemsQuantity,dateAdded,addedBy) values('$itemName','$itemModel','$itemQuantity','$dateAdded','$addedBy')";

      if ($itemQuantity <= 0){
        

       
          echo "<script>alert('Item Quantity Can Not Be Less Than 0');</script>";
             header("location:home.php?msg=". urlencode("error"));
          exit();
              
      } else{

      $runRegItems = mysqli_query($db,$regItems);
      if ($runRegItems) {
          header("location:home.php?msg=". urlencode("Success"));
          exit();
        } 
             else {

          header("location:home.php?msg=". urlencode("There is an error"));
          exit();
        }

      }

    }
 if(!isset($_SESSION['email'])) 
  {header("location:index.php?err=" . urlencode("You Need To Login")); } 
            
        
?>

 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>SSU STORE SYSTEM: ADD NEW RECORD</title>
     <?php include ("include/stylelinks.php") ?>
    

<?php include ("include/container.php") ?>  <!-- this container.php contain header navigation and sidebar navigation menu --> 



<!-- =====================ALL THE PAGE CONTENT BEGING HERE ================================--> 
<!-- =====================ALL THE PAGE CONTENT BEGING HERE ================================--> 
<!-- =====================ALL THE PAGE CONTENT BEGING HERE ================================--> 



    <div class="container body-content">
    <fieldset>
      <?php if (isset($_GET['msg'])) { ?> 

        <?php if($_GET['msg'] == "Success"){
         
            echo '<div class="alert alert-success"><i class="glyphicon glyphicon-ok">Your New item had been Added To the Store</i></div>';

        } else if($_GET['msg'] == "error"){
           echo '<div class="alert alert-danger"><i class="glyphicon glyphicon-remove-sign"> There is a problem adding New item To the Store (make sure item quantity is greating than zero )</i></div>'; 
        }
                     
                      } ?>
      <legend  id="msg">Welcome to Sokoto State University, <strong>Online Store System</strong></legend> 
    <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading" Style="text-align:center;">Sokoto State University, Online Store System</div>

  <!-- Table -->
  <table class="table table-bordered">
    <form action="#" method="post">
   <tr><th>S/N</th>
       <th>Items-Name</th>
       <th>Model-No.</th>
       <th>Item-Quantity</th>
       <th>Category</th>
     </tr>
     <tr><th></th>

       <th><input type="text" name="itemName" placeholder="Name" required></th>
       <th><input type="text" name="modelNo"  placeholder="Model No." required></th>
       <th><input type="number" name="quantity" placeholder="Quantity" required></th>

       <th><select name="addedBy" required>
        <option>Furniture</option>
        <option>Electronics</option>
        <option>Computers</option>
        <option>Drives</option>
        <option>Routers</option>
       </select> </th>
     </tr>
     <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th><input type="submit" value="Register New Items"name="submit"></th>
        
     </tr>
     </form>
  </table>

</div>

  </div>


<!-- =====================ALL THE PAGE CONTENT END HERE ================================--> 
<!-- =====================ALL THE PAGE CONTENT END HERE ================================--> 
<!-- =====================ALL THE PAGE CONTENT END HERE ================================--> 



   <?php include ("include/footer.php") ?> <!-- included the footer file from include folder it contain the footer tag and the closing tags for body and html -->  