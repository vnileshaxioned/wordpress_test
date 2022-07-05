<?php
  if (get_row_layout() == 'work_slider') {
    $sliders = get_sub_field('slider');
    ?>
      <section class="clients">
        <div class="wrapper work-wrapper">
          <ul class="client-slider">
            <?php foreach ($sliders as $slide) { ?>
              <li class="list">
                <figure><img src="<?php echo $slide['client_image']['url']; ?>" alt="<?php echo $slide['client_image']['alt']; ?>"></figure>
              </li>
            <?php } ?>
          </ul>
          <ul class="slider-action">
            <li class="slider-button"><a href="#FIXME" class="previous-button" title="Previous">Previous</a></li>
            <li class="slider-button"><a href="#FIXME" class="next-button" title="Next">Next</a></li>
          </ul>
        </div>
      </section>
    <?php } ?>