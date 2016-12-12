<?php get_header(); ?>
<!--==============================		content		================================-->

<section>
    <div class="gallery">
      <div class="image"><img src="http://lorempixel.com/300/200/" alt=""><!-- Una foto en la galeria--></div>
      <div class="image"><img src="http://lorempixel.com/300/200/" alt=""><!-- Una foto en la galeria--></div>
      <div class="image"><img src="http://lorempixel.com/300/200/" alt=""><!-- Una foto en la galeria--></div>
      <div class="image"><img src="http://lorempixel.com/300/200/" alt=""><!-- Una foto en la galeria--></div>
      <div class="image"><img src="http://lorempixel.com/300/200/" alt=""><!-- Una foto en la galeria--></div>
      <div class="image"><img src="http://lorempixel.com/300/200/" alt=""><!-- Una foto en la galeria--></div>
      <div class="image"><img src="http://lorempixel.com/300/200/" alt=""><!-- Una foto en la galeria--></div>
      <div class="image"><img src="http://lorempixel.com/300/200/" alt=""><!-- Una foto en la galeria--></div>
    </div>

</section>





<section id="banner" class="grupo banner">
    
    <div class="cajaslider">
        <div class="slide">
        	<img class="thumb" src="http://lorempixel.com/470/300" alt="" />
        	<article>
        		<hgroup><h2><a href="?p=<?php the_ID(); ?>"><?php echo get_the_title($ID); ?></a></h2></hgroup>
        		 <div class="notas-generales__fecha">
        		 	Publicado el <?php  printf(__(get_the_date('jS F, Y'))); ?>
        		 </div>
        		 <div class="notas-generales__texto"><?php echo get_the_excerpt($ID); ?></div>

                    <br><br><br><p class="postmetadata">
                    Publicado en <?php the_category(', ') ?> 
                    <strong>|</strong>
                    <?php edit_post_link('Edit','','<strong>|</strong>'); ?>  
                    <?php comments_popup_link('Sin Comentarios »', '1 Comentario »', '% Comentarios »'); ?></p>
            </article>
        </div>
    </div>

</section>






<section id="main" class="grupo">
    <!-- &category_name=notas-generales -->
    <div id="notas-generales" class="caja tablet-70 notas-generales">

        
        <!-- ESTO ES EL ANUNCIO 468 x 60 -->
        <?php $my_query = new WP_Query('category_name=ads_468x60'); if($my_query->have_posts()) { ?>

            <div class="grupo slider no-padding">
                <ul class="caja s468x60">

                    <?php while ($my_query->have_posts()) : $my_query->the_post(); $enlace = get_post_meta($post->ID, 'enlace', true); ?>
                        
                        <?php if( !empty($enlace) ) { ?>
                            <li>
                                <a href="<?php echo $enlace; ?>" target="_blank">
                                    <?php echo get_the_post_thumbnail( $post_id, 'full' ); ?>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li><?php echo get_the_post_thumbnail( $post_id, 'full' ); ?></li>
                        <?php } ?>

                    <?php endwhile; ?>

                </ul>
            </div>

        <?php } ?>




      <?php 
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $my_query = new WP_Query('posts_per_page=50&paged=' . $paged ); while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <?php if(  !in_category('slider_principal') && !in_category('ads_728x90') && !in_category('ads_300x250') && !in_category('ads_300x600') && !in_category('ads_300x600_2') && !in_category('ads_300x600_3') && !in_category('ads_468x60') && !in_category('fotos') && !in_category('videos')  ) { ?>
        <div class="notas-generales__item">
            <h2 class="notas-generales__titulo"><a href="?p=<?php the_ID(); ?>"><?php echo get_the_title($ID); ?></a></h2>
            
            <div class="notas-generales__fecha">
            	<ul>
	            	<li>Publicado el <?php  printf(__(get_the_date('jS F, Y'))); ?></li>
	            	<li>Otros posts de <?php the_author_posts_link(); ?></li>
	            	<li>Escrito por: <?php the_author_link(); ?></li>
            	</ul>
            </div>



                <?php if (has_post_thumbnail()) { ?>
                    <div class="grupo">
                        <div class="caja tablet-30">
                            <?php echo get_the_post_thumbnail( $post_id, 'thumnail' ); ?>
                        </div>

                        <div class="caja tablet-70 no-padding">
                            <div class="notas-generales__texto"><?php echo get_the_excerpt($ID); ?></div>
                            <div class="notas-generales__leermas"><a href="<?php the_permalink() ?>">Leer más >></a></div>
                        </div>
                    </div>

                <?php } else { ?>

                    <div class="notas-generales__texto"><?php echo get_the_excerpt($ID); ?></div>
                    <div class="notas-generales__leermas"><a href="<?php the_permalink() ?>">Leer más >></a></div>

                <?php } ?>
        </div>
      <?php } endwhile; ?>

        <div class="nav-previous alignleft"><?php next_posts_link( 'Entradas Anteriores' ); ?></div>
        <div class="nav-next alignright"><?php previous_posts_link( 'Entradas Recientes' ); ?></div>
    </div>


    
    <?php get_sidebar('menu'); ?>
    
</section>





    

<!--==============================footer=================================-->
<?php get_footer(); ?>