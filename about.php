<?php
/*

 * Template Name: About Us
 */
?>
<?php
get_header();

?>
<style type="text/css">
body{ background-color:#0000ff !important}
.dnt3-menu ul.dropdown a:visited, .dnt3-menu ul.dropdown a:hover, .dnt3-menu ul.dropdown a.active {
    color: #FFFFFF;
}
.menu-logo p {
    color: #fff;
}
.content-project p {
    color: #fff;
}
.content-about p{
	color:#fff;
	}
.footer-menu ul li a{
	color:#fff;
	}



</style>


    <?php
				// Start the loop.
				while ( have_posts() ) : the_post();
				?> 
    
    <!--content-area starts...-->
	<section class="content-area-project m-bottom">
    	<div class="row">
        	<div class="container-fluid">
            	<div class="col-md-4">
                	<div class="content-project">
                    	<p><?php the_title();?></p>
                    </div>
                    <!-- content ends....-->
                </div>
                <!--col-md-4 ends....-->
                
                <div class="col-md-8">
                	<div class="content-about">
                    	<?php the_content();?>
                    
                    
                    </div>
                    <!-- content ends....-->
                </div>
                <!--col-md-4 ends....-->
            </div>
            <!--container-fluid ends....-->
        </div>
        <!--row ends....-->
    </section>
    <!--content-area ends...-->
    
     <?php
						// End the loop.
						endwhile;
						?>
						
    <?php get_footer();?>
