
<?php
/*
Template Name: Mentors Page
*/
?>

<?php get_header(); ?>
      
      <div id="content" class="clearfix row-fluid">
      
        <div id="main" class="span12 clearfix" role="main">

          
          
          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
            
            <header>
              
              <div class="page-header"><h1 class="page-title"><?php the_title(); ?></h1></div>
            
            </header> <!-- end article header -->
          
            <section class="post_content mentors-page">
              <ul id="mentors-list">
                <?
                $args = array( 
                  'post_type' => 'mentors',
                  'orderby' => 'rand',
                  'post_status' => 'publish',
                  'posts_per_page' => '-1'
                  );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                  echo '<li class="span3"><a href="';
                  the_permalink();
                  echo '">';
                  the_post_thumbnail('profile-thumb');
                  echo '<span class="mentor-details"><span class="mentor-name">';
                  the_title();
                  // echo '<br>';
                  echo '</span><span class="mentor-company">';
                  print_custom_field('company');
                  echo '</span></span></a></li>';
                endwhile;
                ?>     
              </ul> 


            </section> <!-- end article section -->
            

          
          </article> <!-- end article -->
          
          
          
           
          
      
        </div> <!-- end #main -->
    
        <?php //get_sidebar(); // sidebar 1 ?>
    
      </div> <!-- end #content -->

<?php get_footer(); ?>