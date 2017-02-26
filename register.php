 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Register</title>
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
          <ul class="nav navbar-nav navbar-right" id="nav" style="color: #fff; text-transform: uppercase;">
          <li><a style="color: #fff;" href="index.php"><i class="glyphicon glyphicon-log-in"></i> Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  
</div>
    <div class="container body-content"  style="height: 500px;background: #fff;">
      <div class="row">
          <div class="col-xs-12 col-sm-4">
             
          </div> 
          <div class="col-xs-12 col-sm-4">
            <div class="modal-body" id="login_panel">
              <form method="post">
                   <div class="form-group">
                  <label for="name">Full  Name:</label>
                  <input type="text" id="name" class="form-control" name="name" placeholder="Input Your Full Name">
                  </div>
                  <div class="form-group">
                  <label for="email">Email :</label>
                  <input type="email" id="email"class="form-control" name="email" placeholder="Input Your Email address">
                  </div>
                  <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" id="password"class="form-control" name="password" placeholder="*********">
                  </div>
                  <div class="form-group">
                  <label for="repassword">Re-Type Password</label>
                  <input type="password" id="repassword" class="form-control" name="repassword"placeholder="**********">
                  </div>
                  <div class="checkbox">
                  <label>
                  <input type="checkbox"> Yes I'm Human
                  </label>
                  </div>
                  <button type="submit" class="btn btn-default">Register</button>
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
