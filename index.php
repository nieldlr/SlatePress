<?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <div id="post">
        <h1><a href="<?php the_permalink() ?>"><?php the_title();?></a></h1><br><div style="color: #aaa">~ <?php the_time('F jS, Y') ?></div>
        <div id="teaser">
            <a href="<?php the_permalink() ?>"><div class="thumbnail" align="center"><?php the_post_thumbnail(); ?></a></div><?php the_excerpt(); ?><div style="clear:both;"></div>
        </div>
    </div>
    
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    <div class="pagination"><p><?php posts_nav_link(); ?></p></div>
</div>
<?php get_footer(); ?>