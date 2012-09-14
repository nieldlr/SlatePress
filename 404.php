<?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="main">
    The page you have been looking for could not be found.
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <div id="post">
        <h1><a href="<?php the_permalink() ?>"><?php the_title();?></a></h1>
        <div id="meta">By <?php the_author() ?> | Date: <?php the_time('F jS, Y') ?> | Category: <?php the_category(', ') ?> </div>
        <div class="thumbnail"><?php the_post_thumbnail(); ?></div><?php the_excerpt(); ?><div style="clear:both;"></div>
    </div>
    <div class="pagination"><p><?php posts_nav_link(); ?></p></div>
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>