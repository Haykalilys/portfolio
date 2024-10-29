<?php
include "../database/koneksi.php";
// Cek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Siapkan dan ikuti pernyataan SQL
    $sql = "INSERT INTO messages (name, email, subject, message) VALUES
    ('$name', '$email', '$subject', '$message')";

    // Eksekusi pernyataan
    if (mysqli_query(mysql: $conn, query: $sql)) {
        echo "<strong>Success!<?strong> Your message has been sent. Thank you!";
    } else {
        echo "Error: " . $sql;
    }
}
?>