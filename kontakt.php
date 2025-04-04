<?php
include 'config.php'; // Připojení k databázi

// Načtení nabídek z databáze
$sql = "SELECT id, nazev FROM services";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <!-- Záhlaví stránky obsahující meta informace a odkazy na styly. -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="icon" href="./img/favicon-16x16.png" type="image/x-icon">
</head>
<!-- Tělo stránky s černým pozadím. -->
<body style="background-color: rgb(0, 0, 0);">
    
    
    <!-- Navigační menu -->
    <nav id="navbar">
        <!-- Logo s odkazem na domovskou stránku. -->
        <a href="index.html">
            <div class="logo"><img src="./img/logo.png" alt="logo"></div>
        </a>
        <!-- Odkazy na jednotlivé sekce webu. -->
        <ul>
            <li><a href="index.html">Úvod</a></li>
            <li><a href="Sluzby.html">Služby</a></li>
            <li><a href="O_mne.html">O mně</a></li>
            <li><a href="Galerie.html">Galerie</a></li>
            <li><a href="Kontakt.php">Kontakt</a></li>
        </ul>
    </nav>

    <!-- Sekce Kontakt -->
    <div class="background-kontakt">
        <div class="container">
            <div class="content">
                <!-- Levá strana sekce s kontaktními informacemi -->
                <div class="LevaStrana">
                    <div class="adresa detaily">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Kde mě najdete?</div>
                        <div class="text-prvni">JZ Fitness</div>
                    </div>
                    <div class="telefon detaily">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Telefon</div>
                        <div class="text-prvni">778 568 265</div>
                    </div>
                    <div class="email detaily">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-prvni">JZ.Fitness@email.cz</div>
                    </div>
                </div>
                <!-- Pravá strana sekce s kontaktním formulářem -->
                <div class="PravaStrana">
                    <div class="topic-text">Vyberte si svou službu</div>
                
                <form action="zpracovani.php" method="post">
                    <!-- Vstupní pole pro jméno -->
                    <div class="input-box">
                        <input type="text" name="jmeno" placeholder="Napiště jméno">
                    </div>
                    <!-- Vstupní pole pro email -->
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Napište Email">
                    </div>
                    <!-- Vstupní pole pro zprávu -->
                    <label for="services">Vyberte nabídku:</label>
                        <select name="services" required>
                            <option value="">-- Vyberte nabídku --</option>
                            <?php
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='".$row["id"]."'>".$row["nazev"]."</option>";
                            }
                            ?>
                    <!-- Tlačítko pro odeslání formuláře -->
                    <div class="button">
                        <input type="submit" value="Poslat hned">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- footer -->
    <div>
        <footer>
            <div class="ftr">
                <a href="index.html">
                    <div class="image"></div>
                </a>
                <h3>&copy; Jonáš Zelinka | 2024</h3>
            
            <!-- Sociální sítě -->
            <div class="ftr-social">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
          </div>
        </footer>
    </div>
    
</body>
</html>