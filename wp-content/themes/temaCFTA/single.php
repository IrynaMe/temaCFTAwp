<!-- include header.php -->
<?php get_header(); ?>
<!-- https://codex.wordpress.org/Il_Loop -->
<!-- https://codex.wordpress.org/Gerarchia_dei_template -->

<div class="container">
<div class="row">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="col-md-10">
<!-- contenuto -->
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link permanente a <?php the_title_attribute(); ?>">
<?php the_title(); ?></a></h2>


<!-- Visualizza il contenuto dell'articolo all'interno di un div. -->

<div class="entry">
   <?php the_content(); ?>
 </div>



</div>


<div class="col-md-2">
<!-- immagine -->
<?php the_post_thumbnail(); ?>

</div>

<?php endwhile;
else: ?>
<p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
<?php endif; ?>
</div>
</div>
<!-- include footer.php -->
<?php get_footer(); ?>