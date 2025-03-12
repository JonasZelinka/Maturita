<?php
include 'config.php'; // Připojení k databázi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = $_POST["jmeno"];
    $email = $_POST["email"];
    $id_services = $_POST["services"];

    // Ochrana proti SQL injection
    $stmt = $conn->prepare("INSERT INTO user_services (jmeno, email, id_services) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $jmeno, $email, $id_services);

    if ($stmt->execute()) {
        echo "Objednávka se uskutečnila.";
    } else {
        echo "Uložení se nezdařilo: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Nastala chyba.";
}
?>