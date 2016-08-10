<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文章详情</title>
    <base href="<?php echo site_url();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/detail.css">
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
    <div id="blog-info">
    <div class="container">
        <h1><?php echo $blogs[0]->blog_title;?></h1>
        <img src="<?php echo $blogs[0]->big_img;?>" alt="">
        <p><?php echo $blogs[0]->blog_content;?></p>
        <div id="blog-attribute">
            <ul id="attribute-menu">
                <li><span></span><a href="#"><?php echo $blogs[0]->blog_time;?></a></li>
                <li><span class="user"></span><a href="#"><?php echo $blogs[0]->blog_author;?></a></li>
                <li><span class="click"></span><a href="#"><?php echo $blogs[0]->click;?></a></li>
            </ul>
        </div>
    </div>
    </div>
    <div id="footer">
        <div class="container">
            <div id="contact">
                <h4>请留言</h4>
                <div id="ContactMe">
                    <input type="hidden" id="blogId" value="<?php echo $blogs[0]->blog_id?>">
                    <input type="text" id="name" placeholder="Name">
                    <input type="text" placeholder="Email">
                    <textarea id="message" type="text" placeholder="Message"></textarea>
                </div>
                <div id="contact-btn">
                    <input type="button" value="SEND" id="sub">
                </div>
            </div>
            <div id="contactinf">
                <ul>
                    <?php
                    foreach($coms as $com){
                        ?>
                        <li>
                            <h1><?php echo $com->com_name?></h1>
                            <span><?php echo $com->com_time?></span>
                            <p><?php echo $com->com_content?></p>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <script src="js/require.js" data-main="js/detail.js"></script>
</body>
</html>