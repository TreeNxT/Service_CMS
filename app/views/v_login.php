<!--
 * Created by PhpStorm.
 * User: Dominik
 * Date: 2016-10-26
 * Time: 15:39
 */-->

<html>
    <head>
        <title><?php echo $this->getData("ap_name"); ?></title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="views/style.css"/>
    </head>
    <body>
        <h1>Logowanie</h1>
        <form action="" method="post">
            <?php
            $alerts = $this->getAlerts();
            if ($alerts != ''){
                echo '<ul class="alerts">' . $alerts . '</ul>';
            }

            ?>

            <p>
                <label for="username">Użytkownik: </label>
                <input type="text" name="username" value="<?php echo $this->getData('input_user') ?>"/>
            </p>
            <p>
                <label for="password">hasło: </label>
                <input type="password" name="password" value="<?php echo $this->getData('input_pass') ?>"/>
            </p>
            <p>
                <input type="submit" name="submit" class="submit" value="Wyślij"/>
            </p>
        </form>
    </body>
</html>