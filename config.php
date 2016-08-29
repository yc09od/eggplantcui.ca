<?php
/**
 * Created by PhpStorm.
 * User: horst
 * Date: 15-8-22
 * Time: 下午4:37
 */
?>

<?php
    //echo '<br/>this is config';
    if(!defined(__SERVER__))define('__SERVER__','http://'.$_SERVER['HTTP_HOST'].'/website_v1.2');
    if(!defined(__ROOT__))define('__ROOT__',dirname(__FILE__));
    if(!defined(_SERVER_ROOT__))define('_SERVER_ROOT__',dirname(dirname(__FILE__)));//may change
    //echo __ROOT__;

    //print_r($_SERVER);


?>