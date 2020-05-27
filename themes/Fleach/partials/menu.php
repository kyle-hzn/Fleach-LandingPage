<nav class="navigation">
    <div class="navigation__l">
      <a href="<?php echo home_url(); ?>">
        <img class="img-fluid" src="<?= IMAGES_URL.'/logo-pp--white.svg' ?>" alt="logo partenaire particuliers">
      </a>
    </div>
    <div class="navigation__r">
    <?php 
      $args = array(
      'theme_location' => 'header',
      'container' => 'false',
      'menu_class' => 'navigation__links',
      );
    wp_nav_menu($args);
    ?>
    </div>
</nav>
<nav class="navigation-mobile">
  <a href="<?php echo home_url(); ?>"><img class="img-fluid navigation-mobile__logo" src="<?= IMAGES_URL.'/logo-pp--white.svg' ?>" alt="logo partenaire particuliers"></a>
</nav>