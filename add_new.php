<?php include_once "include/header.php"; ?>
<?php include_once "include/login_checker.php"; ?>

<div class="add_new">

    <form action="do_this_php/add_new_do_it.php" method="POST">
    
        <input type='text' name='name' placeholder="Název příspěvku" id="name">
        <textarea type='text' name='content' placeholder="Obsah příspěvku" id="content" rows="5"></textarea>
        <input type='submit' name='submit' value='Vytvořit příspěvek' id="add_new" class="active"><br>  

    </form>

</div>

<script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
<script src="assets/js/add_new_post_btn.js"></script>

<?php include_once "include/footer.php"; ?>
