<?php
/**
 * Created by PhpStorm.
 * User: Horst
 * Date: 2015/9/3
 * Time: 23:58
 */
?>
<div class="row">
    <div class="col-md-2">
        <img src="<?php echo __SERVER__?>/src/picture/logo.png" class="img-rounded img-responsive">
    </div>
    <div class="col-md-7 col-md-offset-3">

        <ul id="navigation_bar_top" class="nav nav-pills nav-justified">
            <li role="presentation" class="<?php if(page_name=='home_page')echo 'active'?>"><a href="<?php echo __SERVER__?>">Home</a></li>
            <li role="presentation" class="<?php if(page_name=='resume'||page_name=='working-experience'||page_name=='project')echo 'active'?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    About Me<span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="<?php echo __SERVER__.'/about-me/working-experience'?>" >Working experience</a></li>
                    <li><a href="<?php echo __SERVER__?>/about-me/resume" >Resume</a></li>
                    <li><a href="<?php echo __SERVER__?>/about-me/project" >Projects</a></li>
                </ul>
            </li>

            <li role="presentation" class="<?php if(page_name=='contact')echo 'active'?>"><a href="<?php echo __SERVER__.'/contact'?>">Contact</a></li>
            <li role="presentation" class="hidden"><a href="#">Other</a></li>
        </ul>
        <!--
        <ul id="navigation_bar_top" class="nav nav-pills nav-justified ">
            <li><a class="btn active" href= "#" role="button"><span class="glyphicon glyphicon-globe" aria-hidden="true">Home</span></a></li>
            <li><a class="btn " href= "#" role="button">About Me</a></li>
            <li><a class="btn " href= "#" role="button">Contact</a></li>
            <li><a class="btn " href= "#" role="button">Other</a></li>
        </ul>
        -->

    </div>
</div>