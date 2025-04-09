<?php
// Sortimi i një liste me çmime të kafesë
$cmimet = array("Espresso" => 1.5, "Cappuccino" => 2.0, "Latte" => 2.5);
asort($cmimet); // rendit sipas çmimit në rritje

// Klasa Coffee me konstruktor dhe metodë përshkrimi
class Coffee {
    public $emri;
    public $cmimi;

    public function __construct($emri, $cmimi) {
        $this->emri = $emri;
        $this->cmimi = $cmimi;
    }

    public function pershkrim() {
        return "$this->emri kushton $this->cmimi €";
    }

    public function __destruct() {
        echo "<br><small>Objekti $this->emri u fshi.</small>";
    }
}

// Shembull përdorimi i klasës
$kafe1 = new Coffee("Americano", 1.8);
$kafe2 = new Coffee("Mocha", 2.2);

// HTML i gjeneruar nga PHP
echo "<h3>✅ Lista e kafesë të renditur sipas çmimit:</h3>";
echo "<ul>";
foreach ($cmimet as $kafe => $cmimi) {
    echo "<li>$kafe - $cmimi €</li>";
}
echo "</ul>";

echo "<h3>☕ Përdorimi i klasës Coffee:</h3>";
echo "<p>" . $kafe1->pershkrim() . "</p>";
echo "<p>" . $kafe2->pershkrim() . "</p>";
?>
