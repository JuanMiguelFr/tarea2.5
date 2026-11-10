<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Saludos</title>
</head>
<body>

<div class="container">
    <h1>Saludos del Mundo</h1>
    
    <?php
    $saludos = [
        'es' => '¡Hola! ¿Cómo estás? (Español)',
        'en' => 'Hello! How are you? (Inglés)',
        'fr' => 'Bonjour! Comment ça va? (Francés)',
        'de' => 'Hallo! Wie geht es dir? (Alemán)',
        'it' => 'Ciao! Come stai? (Italiano)',
        'ja' => 'こんにちは！お元気ですか？ (Japonés - Konnichiwa! O genki desu ka?)'
    ];

    $idioma_seleccionado = '';
    $mensaje_saludo = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idioma'])) {
        $idioma_seleccionado = $_POST['idioma'];
        
        if (array_key_exists($idioma_seleccionado, $saludos)) {
            $mensaje_saludo = $saludos[$idioma_seleccionado];
        }
    }
    ?>

    <form action="" method="POST">
        <label for="idioma">Selecciona un idioma:</label>
        <select name="idioma" id="idioma" required>
            <option value="" disabled <?php echo empty($idioma_seleccionado) ? 'selected' : ''; ?>>-- Elige un idioma --</option>
            <option value="es" <?php echo $idioma_seleccionado === 'es' ? 'selected' : ''; ?>>Español</option>
            <option value="en" <?php echo $idioma_seleccionado === 'en' ? 'selected' : ''; ?>>Inglés</option>
            <option value="fr" <?php echo $idioma_seleccionado === 'fr' ? 'selected' : ''; ?>>Francés</option>
            <option value="de" <?php echo $idioma_seleccionado === 'de' ? 'selected' : ''; ?>>Alemán</option>
            <option value="it" <?php echo $idioma_seleccionado === 'it' ? 'selected' : ''; ?>>Italiano</option>
            <option value="ja" <?php echo $idioma_seleccionado === 'ja' ? 'selected' : ''; ?>>Japonés</option>
        </select>
        
        <button type="submit">Mostrar Saludo</button>
    </form>

    <?php if (!empty($mensaje_saludo)): ?>
        <div class="resultado">
            <?php echo htmlspecialchars($mensaje_saludo); ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>