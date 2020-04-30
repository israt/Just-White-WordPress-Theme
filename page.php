<?php
/*

 */
?>
<?php
get_header();
?>

	<!--content-area-inner starts...-->
	<section class="content-area-inner">
    	<div class="row">
        	<div class="container-fluid">
			<div class="row">
			<?php
						$args = array(
						 'post_type' => 'project',
						  'paged' => $paged,
						 'orderby' => 'id',
						 'order' => 'DESC',
						 'posts_per_page'=> 12,
					
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

<div class="col-md-4">
                	<div class="inner-img">
                     <a href="<?php the_permalink();?>"><img src="<?php echo $feat_image; ?>" alt=""></a>
                    </div>
                    <!--inner-img....-->
                </div>
                <!--col-md-4 ends....-->

            
               
				<?php



   



			?>
				<?php
				endwhile;
				
				 echo  '<div class="left">'.get_previous_posts_link('Previous', $query->max_num_pages).'</div>'; //Older Link using max_num_pages



    echo  '<div class="right">'.get_next_posts_link('Next', $query->max_num_pages).'</div>'; //Newer Link using max_num_pages
	
				endif;
				?>
                
                 </div>
            </div>
            <!--container-fluid ends....-->
        </div>
        <!--row ends....-->
    </section>
    <!--content-area-inner ends...-->
    
    
    
 
    
    
  <?php get_footer();?>