<?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="main">
    
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=334371103262765";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Place this render call where appropriate -->
        <script type="text/javascript">
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <div id="post">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1><br> 

        <div style="color: #aaa">~ 
          By <?php the_author() ?> on <?php the_time('F jS, Y') ?>
        </div>
        <!-- <div id="meta">By <?php the_author() ?> | Date: <?php the_time('F jS, Y') ?> | Category: <?php the_category(', ') ?> </div> -->
        
        <?php the_content(); ?>
        
        <div id="tags"><?php the_tags(); ?></div>
        
    </div>
    <?php comments_template(); ?>
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>