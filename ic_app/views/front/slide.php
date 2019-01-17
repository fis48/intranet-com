<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
      <?php $i = 1; ?>
      <?php foreach ($slides as $slide): ?>
        <?php if ($i == 1): ?>
          <div class="carousel-item active">
            <img class="img-fluid" src="<?php echo '/home_slide/'.$slide->image ?>">
          </div>
        <?php else: ?>
          <div class="carousel-item">
            <img class="img-fluid" src="<?php echo '/home_slide/'.$slide->image ?>">
          </div>
        <?php endif ?>
        <?php $i++ ?>
      <?php endforeach ?>
  </div>
</div>


