<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" id="knockout_app">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martin Zach</title>

    <!-- meta tags SEO -->
    <meta charset="UTF-8">
    <meta name="description" content="Jsem Martin Zach a jsem Junior Web Developer.">
    <meta name="keywords" content="Martin, Zach, Web, Developer, Front End, web, PHP, JS, HTML, CSS, vývojář, IT, programátor
                                    mnichovice">
    <meta name="author" content="Martin Zach">
    <meta name="og:image" content="https://www.martinzach.cz/img/blabla.jpg">

    <!-- styles -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="img/mouse_blue_favicon.png">

    <!-- import for forts awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XWQ2HKFQTK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-XWQ2HKFQTK');
    </script>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>

    <script src="js/knockoutJS/knockout.js"></script>
    <script src="js/knockoutJS/knockout-validation.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/mgalante/jquery.redirect@master/jquery.redirect.js"></script>
</head>

<?php $nav = 0; ?>