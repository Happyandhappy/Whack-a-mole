<!DOCTYPE html>
<html>
<head>
    <title>Whack a mole | Ranking</title>
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
            <li><a href="about.php">About</span></a></li>
            <li><a href="index.php">Play Game</span></a></li>
            <li class="active"><a href="ranking.php">Ranking</a></li>        
          </ul>
          <ul class="nav navbar-nav navbar-right hidden" id="notloggedin">
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>        
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
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12">
                                <a class="active">Game Results</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="table_div col-md-12">                               
                                <h3 class="level_title">Level 1</h3>
                                <table class="table table-hover">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>Player Name</th>
                                        <th>Points</th>
                                      </tr>
                                    </thead>
                                    <tbody id="table1">                                   
                                    </tbody>
                                </table>
                            </div>
                            <div class="table_div col-md-12">                               
                                <h3 class="level_title">Level 2</h3>
                                <table class="table table-hover">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>Player Name</th>
                                        <th>Points</th>
                                      </tr>
                                    </thead>
                                    <tbody id="table2">                                   
                                    </tbody>
                                </table>
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

<script type="text/javascript"> 
    (function(){
        // localStorage.setItem('scores', JSON.stringify(scores));
        showScores();
    })();
</script>