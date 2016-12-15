<?php get_header(); ?>
<!--==============================		content		================================-->

<section>
    <div class="gallery">
    <?php $i=0; $my_query = new WP_Query('category_name=primaria'); if ($my_query->have_posts() ) : while ($my_query->have_posts() && $i<4 ) : $my_query->the_post(); ?>
        <div class="image">
            <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) { the_post_thumbnail('list_articles_thumbs'); } ?>
            </a><!-- Una foto en la galeria-->
            <div id="info">
                <?php echo get_the_title($ID); ?><br>
                <?php echo get_the_date( $post_id ); ?>
            </div>
        </div>
    <?php $i++; endwhile;?>
    <?php endif; ?>

    <?php $i=0; $my_query = new WP_Query('category_name=secundaria'); if ($my_query->have_posts() ) : while ($my_query->have_posts() && $i<4 ) : $my_query->the_post(); ?>
        <div class="image">
            <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) { the_post_thumbnail('list_articles_thumbs'); } ?>
            </a><!-- Una foto en la galeria-->
            <div id="info">
                <?php echo get_the_title($ID); ?><br>
                <?php echo get_the_date( $post_id ); ?>
            </div>
        </div>
    <?php $i++; endwhile;?>
    <?php endif; ?>
    </div>

</section>



<section id="banner" class="grupo banner">
    
</section>


    

<!--==============================footer=================================-->
<?php get_footer(); ?>