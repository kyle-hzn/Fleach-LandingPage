<?php
/*
* Template name: Accueil Investisseurs
*/
?>
<?php get_template_part('partials/header'); ?>
<?php get_template_part('partials/menu-mobile'); ?>
<div class="container hero mb--200">
    <div class="hero__wrapper">
        <div class="hero__intro">
            <h1 class="title--one title--one--black hero__title mb--32">Visionnez,
                Échangez,
                <strong class="text--strong">Investissez</strong>.
            </h1>
            <h2 class="paragraph--16 paragraph--16--grey hero__subtitle mb--40">
                Fleach simplifie le quotidien des business angels en optimisant le sourcing de projets qualifiées au travers de rencontre vidéo avec des entrepereneurs innovants
            </h2>
            <form action="#" class="input--newsform">
                <input class="input--news" type="mail" placeholder="S’inscrire à la waitlist">
                <input id="hero__newsform__submit" type="submit">
                <label for="hero__newsform__submit" class="input--news__submit"><img class="input--news__submit__img1" src="<?= IMAGES_URL.'/WhiteArrow.svg'?>" alt="valider"><img class="input--news__submit__img2" src="<?= IMAGES_URL.'/WhiteArrow.svg'?>" alt="valider"></label>
            </form>
        </div>
        <div class="hero__board">
            <img class="hero__board__img" src="<?= IMAGES_URL.'/invest-board.png'?>" alt="investisseurs">
        </div>
    </div>
</div>
<div class="container product">
    <div class="product__wrapper">
        <div class="product__l">
            <div class="product__shape product__shape--light">
                <img class="product__mockup" src="<?= IMAGES_URL.'/investisseurs-filtres.png'?>" alt="investisseurs filtres">
            </div>
        </div>
        <div class="product__r">
            <h3 class="title--two title--two--black mb--20">
                Sourcez les projets pertinents qui vous intéresse en quelques minutes
            </h3>
            <ul class="product__list">
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Filtrez les projets et paramétrez des alertes</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Matching de projet optimisé selon vos centres d’intérêts </span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Définissez votre montant de ticket d’investissement</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Des vidéos d’une minute qui récapitule l’ensemble des points clés du projet. </span>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php get_template_part('partials/footer'); ?>