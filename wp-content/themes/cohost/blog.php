
<!-- Banner -->
<section id="banner" class="major">
    <div class="inner">
        <span><?=date('m/d/Y') ?></span>
        
    <h1>Vacation Rentals Blog</h1>
    <h2>Get info about Airbnb, vacation rentals, and property management here</h2>
    </div>
</section>

<section id="blog">
    <div class="inner">
    
    <?php
// Create a custom query to get the latest 5 posts
$recent_posts_query = new WP_Query(array(
    'posts_per_page' => 5, // Set the number of posts to display
    'post_status' => 'publish', // Only show published posts
));

// Check if there are posts
if ($recent_posts_query->have_posts()) {
    echo '<div class="recent-posts-container">';
    // Loop through the posts
    while ($recent_posts_query->have_posts()) {
        $recent_posts_query->the_post(); // Set up post data
        ?>
        <div class="recent-post-item">
            <h2 class="recent-post-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="recent-post-excerpt">
                <?php the_excerpt(); ?>
            </div>
        </div>
        <?php
    }
    echo '</div>';
    // Restore original post data
    wp_reset_postdata();
} else {
    echo '<p>No recent posts found.</p>';
}
?>

<style>
.recent-posts-container {
    margin: 20px 0;
    padding: 0;
    list-style: none;
}

.recent-post-item {
    margin-bottom: 30px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
}

.recent-post-title a {
    color: #333;
    text-decoration: none;
    font-size: 24px;
    font-weight: bold;
}

.recent-post-title a:hover {
    color: #0073aa;
}

.recent-post-excerpt {
    margin-top: 10px;
    font-size: 16px;
    color: #555;
    line-height: 1.6;
}

/* Optional: Make the container responsive */
@media (max-width: 768px) {
    .recent-posts-container {
        padding: 10px;
    }
    .recent-post-title a {
        font-size: 20px;
    }
    .recent-post-excerpt {
        font-size: 14px;
    }
}
</style>


    </div>
</section>