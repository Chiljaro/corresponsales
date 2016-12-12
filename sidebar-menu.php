<div class="caja tablet-30">

	<div class="buscar">
		<?php get_search_form( true ); ?>
	</div>

    <div class="pie__redessociales">
      <a target="_blank" href="https://www.facebook.com/ENTIDaDES-494787677209973/" class="icon-facebook-circled sidebar-facebook"></a>
      <a target="_blank" href="https://twitter.com/entidades_mx" class="icon-twitter-circled sidebar-twitter"></a>
    </div>


    
    <?php $my_query = new WP_Query('category_name=ads_300x250'); if($my_query->have_posts()) { ?>

        <div class="caja slider no-padding">
            <ul class="s300x250">

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


    <?php $my_query = new WP_Query('category_name=ads_300x600'); if($my_query->have_posts()) { ?>

        <div class="caja slider no-padding">
            <ul class="s300x600">

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




    <?php $my_query = new WP_Query('category_name=ads_300x600_2'); if($my_query->have_posts()) { ?>

        <div class="caja slider no-padding">
            <ul class="s300x600_2">

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


    <?php $my_query = new WP_Query('category_name=ads_300x600_3'); if($my_query->have_posts()) { ?>

        <div class="caja slider no-padding">
            <ul class="s300x600_3">

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


    <div class="caja contador">
        <? if ($_SERVER['PHP_SELF'] == "/index.php") {
        $result_contador = mysql_query("SELECT visitas FROM contador WHERE id = '1'");
        $contador = mysql_fetch_assoc($result_contador);
        echo "<b>".$contador['visitas']."</b>";
        $cuantos = rand(1, 1);
        $actuales = $contador['visitas']+$cuantos;
        mysql_query("UPDATE contador SET visitas = '$actuales' WHERE id = '1'");
        ?> Visitas <?php } ?>
    </div>
              


</div>