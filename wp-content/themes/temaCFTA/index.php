
<?php get_header()?>
<div class="container my-5">
  <div class="row ">

 




<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="col-4 my-3">
<?php the_post_thumbnail();?>
</div>


<div class="col-8 my-3">
  <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Link permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>




 <div class="entry ">
   <?php 
   //the_content(); 
   the_excerpt();
   ?>
   <?php
   echo get_post_meta(get_the_id(), 'specializzato', true)
   ?>
 </div>

</div>




<?php endwhile; else: ?>
<p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
<?php endif; ?>
</div>
</div>

<?php get_footer()?>
