<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Astral
 * @since 0.1
 */
get_header();
/* 
* Functions hooked into astral_top_banner action
* 
* @hooked astral_inner_banner
*/
do_action( 'astral_top_banner' );

?>
	<section class="align-blog" id="blog">
        <div class="container">
            <?php
                
                
               
               
                echo "<h1>".category_description()."</h1>";
               
                // The 2nd Loop

                while (have_posts()) {
                   the_post();

			        get_template_part( 'template-parts/content', 'nouvelle' );
                    echo "<div>";
                    echo "<h1>".get_the_title()."</h1>";
                    echo get_the_post_thumbnail(null,"thumbnail");
                    echo  the_excerpt();
                    echo '<a onclick="Ajax()"class="lirePost">Lire la suite..</a>';
                    echo "</div>";
                    
                    
                  
                    }
                           

                
            ?>
        </div>
    </section>
<?php
get_footer();