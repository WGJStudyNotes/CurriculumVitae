<div id="footer">
    <div class="container">
        <div id="contact">
            <h4>请留言</h4>
            <div id="ContactMe">
                <p><input type="text" id="name" placeholder="Name"></p>
                <p><input type="text" placeholder="Email"></p>
                <p><textarea type="text" id="message" placeholder="Message"></textarea></p>
            </div>
            <div id="contact-btn">
                <p><input type="button" value="SEND" id="subm"></p>
            </div>
        </div>
        <div id="contactinf">
            <ul>
                <?php
                foreach($blogcoms as $blogcom){
                    ?>
                    <li>
                        <h1><?php echo $blogcom->com_name?></h1>
                        <span><?php echo $blogcom->com_time?></span>
                        <p><?php echo $blogcom->com_cont?></p>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>