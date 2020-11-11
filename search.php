<?php get_header(); ?>


<h2><?php _e( 'Wyniki dla hasła', config('theme.slug') ); ?>: "<?php echo get_search_query(); ?>"</h2>


<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
<?php endwhile; ?>
    
<?php get_footer(); ?>

<?php get_footer(); ?>