<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__bloc">
                <img class="mb--40" src="<?= IMAGES_URL.'/fleach-logo-icon.svg'?>" alt="fleach logo white">
                <p class="paragraph--14 paragraph--14--white">
                © Copyright 2020 Fleach<br>
                All rights reserved
                </p>
            </div>
            <div class="footer__set">
                <div class="footer__bloc">
                    <p class="paragraph--16 paragraph--16--white text--strong mb--10">
                        Investisseurs
                    </p>
                    <a data-scroll href="<?php echo get_permalink( get_page_by_title( 'Investisseurs' ) ) ?>#produit" class="paragraph--14 paragraph--14--white mb--10">
                        Produit
                    </a>
                    <a data-scroll href="<?php echo get_permalink( get_page_by_title( 'Investisseurs' ) ) ?>#tarif" class="paragraph--14 paragraph--14--white mb--10">
                        Tarif
                    </a>
                    <a data-scroll href="<?php echo get_permalink( get_page_by_title( 'Investisseurs' ) ) ?>#contact" class="paragraph--14 paragraph--14--white mb--10">
                        Contact
                    </a>
                </div>
                <div class="footer__bloc">
                    <p class="paragraph--16 paragraph--16--white text--strong mb--10">
                        Entrepreneurs
                    </p>
                    <a data-scroll href="#produit" class="paragraph--14 paragraph--14--white mb--10">
                        Produit
                    </a>
                    <a data-scroll href="#tarif" class="paragraph--14 paragraph--14--white mb--10">
                        Tarif
                    </a>
                    <a data-scroll href="#contact" class="paragraph--14 paragraph--14--white mb--10">
                        Contact
                    </a>
                </div>
            </div>
            <div class="footer__set">
                <div class="footer__bloc">
                    <p class="paragraph--16 paragraph--16--white text--strong mb--10">
                        Communauté
                    </p>
                    <a target="_blank" href="#" class="paragraph--14 paragraph--14--white mb--10">
                        Twitter 
                        <img class="ml--5" src="<?= IMAGES_URL.'/external-icon.svg'?>" alt="Twitter">
                    </a>
                    <a target="_blank" href="#" class="paragraph--14 paragraph--14--white mb--10">
                        Facebook
                        <img class="ml--5" src="<?= IMAGES_URL.'/external-icon.svg'?>" alt="Facebook">
                    </a>
                    <a target="_blank" href="#" class="paragraph--14 paragraph--14--white mb--10">
                        Instagram
                        <img class="ml--5" src="<?= IMAGES_URL.'/external-icon.svg'?>" alt="Instagram">
                    </a>
                </div>
                <div class="footer__bloc">
                    <p class="paragraph--16 paragraph--16--white text--strong mb--10">
                        Informations légales
                    </p>
                    <a href="<?php echo get_permalink( get_page_by_title( 'Mentions' ) ) ?>" class="paragraph--14 paragraph--14--white">
                        Mentions légales
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();  ?>


</body>
</html>