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
            <div class="title-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/intro-icon.png" alt="" class="pad-logo">
            </div>
            <h3 class="text-title">品目・ストア</h3>
            <div class="title-logo2"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img/heading-bg.png" alt="" class="pad-logo2">
            </div>
            <div class="concept pad70">
                <p class="text1">しま農園のかわいい子たちを紹介します。</p>
            </div>
        </div>

        <div class="store-vertical">
            <div class="store-horizon">
                <div class="store-item">
                    <div class="store-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/kind1.jpg" alt="" class="store-photo"></div>
                    <p class="text1 pad-7">ほうれん草</p>
                </div>
                <div class="store-item">
                    <div class="store-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/kind2.jpg" alt="" class="store-photo"></div>
                    <p class="text1 pad-7">トマト</p>
                </div>
                <div class="store-item">
                    <div class="store-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/kind3.jpg" alt="" class="store-photo"></div>
                    <p class="text1 pad-7">たまねぎ</p>
                </div>
                <div class="store-item">
                    <div class="store-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/kind4.jpg" alt="" class="store-photo"></div>
                    <p class="text1 pad-7">レタス</p>
                </div>
                <div class="store-item">
                    <div class="store-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/kind5.jpg" alt="" class="store-photo"></div>
                    <p class="text1 pad-7">キャベツ</p>
                </div>
                <div class="store-item">
                    <div class="store-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/kind6.jpg" alt="" class="store-photo"></div>
                    <p class="text1 pad-7">なす</p>
                </div>
                <div class="store-item">
                    <div class="store-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/kind7.jpg" alt="" class="store-photo"></div>
                    <p class="text1 pad-7">にんじん</p>
                </div>
                <div class="store-item">
                    <div class="store-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/kind8.jpg" alt="" class="store-photo"></div>
                    <p class="text1 pad-7">ブロッコリー</p>
                </div>
            </div>
        </div>
<div class="yellow-wave"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img/bridge2.png" alt="" class="yellow-wave">
</div>
<div class="online backcolor">
    <div class="title">
            <div class="title-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img/h-icon-3.png" alt="" class="pad-logo">
            </div>
            <h3 class="text-title">オンラインストア</h3>
            <div class="title-logo2"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img/heading-bg.png" alt="" class="pad-logo2">
            </div>
            <div class="concept collapse">
                <span class="text1">しま農園では毎週火曜日に</span>
                <span class="text1">定期便を配達しています。</span>
            </div>
    </div>

    <div class="online-store">
        <div class="product">
            <div class="s-set pad15"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img/store1.jpg" alt="" class="s-set"></div>
            <p class="product-title text8"><a class="highlite">おてがる<span class="text-big">S</span>セット</a></p>
            <p class="text7 pad-1">1480円(税込)</p>
            <p class="text1">２〜３人用</p>
            <p class="text1 pad-2">旬の野菜５種</p>
        </div>
        <div class="product  padw45">
            <div class="s-set pad15"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img/store2.jpg" alt="" class="s-set"></div>
            <p class="product-title text8"><a class="highlite">わいわい<span class="text-big">M</span>セット</a></p>
            <p class="text7 pad-1">1980円(税込)</p>
            <p class="text1">５〜6人用</p>                
            <p class="text1 pad-2">旬の野菜7〜８種</p>
        </div>
        <div class="product">
                <div class="s-set pad15"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img/store3.jpg" alt="" class="s-set"></div>
            <p class="product-title text8"><a class="highlite">まんぷく<span class="text-big">L</span>セット</a></p>
            <p class="text7 pad-1">2980円(税込)</p>
            <p class="text1">７〜８人用</p>
            <p class="text1 pad-2">旬の野菜10〜12種</p>
        </div>
    </div>
    <div class="center">
        <div class="button text1">もっと見る</div>
    </div>
    <div class="yellow-wave"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img/bridge2.png" alt="" class="yellow-wave">
    </div>
</div>
    <!-- footer部分のコード -->
    <?php get_footer(); ?>
</body>
</html>
