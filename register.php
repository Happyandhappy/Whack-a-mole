<!DOCTYPE html>
<html>
<head>
    <title>Whack a mole | Register</title>  
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/css.css">
</head>
<body>
    <nav class="navbar navbar-default"> 
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="about.php">Whack a Mole</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="about.php">About</a></li>
            <li><a href="index.php">Play Game</span></a></li>
            <li><a href="rankings.php">Rankings</a></li>        
          </ul>
          <ul class="nav navbar-nav navbar-right hidden" id="notloggedin">
            <li><a href="login.php">Login</a></li>
            <li class="active"><a href="register.php">Register</a></li>        
          </ul>
          <ul class="nav navbar-nav navbar-right" id="loggedin">
            <li class="navUser_li"><p class="navbar-text navbar-right" id="navUser"></a></p></li>
            <li><a onclick="logout();">Logout</a></li>        
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12">
                                <a  class="active">Register</a>
                            </div>
                            <div class="col-xs-12">
                                <div class="alert alert-danger hidden" id="alert_danger">
                                    Warning!
                                </div>
                                <div class="alert alert-success hidden" id="alert_success">
                                    Success!
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="register-form" method="post" role="form">
                                    <div class="form-group">
                                        <input type="text" name="username" id="rusername" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="rpassword" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirm-password" id="rconfirm-password"  class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="button" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- jQuery library -->
<script src="assets/js/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
</html>