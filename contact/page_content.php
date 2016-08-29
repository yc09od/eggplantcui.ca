<?php
/**
 * Created by PhpStorm.
 * User: Horst
 * Date: 2015/9/4
 * Time: 0:12
 */
?>

<!--top background board-->
<div class="container-fluid bg_topside" >
    <div class="container">
        <?php
        if(file_exists(__ROOT__.'/quick_link_bar.php'))
            require_once(__ROOT__.'/quick_link_bar.php');
        ?>
    </div>

    <div class="container">
        <?php
        if(file_exists(dirname(__FILE__).'/page_title.php'))
            require_once(dirname(__FILE__).'/page_title.php');
        ?>
    </div>

</div>