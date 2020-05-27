<?php
/*
* Template name: Accueil Investisseurs
*/
?>
<?php get_template_part('partials/header'); ?>
<?php get_template_part('partials/menu-mobile'); ?>
<div class="container hero">
    <div class="hero__wrapper">
        <div class="hero__intro">
            <h1 class="title--one title--one--black hero__title mb--32">Visionnez,
                Échangez,
                <strong class="text--strong">Investissez</strong>.
            </h1>
            <p class="paragraph--16 paragraph--16--grey hero__subtitle mb--40">
                Fleach simplifie le quotidien des business angels en optimisant le sourcing de projets qualifiées au travers de rencontre vidéo avec des entrepereneurs innovants
            </p>
            <form action="#" class="input--newsform">
                <input class="input--news" type="mail" placeholder="S’inscrire à la waitlist">
                <input id="hero__newsform__submit" type="submit">
                <label for="hero__newsform__submit" class="input--news__submit"><img src="<?= IMAGES_URL.'/WhiteArrow.svg'?>" alt="valider"></label>
            </form>
        </div>
        <div class="hero__board">
            <img class="hero__board__img" src="<?= IMAGES_URL.'/invest-board.png'?>" alt="investisseurs">
        </div>
    </div>
</div>
<?php get_template_part('partials/footer'); ?>