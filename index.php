<?php

/************

 *  This is Home page main Template file *

 *  Template Name: HomePage

 ***********/
 
 ?>

<?php
get_header();
?>

	<!--content-area starts...-->
	<section class="content-area">
    	<div class="row">
        	<div class="container-fluid">
            	<div class="col-md-4">
                	&nbsp;
                </div>
                <!--col-md-4 ends....-->
                
                <div class="col-md-8">
                	<div class="content">
                    	<p><?php echo of_get_option('h_content','No Entry'); ?></p>
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
    
    <!--image-area starts.....-->
    <section class="image-area">
    	<div class="row">
        	<div class="container-fluid">
            	<div class="col-md-12">
				<?php
						$args = array(
						 'post_type' => 'project',						 
						 'orderby' => 'id',
						 'order' => 'DESC',
						 'posts_per_page'=> 5,
					
					);
								  
								  $query = new WP_Query($args);
					
							
				 
						if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
						?>
					<?php
						 $feat_image = '';
									if (has_post_thumbnail( $post->ID ) ){ 
									$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
						}
			?>

                	<a href="<?php the_permalink();?>"><img src="<?php echo $feat_image; ?>" alt=""></a>
                  <?php
				endwhile;
				endif;
				?>
                </div>
                <!--col-md-12 ends...-->
            </div>
            <!--container-fluid ends....-->
        </div>
        <!--row ends....-->
    </section>
    <!--image-area ends.....-->
    <!--back to top section starts....-->
    <section class="back-area m-bottom">
    	<div class="row">
        	<div class="container-fluid">
            	<div class="col-md-4">
                	<a href="#my-id2" data-uk-smooth-scroll><p>back to top</p></a>
                </div>
                <!--col-md-4 ends....-->
                
                <div class="col-md-8">
                	&nbsp;
                </div>
                <!--col-md-4 ends....-->
            </div>
            <!--container-fluid ends....-->
        </div>
        <!--row ends....-->
    </section>
    <!--back to top section ends....-->
   <?php get_footer();?>