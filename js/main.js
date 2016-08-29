/**
 * Created by horst on 2015/9/16.
 */
$(window).scroll(function () {
    if ($(document).scrollTop() <= 120) {
        $("#top_navbar").hide();
    }else{
        $("#top_navbar").show();
    }

    if ($(document).scrollTop() >= 400){
        $("#working-quick-bar").css("margin-top",$(document).scrollTop()/2);
        //alert($("#working-quick-bar").attr('id'));
    }else{
        $("#working-quick-bar").css("margin-top",'20pt');
    }


});

$(document).ready(function(){
    $('.ctrl-toggle').click(function () {
        $(this).parent().children('.content-toggle').slideToggle();
    });

});
