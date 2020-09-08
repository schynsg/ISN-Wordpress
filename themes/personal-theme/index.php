<?php

get_header();

?>


<main id="main">
    <div class="exhibitions">
        <div class="exhibitions__intro">
            <h2 class="exhibitions__title"><span class="mid-underline">Nos </span>expos</h2>
        </div>

        <div id="exhibitions__items">
        <?php

            $events = new WP_Query(array(
                'posts_per_page' => 9,
                'post_type' => 'event',
            ));

            while ($events->have_posts()) {
            $events->the_post(); ?>


            <div class="exhibitions__item">
                <div class="item__img">
                    <img src="<?php the_field('affiche'); ?>" alt="<?php the_field('name'); ?>">
                </div>
                <div class="item__intro">
                    <h3 class="item__title"><?php the_field('name'); ?> - <?php the_field('date'); ?></h3>
                    <p class="item-paragraph"><?php the_field('introduction'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="item__link">En savoir plus</a>
                </div>
            </div>

            <?php }  wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="books">
        <div class="books__intro">
            <h2 class="books__title">Nos liv<span class="mid-underline">res</span></h2>
        </div>
        <div id="books__items">
        <?php

        $books = new WP_Query(array(
            'posts_per_page' => 9,
            'post_type' => 'books',
        ));

        while ($books->have_posts()) {
        $books->the_post(); ?>

            <div class="books__item">
                <div class="item__img">
                    <img src="<?php the_field('affiche'); ?>" alt="<?php the_field('name'); ?>">
                </div>
                <div class="item__intro">
                    <h3 class="item__title"><?php the_field('name'); ?></h3>
                    <p class="item-paragraph"><?php the_field('introduction'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="item__link">En savoir plus</a>
                </div>
            </div>

            <?php }  wp_reset_postdata(); ?>
        </div>
    </div>
</main>

<?php

get_footer();

?>
