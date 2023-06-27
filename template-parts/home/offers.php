<?php
$offers = get_field('offers');
$subtitle = $offers['subtitle'];
$title = $offers['title'];
$button_text = $offers['button_text'];
$items = $offers['items'];
?>

<div class="offers" id="offers">
  <div class="container">
    <h3 class="offers__subtitle">
      <?php echo $subtitle; ?>
    </h3>
    <h2 class="offers__title">
      <?php echo $title; ?>
    </h2>
    <div class="offers__items">
      <?php foreach ($items as $item) : ?>
        <div class="offers__item">
          <div class="offers__item-image">
            <img src="<?php echo $item['image']; ?>" alt="">
          </div>
          <div class="offers__item-content">
            <div class="offers__item-title">
              <?php echo $item['title']; ?>
            </div>
            <div class="offers__item-price">
              <?php echo $item['price']; ?>
            </div>
            <div class="offers__button">
              <?php echo $button_text; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
</div>
</div>