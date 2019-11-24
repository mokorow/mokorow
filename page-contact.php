<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/another.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ress.css">
    <title>Document</title>

</head>
<body>
    
    <!-- header部分のコード -->
    <?php get_header(); ?>
    <div class="title">
        <div class="title-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/qa-icon.png" alt="" class="pad-logo">
        </div>
        <h3 class="text-title">お問い合わせ</h3>
        <div class="title-logo2"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img/heading-bg.png" alt="" class="pad-logo2">
        </div>
        <div class="concept collapse2">
            <span class="text1">どんなことでもお気軽に</span>
            <span class="text1">お問い合わせください。</span>
        </div>
    </div>

    <!-- プラグイン使用-->
            <div class="center">
                <div class="button text1">送信</div>
            </div>

    <!-- footer部分のコード -->
    <?php get_footer(); ?>
</body>
</html>
