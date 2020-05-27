<?php
/*
* Template name: 404
*/
?>

<?php get_template_part('partials/header'); ?>
<?php get_template_part('partials/menu-mobile'); ?>
<a href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ) ?>" class="contact-cta">
    <img src="<?= IMAGES_URL.'/envelope.svg' ?>" alt="nous contacter" >
</a>
<div class="mentions mb--200">
    <div class="container">
        <?php get_template_part('partials/menu'); ?>
        <div class="mentions__hero mt--100 mb--200">
            <div class="title-section">
                <img class="mb--10" src="<?= IMAGES_URL.'/dots-icon.svg' ?>" alt="dots" >
                <p class="subtitle--one subtitle--one--orange mb--10">
                    ERREUR 404
                </p>
                <p class="mb--40">
                    <span class="title--lined">
                        Oups ! La page demandée <strong class="txt-style--filled">n'éxsite pas</strong>.
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('partials/footer'); ?>