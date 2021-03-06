<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
  <link rel="icon" type="image/x-icon" href="<?php echo $iconPath?>">
  <link rel="stylesheet" href="/Gamestore/css/tailwind.css">
</head>

<body class="bg-gradient-to-r from-gray-300 to-gray-400 min-h-full font">
  <header>
    <ul class=" flex items-center w-full h-12 p-1 text-lg text-gray-900">
      <li class="h-full p-1  px-3 font-semibold rounded-lg">
        <img src="/Gamestore/Images/joystickicon.png" alt="xd!">
      </li>
      <li class="nav-item">
        <a href="/Gamestore/Store/">Store</a>
      </li>
      <li class="nav-item">
        <a href="/Gamestore/Library/">Library</a>
      </li>
      <li class="nav-item">
        <a href="/Gamestore/Community/">Community</a>
      </li>
      <li class="nav-item">
        <a href="/Gamestore/Profile/">Profile</a>
      </li>
      <span class="loggedusername">
        <?php 
          if(!isset($_SESSION)) 
          { 
              session_start(); 
          } 
        if(isset($_SESSION['username'])){
          echo $_SESSION['username'];
          } ?>
      </span>
      <?php 
      if(!isset($_SESSION['username'])) : ?>
      <li class="nav-item ml-auto">
        <a href="/Gamestore/Login/">Login</a>
      </li>
      <li class="nav-item">
        <a href="/Gamestore/Register/">Register</a>
      </li>
      <?php
      else : ?>
      <li class="nav-item ml-auto">
        <a href="/Gamestore/scripts/logoutscript.php">Logout</a>
      </li>
      <?php endif ?>

    </ul>

  </header>