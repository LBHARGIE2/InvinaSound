
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">

    <a class="ilogo" href="<?php echo esc_url(home_url('/')); ?>">
        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/image/invina-sound-logo-2.png'); ?>"
            alt="InvinaSound"
        >
    </a>

    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
        Invina<span>Sound</span>
    </a>

    <button
        class="menu-toggle"
        type="button"
        aria-label="Menu openen"
        aria-expanded="false"
        aria-controls="primary-navigation"
    >
        <span></span>
        <span></span>
        <span></span>
    </button>

    <nav class="navigation" id="primary-navigation">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <a href="<?php echo esc_url(home_url('/index.php/diensten/')); ?>">Diensten</a>
        <a href="<?php echo esc_url(home_url('/index.php/over/')); ?>">Over</a>
        <a href="<?php echo esc_url(home_url('/index.php/contact/')); ?>">Contact</a>
        <a href="<?php echo esc_url(home_url('/wp-admin')); ?>">Login</a>
    </nav>

</header>
