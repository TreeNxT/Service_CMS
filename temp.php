<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 2016-10-26
 * Time: 15:37
 */

$pass = md5('admin' . 'h1F6b9xG');
// BlowFish - start from $2a$09$ next 22 random characters and $ at end
$crypt = crypt('admin', 'h1F6b9xG');

echo $pass;
echo '<br />';
echo $crypt;