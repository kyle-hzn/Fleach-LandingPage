<nav data-scroll-header class="header-modal">
  <div class="header-modal__left">
    <a href="<?php echo get_permalink( get_page_by_title( 'Investisseurs' ) ) ?>" class="mr--40">
      <img src="<?= IMAGES_URL.'/fleach-logo-icon.svg'?>" alt="fleach logo white">
    </a>
    <a href="<?php echo get_permalink( get_page_by_title( 'Investisseurs' ) ) ?>" class="paragraph--16 paragraph--16--white mr--40 d-none--mobile header-modal__active">
    Investisseurs
    </a>
    <a href="<?php echo get_permalink( get_page_by_title( 'Entrepreneurs' ) ) ?>" class="paragraph--16 paragraph--16--white d-none--mobile">
    Entrepreneurs
    </a>
  </div>
  <div class="header-modal__right">
    <a data-scroll href="#produit" class="paragraph--16 paragraph--16--white mr--40 d-none--mobile">
    Produits
    </a>
    <a data-scroll href="#tarif" class="paragraph--16 paragraph--16--white mr--40 d-none--mobile">
    Tarifs
    </a>
    <a data-scroll href="#contact" class="paragraph--16 paragraph--16--white mr--40 d-none--mobile">
    Contact
    </a>
    <a data-scroll href="#download" class="btn--filled btn--filled--dark d-none--mobile">
    Obtenir l’application
    </a>
    <div class="d-none--large d-none--tablet">
      <div class="header-modal__trigger header-modal__btn">
        <span class="header-modal__bars"></span>
      </div>
    </div>
  </div>
</nav>