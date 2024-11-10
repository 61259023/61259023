<?php
$password = "61259023";
if ($_POST['password'] !== $password) {
    die("Nieprawidłowe hasło.");
}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "Plik ". htmlspecialchars(basename($_FILES["file"]["name"])). " został przesłany.";
} else {
    echo "Wystąpił błąd podczas przesyłania pliku.";
}
?>
