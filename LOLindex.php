<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marclafon
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            
            <section id="contenu">


<?php //if ( is_front_page()  ) : ?>
                  

	<section id="presentation">
		
	</section>
	<section id="projets">			<!--<p><button id="load-images">Load images</button></p>-->
		<div class="grid">
			<div class="grid-sizer"></div>
			
			<div class="grid-item animated fadeInUp"><img class="hero__example-link__img" src="img/img1.jpg"></div>
			<div class="grid-item animated fadeInUp"><a href="page.html"><img class="hero__example-link__img" src="img/img2.jpg"></a></div>
			<div class="grid-item animated fadeInUp"><img class="hero__example-link__img" src="img/img3.jpg"></div>
			<div class="grid-item animated fadeInUp"><img class="hero__example-link__img" src="img/img4.jpg"></div>
			<div class="grid-item animated fadeInUp"><img class="hero__example-link__img" src="img/img5.jpg"></div>
			<div class="grid-item animated fadeInUp"><img class="hero__example-link__img" src="img/img6.jpg"></div>
			<div class="grid-item animated fadeInUp"><img class="hero__example-link__img" src="img/img7.jpg"></div>
			<div class="grid-item animated fadeInUp"><img class="hero__example-link__img" src="img/img8.jpg"></div>
		</div>
	</section>
<?php //endif ?>
</section>
            
            

		<?php
			//the_content();

			/*wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'marclafon' ),
				'after'  => '</div>',
			) );*/
		?>
	<!--</div>-->
 
                  
                  
       
            
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
