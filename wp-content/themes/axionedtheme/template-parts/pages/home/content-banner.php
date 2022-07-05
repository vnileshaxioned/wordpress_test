<?php
  if (get_row_layout() == 'banner_section') {
    $video = get_sub_field('banner_video');
    ?>
      <section class="banner">
        <div class="wrapper home-wrapper">
          <video class="banner-video" autoplay loop muted>
            <source src="<?php echo $video['url']; ?>" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="banner-content">
            <h2 class="banner-heading">it's <span class="pink-color">you</span></h2>
            <h2 class="banner-heading">Vs<span class="pink-color">.</span> the <span class="pink-color">www</span></h2>
          </div>
        </div>
      </section>
    <?php
  }
?>