
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
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/image/invina-sound-logo-2.png'); ?>"
             alt="InvinaSound">
    </a>

    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
        Invina<span>Sound</span>
    </a>

    <nav>
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <a href="<?php echo esc_url(home_url('/diensten/')); ?>">Diensten</a>
        <a href="<?php echo esc_url(home_url('/over/')); ?>">Over</a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
    </nav>
</header>
