<?php get_header(); ?>

<main class="section">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="card">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <article class="card">
                <h3><?php esc_html_e('No posts found', 'governova'); ?></h3>
                <p><?php esc_html_e('Add content to start building the journal site.', 'governova'); ?></p>
            </article>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
