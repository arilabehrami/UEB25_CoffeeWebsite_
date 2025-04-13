<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rreth Kafes</title>
</head>
<body>
    <h1>Historia e kafes</h1>
    <p>Kafja është një nga pijet më të njohura në botë...</p>

    <?php
    // 1. Variabël dhe konstantë
    $emri = "Arila";
    define("KAFJA_E_PARË", "Etiopi");

    // 2. Funksion i thjeshtë
    function pershendetje($emer) {
        return "Mirë se vjen, $emer!";
    }

    // 3. Operatorë dhe kusht
    $viti = 2025;
    $kaQejfKafe = true;
    $mesazhi = ($kaQejfKafe) ? "E do kafen!" : "Nuk i pëlqen kafeja.";

    // 4. String funksione
    $histori = "kafja u zbulua në ethiopi";
    $histori = ucfirst($histori); // Bën shkronjën e parë të madhe

    // 5. Array-e
    $lloje = array("Espresso", "Latte", "Cappuccino"); // numerik
    $cmime = ["Espresso" => 1.5, "Latte" => 2.0, "Cappuccino" => 2.5]; // asociativ
    $kafeteri = [
        ["emri" => "Kafe Flora", "qyteti" => "Prishtinë"],
        ["emri" => "Kafe Lule", "qyteti" => "Prizren"]
    ]; // multidimensional

    // 6. Variablë globale
    $shuma = 5;
    function shtoTVSH() {
        global $shuma;
        $shuma = $shuma * 1.2;
    }
    shtoTVSH();
    ?>

    <hr>

    <h2>Info për përdorim të PHP</h2>
    <p><?= pershendetje($emri) ?></p>
    <p>Kafja e parë u zbulua në: <?= KAFJA_E_PARË ?></p>
    <p>Viti aktual: <?= $viti ?></p>
    <p><?= $mesazhi ?></p>
    <p><?= $histori ?></p>
    <p>Shuma me TVSH: <?= $shuma ?>€</p>

    <h3>Llojet e kafes:</h3>
    <ul>
        <?php
        foreach ($lloje as $lloji) {
            echo "<li>$lloji</li>";
        }
        ?>
    </ul>

    <h3>Çmimet:</h3>
    <ul>
        <?php
        foreach ($cmime as $lloji => $cmimi) {
            echo "<li>$lloji - $cmimi €</li>";
        }
        ?>
    </ul>

    <h3>Kafeteritë:</h3>
    <ul>
        <?php
        foreach ($kafeteri as $kafe) {
            echo "<li>".$kafe["emri"]." - ".$kafe["qyteti"]."</li>";
        }
        ?>
    </ul>
</body>
</html>