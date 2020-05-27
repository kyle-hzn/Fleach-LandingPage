<?php
/*
* Template name: Qui sommes-nous ?
*/
?>
<?php get_template_part('partials/header'); ?>
<?php get_template_part('partials/menu-mobile'); ?>
<a href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ) ?>" class="contact-cta">
    <img src="<?= IMAGES_URL.'/envelope.svg' ?>" alt="nous contacter" >
</a>
<div class="overlay">
  <div class="overlay-loader">
    <h2 id="title">
        <span class="title--lined">
           Vous proposer plus,
        </span>
    </h2>
    <h2 id="title2">
        <span class="title--lined">
            <strong class="txt-style--filled">vous proposer mieux.</strong>
        </span>
    </h2>
  </div>
</div>
<div class="about">
    <div class="container">
        <div class="about__hero mb--200">
        <?php get_template_part('partials/menu'); ?>
            <div class="about__intro">
                <img class="mb--10" src="<?= IMAGES_URL.'/dots-icon-white.svg' ?>" alt="dots" >
                <p class="subtitle--one subtitle--one--white mb--10">
                    Qui sommes-nous ?
                </p>
                <p>
                    <span class="title--lined">
                        Une <strong class="txt-style--filled">entreprise</strong> à taille<br> <strong class="txt-style--filled">humaine</strong>, proche de vous,<br> où la <strong class="txt-style--filled">réussite</strong> de votre projet<br> est notre unique <strong class="txt-style--filled">priorité</strong>.
                    </span>
                </p>
            </div>
            <div class="about__bg"></div>
        </div>
        <div class="about__pres mb--200">
            <div class="about__pres__first">
                <div class="about__icon">
                    <img src="<?= IMAGES_URL.'/idea-icon.svg' ?>" alt="idée" >
                </div>
                <h2 class="title--one title--one--white mb--40 txt-style--center">
                    D'où vient l'idée Partenaire Particuliers ? 
                </h2>
                <p class="txt-paragraph txt-paragraph--white txt-style--justify mb--20">
                    La société <strong class="txt-style--strong txt-style--strong--orange">Partenaire Particuliers</strong> est née d’un constat.
                    Aujourd’hui lorsque vous décidez de vendre votre bien vous n’avez que <strong class="txt-style--strong txt-style--strong--orange">deux possibilités</strong> :<br> - Travailler avec une <strong class="txt-style--strong txt-style--strong--orange">agence immobilière</strong>, parfois peu compétente mais surtout très couteuse <br> - Vendre par <strong class="txt-style--strong txt-style--strong--orange">vous-même</strong> avec la complexité et les risques que cela impose.
                    Vous êtes nombreux à choisir de travailler avec une agence immobilière tant le secteur est réglementé et le processus long et compliqué. 
                </p>
                <p class="txt-paragraph txt-paragraph--white txt-style--justify mb--40">
                    Cependant cette décision sonne souvent comme un choix par défaut plutôt qu’une <strong class="txt-style--strong txt-style--strong--orange">véritable</strong> envie de collaboration.
                </p>
            </div>
            <div class="about__pres__second">
                <p class="txt-paragraph txt-paragraph--white txt-style--justify mb--20">
                C’est pour cela que nous avons décidé de vous proposer une solution alternative , qui s'inscrit dans une collaboration <strong class="txt-style--strong txt-style--strong--orange">"gagnants-gagnants"</strong>.<br>
                Etre là quand vous en avez besoin, pour répondre à de vraies questions et vous apporter les compétences et les garanties d'un professionnel.<br>
                Un service complet au prix fixe de <strong class="txt-style--strong txt-style--strong--orange">2 990€</strong>, payable uniquement en cas de vente.
                <br><br>
                <strong class="txt-style--strong txt-style--strong--orange">Vous proposer plus, vous proposer mieux et toujours vous écouter, là est notre priorité.</strong>
                </p>
            </div>
        </div>
        <div class="about__members mb--200">
            <div class="about__members__wrap mb--100">
                <div class="about__hv about__members__text">
                    <p class="about__position txt-medium txt-medium--white">
                        Associée
                    </p>
                    <h3 class="title--two title--two--white">
                        Hélène VERMEIRE BENZ
                    </h3>
                    <p class="txt-style--italic txt-medium txt-medium--white mb--20">
                        Spontanée, Volontaire et Rigoureuse
                    </p>
                    <p class="txt-paragraph txt-paragraph--orange mb--100">
                        Diplômée d’un BAC+5 en Management des Patrimoines immobilier
                    </p>
                    <p class="about__quote txt-paragraph txt-paragraph--white txt-style--justify">
                        Je souhaite, enfin, <strong class="txt-style--strong txt-style--strong--orange">bousculer</strong> ce marché immobilier vieillissant où beaucoup de professionnels ne sont pas suffisement qualifiés et où les clients n’ont pas réellement de <strong class="txt-style--strong txt-style--strong--orange">choix</strong>. Nous devons tous pouvoir avoir accès à des <strong class="txt-style--strong txt-style--strong--orange">compétences</strong> et des garanties sans payer le prix fort.
                    </p>
                </div>
                <div class="about__members__photo about__members__photo--h"></div>
            </div>
            <div class="about__members__wrap">
                <div class="about__members__photo about__members__photo--g"></div>
                <div class="about__gb about__members__text">
                    <p class="about__position txt-medium txt-medium--white">
                        Associé
                    </p>
                    <h3 class="title--two title--two--white">
                        Gary BRAKHA
                    </h3>
                    <p class="txt-style--italic txt-medium txt-medium--white mb--20">
                        Déterminé, Attentif et Persuasif
                    </p>
                    <p class="txt-paragraph txt-paragraph--orange mb--100">
                        Diplômé d’un DUT Technique de Commercialisation
                    </p>
                    <p class="about__quote txt-paragraph txt-paragraph--white txt-style--justify">
                        L’intervention d’un professionnel est <strong class="txt-style--strong txt-style--strong--orange">nécessaire</strong> et indispensable dans une transaction immobilière. 
                        Mais aux vues des <strong class="txt-style--strong txt-style--strong--orange">prix</strong> exercés nombreux prennent le risque de s’en passer entraînant des ventes longues, prenantes et stressantes qui pour beaucoup <strong class="txt-style--strong txt-style--strong--orange">n’aboutissent pas</strong>.
                        J’aimerais offrir un service utile et de qualité qui permet à chacun de faire des <strong class="txt-style--strong txt-style--strong--orange">économies</strong> en toute sécurité.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="about__factwrap mb--200">
            <div class="about__fact txt-style--center">
                <div class="about__fact__icon">
                    <img src="<?= IMAGES_URL.'/network-icon.svg' ?>" alt="réseau" >
                </div>
                <p>
                    <span class="subtitle--lined">
                        <strong class="txt-style--filled--orange">Six</strong> années
                    </span>
                </p>
                <p class="txt-paragraph txt-paragraph--white">
                    <strong class="txt-style--strong txt-style--strong--orange">d’expérience</strong> en immobilier.
                </p>
            </div>
            <div class="about__fact txt-style--center">
                <div class="about__fact__icon">
                    <img src="<?= IMAGES_URL.'/diploma-icon.svg' ?>" alt="réseau" >
                </div>
                <p>
                    <span class="subtitle--lined">
                        <strong class="txt-style--filled--orange">Cinq</strong> années
                    </span>
                </p>
                <p class="txt-paragraph txt-paragraph--white">
                    <strong class="txt-style--strong txt-style--strong--orange">d’études</strong> immobilières.
                </p>
            </div>
            <div class="about__fact txt-style--center">
                <div class="about__fact__icon">
                    <img src="<?= IMAGES_URL.'/success-icon.svg' ?>" alt="réseau" >
                </div>
                <p>
                    <span class="subtitle--lined">
                        <strong class="txt-style--filled--orange">100</strong>%
                    </span>
                </p>
                <p class="txt-paragraph txt-paragraph--white">
                    de <strong class="txt-style--strong txt-style--strong--orange">réussite</strong> sur nos projets.
                </p>
            </div>
        </div>
    </div>
</div>
<script>
// var parallax= document.querySelector(".about__media");

// window.addEventListener("scroll", function() {

// var scrolledHeight= window.pageYOffset,
//             limit= parallax.offsetTop+ parallax.offsetHeight;
            
// if(scrolledHeight > parallax.offsetTop && scrolledHeight <= limit) {
// parallax.style.backgroundPositionY=  (scrolledHeight - parallax.offsetTop) /1.5+ "px";

// } else {
//     parallax.style.backgroundPositionY=  "0";
// }
//     });
</script>

<?php get_template_part('partials/footer'); ?>