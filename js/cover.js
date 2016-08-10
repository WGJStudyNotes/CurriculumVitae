define(['jquery'],function($){
    $(function(){
        var $Pmenu=$(".portfoliolist-menu");
        var $Pimg=$("img",$Pmenu);
        var html=`<div id="cover">
            <h1>PHOTO</h1>
            <span>view photo</span>
        </div>`
        $Pimg.on("mouseover",function(e){
            e=e||window.event;
            var $Pli=$(this).parent().parent();
            e.stopPropagation();
            $Pli.append(html);
            $("#cover",$Pli).animate({
                left:0
            });
            $("#cover",$Pli).on("mouseout",function(e){
                e.stopPropagation();
                $("#cover",$Pli).animate({
                    left:-340
                },function(){
                    $("#cover",$Pli).remove();
                });
            })
        })
    })
})