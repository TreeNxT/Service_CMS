<!--
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 2016-10-28
 * Time: 23:31
 */
-->

<link rel="stylesheet" type="text/css" href="<?php echo APP_RES ?>css/colorbox.css"/>
<script type="text/javascript" src="<?php echo APP_RES ?>javascript/jquery.js"></script>
<script type="text/javascript" src="<?php echo APP_RES ?>javascript/jquery.colorbox-min.js"></script>

<script>
    $(document).ready(function () {
        $.colorbox({
            href: '<?php echo SITE_PATH; ?>app/login.php'
        })
    })

</script>