<?php 
require "./scripts/connection.php";

$sql = "SELECT * FROM games";
$result = $conn->query($sql);
$games = [];

while($game = $result->fetch_assoc()){
  array_push($games, $game);
}


$conn->close();
?>