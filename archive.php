<?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="main">
    <div class="archive">
    <?php if (is_category()) {?>
            Viewing the archive for the category: <?php single_cat_title(); }?>
    <?php if (is_tag()) {?>
             Viewing the archive for the tag: <?php single_tag_title(); }?>
    <?php if (is_month()) {?>
             Viewing the archive for the date: <?php the_time('F, Y'); }?>
    </div>      
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <div id="post">
        <h1><a href="<?php the_permalink() ?>"><?php the_title();?></a></h1>
        <br>
        <div class="thumbnail"><?php the_post_thumbnail(); ?></div><?php the_excerpt(); ?><div style="clear:both;"></div>
    </div>
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>