    <?php  include("include/include.php")?>


    <title>UASPS STORE SYSTEM</title>
    <?php include ("include/stylelinks.php") ?>



    <?php include ("include/container.php") ?>  <!-- this container.php contain header navigation and sidebar navigation menu --> 



<!-- =====================ALL THE PAGE CONTENT BEGING HERE ================================--> 
<!-- =====================ALL THE PAGE CONTENT BEGING HERE ================================--> 
<!-- =====================ALL THE PAGE CONTENT BEGING HERE ================================--> 




    <div class="container body-content">
    <fieldset>
     
    <legend  id="msg">Welcome to Sokoto State University, <strong>Online Store System</strong></legend> 
    <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading" Style="text-align:center;">Sokoto State University, Online Store System</div>

<!-- Table -->
  <table class="table table-bordered">
    <form action="#" method="post">
   <tr class="success"><th>S/N</th>
       <th>Items Name</th>
       <th>Model Name/No.</th>
       <th>Quantity in Store</th>
       <th>Date Added</th>
       <th><button type='button'data-toggle='modal' data-target='#myModal' class='btn btn-success'> <i class="glyphicon glyphicon-plus"></i>Action</button></th>
       
     </tr>
<?php  

$displayAll =("SELECT * FROM items_tbl");
$runDisplayAll = mysqli_query($db,$displayAll);

while ($row=mysqli_fetch_array($runDisplayAll)) {
   $sn = $row['SN'];
   $itemsName =$row['itemName'];
   $modelNo = $row['modelNo'];
   $ItemQuantity =$row['itemsQuantity'];
   $addedOn =$row['dateAdded'];
  $_SESSION['sn'] = $sn;
   
   echo"

     <tr><th>$sn</th>

       <th>$itemsName</th>
       <th>$modelNo</th>";
      if ($ItemQuantity <= 0) { echo "
       <th class=' label-danger'>Out of Stock</th>";} else {echo "
       <th >$ItemQuantity</th> ";}
  echo "
       <th>$addedOn</th>
       <th>
       
       </th>
       
     </tr>
     ";

   }
  
   ?>

     </form>
     
  </table>

</div>
     
  </div>
    <?php include ("include/report_page_modal.php") ?> <!-- this file containg the pop page for depositing or widrawing page -->



<!-- =====================ALL THE PAGE CONTENT END HERE ================================--> 
<!-- =====================ALL THE PAGE CONTENT END HERE ================================--> 
<!-- =====================ALL THE PAGE CONTENT END HERE ================================--> 


  <?php include ("include/footer.php") ?> 
