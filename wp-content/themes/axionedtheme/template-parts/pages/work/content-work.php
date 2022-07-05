<?php
  if (get_row_layout() == 'our_work') {
    $our_works = get_sub_field('our_work_section');
    ?>
    <section class="works">
      <div class="wrapper work-wrapper">
        <h2 class="work-title">Our work</h2>
        <ul class="our-work">
          <?php foreach ($our_works as $our_work) { ?>
            <li class="work-list">
              <a href="#FIXME"><img src="<?php echo $our_work['image']['url']; ?>" alt="<?php echo $our_work['image']['alt']; ?>"><?php echo $our_work['title']; ?></a>
              <div class="content">
                <h2 class="work-heading"><?php echo $our_work['title']; ?></h2>
                <p class="work-paragraph"><?php echo $our_work['short_description']; ?></p>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
    </section>
  <?php } ?>