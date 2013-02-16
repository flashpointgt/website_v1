
<?php
/*
Template Name: Staff Page
*/
?>

<?php get_header(); ?>
      
      <div id="content" class="clearfix row-fluid">
      
        <div id="main" class="span12 clearfix" role="main">

          
          
          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
            
            <header>
              
              <div class="page-header"><h1 class="page-title"><?php the_title(); ?></h1></div>
            
            </header> <!-- end article header -->
          
            <section class="post_content">
              <ul id="staff-list">
                <li>
                  <?
                  $args = array( 
                    'post_type' => 'staff', 
                    'orderby' => 'menu_order',
                    'order' => 'ASC');
                  $loop = new WP_Query( $args );
                  while ( $loop->have_posts() ) : $loop->the_post();
                    echo '<div class="entry-content"><div class="span12">';
                    the_post_thumbnail('profile-thumb'); 
                    echo '<h2>';
                    the_title();
                    echo '</h2>';
                    the_content();
                    echo '</div>';
                  endwhile;
                  ?>
                </li>     
              </ul> 


            </section> <!-- end article section -->
            

          
          </article> <!-- end article -->
          
          
          
           
          
      
        </div> <!-- end #main -->
    
        <?php //get_sidebar(); // sidebar 1 ?>
    
      </div> <!-- end #content -->

<?php get_footer(); ?>