<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyslij Paczke</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="dark-theme">
    <div class="container">
        <h1>asmin.pl - Wyslij Paczke</h1>
        <p class="subtitle">Wybierz metode wysylki:</p>

        <div class="options-grid">
            <div class="option available" data-method="inpost">
                <h3>InPost Paczkomaty</h3>
            </div>
            <div class="option available" data-method="dpd">
                <h3>DPD Pickup</h3>
            </div>
            <div class="option available" data-method="dhl">
                <h3>DHL BOX</h3>
            </div>
            <div class="option available" data-method="orlen">
                <h3>Orlen Paczka</h3>
            </div>
            <div class="option unavailable" data-method="pocztex">
                <h3>Pocztex Automaty</h3>
                <span class="unavailable-tag">Niedostepne</span>
            </div>
            <div class="option unavailable" data-method="pocztapolska">
                <h3>Poczta Polska</h3>
                <span class="unavailable-tag">Niedostepne</span>
            </div>
        </div>

        <div id="shipping-details" class="shipping-details hidden">
            <h2>Dane do wysylki</h2>
            <p><strong>Tel:</strong>123 123 123</p>
            <p><strong>E-Mail:</strong> asmin@asmin.pl</p>
            <p id="address-info"><strong>Adres/Nr punktu:</strong> <span id="dynamic-address"></span></p>
        </div>
// Mozesz tutaj uzupelnic link do "regulaminu przyjmowania paczek od widzow"
        <div class="footer">
            <a href="https://google.com" target="_blank" class="terms-link">Regulamin</a>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>