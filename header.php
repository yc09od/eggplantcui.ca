<?php
/**
 * Created by PhpStorm.
 * User: horst
 * Date: 15-8-22
 * Time: 下午4:58
 */
    if(count($addition_php)>0){
        for($i=0;$i<count($addition_php);$i++)
        if(file_exists($addition_php[$i]))require_once($addition_php[$i]);
    }//end for
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo website_title?></title>


    <!-- Bootstrap -->
    <link href="<?php echo __SERVER__?>/exter_libraries/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo __SERVER__?>/css/main.css" rel="stylesheet">
<?php if(file_exists(dirname(__FILE__).'/style.css')):?>
<link href="./style.css" rel="stylesheet">
<?php endif?>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <?php
    if(count($addition_css)>0) {
        for ($i = 0; $i < count($addition_css); $i++) {
            ?>
<link href="<?php echo $addition_css[$i] ?>" rel="stylesheet">
            <?php
        }
    }
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php echo __SERVER__?>/js/main.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body>
<a name="most_top"></a>
<!--
<a href='http://www.freepik.com/free-vector/selected-resume-vector_757855.htm'>Designed by Freepik</a>
-->

<nav id="top_navbar" class="navbar navbar-default navbar-fixed-top" style="display: none">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="row">
            <div class="navbar-header col-md-2 col-sm-7 col-xs-7">
                <a class="navbar-brand" >Eggplant Cui</a>
            </div>

            <div class="col-md-8 visible-md visible-lg">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo __SERVER__?>">Home </a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About me <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo __SERVER__.'/about-me/working-experience'?>">Working experience</a></li>
                                <li><a href="<?php echo __SERVER__.'/about-me/resume'?>">Resume</a></li>
                                <li><a href="#">Projects</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>
                        <li class="hidden"><a href="#">Other</a></li>
                    </ul>

            </div>
            <div class="col-md-2 col-xs-2 col-sm-2" style="margin-top: 7pt"><a href="#most_top" class="btn btn-info"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>Go to top</a></div>
        </div>

    </div><!-- /.container-fluid -->
</nav>

