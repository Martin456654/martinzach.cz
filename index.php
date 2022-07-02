<?php include "include/header.php"; ?>

<body>
    <section class="body">
        <div class="all_content">
            <!-- navigation -->
            <?php include "include/navigation.php"; ?>

            <!-- image card -->
            <div class="image_card">
                <div class="inside">
                    <div class="content_before_img">
                        <h2 class="typing_header" id="typing_header">Martin Zach</h2>
                        <div class="tag_spacing">
                            <!-- <span class="who_i_am_tag typing"></span> -->

                            <div id="typed-strings">
                                <p>Programmer</p>
                                <!-- <p>Business Man</p> -->
                                <p>Back-End PHP Developer</p>
                                <p>Student IT</p>
                            </div>

                            <span id="typed"></span>
                        </div>
                        <div class="icons_social">
                            <a href="https://www.linkedin.com/in/zachmartiin/" target="_blank">
                                <div class="social_icon"><i class="fab fa-linkedin-in"></i></div>
                            </a>
                            <!-- <a href="https://www.facebook.com/martin.zach.7547/" target="_blank">
                                <div class="social_icon"><i class="fab fa-facebook-f"></i></div>
                            </a> -->
                            <a href="https://www.instagram.com/zachymartin/" target="_blank">
                                <div class="social_icon"><i class="fab fa-instagram"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="slide_down">
                        <div class="scroll-down" id="arrow_down_slide"></div>
                    </div>
                    <!-- 
                        <div class="menu_image_animation">FFFFFFFFFF
                            <div class="fold_anim_top"></div>
                            <div class="fold_anim_top_rotate">gdgfdssagdsasfdsasafdsafdsasfsda</div>
                            <div class="content_menu"></div>
                            <div class="fold_anim_bottom"></div>
                            <div class="fold_anim_bottom_rotate"></div>
                        </div> 
                    -->
                </div>
            </div>
            <!-- navigation -->
            <?php $navNum = 2; ?>
            <?php include "include/navigation.php"; ?>
            <!-- content of pages -->
            <div class="content_of_pages" id="content_of_pages">
                <div class="inside scroll-bar-custom">
                    <!-- page 1 -->
                    <?php include "include/page_1.php"; ?>

                    <!-- page 2 -->
                    <?php include "include/page_2.php"; ?>

                    <!-- page 3 -->
                    <?php include "include/page_3.php"; ?>

                    <!-- page 4 -->
                    <?php include "include/page_4.php"; ?>
                    
                    <!-- page 5 -->
                    <?php include "include/page_5.php"; ?>
                </div>
            </div>
            <!-- shadows -->
            <div class="shadows_on_content">
                <div class="top_shadow_smooth"></div>
                <div class="spacing"></div>
                <div class="bottom_shadow_smooth"></div>
            </div>
            <!-- hamburger icon for mobile-->
            <div class="hamburger_icon_for_mobile" id="menu_mobile_icon1">
                <i class="fas fa-bars"></i>
            </div>

            <!-- mobile menu all screen -->
            <?php include "include/mobile_menu.php"; ?>
        </div>
    </section>

    <!-- script tags -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>

    <script src="js/switch_page.js"></script>
    <script src="js/arrow_down_slide.js"></script>
    <script src="js/mobile_menu_slide.js"></script>
    <script src="js/skills_animation.js"></script>
    <script src="js/typing.js"></script>
</body>
</html>