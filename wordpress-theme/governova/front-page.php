<?php get_header(); ?>

<section class="hero">
    <div class="container hero-content">
        <div class="hero-graphic">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/hero.png'); ?>" alt="Governova hero graphic" />
        </div>
        <div class="hero-text">
            <div class="issn">ISSN: xxxx - xxxx</div>
            <div class="journal-tagline"><?php esc_html_e('The Journal of', 'governova'); ?></div>
            <h1 class="journal-title">
                <span class="governance"><?php esc_html_e('Governance', 'governova'); ?></span><br />
                <span class="innovation"><?php esc_html_e('and Public Innovation', 'governova'); ?></span>
            </h1>
            <p class="journal-subtitle">
                <?php esc_html_e('by Asosiasi Dosen Ilmu Pemerintahan Seluruh Indonesia', 'governova'); ?>
            </p>
            <a class="btn-primary" href="<?php echo esc_url(home_url('/')); ?>">
                <?php esc_html_e('Mulai Kirim Submission', 'governova'); ?>
            </a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container layout">
        <div>
            <h2 class="section-title"><?php esc_html_e('Latest Articles', 'governova'); ?></h2>
            <?php
            $latest = new WP_Query(array('posts_per_page' => 6));
            if ($latest->have_posts()) :
                while ($latest->have_posts()) :
                    $latest->the_post();
                    ?>
                    <article class="card">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <article class="card">
                    <h3><?php esc_html_e('Recent Article Title', 'governova'); ?></h3>
                    <p><?php esc_html_e('Add articles to show the latest publications here.', 'governova'); ?></p>
                </article>
            <?php endif; ?>
        </div>
        <aside>
            <div class="sidebar-block">
                <h4><?php esc_html_e('Announcements', 'governova'); ?></h4>
                <p><?php esc_html_e('Announcement Title', 'governova'); ?></p>
                <p><?php esc_html_e('Research abstract preview lorem ipsum...', 'governova'); ?></p>
            </div>
            <div class="sidebar-block">
                <h4><?php esc_html_e('Indexing', 'governova'); ?></h4>
                <p><?php esc_html_e('Sinta, Scopus, Google Scholar, ORCID, Crossref', 'governova'); ?></p>
            </div>
            <div class="sidebar-block stat-grid">
                <h4><?php esc_html_e('Governova Statistic', 'governova'); ?></h4>
                <div class="stat-item"><span>0000</span><span><?php esc_html_e('Articles Published', 'governova'); ?></span></div>
                <div class="stat-item"><span>0000</span><span><?php esc_html_e('Issue Published', 'governova'); ?></span></div>
                <div class="stat-item"><span>0000</span><span><?php esc_html_e('Editorial Board', 'governova'); ?></span></div>
                <div class="stat-item"><span>0000</span><span><?php esc_html_e('Articles Cited', 'governova'); ?></span></div>
            </div>
        </aside>
    </div>
</section>

<section class="about">
    <div class="container about-content">
        <div class="about-cover">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/about-cover.png'); ?>" alt="Journal cover" />
        </div>
        <div>
            <h2><?php esc_html_e('Governova', 'governova'); ?></h2>
            <h3><?php esc_html_e('About Journal', 'governova'); ?></h3>
            <p><?php esc_html_e('Governova is a peer-reviewed academic journal dedicated to advancing scholarly debate on governance and public innovation.', 'governova'); ?></p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
