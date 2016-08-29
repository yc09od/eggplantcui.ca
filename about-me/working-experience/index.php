<?php
/**
 * Created by PhpStorm.
 * User: Horst
 * Date: 2015/8/22
 * Time: 14:01
 */
?>

<?php

//system variable
$config_path=dirname(__FILE__);

while(!file_exists($config_path.'/config.php'))
{
    $config_path=dirname($config_path);
}

require_once($config_path.'/config.php');
//end system variable

//local variable
if(!defined(server_path))
{
    $tmp= str_replace(__ROOT__,__SERVER__,dirname(__FILE__));
    define('server_path',$tmp);
};

if(!defined(dir_path)) define('dir_path',dirname(__FILE__));

//functions' dir
if(!defined(functions_server_path)) define('functions_server_path',__SERVER__.'/functions');
if(!defined(functions_dir_path)) define('functions_dir_path',__ROOT__.'/functions');
//end local variable

define('page_name','working-experience');
define('website_title','My working experience');

//additional php css js
//$addition_php=array();
//$addition_js=array();
//$addition_css=array("tst");
?>


<?php
if(file_exists(__ROOT__.'/header.php'))
    require_once(__ROOT__.'/header.php');
else echo 'no';
?>


<?php
if(file_exists(dirname(__FILE__).'/page_content.php'))
    require_once(dirname(__FILE__).'/page_content.php');
?>

<?php
if(file_exists(dirname(__FILE__).'/page_loop.php'))
    require_once(dirname(__FILE__).'/page_loop.php');
?>

<?php
if(file_exists(__ROOT__.'/footer.php'))
    require_once(__ROOT__.'/footer.php');
?>