<?php
$home_intro = get_field('home_intro');
$text = $home_intro['text'];
$image = $home_intro['image'];
$background_image = $home_intro['background_image'];
$form = $home_intro['form'];
?>

<div class="home-intro">
  <div class="container">
    <div class="home-intro__wrap">
      <div class="home-intro__bg">
        <img src="<?php echo $background_image; ?>" alt="">
      </div>
      <div class="home-intro__text">
        <?php echo $text; ?>
        <?php echo do_shortcode($form); ?>

      </div>
      <div class="home-intro__image">
        <img src="<?php echo $image; ?>" alt="">
      </div>
    </div>
  </div>
</div>