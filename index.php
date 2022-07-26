<?php include "components/header.php"; ?>

<body>
    <div class="all_content">
        <?php include "components/navigation.php"; ?>

        <?php include "components/image_card.php"; ?>

        <?php include "components/navigation.php"; ?>
        
        <div class="content_of_pages" id="content_of_pages">
            <div class="inside scroll-bar-custom">
                <div class="page" id="page1"><?php include "include/page_1.php"; ?></div>
                <div class="page" id="page2"><?php include "include/page_2.php"; ?></div>
                <div class="page" id="page3"><?php include "include/page_3.php"; ?></div>
                <div class="page" id="page4"><?php include "include/page_4.php"; ?></div>
                <div class="page" id="page5"><?php include "include/page_5.php"; ?></div>
            </div>
        </div>
    </div>
</body>

<?php include "components/footer.php"; ?>