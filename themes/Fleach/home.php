<?php
/*
* Template name: Accueil Investisseurs
*/
?>
<?php get_template_part('partials/header'); ?>
<?php get_template_part('partials/menu'); ?>
<?php get_template_part('partials/menu-mobile'); ?>
<div class="container hero mb--200">
    <div class="hero__wrapper">
        <div class="hero__intro">
            <h1 class="title--one title--one--black hero__title mb--32 reveal">Visionnez,
                Échangez,
                <strong class="text--strong">Investissez</strong>.
            </h1>
            <h2 class="paragraph--16 paragraph--16--grey hero__subtitle mb--40 reveal2">
                Fleach simplifie le quotidien des business angels en optimisant le sourcing de projets qualifiés au travers de rencontres vidéos avec des entrepreneurs innovants à la recherche d'investisseurs.
            </h2>
            <div class="input--newsform reveal3">
                <?php echo do_shortcode( '[wpforms id="5" title="false" description="false"]' ); ?>
            </div>
        </div>
        <div class="hero__board reveal4">
            <img class="hero__board__img" src="<?= IMAGES_URL.'/invest-board.png'?>" alt="investisseurs">
        </div>
    </div>
</div>
<div class="container product" id="produit">
    <div class="product__wrapper mb--400">
        <div class="product__l product__center reveal4">
            <div class="product__shape product__shape--light">
                <img class="product__mockup product__mockup--top" src="<?= IMAGES_URL.'/investisseurs-filtres.png'?>" alt="investisseurs filtres">
            </div>
        </div>
        <div class="product__r">
            <h3 class="title--two title--two--black mb--20 reveal">
                Sourcez les projets qui vous intéressent en quelques minutes.
            </h3>
            <ul class="product__list reveal2">
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Filtrez les projets qui sont susceptibles de vous intéresser et paramétrez des alertes</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Matching de projets optimisés selon les domaines présélectionnés</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Définissez votre montant de tickets d’investissement maximum par projet</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Des vidéos courtes et ludiques qui récapitulent l’ensemble des points clés du projet</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="product__wrapper product__wrapper__reverse mb--200">
        <div class="product__l">
            <h3 class="title--two title--two--black mb--20 reveal">
                Échangez simplement en participant aux lives des entrepreneurs.
            </h3>
            <ul class="product__list reveal2">
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Assistez au live vidéo de l’entrepreneur de votre choix</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Échangez directement durant le live vidéo sur les aspects du projet et des objectifs</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Posez vos questions en direct via le chat</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Prévisionnez la capacité de votre investissement</span>
                </li>
            </ul>
        </div>
        <div class="product__r product__center reveal4">
            <div class="product__shape product__shape--dark">
                <img class="product__mockup product__mockup--btm" src="<?= IMAGES_URL.'/investisseurs-live.png'?>" alt="investisseurs live">
            </div>
        </div>
    </div>
    <div class="product__wrapper mb--400">
        <div class="product__l reveal4">
            <div class="product__shape product__shape--regular">
                <img class="product__mockup product__mockup--top" src="<?= IMAGES_URL.'/investisseurs-offer.png'?>" alt="investisseurs offre">
            </div>
        </div>
        <div class="product__r">
            <h3 class="title--two title--two--black mb--20 reveal">
                Faites part de votre intérêt aux entrepreneurs qui vous ont convaincu.
            </h3>
            <ul class="product__list reveal2">
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Planifiez un live supplémentaire avec le(s) entrepreneur(s)</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Négociez selon vos méthodes, critères et engagements</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Faites une offre d'investissement, finalisez l’accord par une lettre d’intention</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container pricing mb--200 reveal" id="tarif">
    <div class="pricing__wrapper">
        <div class="pricing__l">
            <h3 class="title--one title--one--black mb--20">
                Une <strong class="text--strong text--purple">offre</strong> adaptée <strong class="text--strong">à vos besoins</strong>
            </h3>
            <p class="paragraph--16 paragraph--16--black">
                Un accès illimité aux services Fleach, profitez d’une <strong class="text--purple text--strong">période d’essai de 30 jours</strong> pour tester notre produit et ses diverses fonctionnalités.
            </p>
        </div>
        <div class="pricing__r">
            <h3 class="title--two title--two--black">
                Premium
            </h3>
            <div class="pricing__price mb--20">
                <h4 class="pricing__price__nb mr--10">
                    14,99 €
                </h4>
                <p class="paragraph--16 paragraph--16--grey">
                    /mois
                </p>
            </div>
            <ul class="pricing__list">
                <li class="pricing__list__chip paragraph--16 paragraph--16--grey">
                    <span>Accès à tous les projets et pitchs vidéos correspondants</span>
                </li>
                <li class="pricing__list__chip paragraph--16 paragraph--16--grey">
                    <span>Entrées illimitées pour accéder aux lives des entrepreneurs</span>
                </li>
                <li class="pricing__list__chip paragraph--16 paragraph--16--grey">
                    <span>Matching avec des projets selon vos domaines de prédilection</span>
                </li>
                <li class="pricing__list__chip paragraph--16 paragraph--16--grey">
                    <span>Aucune publicité</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container contact mb--200" id="contact">
    <div class="contact__wrapper">
        <div class="contact__l reveal">
            <h3 class="title--two title--two--black">
                Vous souhaitez en savoir plus ou avez une question sur le produit ?<br>Contactez-nous.
            </h3>
        </div>
        <div class="contact__r reveal2">
            <div class="contact__form">
                <?php echo do_shortcode( '[wpforms id="7" title="false" description="false"]' ); ?>
            </div>
        </div>
    </div>
</div>
<div class="download" id="download">
    <div class="container">
        <div class="download__wrapper">
            <div class="download__l reveal">
                <h4 class="title--two title--two--white">
                    Inscrivez-vous pour profiter de Fleach dès sa sortie
                </h4>
            </div>
            <div class="download__r reveal2">
                <div class="input--newsform">
                    <?php echo do_shortcode( '[wpforms id="6" title="false" description="false"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('partials/footer'); ?>