<!DOCTYPE html>
<html lang="ru-RU">
<head>
<title><?php the_title(); ?> &middot; Сотек</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta charset="utf-8" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png" type="image/x-icon">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header">
    <div class="wrap hor-wrap dis-flex align-items-center justify-content-between">
        <div class="padding-r-26 col-1-6">
            <div class="header-logo">
                тех<br>пром<br>маш
            </div>
        </div>
        <div class="header-nav col-5-6 padding-l-26">
            <div class="header-nav-top dis-flex justify-content-between">
                <div class="header-nav-top-title">
                    запасные части к грузовым вагонам
                </div>
                <div class="header-nav-top-phone">
                    8 800 123 12 12
                </div>
            </div>
            <div class="header-nav-bottom dis-flex justify-content-between">
                <nav class="header-nav-bottom-menu">
                    <ul>
                        <li><a href="#">детали</a></li>
                        <li><a href="#">компания</a></li>
                        <li><a href="#">производство</a></li>
                        <li><a href="#">контакты</a></li>
                    </ul>
                </nav>
                <div class="header-nav-bottom-callback">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/mail.svg" class="svg"> написать нам
                </div>
            </div>
        </div>
    </div>
</header>
