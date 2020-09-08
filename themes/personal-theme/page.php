<?php

get_header();

?>


<main id="main" <?php if (is_page( 'about' ) ): ?>class="about-body"<?php endif; ?> <?php if (is_page( 'contact' ) ): ?>class="contact__main"<?php endif; ?>>
    <div class="gray-background"></div>
    <?php
    if (is_page( 'about' ) ): ?>
        <h2 class="main-title"><span class="mid-underline">À pr</span>opos</h2>
        <div class="about">
            <div class="about__image">
                <img src="<?php echo get_theme_file_uri('/src/img/about-img.jpg'); ?>" alt="Facade de L'Image Sans Nom" height="1460" width="960">
            </div><!--
        --><div class="about__text">
                <h3 class="bold" itemprop="name"><span class="mid-underline">L'Im</span>age Sans Nom</h3>
                <?php the_field('about_content'); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php
    if (is_page( 'contact' ) ): ?>
        <h2 class="main-title"><span class="mid-underline">Con</span>tactez-nous</h2>
        <div class="contact__infos">
            <h2 class="bold" itemprop="name"><span class="mid-underline">L'Im</span>age Sans Nom</h2>
            <ul class="contact__links">
                <li class="contact__item">
                    <p class="contact__link" itemprop="address">Place Vivegnis 6 à 4000 Liège</p>
                </li>
                <li class="contact__item">
                    <a href="mailto:limagesansnom@gmail.com" class="contact__link">
                        <svg data-name="Calque 4" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 37.55 37.89" width="18" height="18">
                            <defs>
                                <style>.cls-4 {
                                        fill: #434343;
                                    }

                                    .cls-4:hover {
                                        fill: #434343;
                                    }
                                </style>
                            </defs>
                            <path class="cls-4"
                                  d="M33.26,6.2A18.32,18.32,0,0,0,20.38,1.43,19.29,19.29,0,0,0,6.6,6.86,18.05,18.05,0,0,0,.9,20.38,18.56,18.56,0,0,0,6.32,33.72c3.6,3.71,8.52,5.59,14.62,5.59A27.65,27.65,0,0,0,31.81,37a2.33,2.33,0,0,0,1.25-3,2.28,2.28,0,0,0-2.14-1.44,2.23,2.23,0,0,0-.92.19,23.06,23.06,0,0,1-9.07,2,17.06,17.06,0,0,1-6.25-1.07A12.24,12.24,0,0,1,10,30.48,14.61,14.61,0,0,1,6.15,20.41a15.79,15.79,0,0,1,1-5.77,14.31,14.31,0,0,1,3.11-4.72A13.79,13.79,0,0,1,20.45,5.71a13.56,13.56,0,0,1,9.38,3.46,11.52,11.52,0,0,1,2.87,3.9,11.92,11.92,0,0,1,1,4.79,9.85,9.85,0,0,1-1.76,6c-1.16,1.58-2.38,2.38-3.64,2.38-.68,0-1-.37-1-1.1A20.75,20.75,0,0,1,27.37,23l1.44-11.76H23.87l-.32,1.15a6.43,6.43,0,0,0-4.14-1.54,8,8,0,0,0-6.12,2.84A10.57,10.57,0,0,0,10.75,21a10.58,10.58,0,0,0,2.26,7,6.87,6.87,0,0,0,5.43,2.69,6.22,6.22,0,0,0,4.85-2.38,5,5,0,0,0,4.47,2.28,9.56,9.56,0,0,0,7.52-3.79,13.79,13.79,0,0,0,3.16-9.13A15.17,15.17,0,0,0,33.26,6.2ZM21.87,24a3.82,3.82,0,0,1-3.13,1.76,2.25,2.25,0,0,1-2-1.3A6.34,6.34,0,0,1,16,21.23a6.46,6.46,0,0,1,1.07-3.85,3.17,3.17,0,0,1,2.65-1.47A3.29,3.29,0,0,1,22.13,17a4,4,0,0,1,1.06,2.93A6.72,6.72,0,0,1,21.87,24Z"
                                  transform="translate(-0.9 -1.42)"/>
                        </svg>
                        limagesansnom@gmail.com</a>
                </li>
                <li class="contact__item">
                    <a href="tel:0485847977" class="contact__link">
                        <svg data-name="Calque 3" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 37.3 37.3" width="18" height="18">
                            <defs>
                                <style>.cls-3 {
                                        fill: #434343;
                                    }

                                    .cls-3:hover {
                                        fill: #434343;
                                    }
                                </style>
                            </defs>
                            <path class="cls-3"
                                  d="M35.74,25.24a21.46,21.46,0,0,1-6.65-1.06,2.86,2.86,0,0,0-.92-.15,2.92,2.92,0,0,0-2,.77L21.94,28A23.3,23.3,0,0,1,11.52,17.55l3.07-4.09a3,3,0,0,0,.74-3.05,21.23,21.23,0,0,1-1.06-6.66,3,3,0,0,0-3-3H4.43a3,3,0,0,0-3,3,34.34,34.34,0,0,0,34.31,34.3,3,3,0,0,0,3-3V28.23A3,3,0,0,0,35.74,25.24Z"
                                  transform="translate(-1.43 -0.75)"/>
                        </svg>
                        0485 847 977
                    </a>
                </li>
                <li class="contact__item">
                    <a href="https://www.facebook.com/limagesansnom/" class="contact__link">
                        <svg data-name="Calque 5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"
                             width="18" height="18">
                            <defs>
                                <style>.cls-5 {
                                        fill: #434343;
                                    }

                                    .cls-5:hover {
                                        fill: #434343;
                                    }</style>
                            </defs>
                            <path class="cls-5"
                                  d="M22.85,8.94v6.15H17.92v7.38h4.93V39.71h7.38V22.47h7.39V15.09H30.23V9.89a2.32,2.32,0,0,1,2.46-2.18h4.93V.32H31.46A8.72,8.72,0,0,0,22.85,8.94Z"/>
                        </svg>
                        @limagesansnom
                    </a>
                </li>
            </ul>
        </div>
        <div class="contact__form">
            <div class="form__subject">
                <p class="subject__label">Quel est l'objet de votre demande ?</p>
                <div>
                    <input type="radio" id="rdv" name="object" value="rdv"
                           checked><!--
                    --><label for="rdv">Rendez-vous</label>
                </div><!--
                --><div>
                    <input type="radio" id="group" name="object" value="group"><!--
                    --><label for="group">Visite de groupe</label>
                </div><!--
                --><div>
                    <input type="radio" id="other" name="object" value="other"><!--
                    --><label for="other">Autre</label>
                </div>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="47" title="Main form"]' ); ?>
        </div>
    <?php endif; ?>

</main>


<?php

get_footer();

?>
