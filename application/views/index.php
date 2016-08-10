<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curriculum Vitae</title>
    <base href="<?php echo base_url();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/style.css">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar(){
            window.scrollTo(0, 1);
        }
    </script>
</head>
<body>
    <?php include "header.php";?>
    <div id="clerafix">
        <div class="container">
            <div id="clearfix-left" >
                <h1>Creative Ideas Live Here</h1>
                <p>Aliquam suscipit vel nulla quis eleifend. Maecenas vitae tristique ante. Sed sit amet vehicula libero.</p>
            </div>
            <img src="img/tv.png" alt="" id="clearfix-img">
        </div>
    </div>
    <div class="container">
        <div id="portfolio">
            <div id="port-top">
                <h3>Latest Works</h3>
                <ul class="port-top-num">
                    <?php
                        foreach($cates as $cate){
                         ?>
                            <li class=<?php echo $cate->cate_name=='ALL'?"select":""?>><a href="welcome\index?cate_id=<?php echo $cate->cate_id;?>"><?php echo $cate->cate_name;?></a></li>
                    <?php
                        }
                    ?>
                    <li class=""><a href="welcome\most">MOST</a></li>
                </ul>
            </div>
            <div id="portfoliolist">
                <ul class="portfoliolist-menu">
                    <?php
                    foreach($blogs as $blog){
                     ?>
                        <li>
                            <a href="welcome/detail?blog_id=<?php echo $blog->blog_id?>">
                                <img src=<?php echo $blog->blog_img;?> alt="">
                                <div id="cover">
                                    <h1>PHOTO</h1>
                                    <span>view photo</span>
                                </div>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <?php include "footer.php";?>
    <script src="js/jquery.js"></script>
    <script src="js/require.js" data-main="js/index.js"></script>
</body>
</html>