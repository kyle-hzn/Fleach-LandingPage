<?php
/*
* Template name: Accueil Entrepreneurs
*/
?>
<?php get_template_part('partials/header'); ?>
<?php get_template_part('partials/menu2'); ?>
<?php get_template_part('partials/menu-mobile2'); ?>
<div class="container hero mb--200">
    <div class="hero__wrapper">
        <div class="hero__intro">
            <h1 class="title--one title--one--black hero__title mb--32 reveal">Pitchez,
                Échangez,
                <strong class="text--strong">Démarrez</strong>.
            </h1>
            <h2 class="paragraph--16 paragraph--16--grey hero__subtitle mb--40 reveal2">
                Fleach vous accompagne dans la recherche d’investissement pour votre projet, en vous mettant en relation avec des business angels par le biais de notre plateforme intutitive de pitchs vidéos et de sessions live.
            </h2>
            <div class="input--newsform reveal3">
                <?php echo do_shortcode( '[wpforms id="5" title="false" description="false"]' ); ?>
            </div>
        </div>
        <div class="hero__board reveal4">
            <img class="hero__board__img" src="<?= IMAGES_URL.'/entre-board.png'?>" alt="entrepreneurs">
        </div>
    </div>
</div>
<div class="container product" id="produit">
    <div class="product__wrapper mb--400">
        <div class="product__l product__center reveal4">
            <div class="product__shape product__shape--light">
                <img class="product__mockup product__mockup--top" src="<?= IMAGES_URL.'/entre-validate.png'?>" alt="création pitch">
            </div>
        </div>
        <div class="product__r">
            <h3 class="title--two title--two--black mb--20 reveal">
                Pitchez votre projet en vidéo pour convaincre les investisseurs.
            </h3>
            <ul class="product__list reveal2">
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Définissez votre projet en enrengistrant une vidéo de présentation qualitative qui suit notre guide de 8 étapes</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Postez votre projet et vos objectifs sur notre plateforme</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Rencontrez des investisseurs expérimentés et qualifiés</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Renseignez votre ticket maximum afin de segmenter les potentiels investisseurs</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="product__wrapper product__wrapper__reverse mb--200">
        <div class="product__l">
            <h3 class="title--two title--two--black mb--20 reveal">
                Simplifiez les rencontres avec les investisseurs en organisant un live pour tous.
            </h3>
            <ul class="product__list reveal2">
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Choisissez une date de live dans les jours suivant la publication de votre vidéo sur la plateforme</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Participez au live le jour J avec les investisseurs inscrits</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Échangez et répondez simplement aux investisseurs grâce au chat integré au live</span>
                </li>
            </ul>
        </div>
        <div class="product__r product__center reveal4">
            <div class="product__shape product__shape--dark">
                <img class="product__mockup product__mockup--btm" src="<?= IMAGES_URL.'/entre-live2.png'?>" alt="entrepreneurs live">
            </div>
        </div>
    </div>
    <div class="product__wrapper mb--400">
        <div class="product__l reveal4">
            <div class="product__shape product__shape--regular">
                <img class="product__mockup product__mockup--top" src="<?= IMAGES_URL.'/entre-offer.png'?>" alt="entrepreneurs offre">
            </div>
        </div>
        <div class="product__r">
            <h3 class="title--two title--two--black mb--20 reveal">
            Recevez les propositions des Business Angels intéressés par votre projet.
            </h3>
            <ul class="product__list reveal2">
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Comparez les offres reçues et leurs argumentations</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Gagnez du temps en comparant les offres reçues directement sur la plateforme</span>
                </li>
                <li class="product__list__chip paragraph--20 paragraph--20--grey">
                    <span>Finalisez l’accord par la réception d’une lettre officielle d’intention d’investissement</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container pricing mb--200 reveal" id="tarif">
    <div class="pricing__wrapper">
        <div class="pricing__l">
            <h3 class="title--one title--one--black mb--20">
                Une <strong class="text--strong text--purple">offre</strong> adaptée <strong class="text--strong">à votre projet</strong>
            </h3>
            <p class="paragraph--16 paragraph--16--black">
                Fleach perçoit une seule commission à <strong class="text--purple text--strong">hauteur de 4%</strong> uniquement sur les projets financés en intégralité suite à l’accord entre l’investisseur et vous.
            </p>
        </div>
        <div class="pricing__r">
            <h3 class="title--two title--two--black">
                Commission
            </h3>
            <div class="pricing__price mb--20">
                <h4 class="pricing__price__nb mr--10">
                    4%
                </h4>
                <p class="paragraph--16 paragraph--16--grey">
                    sur les fonds totaux récoltés
                </p>
            </div>
            <ul class="pricing__list">
                <li class="pricing__list__chip paragraph--16 paragraph--16--grey">
                    <span>Accompagnement dans la création du pitch vidéo destiné aux business angels</span>
                </li>
                <li class="pricing__list__chip paragraph--16 paragraph--16--grey">
                    <span>Mise en relation fiable et qualitative</span>
                </li>
                <li class="pricing__list__chip paragraph--16 paragraph--16--grey">
                    <span>Organisation intuitive des lives vidéos, de la gestion de votre planning et des rendez-vous</span>
                </li>
                <li class="pricing__list__chip paragraph--16 paragraph--16--grey">
                    <span>Gestion des offres d’investissement entre les deux parties</span>
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
<?php get_template_part('partials/footer2'); ?>