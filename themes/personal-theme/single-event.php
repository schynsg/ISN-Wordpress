<?php

get_header();

?>

<main id="main" class="single-item__main">
    <div class="gray-background"></div>
    <div class="single-item__intro">
        <h1 class="main-title"><?php the_field('name'); ?></h1>
        <div>
            <img src="<?php the_field('affiche'); ?>" alt="Affiche de l'exposition" height="711" width="711">
        </div>
        <div>
            <img src="<?php the_field('image_secondaire'); ?>" alt="Présentation de l'exposition" height="378" width="566">
        </div>
    </div>
    <div class="single-item__about">
        <div class="about__img">
            <img src="<?php the_field('about_img'); ?>" alt="Illustration de l'exposition" height="973" width="960">
        </div>
        <div class="about__text">
            <h2 class="bold"><span class="mid-underline">À pr</span>opos</h2>
            <p class="about paragraph"><?php the_field('description'); ?></p>
            <div class="about__link">
                <a href="<?php the_field('lien_facebook'); ?>" class="arrow-right">Événement Facebook</a>
            </div>
        </div>
    </div>
</main>

<?php

get_footer();

?>
