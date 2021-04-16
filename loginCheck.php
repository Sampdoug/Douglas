session_start();

 

if (!isset($_SESSION["email"]) || !isset($_SESSION["loggedIn"])){

header("location: index.php");

exit();

}

