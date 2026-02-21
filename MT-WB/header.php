<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    <link href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?> rel="stylesheet" type="text/css">
</head>
    
<body <?php body_class(); ?>> 

	<div id="loaderOverlay"></div>
    
	<div class="guide-16-grid">
    	<div class="col-m-1-16"><div class="guide"> 01 </div></div>
    	<div class="col-m-1-16"><div class="guide"> 02 </div></div>
    	<div class="col-m-1-16"><div class="guide"> 03 </div></div>
    	<div class="col-m-1-16"><div class="guide"> 04 </div></div>
    	<div class="col-m-1-16"><div class="guide"> 05 </div></div>
    	<div class="col-m-1-16"><div class="guide"> 06 </div></div>
    	<div class="col-m-1-16"><div class="guide"> 07 </div></div>
    	<div class="col-m-1-16"><div class="guide"> 08 </div></div>
    	<div class="col-m-1-16"><div class="guide"> 09 </div></div>
    	<div class="col-m-1-16"><div class="guide"> 10 </div></div>
    	<div class="col-m-1-16"><div class="guide"> 11 </div></div>
    	<div class="col-m-1-16"><div class="guide"> 12 </div></div>
    	<div class="col-m-1-16"><div class="guide"> 13 </div></div>
    	<div class="col-m-1-16"><div class="guide"> 14 </div></div>
    	<div class="col-m-1-16"><div class="guide"> 15 </div></div>
    	<div class="col-m-1-16"><div class="guide"> 16 </div></div>
    </div>
    
    <div class="guide-8-grid">
    	<div class="col-m-2-16"><div class="guide"> 01 </div></div>
    	<div class="col-m-2-16"><div class="guide"> 02 </div></div>
    	<div class="col-m-2-16"><div class="guide"> 03 </div></div>
    	<div class="col-m-2-16"><div class="guide"> 04 </div></div>
    	<div class="col-m-2-16"><div class="guide"> 05 </div></div>
    	<div class="col-m-2-16"><div class="guide"> 06 </div></div>
    	<div class="col-m-2-16"><div class="guide"> 07 </div></div>
    	<div class="col-m-2-16"><div class="guide"> 08 </div></div>
    </div>
    
    
    <input type="checkbox" id="check" />
    <label id="icon" for="check" onClick="myFunction(this)"> 
      <!--icon-->
       <div id="bars">
         <div class="bar1"></div>
         <div class="bar2"></div>
          <div class="bar3"></div>
       </div>
      <!--title-->
       <h1 class="site-title">
		 <?php /*?>the_title();<?php */ ?>
       </h1>
    </label>
    
   
    
    <div class="menu-container">
  	  <nav>
         <?php $args = array('theme_location' => 'primary');?> <?php wp_nav_menu( $args ); ?>
      </nav>
    </div>
    
    
    

    

    
    <header class="site-header">
    </header>     