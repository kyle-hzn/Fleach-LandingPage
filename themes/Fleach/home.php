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
    <div class="product__wrapper mb--400">
        <div class="product__l">
            <div class="product__shape product__shape--light">
                <img class="product__mockup product__mockup--top" src="<?= IMAGES_URL.'/investisseurs-filtres.png'?>" alt="investisseurs filtres">
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
                    <span>Matching de projet optimisé selon vos centres d’intérêts</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Définissez votre montant de ticket d’investissement</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Des vidéos d’une minute qui récapitule l’ensemble des points clés du projet</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="product__wrapper mb--200">
        <div class="product__l">
            <h3 class="title--two title--two--black mb--20">
                Échangez avec l’entrepreneur en live vidéo sur tous les aspects de son projet et ses objectifs.
            </h3>
            <ul class="product__list">
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Rencontrez le(s) porteur(s) du projet grâce à un live vidéo</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Découvrez des projets innovants d’entrepreneurs</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Posez vos questions en direct via le chat</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Analysez comment rentabiliser cotre investissement</span>
                </li>
            </ul>
        </div>
        <div class="product__r">
            <div class="product__shape product__shape--dark">
                <img class="product__mockup product__mockup--btm" src="<?= IMAGES_URL.'/investisseurs-live.png'?>" alt="investisseurs live">
            </div>
        </div>
    </div>
    <div class="product__wrapper mb--400">
        <div class="product__l">
            <div class="product__shape product__shape--regular">
                <img class="product__mockup product__mockup--top" src="<?= IMAGES_URL.'/investisseurs-offer.png'?>" alt="investisseurs offre">
            </div>
        </div>
        <div class="product__r">
            <h3 class="title--two title--two--black mb--20">
                Faites part de votre intérêt aux entrepreneurs qui vous ont potentiellement convaincu.
            </h3>
            <ul class="product__list">
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Planifiez un live supplémentaire avec le(s) entrepreneur(s)</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Négociez selon vos méthodes et critères</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Faitez une offre financière, finalisez l’accord par une lettre d’intention.</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container pricing mb--200">
    <div class="pricing__wrapper">
        <div class="pricing__l">
            <h3 class="title--one title--one--black mb--20">
                Une <strong class="text--strong text--purple">offre</strong> adapté <strong class="text--strong">à vos besoins</strong>
            </h3>
            <p class="paragraph--16 paragraph--16--black">
                L’offre qui vous correspond le mieux, profitez d’une <strong class="text--purple text--strong">période d’essai de 30 jours</strong> pour tester notre produit et ses diverses fonctionnalités
            </p>
        </div>
        <div class="pricing__r">
            <h3 class="title--two title--two--black">
                Premium
            </h3>
            <div class="pricing__price mb--20">
                <h4 class="pricing__price__nb mr--10">
                    12,99 €
                </h4>
                <p class="paragraph--16 paragraph--16--grey">
                    /mois
                </p>
            </div>
            <ul class="pricing__list">
                <li class="pricing__list__chip paragraph--16 paragraph--16--grey">
                    <span>Entrées illimités pour accéder aux lives des entrepreneurs</span>
                </li>
                <li class="pricing__list__chip paragraph--16 paragraph--16--grey">
                    <span>Matching avec des projets selon vos domaines d’activités de prédilection</span>
                </li>
                <li class="pricing__list__chip paragraph--16 paragraph--16--grey">
                    <span>Accès à tous les pitchs vidéo des projets</span>
                </li>
                <li class="pricing__list__chip paragraph--16 paragraph--16--grey">
                    <span>Aucune publicité</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container contact mb--200">
    <div class="contact__wrapper">
        <div class="contact__l">
            <h3 class="title--two title--two--black">
                Vous souhaitez en savoir plus ou avez une question sur le produit ?<br>Contactez-nous.
            </h3>
        </div>
        <div class="contact__r">
            <div class="contact__form">
                <input type="text" class="input--text mb--10" placeholder="Votre nom">
                <input type="mail" class="input--text mb--10" placeholder="Votre adresse mail">
                <textarea name="message" class="input--textarea mb--20" placeholder="Votre message"></textarea>
                <label class="input--checkbox__label mb--20">
                    <input type="checkbox" name="checkbox" class="input--checkbox__check">
                    En remplissant ce formulaire, vous acceptez les termes et conditions d’utilisation. Conformément à la loi « informatique et libertés », vous pouvez exercer votre droit d’accès aux données vous concernant et les faire rectifier en contactant : contact@fleach.fr
                </label>
                <input type="submit" id="contact__submit">
                <label for="contact__submit" class="btn--filled btn--filled--regular">Envoyer</label>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('partials/footer'); ?>