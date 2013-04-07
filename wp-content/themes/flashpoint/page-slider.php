<?php
/*
Template Name: Homepage w/ slider
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
				<div id="myCarousel" class="carousel slide">
		        	<ol class="carousel-indicators">
		            	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		            	<li data-target="#myCarousel" data-slide-to="1" class=""></li>
		            </ol>
		            <div class="carousel-inner">
		            	<div class="item active">
		                	<img src="http://flashpoint-website-images.s3.amazonaws.com/2013/04/banner-home1.png" alt="Better Startups Faster.">
		              	</div>
		              	<div class="item">
		                	<a href="/spring-2013/"><img src="http://flashpoint-website-images.s3.amazonaws.com/2013/04/2013.png" alt="Spring 2013 Flashpoint Companies"></a>
		                	<div class="carousel-caption">
		                  	<h4>Spring 2013 Flashpoint Companies</h4>
		                	</div>
		              	</div>		              	
		              	<div class="item">
		                	<a href="/summer-2012/"><img src="http://flashpoint-website-images.s3.amazonaws.com/2013/04/2012.png" alt="Summer 2012 Flashpoint Companies"></a>
		              		<h4>Summer 2012 Flashpoint Companies</h4>
		              	</div>
		            </div>
		            <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
		            <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
        		</div>
				<div id="main" class="span12 clearfix" role="main">

					<!-- Remove built-in slider for custom implementation
					<?php

					$use_carousel = of_get_option('showhidden_slideroptions');
      				if ($use_carousel) {

					?>

					<div id="myCarousel" class="carousel">

					    
					    <div class="carousel-inner">

					    	<?php
							global $post;
							$tmp_post = $post;
							$show_posts = of_get_option('slider_options');
							$args = array( 'numberposts' => $show_posts ); // set this to how many posts you want in the carousel
							$myposts = get_posts( $args );
							$post_num = 0;
							foreach( $myposts as $post ) :	setup_postdata($post);
								$post_num++;
								$post_thumbnail_id = get_post_thumbnail_id();
								$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpbs-featured-carousel' );
							?>

						    <div class="<?php if($post_num == 1){ echo 'active'; } ?> item">
						    	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured-carousel' ); ?></a>

							   	<div class="carousel-caption">

					                <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					                <p>
					                	<?php
					                		$excerpt_length = 100; // length of excerpt to show (in characters)
					                		$the_excerpt = get_the_excerpt(); 
					                		if($the_excerpt != ""){
					                			$the_excerpt = substr( $the_excerpt, 0, $excerpt_length );
					                			echo $the_excerpt . '... ';
					                	?>
					                	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="btn btn-primary">Read more &rsaquo;</a>
					                	<?php } ?>
					                </p>

				                </div>
						    </div>

						    <?php endforeach; ?>
							<?php $post = $tmp_post; ?>

					    </div>

					    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				    </div>

				    <?php } // ends the if use carousel statement ?> -->

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<!-- <header>

							<?php 
								$post_thumbnail_id = get_post_thumbnail_id();
								$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpbs-featured-home' ); 
								// not sure why this isn't working yet
							?>
						
							<div class="hero-unit" style="background-image: url('<?php echo $featured_src; ?>'); background-repeat: no-repeat; background-position: 0 0;">

								<?php the_post_thumbnail( 'wpbs-featured-home' ); ?>

								<h1><?php the_title(); ?></h1>
								
								<?php echo get_post_meta($post->ID, 'custom_tagline' , true);?>
							
							</div> 

						</header> -->
						
						<section class="row-fluid post_content">
						
							<div class="span8">
						
								<?php the_content(); ?>
								
							</div>
							
							<?php get_sidebar('sidebar2'); // sidebar 2 ?>
													
						</section> <!-- end article header -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>