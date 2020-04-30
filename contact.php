<?php
/*

 * Template Name: Contact Us
 */
?>
<?php
get_header();
?>
    
    
    <!--content-area starts...-->
	<section class="content-area-project m-bottom">
    	<div class="row">
        	<div class="container-fluid">
            	<div class="col-md-4">
                	<div class="content-contact">
                    	<p>email</p>
                    </div>
                    <!-- content ends....-->
                </div>
                <!--col-md-4 ends....-->
                
                <div class="col-md-8">
                	<div class="content-about2">
                    	<p><?php echo of_get_option('email','No Entry'); ?></p>
                    </div>
                    <!-- content ends....-->
                </div>
                <!--col-md-8 ends....-->
                
                <div class="col-md-4">
                	<div class="content-contact">
                    	<p>mobilel</p>
                    </div>
                    <!-- content ends....-->
                </div>
                <!--col-md-4 ends....-->
                
                <div class="col-md-8">
                	<div class="content-about2">
                    	<p><?php echo of_get_option('tel','No Entry'); ?></p>
                    </div>
                    <!-- content ends....-->
                </div>
                <!--col-md-8 ends....-->
                
                <div class="col-md-4">
                	<div class="content-contact">
                    	<p>follow</p>
                    </div>
                    <!-- content ends....-->
                </div>
                <!--col-md-4 ends....-->
                
                <div class="col-md-8">
                	<div class="content-about2">
                    	<p>
                        	<a href="<?php echo of_get_option('in_link','No Entry'); ?>" target="_blank">instagram</a><br/>
							<a href="<?php echo of_get_option('t_link','No Entry'); ?>" target="_blank">tumblr</a><br/>
							<a href="<?php echo of_get_option('p_link','No Entry'); ?>" target="_blank">pinterest</a>
                        </p>
                    </div>
                    <!-- content ends....-->
                </div>
                <!--col-md-8 ends....-->
                
                <div class="col-md-4">
                	<div class="content-contact">
                    	<p>location</p>
                    </div>
                    <!-- content ends....-->
                </div>
                <!--col-md-4 ends....-->
                
                <div class="col-md-8">
                	<div class="content-about2">
                    	<p>
                        	<?php echo of_get_option('address','No Entry'); ?>
                        </p>
                    </div>
                    <!-- content ends....-->
                </div>
                <!--col-md-8 ends....-->
                
            </div>
            <!--container-fluid ends....-->
        </div>
        <!--row ends....-->
    </section>
    <!--content-area ends...-->
    
    
  <?php get_footer();?>
