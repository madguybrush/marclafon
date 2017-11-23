<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marclafon
 */


/*content : posts // content-page : pages */
?>




    <section id="contenuProjet"> 

	 <div id="project-infos-text" style="opacity: 1;">
		<span>
		<h2><?php the_title(); ?></h2>
		<h3 class="titreinfos">commanditaire</h3>
		<h4 class="infos"><?php echo get_post_meta( get_the_ID(), 'commanditaire', true ); ?></h4>
		<h3 class="titreinfos">support</h3>
		<h4 class="infos"><?php echo get_post_meta( get_the_ID(), 'support', true ); ?></h4>
		<h3 class="titreinfos">commande</h3>
		<h4 class="infos"><?php echo get_post_meta( get_the_ID(), 'commande', true ); ?></h4>
		<h3 class="titreinfos">année</h3>
		<h4 class="infos"><?php echo get_post_meta( get_the_ID(), 'année', true ); ?></h4>
		<h3 class="titreinfos">catégorie</h3>
		<h4 class="infos"><?php echo get_post_meta( get_the_ID(), 'catégorie', true ); ?></h4>
		</span>
	</div>
	<?php $prev = get_permalink(get_adjacent_post(false,'',false));
        $next = get_permalink(get_adjacent_post(false,'',true));  ?>
	<div id="project-navigation" style="">
		<?php if ($prev != get_permalink() ) { ?><a class="project-prev" href="<?php echo $prev; ?>" style=""><img src="<?php bloginfo('stylesheet_directory');?>/img/up.png">Projet précédent</a><?php } ?> <!-- • -->
		<?php if ($next != get_permalink() ) { ?><a class="project-next" href="<?php echo $next; ?>" style="">Projet suivant<img src="<?php bloginfo('stylesheet_directory');?>/img/down.png"></a><?php } ?>
	</div>
	

 
	<!-- Slider main container -->
	<div class="swiper-container">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<!-- Slides -->
            <?php
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'your_thumb_handle' );
?>
			<div class="swiper-slide"><img src="<?php echo $thumbnail['0']; ?>"/></div>
            
            
            <?php  
            global $post;
            $galleries = get_post_gallery_images( $post ); 
            foreach ($galleries as $key => $val) {
            //echo $val; ?>
             <div class="swiper-slide"><img src="<?php echo $val;  ?>"/></div>
           
                
            <?php   } ?> 

           
            
            

		</div>
		<!-- If we need pagination 
		<div class="swiper-pagination"></div>-->
	 
		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev"><!--<img src="img/fleche2.png">--></div>
		<div class="swiper-button-next"><!--<img src="img/fleche.png">--></div>
	 
		<!-- If we need scrollbar 
		<div class="swiper-scrollbar"></div>-->
	</div>

 </section> 


    


	<!--<footer class="entry-footer">-->
		<?php //marclafon_entry_footer(); 
        /* cf inc/template-tags/ */ ?>
	<!--</footer> -->

