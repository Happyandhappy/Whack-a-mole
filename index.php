<html>

<head>
    <!--no need to define anything in this head as everything has been defined in header-->
	<title>Whack a mole | Game</title>	
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
        <li class="active"><a href="index.php">Play Game</span></a></li>
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
<div class="wrapper">	
	<header>
		<h1>Whack a Mole</h1>
		<div class="score-box" id="score-box">
			<h2>Score</h2>
			<p class="score-out" id="score-out">0</p>
		</div><!-- end score-box -->
	</header>
		<div class="level">
			<label>
				<input type="radio" name="level" value="1" checked> Level 1				
			</label>
			<br>
			<label>
				<input type="radio" name="level" value="2"> Level 2
			</label>
		</div>
	<main>
		<button class="btn-start button" id="btn-start"><span>Start Game</span></button>
		<div class="game-container">
			<div class="row">
				<div class="box">
					<img src="assets/images/mole.png" alt="mole" class="mole-pic" id="mole-01" value="a">
					<img src="assets/images/dirt.svg" alt="dirt" class="dirt-pic">
					<div class="mask"></div><!-- end mask -->
				</div><!-- end box -->
				<div class="box">
					<img src="assets/images/mole.png" alt="mole" class="mole-pic" id="mole-02" value="a">
					<img src="assets/images/dirt.svg" alt="dirt" class="dirt-pic">
					<div class="mask"></div><!-- end mask -->
				</div><!-- end box -->
				<div class="box">
					<img src="assets/images/mole.png" alt="mole" class="mole-pic" id="mole-03" value="a">
					<img src="assets/images/dirt.svg" alt="dirt" class="dirt-pic">
					<div class="mask"></div><!-- end mask -->
				</div><!-- end box -->
			</div><!-- end row -->
			<div class="row">
				<div class="box">
					<img src="assets/images/mole.png" alt="mole" class="mole-pic" id="mole-04" value="a">
					<img src="assets/images/dirt.svg" alt="dirt" class="dirt-pic">
					<div class="mask"></div><!-- end mask -->
				</div><!-- end box -->
				<div class="box">
					<img src="assets/images/mole.png" alt="mole" class="mole-pic" id="mole-05" value="a">
					<img src="assets/images/dirt.svg" alt="dirt" class="dirt-pic">
					<div class="mask"></div><!-- end mask -->
				</div><!-- end box -->
				<div class="box">
					<img src="assets/images/mole.png" alt="mole" class="mole-pic" id="mole-06" value="a">
					<img src="assets/images/dirt.svg" alt="dirt" class="dirt-pic">
					<div class="mask"></div><!-- end mask -->
				</div><!-- end box -->
			</div><!-- end row -->
		</div><!-- end game-container -->
	</main>	
</div><!-- end wrapper -->
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
<script type="text/javascript" src="assets/js/game.js"></script>
</html>


