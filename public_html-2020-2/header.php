<!doctype html>
<html lang="ja">

<head>
    <title>COACHTECH</title>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="一生モノのプログラミングスキルが2ヶ月で身に付くプログラミングコーチングスクール。プログラミングの勉強でお悩みのあなたに。プロのプログラミング学習コーチが徹底サポート。">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <title>coachtech</title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157714928-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157714928-2');
</script>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header flex">
        <img src="<?php echo get_template_directory_uri(); ?>/img/coachtech_logo1.svg" class="logo">
        <nav class="header__nav">
            <ul class="nav__box flex">
                <li><a href="https://coachtech.site/#power">COACHTECHとは</a></li>
                <li><a href="https://coachtech.site/#commit">選ばれる理由</a></li>
                <li><a href="https://coachtech.site/#counseling">コース内容</a></li>
                <li><a href="https://coachtech.site/#qa">Q＆A</a></li>
                <li><a href="https://coachtech.site/#contact" class="cta__button">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cta_bg.svg" class="cta__button__img">
                <p>無料カウンセリング</p>
            </a></li>
                
            </ul>
        </nav>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav class="header__mobile__nav">
            <ul class="mobile__nav__box">
                <li><a href="https://coachtech.site/#power">COACHTECHとは</a></li>
                <li><a href="https://coachtech.site/#commit">選ばれる理由</a></li>
                <li><a href="https://coachtech.site/#counseling">カウンセリング</a></li>
                <li><a href="https://coachtech.site/#contact">Q＆A</a></li>
                <li>
                    <a href="https://forms.gle/duWW4k8zHRtGj7mv9" class="top__cta__button">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cta_bg.svg" class="top__cta__img">
                        <p>無料カウンセリング</p>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
