<?php
/**
 * 
 *
 * @package TuTema
 */

get_header();
?>

<main id="primary" class="site-main">

    <header class="page-header">
        <h1 class="page-title"><?php single_post_title(); ?></h1>
        <?php
        if ( is_home() && ! is_front_page() ) :
            ?>
            <div class="page-description"><?php the_post(); the_content(); ?></div>
            <?php
            rewind_posts();
        endif;
        ?>
    </header><div class="posts-grid">
        <?php
        if ( have_posts() ) :
          
            while ( have_posts() ) :
                the_post();


                get_template_part( 'template-parts/content', get_post_format() );

            endwhile;

       
            the_posts_navigation();

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>
    </div></main><?php
get_footer();