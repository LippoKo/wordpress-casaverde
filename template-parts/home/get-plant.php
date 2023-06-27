<?php
$get_plant = get_field('get_plant');
$image = $get_plant['image'];
$text = $get_plant['text'];
?>

<div class="get-plant">
  <div class="container">
    <div class="get-plant__wrap">
      <div class="get-plant__image">
        <img src="<?php echo $image; ?>" alt="">
      </div>
      <div class="get-plant__text">
        <?php echo $text ?>
      </div>
    </div>
  </div>
</div>