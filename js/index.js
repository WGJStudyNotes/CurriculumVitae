require(['jquery','seach'],function($){
    $(function(){
      var $num=$('.port-top-num');
        var $Ali=$('li',$num);
        $Ali.on('mouseover',function(){
            $(this).addClass('select');
            $(this).siblings().removeClass('select');
        })
        $("#subm").on("click",function(){
            var $name=$('#name');
            var $message=$('#message')
            if ($name.val()==""||$message.val()==""){
                alert('关键信息应对应填写！')
            }else{
                $.post('welcome/message',{
                    name:$name.val(),
                    message:$message.val()
                },function(data){
                    if(data == "success"){
                        //alert("感谢您的宝贵意见！")
                        console.log("留言成功！")
                    }else{
                        //alert("留言失败！");
                        console.log("留言失败！")
                    }
                },'text');
            }
        })
    });
})