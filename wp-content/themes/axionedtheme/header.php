<!doctype html>

<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en"> 

<head>
  <meta charset="utf-8">
  <?php wp_head(); ?>
</head>
<body>
  <!--container start-->
  <div class="container">
    <!--header section start-->
    <header>
      <div class="wrapper">
        <h1><a href="<?php bloginfo('url') ?>" class="axioned-logo" title="Axioned logo"><img src="https://dummyimage.com/159x58/000/fff.jpg" alt="Axioned Logo">Axioned logo</a></h1>
        <?php wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_class' => 'navbar',
          'container' => 'nav',
          'container_class' => 'menu',
          'items_wrap' => '<ul class="%2$s">%3$s</ul>',
        ) ); ?>
      </div>
    </header>
    <!--header section start-->