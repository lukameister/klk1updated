<?php
?>

<html>
<head>
    <link rel='stylesheet' type="text/css" href='css/styles.css' />
    <link rel="shortcut icon" type="image/png" href="images/logo.jpg"/>
    <meta charset="UTF-8" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type='text/javascript' src='js/script.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title> KUPOVINA TELEFONA </title>
</head>
<body>
<div class="container">

    <?php
    include 'parts/header.php';
    include 'parts/nav.php';
    $stranica = '';
    if (isset($_GET['stranica'])) {
        $stranica = $_GET['stranica'];
    }

    switch ($stranica) {
        case '':
        case 'pocetna':
            include 'pages/pocetna.php';
            break;
        case 'kupovina':
            include 'pages/kupovina.php';
            break;
        case 'kontakt':
            include 'pages/kontakt.php';
            break;
        case 'order':
            include 'pages/order.php';
            break;
        case 'posalji':
            include 'pages/posalji.php';
            break;
        default:
            echo '404 NOT FOUND';
    }
    include "parts/footer.php";
    ?>
</div>
</body>
</html>
