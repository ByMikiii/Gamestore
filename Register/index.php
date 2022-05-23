<?php 
$title = 'Register';
$iconPath = '/Gamestore/Images/joystickicon.png';
include '../parts/header.php';
require '../scripts/getAllGames.php';
?>
<h1 class='relative text-center text-4xl mt-24 font-semibold'>Register</h1>
<form action="" method="post" autocomplete="off" class='grid w-80 relative m-auto mt-14'>
  <input type="text" name="username" id="" placeholder="Username" class='mb-8 h-9 text-lg p-2 rounded-lg'>
  <input type="text" name="email" id="" placeholder="Email" class='mb-8 h-9 text-lg p-2 rounded-lg'>
  <input type="password" name="pass" id="" placeholder="Password" class='mb-8 h-9 text-lg p-2 rounded-lg'>
  <input type="password" name="pass2" id="" placeholder="Repeat Password" class='mb-8 h-9 text-lg p-2 rounded-lg'>
  <button type="submit" class='bg-gray-500 w-36 h-11 m-auto rounded-lg text-lg'>Register</button>
</form>
<?php 
include '../parts/footer.php';
?>