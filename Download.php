<?php
$password = "61259023";
if ($_POST['password'] !== $password) {
    die("Nieprawidłowe hasło.");
}

$filename = $_POST['filename'];
$filepath = "uploads/" . $filename;

if (file_exists($filepath)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filepath));
    readfile($filepath);
    exit;
} else {
    echo "Plik nie istnieje.";
}
?>
