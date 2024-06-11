<?php
    get_header();
?>

<div class="recettes">
    <?php
    $args = array(
        'post_type' => 'recette',
        'posts_per_page' => 10,
    );
    $recettes = new WP_Query($args);

    if ($recettes->have_posts()) :
        while ($recettes->have_posts()) : $recettes->the_post();
            $description = get_field('description');
            $image = get_field('image');
    ?>
            <div class="recette">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                    <h2><?php the_title(); ?></h2>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <p class="recette-description"><?php echo esc_html($description); ?></p>
                    <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                </a>
            </div>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No recipes found.</p>';
    endif;
    ?>
</div>
<?php
    get_footer();
?>
