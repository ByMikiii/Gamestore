<?php 
session_start();
if(isset($_SESSION['username'])){
  $title = $_SESSION['username'];
}else{
  header('Location: /Gamestore/Login/');
}
$iconPath = '/Gamestore/Images/joystickicon.png';
include '../parts/header.php';
require '../scripts/getAllGames.php';
?>


<?php 
include '../parts/footer.php';
?>