<?php $fiche = new WP_Query(array(
    'post_type' => 'chambres', // Custom Post type// ID de la catégorie
    'posts_per_page' => 5, // Remplace showposts
    // Ordre par date
));?>
<?php get_header(); ?>
    <section class="banner">
        <h1>Un endroit paisible, pour un séjour inoubliable.</h1>
        <p>Découvrez nos chambres prêtes pour vous...</p>
    </section>
<?php if($fiche->have_posts()) : ?>
    <section class="chambres-home">
        <?php while($fiche->have_posts()) : $fiche->the_post(); ?>
            <div class="home-actu">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><strong><?php the_title(); ?></strong><br /></a>
                <span class="intro-actu"><?php the_post_thumbnail(); ?></span>
            </div>
        <?php endwhile; ?>
    </section>
    <div style="text-align: center"><a href="http://localhost:8000/chambres">Voir toutes les chambres</a></div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<h2 style="text-align: center">Contactez-nous</h2>
<div style="text-align: center"><p>07 62 33 48 58</p>
    <p>thibautdebroucke@gmail.com</p></div>


