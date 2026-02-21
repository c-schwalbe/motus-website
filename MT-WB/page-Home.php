<?php
/*
Template Name: HomePage
*/
?>
<?php get_header(); ?>	

<canvas class='connecting-dots'></canvas>	
   
<main>

	<div class="col-m-2-16"></div><!--spacer -->
    
    <div class="content">
        <div id="main" class="row">
        	
            <!--  Show Title -->
            <div class="title-container">
                <a href="<?php echo home_url(); ?>"><h1 class="site-title-home"><?php bloginfo('name'); ?></h1></a>
                <h5 class="site-description"><?php bloginfo('description'); ?></h5>
            </div>
            
            <!--  The Loop -->
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); 
            ?>
            
            <div class="the-content">
                <?php the_content(); ?>
            </div>
   
            <?php 
                endwhile;
                
                else :
                    echo '<p>No content found</p>';
                    
                endif;
            ?>
            
            <?php
            if(has_post_thumbnail()) {                    
                $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                echo '<img src="' . $image_src[0]  . '" width="100%"  />';
            } 
            ?>
		</div><!-- /row -->
    </div><!-- /content -->
</main>
	
<?php get_footer(); ?>