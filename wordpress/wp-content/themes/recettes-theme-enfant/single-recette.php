<?php
    get_header();
?>
<div class="recette-detail">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <h1><?php the_title(); ?></h1>
            <?php $image = get_field('image'); ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <div class="recette-meta">
                <h3>Ingrédients</h3>
                <p><?php the_field('ingredients'); ?></p>
                <h3>Temps de cuisson</h3>
                <p><?php the_field('temps_de_cuisson'); ?></p>
                <h3>Étapes</h3>
                <p><?php the_field('etape'); ?></p>
            </div>
    <?php
        endwhile;
    else :
        echo '<p>No recipe found.</p>';
    endif;
    ?>
</div>
<?php
    get_footer();
?>
