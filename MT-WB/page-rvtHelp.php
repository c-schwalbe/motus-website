<?php
/*
Template Name: Revit Help
*/
?>
<?php get_header(); ?>
  
<main>
	<!--spacing -->
	<div class="col-m-2-16"></div>
    
    <!-- help-navigation -->
    <nav class="col-help-nav">
    	<h3>motus tools for Revit</h3>
        <?php
        $args = array(
            'theme_location' => 'help'
        );
        ?>
        <?php wp_nav_menu( $args ); ?>
    </nav><!-- /help-navigation -->
    
    <!--spacing -->       
    <div class="col-m-2-16"></div> 
           
    <!--  The Loop -->
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); 
    ?>
    
        <!--Get the title and content -->   
        <div class="col-help-content">
            <h2>
                <?php the_title(); ?>
            </h2>
            
            <?php the_content(); ?>
        </div>
   
    <!--End The Loop-->
	<?php 
        endwhile;
        
        else :
            echo '<p>No content found</p>';
            
        endif;
    ?>
    
    <!--Get the post thumbnail-->
    <?php
    if(has_post_thumbnail()) {                    
        $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
        echo '<img src="' . $image_src[0]  . '" width="100%"  />';
    } 
    ?>

</main>

<!--get footer content-->
<?php get_footer(); ?>