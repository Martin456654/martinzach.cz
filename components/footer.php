    <!-- <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script> -->
    <script src="js/switch_page.js"></script>
    <script src="js/arrow_down_slide.js"></script>
    <script src="js/skills_animation.js"></script>
    <script src="js/typing.js"></script>

    <script>
        $(function(){
            $("*").contents().each(function(){
                if(this.nodeType === Node.COMMENT_NODE){
                    $(this).remove();
                }
            })
        })
    </script>

    <?php

    if(isset($_GET["page"])){
        echo "<script>switchPage(" . $_GET["page"] . ")</script>";
    }

    ?>
</html>