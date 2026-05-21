    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // kirim email
    mail("muhammaddzkyy@gmail.com", "Pesan dari $name", $message, "From: $email");

    echo "Pesan berhasil dikirim!";
    }
    ?>
