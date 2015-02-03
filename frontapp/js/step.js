
$(document).ready(function(){
    $("#step_one").click(function(){
        if ($(".stepIco").hasClass('doing')){
            $(".stepIco").removeClass('doing');
        }
        $('.stepIco2').addClass('doing');
    })
});

