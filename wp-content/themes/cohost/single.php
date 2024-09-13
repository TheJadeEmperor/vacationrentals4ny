<?php
include('header.php');
?>
 
<?php get_header(); ?>  <!-- Includes the header.php file -->

<div class="single-post-container">
    <div class="inner"> 
    <?php
    // Check if there are posts
    if ( have_posts() ) :
        // Loop through the posts
        while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <!-- Post Title -->
                <h1 class="post-title"><?php the_title(); ?></h1>

                <!-- Post Meta Information (e.g., Date, Author) -->
                <div class="post-meta">
                    <span>Posted on: <?php echo get_the_date(); ?></span>
                    <span> by <?php the_author(); ?></span>
                    <span> in <?php the_category(', '); ?></span>
                </div>

                <!-- Featured Image -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <!-- Post Content -->
                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <!-- Post Tags -->
                <div class="post-tags">
                    <?php the_tags('<span>Tags: </span>', ', ', ''); ?>
                </div>

               
                
            </article>

        <?php endwhile; // End of the loop.
    else : ?>

        <!-- Display a message if no posts are found -->
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

    <?php endif; ?>

    </div>
</div>
 


<?php
include('footer.php');
?>