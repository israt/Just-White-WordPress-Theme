<?php

/*



 * Template Name: Project Details

 */

?>

<?php

get_header();

?>



	 <?php

				// Start the loop.

				while ( have_posts() ) : the_post();

				?>

    

    <!--content-area starts...-->

	<section class="content-area-project">

    	<div class="row">

        	<div class="container-fluid">

            	<div class="col-md-4">

                	<div class="content-project">

                    	<p><?php the_title(); ?></p>

                    </div>

                    <!-- content ends....-->

                </div>

                <!--col-md-4 ends....-->

                

                <div class="col-md-8">

                	<div class="content-project">

                    	<p><?php the_content(); ?></p>

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

    

    

    	<!--content-area-inner starts...-->

	<section class="content-area-inner">

    	<div class="row">

        	<div class="container-fluid">

			

		

		<?php	

		    $galleryArray = get_post_gallery_ids($post->ID); 



            foreach ($galleryArray as $id) { 

			?>
				 <div class="col-md-6">
                	<div class="inner-img">
                    	<img src="<?php echo wp_get_attachment_url( $id ); ?>" alt="" class="" >

				</div>
                </div>

             

        <?php } ?>



            

            	

                

                

            </div>

            <!--container-fluid ends....-->

        </div>

        <!--row ends....-->

    </section>

    <!--content-area-inner ends...-->

    

     <?php

						// End the loop.

						endwhile;

						?>

    

    <!--back to top section starts....-->

    <section class="back-area m-bottom">

    	<div class="row">

        	<div class="container-fluid">

            	<div class="col-md-4">

                	<a href="#"><p>back to top</p></a>

                </div>

                <!--col-md-4 ends....-->

                

                <div class="col-md-8">

                	<div class="content">

                        <?php the_secondary_content(); ?>

                   </div>

                </div>

                <!--col-md-4 ends....-->

            </div>

            <!--container-fluid ends....-->

        </div>

        <!--row ends....-->

    </section>

    <!--back to top section ends....-->

    

    

  <?php get_footer();?>