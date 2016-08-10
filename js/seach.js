define(['jquery'],function($){
    $(function(){
        var bShow=false;
        $("#search-btn").on("click",function(){
            if(!bShow){
                $("#search-box").animate({
                    width:400
                });
                $('#search-input').show();
            }else{
                $("#search-box").animate({
                    width:0
                },function(){
                    $('#search-input').hide();
                });

            }
            bShow=!bShow;
        })
    });
});