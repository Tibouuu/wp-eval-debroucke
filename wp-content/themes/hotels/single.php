<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section class="single">

            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );?>
                <h1><?php the_title();?></h1>
                <div class="single-chambre">
                    <?php the_post_thumbnail();
                    ?>
                    <div>
                        <?php
                        the_content();?>
                        <p> <?php echo get_field('price'); ?>€</p>
                <p> <?php echo get_field('capacity'); ?> couchage(s)</p>
                <?php the_taxonomies();

                        ?>
                    </div>
                </div><?php
                $terms = wp_get_post_terms( get_the_ID(), 'gamme');
            endwhile; ?>
</section>
<section class="relation-chambres">
    <h2>Dans la même gamme de prix...</h2>
</section>
<?php

            $args = array(
                'post_type' => 'chambres',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'gamme',
                        'field'    => 'slug',
                        'terms'    => array($terms[0]->slug),
                    ),
                ),
            );
            $query = new WP_Query( $args );

           if($query->have_posts()) : ?>
            <section class="chambres-home">
                <?php while($query->have_posts()) : $query->the_post();?>
                <div><?php
                the_post_thumbnail(); the_taxonomies(); ?>
                    <a href="<?php the_permalink();?>">En savoir plus</a>
                </div>

                <?php endwhile; ?>
            </section>
            <?php endif; ?>