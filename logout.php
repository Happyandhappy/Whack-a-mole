<?php
    /*start the session*/
session_start();
    /*if user is logged in*/
if(isset($_SESSION['usernames']))
{
    /*destory the user session*/
    session_destroy();
    echo "<script>location.href='signin.php'</script>";
}
else
{
    /*redirect the user to signin page*/
    echo "<script>location.href='signin.php'</script>";
}
?>

