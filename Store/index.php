<?php 
$title = 'Store';
$iconPath = '/Gamestore/Images/joystickicon.png';
include '../parts/header.php';
require '../scripts/getAllGames.php';
?>

<main class="flex flex-wrap justify-center mt-20 mx-28 ">
  <?php
  foreach ($games as $game) : ?>
  <section class="text-gray-300  bg-slate-900 w-80 h- m-6 rounded-md overflow-hidden">
    <img src="/Gamestore/Images/Games/Doom Eternal.jpeg" alt="" class="relative">
    <div class="flex h-16">
      <span class="text-xl font-semibold my-auto mx-1 px-2 "><?php echo $game['name'] ?></span>
      <span class="text-lg ml-auto mr-3 my-auto">
        <?php 
        if($game['original_price'] > 0){
          echo $game['original_price']."$";
        } else{
          echo "FREE";}?></span>
    </div>
  </section>
  <?php 
  endforeach; ?>
</main>

<?php 
include '../parts/footer.php';
?>