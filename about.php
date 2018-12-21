<html>

<head>
    <meta charset="UTF-8">    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/css.css">
    <link rel="stylesheet" href="CSS/about.css">
</head>

<body>
<nav class="navbar navbar-default"> 
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="about.php">Whack a Mole</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="about.php">About</span></a></li>
        <li><a href="index.php">Play Game</span></a></li>
        <li><a href="rankings.php">Rankings</a></li>        
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
        <div class="col-md-4">
                <img src="assets/images/whackAMole.jpg" class="top">
        </div>
            <div class="col-md-8">
                <blockquote>
                    <h3>Whack A Mole</h3>
                    <p>
                        is a popular arcade redemption game invented in 1976 by Aaron
                        Fechter of Creative Engineering, Inc.<br>A typical Whac-A-Mole machine consists of a large,
                        waist-level cabinet with five holes in its top and<br>a large, soft, black mallet.
                        Each hole contains a single plastic mole and the machinery necessary<br>to move it up and
                        down. Once the game starts, the moles will begin to pop up from their holes at random.<br>
                        The object of the game is to force the individual moles back into their holes by hitting
                        them directly on the<br>head with the mallet, thereby adding to the player's score.
                        The more quickly this is done the higher the<br>final score will be.
                    </p>
                </blockquote>
            </div>
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-md-8">

            <h3 class="btm-h">How to Play</h3>
            <p class="btm-h2">
                Add contents here
            </p>

        </div>

        <div class="col-md-4">
            <img src="assets/images/hitMole.jpg" class="bottom">
        </div>
    </div>
</div>
<!-- jQuery library -->
<script src="assets/js/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/game.js"></script>
</body>
</html>
