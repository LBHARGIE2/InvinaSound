
<?php
/**
 * Template Name: InvinaSound Over
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$hero_afbeelding = get_field('over_hero_afbeelding');
$over_tekst = get_field('over_tekst');
?>

<main id="main-content" class="over-page">

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <section class="over-hero">

                <?php if ($hero_afbeelding) : ?>
                    <div class="over-hero-image">
                        <img
                            src="<?php echo esc_url($hero_afbeelding['url']); ?>"
                            alt="<?php echo esc_attr($hero_afbeelding['alt']); ?>"
                        >
                    </div>
                <?php endif; ?>

                <div class="over-hero-content">
                    <span class="over-label">OVER INVINASOUND</span>
                    <h1><?php the_title(); ?></h1>
                </div>

            </section>

            <section class="over-content">
                <div class="over-container">

                    <?php if ($over_tekst) : ?>
                        <div class="over-text">
                            <?php echo wp_kses_post($over_tekst); ?>
                        </div>
                    <?php endif; ?>

                    <div class="over-cta">
                        <h2>Benieuwd wat we voor jouw evenement kunnen betekenen?</h2>

                        <p>
                            Neem vrijblijvend contact op om de mogelijkheden
                            voor jouw evenement of project te bespreken.
                        </p>

                        <a
                            class="btn"
                            href="<?php echo esc_url(home_url('/contact/')); ?>"
                        >
                            Neem contact op
                        </a>
                    </div>

                </div>
            </section>

        <?php endwhile; ?>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
