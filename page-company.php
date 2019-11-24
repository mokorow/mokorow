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
    

<div class="aboutus">
    <div class="title">
        <div class="title-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/company-icon.png" alt="" class="pad-logo">
        </div>
        <h3 class="text-title">当園について</h3>
        <div class="title-logo2"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img/heading-bg.png" alt="" class="pad-logo2">
        </div>
    </div>
<div class="aboutus-box">
    <div class="aboutus-content">
        <img src="<?php echo get_template_directory_uri(); ?>/img/intro.png" alt="" class="aboutus-photo">
        <p class="text-aboutus">〇〇県〇〇郡、標高800メートル、
                人口3000人弱の小さな村に私たちの農園はあります。
                緑豊かなこの土地で、土や品種に徹底的にこだわりながら
                有機野菜を育てています。<br><br>
                
                新しいモノ・コト・農業の可能性を考え、
                農業の力で社会的な課題を解決するコトで
                新たな価値を提供していきます。<br><br>
                
                ・・・ちょっと真面目に語ってしまいましたが。
                野菜にかけた愛情は食べた人に必ず伝わります。
                真面目すぎるくらいがいいんです。</p>
    </div>
</div>
<div class="yellow-wave"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img/bridge2.png" alt="" class="yellow-wave">
</div>
<div class="company backcolor">
    <div class="title">
            <div class="title-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/kind-icon.png" alt="" class="pad-logo">
            </div>
            <h3 class="text-title">会社概要</h3>
            <div class="title-logo2"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img/heading-bg.png" alt="" class="pad-logo2">
            </div>
            <div class="concept collapse2">
                <span class="text1">しま農園は野菜のことで頭がいっぱいの、</span>
                <span class="text1">とにかく真面目な会社です。</span>
            </div>
    </div>
    <div class="company-content">
        <div class="company-content1">
            <p class="text-height start text-9">社名<br>創立<br>所在地<br>資本金<br>従業員数</p>
            <p class="text-height start text-10">有限会社しま農園<br>1993年<br>〇〇県〇〇郡〇〇村<br>1000万円<br>50人</p>
        </div>


    </div>
</div>

</div>
    <!-- footer部分のコード -->
    <?php get_footer(); ?>
</body>
</html>
