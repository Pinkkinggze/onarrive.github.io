<?php
    if ($_POST["mail"] != "") {
        $handle = fopen("./client.txt", "a");
        fwrite($handle, $_POST["mail"] . "\n");
        fclose($handle);
    }
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700&amp;display=swap">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
    <header class="masthead" style="background-image:url('assets/img/intro-bg.jpg');">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-8 mx-auto">
                        <h1 class="brand-heading">Coming soon !</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Pour être mis au courant de notre arrivée, envoyez nous votre mail</p>
                    <form action="#" method="POST">
                        <input type="text" name="mail">
                        <button class="btn btn-primary" type="submit" style="color: var(--bs-white);background: var(--bs-gray-800);">
                            envoyer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <footer>
        <div class="container text-center">
            <p>Copyright ©&nbsp;scaling guacamole 2022</p>
        </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>