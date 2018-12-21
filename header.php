<?php
##session_start();
#if( !isset($_SESSION["user"]) ){
 #   header("location:index.php");
  #  exit();
#}
$con = mysqli_connect("182.50.133.175","collection","Testpack@123","collection") or die("<h1>Conection not established</h1>");
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Whack A Mole</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="assets/css/header.css">

</head>
<body>

<div class="maini">
    <div class="topnav" id="myTopnav">
        <a href="about.php" class="active">About</a>
        <a href="index.php">Play Game</a>
        <a href="rankings.php">Rankings</a>
        <a href="signin.php">Log In /Log out</a>
    </div>

</body>
</html>
