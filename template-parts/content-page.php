<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marclafon
 */
/*content : posts // content-page : pages */
?>

<article id="post-<?php the_ID(); ?>" <?php //post_class(); ?>>
	<!--<header class="entry-header">
		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>  -->

	<!--<div class="entry-content">-->
    
<?php if ( is_front_page()  ) : ?>
                  
<section id="contenu">
	<section id="presentation">
		<?php
        
		the_content();
        ?><?php //rewind_posts(); ?>
	</section>
	<section id="projets">	
		<div class="grid">
			<div class="grid-sizer"></div>
			
            
 <?php $ProjetsQuery = new WP_Query(array( 'post_type'    => 'post' )); ?>
            <?php if ( $ProjetsQuery->have_posts() ) : ?>
                <?php while ( $ProjetsQuery->have_posts() ) : ?>
                    <?php $ProjetsQuery->the_post(); ?>
<div class="grid-item animated fadeInUp">
    <a href="<?php the_permalink(); ?>">
        <?php 
        the_post_thumbnail();
        ?>
    </a>
</div>


  <?php endwhile ?>
				
            
            
            
            <?php endif ?>
                
                
		</div>
	</section>
        </section>


    <?php else : ?>
            <section id="presentation">
     
		<?php
        
		the_content();
        ?><?php //rewind_posts(); ?>
	</section>
    
<?php endif ?>
    
    
	<!--<section id="presentation">-->
		<?php
			/*the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'marclafon' ),
				'after'  => '</div>',
			) );*/
		?>
	<!--</div>
        </section>-->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				/*edit_post_link(
					sprintf(
						wp_kses(*/
							/* translators: %s: Name of current post. Only visible to screen readers */
							/*__( 'Edit <span class="screen-reader-text">%s</span>', 'marclafon' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);*/
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
