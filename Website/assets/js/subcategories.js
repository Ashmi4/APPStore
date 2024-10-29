$(document).ready(function(){

    $("#sys").click(function() {

        $("#subNavApp").hide();
        $("#subNavAcc").hide();
        $("#subNavSys").fadeIn(800);
        $('*').removeClass('active');
        $(this).addClass('active');
    });
    
    $("#app").click(function() {
        $("#subNavSys").hide();
        $("#subNavAcc").hide();
        $("#subNavApp").fadeIn(800);
        $('*').removeClass('active');
        $(this).addClass('active');
    });
    $("#acc").click(function() {
        $("#subNavSys").hide();
        $("#subNavApp").hide();
        $("#subNavAcc").fadeIn(800);
        $('*').removeClass('active');        
        $(this).addClass('active');        
    });
});
