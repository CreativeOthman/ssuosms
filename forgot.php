 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Password Reset</title>
    <link href="Content/css/bootstrap.css" rel="stylesheet" />
    <link href="Content/css/pdsa-sidebar.css" rel="stylesheet" />
    <link href="Content/css/pdsa-summary-blocks.css" rel="stylesheet" />
    <link href="css/demo.css" rel="stylesheet" />
    <link href="css/animate.min.css" rel="stylesheet" />
    <style>
       
    </style>
</head>
<body>
<div class="container">
    <div class="row">
         <header>
        <?php include("include/header.php");?>
        </header>

    </div>
  
</div>
    <div class="container body-content" style="background: #fff;">
      <div class="row">
          <div class="col-xs-12 col-sm-4">
             
          </div> 
          <div class="col-xs-12 col-sm-4">
            <div class="modal-body" id="login_panel">
              <form method="post">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Input Your Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="checkbox">
                  <label>
                  <input type="checkbox"> Yes I'm Human
                  </label>
                  </div>
                  <button type="submit" class="btn btn-default">Reset Password</button>
              </form>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4"> 
           
          </div>
      </div>
    </div>
         <script src="js/demo.js"></script>
<script src="Content/js/jquery.min.js"></script>
<script src="Content/js/bootstrap.js"></script>
   
</body>
</html>
