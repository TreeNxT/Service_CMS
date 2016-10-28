<!--
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 2016-10-28
 * Time: 22:03
 */ -->

<?php include('app/init.php') ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>SK CMS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="app/res/css/sk_style.css" />
    <?php $SV->head(); ?>
</head>
<body>
<?php $SV->toolbar(); ?>
<div id="wrapper">
    <div class="head-left">
        <h1>SV CMS</h1>
    </div>
    <div class="head-right"><?php $SV->login_link(); ?></div>

    <div class="clear"></div>

    <div class="navbar">
        <div class="navbar-inner">
            <ul class="nav">
                <li><a href="#">Start</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">O nas</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
        </div>
    </div>

    <div class="content row">
        <div class="span9"  id="left-c">
            <h2></h2>
            <hr>
            <div class="well">

            </div>
        </div>
        <div class="span3" id="right-c">
            <div class="well right-content">

            </div>
            <div class="well right-content">

            </div>
            <div class="">
                <img src="<?php SITE_PATH ?>app/res/images/right_cms.png" alt=""/>
            </div>
        </div>
    </div>

    <div id="footer">
        &copy <?php echo YEAR . ' ' . AUTHOR; ?>
    </div>

</div>
</body>
</html>