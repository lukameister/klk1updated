<?php

if (!isset($_POST['ime'])) {
    echo "<p class='try-again'>Niste popunili sva polja! "; ?><a href="./?stranica=kupovina">Pokusajte ponovo</a></p><?php
}
else {
    $ime = $_POST['ime'];
    $mail = $_POST['mail'];
    $poruka = $_POST['poruka'];


    if ($ime=='' || $mail=='' || $poruka=='') {
        echo "<p class='try-again'>Niste popunili sva polja!";

        ?>
        <a href="./?stranica=kontakt">Pokusajte ponovo</a></p>
        <?php
    }

    else {?>
        <div class="verified">
            <img src="images/imagess.png">
            <h1>USPESNO STE POSLALI!</h1>
        </div>
        <div class="messages">
            <table>
                <tr>
                    <th>Ime</th>
                    <th>mail</th>
                    <th>Poruka</th>
                </tr>
                <tr>
                    <td><?php echo $ime ?></td>
                    <td><?php echo $mail ?></td>
                    <td><?php echo $poruka ?></td>
                </tr>
            </table>
        </div>
        <?php
    }
}
?>


