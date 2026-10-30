
<?php
/**
 * Template Name: InvinaSound Diensten
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="main-content" class="diensten-page">

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <section class="diensten-hero">
                <div class="diensten-container">
                    <h1><?php the_title(); ?></h1>

                    <?php if (has_excerpt()) : ?>
                        <p class="diensten-intro">
                            <?php echo esc_html(get_the_excerpt()); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </section>

            <!-- ACF DIENSTEN -->
            <section class="diensten-overzicht">
                <div class="diensten-container">

                    <div class="diensten-grid">

                        <?php for ($i = 1; $i <= 3; $i++) :

                            $titel = get_field('dienst_' . $i . '_titel');
                            $beschrijving = get_field('dienst_' . $i . '_beschrijving');
                            $afbeelding = get_field('dienst_' . $i . '_afbeelding');

                            if ($titel || $beschrijving || $afbeelding) :
                        ?>

                            <article class="dienst-card">

                                <?php if ($afbeelding) : ?>
                                    <div class="dienst-afbeelding">
                                        <?php if (is_array($afbeelding)) : ?>
                                            <img
                                                src="<?php echo esc_url($afbeelding['url']); ?>"
                                                alt="<?php echo esc_attr($afbeelding['alt'] ?? $titel); ?>"
                                            >
                                        <?php elseif (is_numeric($afbeelding)) : ?>
                                            <?php echo wp_get_attachment_image($afbeelding, 'large'); ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <div class="dienst-card-content">

                                    <?php if ($titel) : ?>
                                        <h2><?php echo esc_html($titel); ?></h2>
                                    <?php endif; ?>

                                    <?php if ($beschrijving) : ?>
                                        <div class="dienst-beschrijving">
                                            <?php echo wp_kses_post($beschrijving); ?>
                                        </div>
                                    <?php endif; ?>

                                </div>

                            </article>

                        <?php
                            endif;
                        endfor;
                        ?>

                    </div>

                </div>
            </section>

            <!-- BESTAANDE PAGINA-INHOUD -->
            <section class="diensten-content">
                <div class="diensten-container">

                    <div class="diensten-editor-content">
                        <?php the_content(); ?>
                    </div>

                    <div class="diensten-contact-cta">
                        <h2>Op zoek naar geluidstechniek voor jouw evenement?</h2>

                        <p>
                            Neem vrijblijvend contact op om de mogelijkheden
                            voor jouw evenement of project te bespreken.
                        </p>

                        <a class="btn" href="<?php echo esc_url(home_url('/contact/')); ?>">
                            Neem contact op
                        </a>
                    </div>

                </div>
            </section>

        <?php endwhile; ?>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
