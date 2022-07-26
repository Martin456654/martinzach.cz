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
            <div class="icon-page-navigation navigationBtn1" onClick="switchPage(1, event)">
                <i class="far fa-user"></i>
            </div>
            <div class="icon-page-navigation navigationBtn2" onClick="switchPage(2, event)">
                <i class="fas fa-phone-alt"></i>
            </div>
            <div class="icon-page-navigation navigationBtn3" onClick="switchPage(3, event)">
                <i class="fas fa-id-card-alt"></i>
            </div>
            <div class="icon-page-navigation navigationBtn4" onClick="switchPage(4, event)">
                <i class="fas fa-briefcase"></i>
            </div>
            <div class="icon-page-navigation navigationBtn5" onClick="switchPage(5, event)">
                <i class="fas fa-glasses"></i>
            </div>
        </div>

        <a class="highlight-icon" href="https://github.com/Martin456654" target="_blank">
            <i class="fa-brands fa-github"></i>
        </a>
    </div>
</div>