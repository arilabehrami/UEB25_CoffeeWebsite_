<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Definimi i error dhe input variablave
$nameErr = $emailErr = $subjectErr = $messageErr = $ageErr = "";
$name = $email = $subject = $message = $age = "";
$searchErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $age = $_POST["age"];

    $hasError = false;

    // Kontrolloje emrin (me leje për shkronja dhe karaktere të theksuara)
    if (!$name || !preg_match("/^[A-Za-z\sÀ-ÿ]+$/", $name)) {
        $nameErr = "Gabim: Emri duhet të përmbajë vetëm shkronja!";
        $hasError = true;
    }

    // Kontrolloje emailin duke përdorur filter
    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Gabim: Adresa e emailit nuk është e vlefshme!";
        $hasError = true;
    }

    // Kontrolloje subjektin
    if (!$subject) {
        $subjectErr = "Gabim: Subjekti është i nevojshëm!";
        $hasError = true;
    }

    // Kontrolloje mesazhin
    if (!$message) {
        $messageErr = "Gabim: Ju lutem shkruani mesazhin!";
        $hasError = true;
    }

    // Mosha (opsionale, por duhet të plotesohet në rangun 18–99)
    if (!empty($age)) {
        if ($age < 18 || $age > 99) {
            $ageErr = "Gabim: Mosha duhet të jetë midis 18 dhe 99!";
            $hasError = true;
        }
    }

    // Nese nuk ka errora
    if (!$hasError) {
        echo "Të dhënat u dërguan me sukses!";
    }
}

// Kerko validimin (nëse përdor metodën GET për search box)
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["query"])) {
        $query = $_GET["query"];
        if (!preg_match("/^[a-zA-Z0-9\s]+$/", $query)) {
            $searchErr = "Kërkimi përmban karaktere të palejuara!";
        }
    }
}
?>