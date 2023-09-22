<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenir les contrasenyes del formulari
    $contrasenya1 = $_POST["contrasenya1"];
    $contrasenya2 = $_POST["contrasenya2"];

    // Comprovar si les contrasenyes són iguals
    if ($contrasenya1 != $contrasenya2) {
        echo "ERROR: Les contrasenyes han de coincidir. Torni enrere i intenti-ho de nou.";
    } else {
        // Comprovar si la contrasenya conté almenys un número
        if (preg_match('/[0-9]/', $contrasenya1)) {
            echo "Contrasenya vàlida. Les contrasenyes coincideixen i contenen almenys un número.";
        } else {
            echo "ERROR: La contrasenya ha de tenir almenys un número. Torni enrere i intenti-ho de nou.";
        }
    }
}
?>
