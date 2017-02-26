<?php
$host ="localhost";
$db_user="root";
$db_password ="";
$db_name ="cststore";

$db = mysqli_connect($host,$db_user,$db_password, $db_name);


//function for getting topics 
		function getItemsName(){
		global $db;
		
		$get_items = "SELECT * FROM items_tbl"; 
		$run_items = mysqli_query($db,$get_items);
					
		while($row=mysqli_fetch_array($run_items)) {				
		$sn = $row['SN'];
        $itemsName = $row['itemName'];		
		echo "<option value='$sn'>$itemsName</option>";
			}
		}
//function for Adding items quantity 
		function addQuantity($id,$quantity){
		global $db;
		$get_quantity= "SELECT itemsQuantity FROM items_tbl where SN = '$id'";
        $run_getQuantity = mysqli_query($db,$get_quantity);
       while ($row = mysqli_fetch_array($run_getQuantity)){ 
       	$quantityrow = $row['itemsQuantity'];
       	$totalQ = $quantityrow + $quantity;
        echo "$totalQ";}
		$insertQuantity = "UPDATE `items_tbl` SET `itemsQuantity` ='$totalQ' WHERE `SN` ='$id'";
		$run_insert = mysqli_query($db,$insertQuantity);
		if ($run_insert) {
			echo("<script>alert('Your Infomation Had Been Updated')</script>");
			
			
		}
	
		}
//function for Removing items quantity 
		function rmQuantity($id,$quantity){
		global $db;
		$get_quantity= "SELECT itemsQuantity FROM items_tbl where SN = '$id'";
        $run_getQuantity = mysqli_query($db,$get_quantity);
       while ($row = mysqli_fetch_array($run_getQuantity)){ 
       	$quantityrow = $row['itemsQuantity'];
       	$totalQ = $quantityrow - $quantity;
        }
        if ($totalQ < 0 ){ echo("<script>alert('Your Items is Out of Stock')</script>"); }
     else {
		$insertQuantity = "UPDATE `items_tbl` SET `itemsQuantity` ='$totalQ' WHERE `SN` ='$id'";
		$run_insert = mysqli_query($db,$insertQuantity);
		if ($run_insert) {
			echo("<script>alert('Your Infomation Had Been Updated')</script>");
			
			}
		} 
											}
//Funtions fo adding Transaction Log
		function transactionLog($vendorName,$itemName,$newQuantity,$tType,$date){
		global $db;
		$get_quantity= "SELECT itemsQuantity FROM items_tbl";
        $run_getQuantity = mysqli_query($db,$get_quantity);
        while ($row = mysqli_fetch_array($run_getQuantity)){ 
       	$quantityrow = $row['itemsQuantity'];}

       	$get_ItemsName ="SELECT itemName FROM items_tbl WHERE SN = '$itemName'";
       	$run_getItemsName=mysqli_query($db,$get_ItemsName);
       	while ($row = mysqli_fetch_array($run_getItemsName)) {
       		$itemsName = $row['itemName'];
       	}
       	if ($tType == "Deposit"){
        $newQuantity1= $quantityrow + $newQuantity;} elseif ($tType == "Withdraw") {
        	$newQuantity1= $quantityrow - $newQuantity;
        } 
       	if ($newQuantity1 < 0 ) {
       		echo "<script>alert('Items is Not Available In the Store')</script>";
       		exit();
       	} else {
		$insertQuery ="INSERT INTO transactions(vendorName,itemName,oldQuantity,NoItemsReceved,newQuantity,tType,tdate) VALUES ('$vendorName','$itemsName','$quantityrow','$newQuantity','$newQuantity1','$tType','$date')";
		$runInsertQuery = mysqli_query($db,$insertQuery);
		         if ($runInsertQuery) {
			       echo "<script>alert('Transaction Log Saved')</script>";
			       echo "<script>window.open('tlog.php','_self')</script>";
			       }
		}
	}
	
		
        
?> 
