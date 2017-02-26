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
   <tr class="success"><th>T/ID</th>
       <th>Vendor Name</th>
       <th>Item Name/No.</th>
       <th>Quantity in Store</th>
       <th>Item Added/Removed</th>
       <th>Items Left</th>
       <th>T type</th>
       <th>Date Added</th>
       
     </tr>
<?php  

$displayAll =("SELECT * FROM transactions");
$runDisplayAll = mysqli_query($db,$displayAll);

while ($row=mysqli_fetch_array($runDisplayAll)) {
   $sn = $row['TransactionsId'];
   $vendorName =$row['vendorName'];
   $itemName = $row['itemName'];
   $ItemQuantity =$row['oldQuantity'];
   $inputedItems =$row['NoItemsReceved'];
   $leftInStore =$row['newQuantity'];
   $Ttype = $row['tType'];
   $addedOn =$row['tdate'];
  $_SESSION['sn'] = $sn;
   
   echo"
     <tr><th>$sn</th>
       <th>$vendorName</th>
       <th>$itemName</th>
       <th>$ItemQuantity</th>
       <th>$inputedItems</th>
       <th >$leftInStore</th> 
       <th>$Ttype</th>
       <th>$addedOn</th>
     </tr>
     ";

   }
  
   ?>

     </form>
     
  </table>

</div>
<fieldset>
 
     
  </div>

  </div>
</div>

<!-- =====================ALL THE PAGE CONTENT END HERE ================================--> 
<!-- =====================ALL THE PAGE CONTENT END HERE ================================--> 
<!-- =====================ALL THE PAGE CONTENT END HERE ================================--> 





<?php include ("include/footer.php") ?>