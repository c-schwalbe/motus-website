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
            
            <?php
            if(has_post_thumbnail()) {                    
                $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                echo '<img src="' . $image_src[0]  . '" width="32px"  />';
            } 
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
            
            
		</div><!-- /row -->
    </div><!-- /content -->
    
    <!--space-->
    <div class="col-m-1-16"></div>
    
    <div class="col-m-5-16 support">
      <div class="row">
    	<!--this is where to put supporting content, maybe some media -->
    </div><!-- /support -->
    
</main>
	
<?php get_footer(); ?>