<?php get_header(); ?>
    
    <!-- header -->
    <header class="main-header">
         <h1><span><?php bloginfo('name'); ?></span> <br> <?php bloginfo('description'); ?> </h1>
    </header>
    
    <!-- about -->
    <section class="about container">
        <article>
            <h2 class="headings"><?php the_field('naslov_prve_sekcije'); ?></h2>
            <p><?php the_field('tekst_prve_sekcije'); ?></p>
        </article>
        <hr>
    </section>
    
    <!-- band -->
    <section class="band">
        <h2 class="headings"><?php the_field('naslov_druge_sekcije'); ?></h2>
        <div class="container">
            <article>
                <img src="<?php the_field('prva_slika_druge_sekcije'); ?>" alt="">
                <h4><?php the_field('ime_ispod_prve_slike'); ?></h4>
                <p><?php the_field('instrument_ispod_prve_slike'); ?></p>
            </article>
            <article>
                <img src="<?php the_field('druga_slika_druge_sekcije'); ?>" alt="">
                <h4><?php the_field('ime_ispod_druge_slike'); ?></h4>
                <p><?php the_field('instrument_ispod_druge_slike'); ?></p>
            </article>
            <article>
                <img src="<?php the_field('treca_slika_druge_sekcije'); ?>" alt="">
                <h4><?php the_field('ime_ispod_trece_slike'); ?></h4>
                <p><?php the_field('instrument_ispod_trece_slike'); ?></p>
            </article>
            <hr>
        </div>
    </section>
    
    
    <!-- video -->
    <section class="container video">
        <h2 class="headings">Video</h2>
        <iframe width="100%" height="700" src="https://www.youtube.com/embed/TP7D0DH5Y6k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    
   <?php get_footer(); ?>