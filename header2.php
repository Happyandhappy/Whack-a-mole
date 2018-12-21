<?php
    /*start the session*/
session_start();
    /*give access only if user is logged in*/
if( !isset($_SESSION["user"]) ){
   header("location:signin.php");
  exit();
}
    /* creating the database connection*/
$con = mysqli_connect("182.50.133.175","collection","Testpack@123","collection") or die("<h1>Conection not established</h1>");
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Whack A Mole</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="CSS/header.css">

</head>
<body>
    <!--creating the top header bar-->
<div class="maini">
    <div class="topnav" id="myTopnav">
        <a href="about.php" class="active">About</a>
        <a href="index.php">Play Game</a>
        <a href="rankings.php">Rankings</a>
        <a href="logout.php">Log Out</a>
    </div>

</body>
</html>
