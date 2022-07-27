<?php $nav++ ?>

<div class="navigation 
    <?php
        if($nav === 2){
            echo "navigation2";
        }else{
            echo "navigation1";
        }
    ?>
">
    <div class="inside">
        <a class="highlight-icon" href="https://discordapp.com/users/671689922196930580" target="_blank">
            <img src="img/discord.gif">
        </a>

        <div class="page-navigation">
            <div data-bind="class: pageActiveButton1, click: setActualPage.bind($data, 1)" class="icon-page-navigation">
                <i class="far fa-user"></i>
            </div>
            <div data-bind="class: pageActiveButton2, click: setActualPage.bind($data, 2)" class="icon-page-navigation">
                <i class="fas fa-phone-alt"></i>
            </div>
            <div data-bind="class: pageActiveButton3, click: setActualPage.bind($data, 3)" class="icon-page-navigation">
                <i class="fas fa-id-card-alt"></i>
            </div>
            <div data-bind="class: pageActiveButton4, click: setActualPage.bind($data, 4)" class="icon-page-navigation">
                <i class="fas fa-briefcase"></i>
            </div>
            <div data-bind="class: pageActiveButton5, click: setActualPage.bind($data, 5)" class="icon-page-navigation">
                <i class="fas fa-glasses"></i>
            </div>
        </div>

        <a class="highlight-icon" href="https://github.com/Martin456654" target="_blank">
            <i class="fa-brands fa-github"></i>
        </a>
    </div>
</div>