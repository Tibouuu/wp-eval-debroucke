<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>
<?php \Hotel\Filters::display(); ?>
<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php
			the_title(sprintf('<h4 class="default-max-width"><a href="%s">', esc_url(get_permalink())),
				'</a></h4>');
			twenty_twenty_one_post_thumbnail();
			?>
			<div class="meta-data flex justify-between">

				<?php $area = get_field_object('beds'); ?>
				<?php if ($area) : ?>
					<?php
					$choices = $area['choices'];
					$value = get_field('beds');
					?>
					<?php if (!empty($value)) : ?>
						<div class="project-area flex-1"><?php echo $choices[$value]; ?></div>
					<?php endif; ?>
				<?php endif; ?>
				<div class="project-date flex-1 text-right">
					<?php echo get_post_meta(get_the_ID(), 'custom_date_field', true); the_taxonomies(); ?>
				</div>
			</div>

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
			<a href=<?php get_permalink() ?>>En savoir plus</a>
		</article><!-- #post-${ID} -->
	<?php endwhile; ?>

	<?php twenty_twenty_one_the_posts_navigation(); ?>

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>


