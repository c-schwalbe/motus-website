<?php
/*
Template Name: Revit Tools
*/
?>


<?php get_header(); ?>

<canvas class='connecting-dots'></canvas>	

<main>

	<!--spacing -->
	<div class="col-m-2-16"></div>
    
    <div class="col-m-11-16 content">
        <div id="main" class="row">
        	<!--  The Loop -->
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); 
            ?>
            
            <h1>
				<?php the_title(); ?>
            </h1>
            <div class="the-content" style="margin-bottom: 3rem;">
                <?php the_content(); ?>
            </div>
            <?php 
                endwhile;
                
                else :
                    echo '<p>No content found</p>';
                    
                endif;
            ?>
        	
            
            
            <?php
			$paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'category_name' => 'Revit Addins',
				'posts_per_page' => 50,
				'paged' => $paged,
			);
			$arr_posts = new WP_Query( $args );
	 
			if ( $arr_posts->have_posts() ) :
	 
				while ( $arr_posts->have_posts() ) :
					$arr_posts->the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    	<div class="tools-thumbnail">
						<?php
						if(has_post_thumbnail()) {                    
							$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
							echo '<img src="' . $image_src[0]  . '" width="32px"  />';
						}
						?>
                        </div>
                        
						<header class="entry-header">
							<h2 class="entry-title"><?php the_title(); ?></h2>
						</header>
                        
						<div class="entry-content">
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>">View Page</a>
						</div>
                        
					</article>
					<?php
				endwhile;
				wp_pagenavi(
					array(
						'query' => $arr_posts,
					)
				);
			endif;
        	?>
            
            <?php
            ?>
		</div><!-- /row -->
    </div><!-- /content -->
    
    <!--space-->
    <div class="col-m-1-16"></div>
    
    <div class="col-m-5-16 support">
      <div class="row">
    </div><!-- /support -->
    
</main>
	
<?php get_footer(); ?>