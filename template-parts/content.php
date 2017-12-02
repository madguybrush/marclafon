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
                    
        <?php 
                    

  $custom_field_keys = get_post_custom_keys();
  foreach ( $custom_field_keys as $key => $value ) {
    $valuet = trim($value);
      if ( '_' == $valuet{0} )
      continue;
    ?> <h3 class="titreinfos"><?php echo " " . $value . "</h3>";
      echo '<h4 class="infos">' . get_post_meta( get_the_ID(), $value, true ) . "</h4>"; 
  }
             

                    
                    ?>

    
		</span>
         
         
	</div>
         
         
         <a href="#" id="project-infos" class="">
             <span style="background-color: rgb(224, 224, 224);"></span>
             <span style="background-color: rgb(224, 224, 224);"></span>
         </a>
         
         
         
	<?php 
         if (isset($_GET['category'])) {
    $category = $_GET['category'];
             // $prev = get_permalink(get_adjacent_post(true,'',false));
        //$next = get_permalink(get_adjacent_post(true,'',true));  
               //$prev = get_permalink(get_adjacent_post(true,'',false));
        //$next = get_permalink(get_adjacent_post(true,'',true));     
             $prev = add_query_arg( 'category', $category, get_permalink(get_adjacent_post(true,'',false)) );
             $next = add_query_arg( 'category', $category, get_permalink(get_adjacent_post(true,'',true)) );
             //echo esc_url( add_query_arg( 'category', $categories[0]->name, get_permalink() ) );
} else {
      $prev = get_permalink(get_adjacent_post(false,'',false));
        $next = get_permalink(get_adjacent_post(false,'',true));  
} 
         
        // $prev = get_permalink(get_adjacent_post(false,'',false));
   //     $next = get_permalink(get_adjacent_post(false,'',true));  
         
         //if user is coming from a category page
         //get post of current category only
    

         ?>
         
         <?php 
         if (isset($_GET['category'])) {
             ?>
	<div id="project-navigation" style="">
		<?php if ($prev != esc_url( add_query_arg( 'category', $category, get_permalink() ) ) ) { ?><a class="project-prev" href="<?php echo $prev; ?>" style=""><img src="<?php bloginfo('stylesheet_directory');?>/img/up.png">Projet précédent</a><?php } ?> <!-- • -->
		<?php if ($next != esc_url( add_query_arg( 'category', $category, get_permalink() ) ) ) { ?><a class="project-next" href="<?php echo $next; ?>" style="">Projet suivant<img src="<?php bloginfo('stylesheet_directory');?>/img/down.png"></a><?php } ?>
	</div>
         
	 <?php } else { ?>
 	<div id="project-navigation" style="">
		<?php if ($prev != get_permalink() ) { ?><a class="project-prev" href="<?php echo $prev; ?>" style=""><img src="<?php bloginfo('stylesheet_directory');?>/img/up.png">Projet précédent</a><?php } ?> <!-- • -->
		<?php if ($next != get_permalink() ) { ?><a class="project-next" href="<?php echo $next; ?>" style="">Projet suivant<img src="<?php bloginfo('stylesheet_directory');?>/img/down.png"></a><?php } ?>
  <?php }  ?>
    
	<!-- Slider main container -->
	<div class="swiper-container">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<!-- Slides -->
            <?php
//$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'your_thumb_handle' );
?>
			<!-- <div class="swiper-slide"><img src="--><?php //echo $thumbnail['0']; ?><!--"/></div>-->
            
            
            <?php  
            global $post;
            $galleries = get_post_gallery_images_with_info( $post ); 
            if (!empty($galleries)){
            foreach ($galleries as $key => $val) {
            //echo $val; ?>
            <?php if ($val['description'] == 'full'){  ?>
            <div class="swiper-slide pj-image-display-fullscreen"><div class="swiper-zoom-container" style="background-image: url('<?php echo $val['src'] ?>"></div></div>
            <?php } else { ?>
             <div class="swiper-slide"><img src="<?php echo $val['src'];  ?>"/></div>
           <?php } ?>
                
            <?php   } ?> 
           <?php } else { ?> 
            <div class="swiper-slide">
           <?php the_post_thumbnail();}?> 
</div>
           
            
            

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

