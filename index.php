<?php 
$title = 'Main Page';
$iconPath = '/Gamestore/Images/joystickicon.png';
include './parts/header.php';
require './scripts/getAllGames.php';
?>
<p id=message class='message text-green-800'>
  <?php if (isset($_POST['message'])){echo $_POST['message'];}?></p>
<main class="flex flex-wrap justify-center mt-20 mx-28 ">
  <?php
  foreach ($games as $game) : ?>
  <?php if(strpos($game['name'], ':')!== false) {
    $avatar = str_replace(":", "-", $game['name']);
  }else {
    $avatar = $game['name'];
  }?>
  <section class="text-gray-300  bg-slate-900 w-80 m-8 rounded-md overflow-hidden">
    <img class="h-44 w-80" src="/Gamestore/Images/Games/<?php echo $avatar?>.jpeg" alt="" class="relative">
    <div class="flex h-16">
      <span class="text-xl font-semibold my-auto mx-1 px-2 "><?php echo $game['name'] ?></span>
      <span class="text-lg ml-auto mr-3 my-auto">
        <?php 
        if($game['original_price'] > 0){
          echo $game['original_price']."$";
        } else{
          echo "<span class='text-green-500'>FREE</span>";}?></span>
    </div>
  </section>
  <?php 
  endforeach; ?>
</main>
<?php 
include './parts/footer.php';
?>