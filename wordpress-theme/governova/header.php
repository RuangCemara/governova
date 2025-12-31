<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-inner">
        <div class="site-logo">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/logo.png'); ?>" alt="ADIPSI logo" />
            <span><?php esc_html_e('ADIPSI', 'governova'); ?></span>
        </div>
        <nav class="main-nav">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => function () {
                        echo '<ul>';
                        echo '<li><a href="' . esc_url(home_url('/about')) . '">About</a></li>';
                        echo '<li><a href="' . esc_url(home_url('/archive')) . '">Archive</a></li>';
                        echo '<li><a href="' . esc_url(home_url('/editorial-board')) . '">Editorial Board</a></li>';
                        echo '<li><a href="' . esc_url(home_url('/author-guideline')) . '">Author Guideline</a></li>';
                        echo '</ul>';
                    },
                )
            );
            ?>
        </nav>
    </div>
</header>
