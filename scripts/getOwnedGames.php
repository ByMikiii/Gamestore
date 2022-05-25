<?php
require 'connection.php';
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(isset($_SESSION['username'])){
$sql2 = "SELECT games.* FROM games INNER JOIN library ON library.game_id = games.game_id INNER JOIN users ON library.user_id = users.user_id WHERE users.username = '".$_SESSION['username']."'";
$result2 = $conn->query($sql2);
$ownedGames = [];

while($ownedGame = $result2->fetch_assoc()){
  array_push($ownedGames, $ownedGame);
}


$conn->close();

}else{
  header('Location: /Gamestore/Login/');
}
?>