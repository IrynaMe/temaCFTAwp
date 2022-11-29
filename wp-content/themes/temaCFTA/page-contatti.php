
<?php get_header(); ?>



<div class="container my-5">
<div class="row">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="col-md-4">
    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link permanente a <?php the_title_attribute(); ?>">
    <?php the_title(); ?></a></h2>

    Siamo in: Piazza del Duomo,1 <br>
    Milano<br>
    tel:123456789
</div>
<div class="col-md-4">

    <?php the_post_thumbnail('medium', array('class'=>'contatti')); ?> 
    <iframe class= "contatti" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2798.2676449937394!2d9.189526714832155!3d45.46441214145157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c6ac3c5e8c45%3A0xfa3df6696af003b2!2sP.za%20del%20Duomo%2C%201%2C%2020121%20Milano%20MI!5e0!3m2!1sen!2sit!4v1669717894083!5m2!1sen!2sit" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div class="col-md-4">

    <?php the_content(); ?>

</div>

<?php endwhile;
else: ?>
<p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
<?php endif; ?>


</div>
</div>

<?php get_footer(); ?>