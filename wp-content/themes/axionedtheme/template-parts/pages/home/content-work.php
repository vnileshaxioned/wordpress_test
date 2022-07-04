<?php
  if (get_row_layout() == 'work_section') {
    $works = get_sub_field('work');
    ?>
      <section class="work">
        <div class="wrapper home-wrapper">
          <ul class="outter-box">
            <?php foreach ($works as $work) { ?>
              <li class="inner-box">
                <a href="#FIXME" class="work-link"><img src="<?php echo $work['image']['url']; ?>" class="work-image" alt="<?php echo $work['image']['alt']; ?>"></a>
                <div class="content">
                  <h3 class="work-heading"><?php echo $work['title'] ?></h3>
                  <p class="work-paragraph"><?php echo $work['short_description'] ?></p>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </section>
    <?php } ?>