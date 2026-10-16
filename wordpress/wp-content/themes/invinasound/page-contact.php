
<?php
$success = false;
$error = false;

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["invina_contact_submit"])) {
    $naam = sanitize_text_field(wp_unslash($_POST["naam"] ?? ""));
    $email = sanitize_email(wp_unslash($_POST["email"] ?? ""));
    $bericht = sanitize_textarea_field(wp_unslash($_POST["bericht"] ?? ""));

    if (
        isset($_POST["invina_contact_nonce"]) &&
        wp_verify_nonce(
            sanitize_text_field(wp_unslash($_POST["invina_contact_nonce"])),
            "invina_contact"
        ) &&
        $naam !== "" &&
        is_email($email) &&
        $bericht !== ""
    ) {
        $ontvanger = "Invinasound@gmail.com";
        $onderwerp = "Nieuw bericht via website";

        $headers = array(
            "Reply-To: " . $naam . " <" . $email . ">"
        );

        $success = wp_mail(
            $ontvanger,
            $onderwerp,
            $bericht,
            $headers
        );

        $error = !$success;
    } else {
        $error = true;
    }
}

get_header();
?>

<section class="contact-hero">
    <h1>Contact</h1>
    <p>Neem vrijblijvend contact op voor jouw event of project</p>
</section>

<section class="contact">
    <div class="contact-info">
        <h2>Gegevens</h2>
        <p><strong>E-mail:</strong>
            <a href="mailto:Invinasound@gmail.com">
                Invinasound@gmail.com
            </a>
        </p>
        <p><strong>Telefoon:</strong>
            <a href="tel:+31622812413">+31 6 22812413</a>
        </p>
        <p><strong>Locatie:</strong> Nederland</p>
    </div>

    <form method="post" class="contact-form">
        <?php wp_nonce_field("invina_contact", "invina_contact_nonce"); ?>

        <?php if ($success): ?>
            <div class="success">
                Bedankt! Je bericht is verzonden.
            </div>
        <?php elseif ($error): ?>
            <div class="success">
                Je bericht kon niet worden verzonden.
                Controleer je gegevens en probeer het opnieuw.
            </div>
        <?php endif; ?>

        <label for="naam">Naam</label>
        <input
            type="text"
            id="naam"
            name="naam"
            autocomplete="name"
            required
        >

        <label for="email">E-mail</label>
        <input
            type="email"
            id="email"
            name="email"
            autocomplete="email"
            required
        >

        <label for="bericht">Bericht</label>
        <textarea
            id="bericht"
            name="bericht"
            rows="5"
            required
        ></textarea>

        <button
            type="submit"
            name="invina_contact_submit"
            value="1"
            class="btn"
        >
            Versturen
        </button>
    </form>
</section>

<?php get_footer(); ?>
