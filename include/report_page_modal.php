<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="width: 700px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Store Items</h4>
      </div>
      <div class="modal-body">
     <!-- Table -->
  <table class="table table-bordered">
    <form action="#" method="post">
    <?php if (isset($_POST['insect'])){
    $action = $_POST['action'];
    $items =$_POST['items'];
    $nums =$_POST['quantity'];
    $vendorName = $_POST['vendor'];
    $date = date("Y-m-d H:i:s");
    
    

   if ($action == 1) {
    $action = "Deposit";
    transactionLog($vendorName,$items,$nums,$action,$date);
    addQuantity($items,$nums);
    
   
    }
     if ($action == 2 ){
      $action = "Withdraw";
      transactionLog($vendorName,$items,$nums,$action,$date);
     rmQuantity($items,$nums);
     
   }
    
    }
 

    ?>
   <tr><th>Select Item Name</th>
       <th>Item-Quantity</th>
       <th>Vendor</th>
       <th>Actions</th>
     </tr>
     <tr>
      <th>
        <select name="items">
          <option value="0">Select Item</option>
            <?php getItemsName();?>
              
      </select></th>
       <th><input type="number" name="quantity" placeholder="Quantity"></th>
        <th><input type="text" name="vendor" placeholder="Vendor Name"></th>
       <th><select name="action">
             <option value="1" name="deposit">Deposit</option>
             <option value="2" name="withdraw">Withdraw</option>
       </select></th>
     </tr>
     <tr>
     </tr>
     
  </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove-sign"></i>Close</button>
        <button type="submit" class="btn btn-success" name="insect"> <i class="glyphicon glyphicon-floppy-disk"></i> Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>