<?php
/**
 * Created by PhpStorm.
 * User: Horst
 * Date: 2015/8/23
 * Time: 0:02
 */
?>

<div id="footer_board" class="container-fluid" >
    <div id="footer" class="container font-white" style="padding-top: 10pt">
        <div class="row" style="margin-bottom: 20pt">
            <div class="col-md-4">
                <a href="#" style="color: whitesmoke">
                    <h1 style="font-weight: 900;letter-spacing: 2px">Egg<tag style="background-color: whitesmoke;color: black">p</tag>lant Cui</h1>
                </a>
                <h6>See me in:</h6>
                <a class="btn" role="button" href="https://www.facebook.com/yanglonghorst.cui" style="padding: 0"><img class="img-responsive" src="<?php echo __SERVER__?>/src/picture/facebook-icon.png" style="width: 30pt"></a>
                <a class="btn" role="button" href="#"><img class="img-responsive" src="<?php echo __SERVER__?>/src/picture/linkedin-icon.png" style="width: 30pt"></a>
            </div>

            <div class="col-md-3 col-md-offset-1" style="margin-top: 20pt">
                <ul id="footer_quick_bar" class="list-unstyled">
                   <li><a href="<?php echo __SERVER__?>" style="color: whitesmoke">Home</a></li>
                   <li><a href="<?php echo __SERVER__?>/about-me/resume" style="color: whitesmoke">resume</a></li>
                   <li><a href="#" style="color: whitesmoke">product</a></li>
                   <li><a href="<?php echo __SERVER__.'/about-me/working-experience'?>" style="color: whitesmoke">working experience</a></li>
                   <li><a href="#" style="color: whitesmoke">others</a></li>
                </ul>

            </div>

            <div class="col-md-3 col-md-offset-1" style="margin-top: 20pt">
                <address>
                    <p><strong>Yanglong <u>Cui</u></strong></p>
                    <p>24 ida Street, St Catharines</p>
                    <p>ON, Canada</p>
                    <p><abbr title="Phone">P:</abbr> (905)-325-0111</p>
                    <p><abbr title="Email">E:</abbr> yanglongcui@gmail.com</p>

                </address>

            </div>

        </div>

        <p class="text-center" ><span class="glyphicon glyphicon-copyright-mark"></span><small>2015</small>,Yanglong Cui | Bootstrap</p>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo __SERVER__?>/exter_libraries/bootstrap-3.3.5/js/bootstrap.min.js"></script>
</body>
</html>