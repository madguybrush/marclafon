<?php


get_header(); ?>


                  
<section id="contenu">
	<!-- <section id="presentation"> -->
		<?php //the_content(); ?>
        <?php //rewind_posts(); ?>
	<!--</section>-->
	<section id="projets">	
		<div class="grid">
			<div class="grid-sizer"></div>
			
            
 <?php //$ProjetsQuery = $query = new WP_Query( array( 'category_name' => 'affiches' ) ); ?>
            <?php //if ( $ProjetsQuery->have_posts() ) : ?>
                <?php //while ( $ProjetsQuery->have_posts() ) : ?>
                    <?php //$ProjetsQuery->the_post(); ?>
            
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            
<div class="grid-item animated fadeInUp">
    <a href="<?php /*the_permalink();*/ $categories = get_the_category(); echo esc_url( add_query_arg( 'category', $categories[0]->name, get_permalink() ) ); ?>"> <?php // passer catégorie en param pour que seulement les posts de la catégorie actuelle puisse être browser PAGE content.php ?>
        <?php 
        the_post_thumbnail();
        ?>
    </a>
</div>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
            
            
  <?php //endwhile ?>
		 
            <?php //endif ?>		

                
		</div>
	</section>
</section>



<?php
get_sidebar();
get_footer();

            ?>