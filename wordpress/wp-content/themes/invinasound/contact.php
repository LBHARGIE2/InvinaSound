<?php
$success = false;

function testInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $naam = testInput($_POST["naam"]);
    $email = testInput($_POST["email"]);
    $bericht = testInput($_POST["bericht"]);

    // Pas dit aan naar jouw e-mailadres
    $ontvanger = "Invinasound@gmail.com";
    $onderwerp = "Nieuw bericht via website";
    $headers = "From: $naam <$email>";

    if (mail($ontvanger, $onderwerp, $bericht, $headers)) {
        $success = true;
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Contact – Invina Sound</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <div class="logo">Invina<span>Sound</span></div>
    <nav>
        <a href="index.php">Home</a>
        <a href="#">Diensten</a>
        <a href="#">Over</a>
        <a href="contact.php" class="active">Contact</a>
    </nav>
</header>

<section class="contact-hero">
    <h1>Contact</h1>
    <p>Neem vrijblijvend contact op voor jouw event of project</p>
</section>

<section class="contact">
    <div class="contact-info">
        <h2>Gegevens</h2>
        <p><strong>E-mail:</strong> Invinasound@gmail.com</p>
        <p><strong>Telefoon:</strong> +31 6 22812413</p>
        <p><strong>Locatie:</strong> Nederland</p>
    </div>

    <form method="post" class="contact-form">
        <?php if ($success): ?>
            <div class="success">Bedankt! Je bericht is verzonden.</div>
        <?php endif; ?>

        <label>Naam</label>
        <input type="text" name="naam" required>

        <label>E-mail</label>
        <input type="email" name="email" required>

        <label>Bericht</label>
        <textarea name="bericht" rows="5" required></textarea>

        <button type="submit" class="btn">Versturen</button>
    </form>
</section>

<footer class="footer">
    <p>&copy; <?php echo date("Y"); ?> Invina Sound</p>
    <p>&copy; <?php echo date("Y"); ?> Bhargie Coding</p>
</footer>

</body>
</html>
