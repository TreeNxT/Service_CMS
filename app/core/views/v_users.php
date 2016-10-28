<!--
 * Created by PhpStorm.
 * User: Dominik
 * Date: 2016-10-26
 * Time: 15:39
 */
 -->

<html>
    <head>
        <title>Po zalogowaniu</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h1>Zalogowano</h1>
        <?php
        $alerts = $this->getAlerts();
        if ($alerts != ''){
            echo '<ul class="alerts">' . $alerts . '</ul>';
        }

        ?>

        <a href="logout.php">Wyloguj</a>

    </body>
</html>

