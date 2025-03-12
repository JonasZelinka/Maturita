<?php
include 'config.php'; // Připojení k databázi

$sql = "SELECT o.id, o.jmeno, o.email, n.nazev AS services 
        FROM objednavky o
        JOIN services n ON o.id_services = n.id
        ORDER BY o.jmeno DESC";

$result = $conn->query($sql);

echo "<h2>Seznam objednávek</h2>";

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Jméno</th><th>Email</th><th>Services</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["jmeno"]."</td><td>".$row["email"]."</td><td>".$row["services"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Žádné objednávky nebyly nalezeny.";
}