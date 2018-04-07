<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\SiteAsset;
use yii\helpers\Url;

SiteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <meta http-equiv="cleartype" content="on">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <style>
        .page {
            height: 100%;
            visibility: hidden;
            opacity: 0;
            transition: opacity .2s ease-in, visibility .2s ease-in;
            transition-delay: .3s;
        }
    </style>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="page <?= $this->params['pageClass'] ?>">
    <header>
        <div class="container">
            <div class="header_logo">
                <div class="mobileMenu_btn-container">
                    <div class="mobileMenu_btn">
                        <div class="mobileMenu_btn-line"></div>
                    </div>
                </div>
                <a href="<?= (Yii::$app->language == 'ru') ? Yii::$app->homeUrl : Yii::$app->homeUrl . Yii::$app->language ?>">
                    <svg class="icon-svg-logo">
                        <use xlink:href="/img/sprite.svg#logo" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                </a>
            </div>
            <div class="header_nav">
                <ul class="header_nav-menu">
                    <li class="menu_item">
                        <a href="javascript:void(0);"><?= Yii::t('menu', 'Комплекс') ?></a>
                        <div class="menu_item-dropdown_wrap">
                            <div class="menu_item-dropdown">
                                <div class="menu_item-dropdown_item"><a href="javascript:void(0);"><?= Yii::t('menu', 'Схема застройки') ?></a></div>
                                <div class="menu_item-dropdown_item current"><a href="javascript:void(0);"><?= Yii::t('menu', 'Технические характеристики') ?></a></div>
                                <div class="menu_item-dropdown_item"><a href="<?= (Yii::$app->language == 'ru') ? '/documents/' : '/ua/documents/' ?>"><?= Yii::t('menu', 'Документация') ?></a></div>
                            </div>
                        </div>
                    </li>
                    <li class="menu_item menu_item__link">
                        <a href="javascript:void(0);"><?= Yii::t('menu', 'Квартиры') ?></a>
                    </li>
                    <li class="menu_item">
                        <a href="javascript:void(0);"><?= Yii::t('menu', 'Коммерческая') ?></a>
                        <div class="menu_item-dropdown_wrap">
                            <div class="menu_item-dropdown">
                                <div class="menu_item-dropdown_item"><a href="javascript:void(0);"><?= Yii::t('menu', 'Коммерческая недвижимость') ?></a></div>
                                <div class="menu_item-dropdown_item current"><a href="javascript:void(0);"><?= Yii::t('menu', 'Кладовки') ?></a></div>
                            </div>
                        </div>
                    </li>
                    <li class="menu_item">
                        <a href="javascript:void(0);"><?= Yii::t('menu', 'Галерея') ?></a>
                        <div class="menu_item-dropdown_wrap">
                            <div class="menu_item-dropdown">
                                <div class="menu_item-dropdown_item"><a href="javascript:void(0);"><?= Yii::t('menu', 'Фото комплекса') ?></a></div>
                                <div class="menu_item-dropdown_item current"><a href="javascript:void(0);"><?= Yii::t('menu', 'Ход строительства') ?></a></div>
                                <div class="menu_item-dropdown_item"><a href="javascript:void(0);"><?= Yii::t('menu', 'Видео') ?></a></div>
                                <div class="menu_item-dropdown_item"><a href="javascript:void(0);"><?= Yii::t('menu', 'Веб-камера') ?></a></div>
                            </div>
                        </div>
                    </li>
                    <li class="menu_item">
                        <a href="javascript:void(0);"><?= Yii::t('menu', 'Пресс-центр') ?></a>
                        <div class="menu_item-dropdown_wrap">
                            <div class="menu_item-dropdown">
                                <div class="menu_item-dropdown_item"><a href="javascript:void(0);"><?= Yii::t('menu', 'Акции') ?></a></div>
                                <div class="menu_item-dropdown_item current"><a href="<?= (Yii::$app->language == 'ru') ? '/news/' : '/ua/news/' ?>"><?= Yii::t('menu', 'Новости') ?></a></div>
                            </div>
                        </div>
                    </li>
                    <li class="menu_item">
                        <a href="javascript:void(0);"><?= Yii::t('menu', 'Условия') ?></a>
                        <div class="menu_item-dropdown_wrap">
                            <div class="menu_item-dropdown">
                                <div class="menu_item-dropdown_item"><a href="<?= (Yii::$app->language == 'ru') ? '/finished-build/' : '/ua/finished-build/' ?>"><?= Yii::t('menu', 'Готовая квартира') ?></a></div>
                                <div class="menu_item-dropdown_item"><a href="<?= (Yii::$app->language == 'ru') ? '/in-build/' : '/ua/in-build/' ?>"><?= Yii::t('menu', 'В строящемся доме') ?></a></div>
                            </div>
                        </div>
                    </li>
                    <li class="menu_item">
                        <a href="javascript:void(0);"><?= Yii::t('menu', 'Жек') ?></a>
                        <div class="menu_item-dropdown_wrap">
                            <div class="menu_item-dropdown">
                                <div class="menu_item-dropdown_item"><a href="<?= (Yii::$app->language == 'ru') ? '/phone-numbers/' : '/ua/phone-numbers/' ?>"><?= Yii::t('menu', 'Полезные телефоны') ?></a></div>
                                <div class="menu_item-dropdown_item"><a href="<?= (Yii::$app->language == 'ru') ? '/rates/' : '/ua/rates/' ?>"><?= Yii::t('menu', 'Тарифы') ?></a></div>
                            </div>
                        </div>
                    </li>
                    <li class="menu_item menu_item__link">
                        <a href="<?= (Yii::$app->language == 'ru') ? '/contacts/' : '/ua/contacts/' ?>"><?= Yii::t('menu', 'Контакты') ?></a>
                    </li>
                </ul>
                <div class="header_nav-lang">
                    <?php
                    if(\Yii::$app->language == 'ru'):
                        echo '<a href="javascript:void(0);" class="header_nav-lang_btn selected">рус</a>';
                        echo Html::a('укр', array_merge(\Yii::$app->request->get(),[\Yii::$app->controller->route, 'language' => 'ua']), ['class' => ' header_nav-lang_btn']);
                    else:
                        echo Html::a('рус', array_merge(\Yii::$app->request->get(),[\Yii::$app->controller->route, 'language' => 'ru']), ['class' => 'header_nav-lang_btn']);
                        echo '<a href="javascript:void(0);" class="header_nav-lang_btn selected">укр</a>';
                    endif;?>
                </div>
            </div>
            <div class="bingc-action-open-passive-form header_call">
                <svg class="icon-svg-binotel_phone">
                    <use xlink:href="/img/sprite.svg#binotel_phone" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                </svg>
            </div>
        </div>
    </header>

    <?= $content ?>

    <footer>
        <div class="container">
            <div class="mobile_box">
                <div class="mobile_box-contacts">
                    <a href="tel:+380503377317" class="">
                        <svg version="1.1"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"x="0px" y="0px" width="31px" height="31px" viewBox="0 0 31 31" style="overflow:scroll;enable-background:new 0 0 31 31;"xml:space="preserve"><style type="text/css"> .st0 {
                                    fill: #44BB6E;
                                }

                                .st1 {
                                    fill: #FFFFFF;
                                }</style><defs></defs><g><path class="st0" d="M29,31H2c-1.1,0-2-0.9-2-2V2c0-1.1,0.9-2,2-2h27c1.1,0,2,0.9,2,2v27C31,30.1,30.1,31,29,31z"/><g><path class="st1" d="M20.6,23.6c-3.2,0-6.5-1.5-9-4c-2.7-2.7-4.2-6.1-4.1-9.3l0,0l0,0c0.2-0.3,0.4-0.5,0.7-0.8 c0.8-0.8,1.8-1.5,3-1.9c0.1,0,0.1,0,0.2,0c0.4,0,0.8,0.2,0.9,0.4c0.4,1.1,0.9,2.6,1.3,4c0,0.2,0,0.8-0.2,0.9l-1.3,0.8 c-0.1,0.1-0.3,0.2-0.3,0.5c-0.1,0.3,0,0.7,0.3,1c0.5,0.7,1.2,1.5,1.9,2.2c0.7,0.7,1.4,1.3,2.2,1.8c0.2,0.2,0.6,0.3,0.8,0.3 c0.3,0,0.5-0.1,0.6-0.3l0.8-1.3c0.1-0.2,0.5-0.3,0.8-0.3c0.1,0,0.1,0,0.1,0c1.7,0.4,2.7,0.7,4,1.3c0.2,0.1,0.5,0.8,0.3,1.1 c-0.4,1.1-1.1,2.1-1.9,3c-0.2,0.2-0.5,0.5-0.8,0.7l0,0L20.6,23.6z"/></g></g></svg>
                        <span class="">Контакты</span> </a>
                </div>
                <div class="mobile_box-gmap">
                    <a href="javascript:void(0);" class="">

                        <svg version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                             x="0px" y="0px" width="32.3px" height="32.4px" viewBox="0 0 32.3 32.4"
                             style="overflow:scroll;enable-background:new 0 0 32.3 32.4;" xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #1C9957;
    }

    .st1 {
        fill: #CBCCC9;
    }

    .st2 {
        fill: #FFD73D;
    }

    .st3 {
        fill: #D73F35;
    }

    .st4 {
        fill: #752622;
    }

    .st5 {
        fill: #FFFFFF;
    }

    .st6 {
        fill: #3E7BF1;
    }

    .st7 {
        fill: #EFEFEF;
    }
</style>
                            <defs>
                            </defs>
                            <g id="surface1_1_">
                                <path class="st0" d="M29.2,29.8V5.6c0-1.3-1-2.5-2.5-2.5H2.5C1.2,3.1,0,4.1,0,5.6v24.3c0,1.3,1,2.5,2.5,2.5h24.3
		C28.2,32.3,29.2,31.3,29.2,29.8z"/>
                                <path class="st1" d="M29.2,29.8v-24L16.8,18.2C19.1,20.7,29.2,31,29.2,29.8z"/>
                                <path class="st2" d="M29.2,5.7c0-1.3-1-2.5-2.5-2.5h-0.3L0,29.7V30c0,1.3,1,2.5,2.5,2.5h0.3L29.2,5.9V5.7z"/>
                                <path class="st3" d="M24.3,0c-4.5,0-8,3.6-8,8c0,5.6,6.2,7.5,7.5,16c0.1,0.5,0.1,0.9,0.5,0.9s0.4-0.4,0.5-0.9
		c1.3-8.5,7.5-10.5,7.5-16C32.4,3.6,28.8,0,24.3,0z"/>
                                <path class="st4" d="M27.1,8c0,1.6-1.3,2.8-2.8,2.8S21.4,9.6,21.4,8s1.3-2.8,2.8-2.8S27.1,6.5,27.1,8z"/>
                                <path class="st5" d="M7,8.5v1.7h2.5C9.2,11.2,8.3,12,7,12c-1.4,0-2.7-1.2-2.7-2.7c0-1.4,1.2-2.7,2.7-2.7c0.6,0,1.3,0.3,1.7,0.6
		l1.3-1.3C9.2,5.2,8.1,4.8,7,4.8c-2.5,0-4.4,1.9-4.4,4.4s1.9,4.4,4.4,4.4c3.9,0,4.5-3.5,4.1-5.2L7,8.5z"/>
                                <polygon class="st6" points="2.7,32.3 26.6,32.3 14.7,20.4 	"/>
                                <path class="st7" d="M16.8,18.2l-2.1,2.1l11.9,11.9h0.3c1.3,0,2.5-1,2.5-2.5C29.2,31,19.1,20.7,16.8,18.2z"/>
                            </g>
</svg>
                        <span>Google Maps</span> </a>
                </div>
            </div>
            <div class="footer_social">
                <a href="javascript:void(0);">
                    <svg class="icon-svg-fb">
                        <use xlink:href="/img/sprite.svg#fb" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                </a> <a href="javascript:void(0);">
                    <svg class="icon-svg-inst">
                        <use xlink:href="/img/sprite.svg#inst" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                </a>
                <div class="footer_copy"><?= Yii::t('app', '© 2018 «Cофия Киевская»') ?> <span class="separ">/</span> <a href="https://icreations.agency/" target="_blank">iC Agency</a></div>
            </div>
            <div class="footer_phone">
                <div class="footer_phone-box">
                    <a href="tel:+380443740785" class="footer_phone-item">
                        <span>(044) 374 07 85</span>
                    </a>
                    <a href="tel:+380672453884" class="footer_phone-item">
                        <span>(067) 245 38 84</span>
                    </a>
                    <div class="footer_phone-item_main main_ev">
                        <a href="tel:+380503377317" class="footer_phone-item">
                            <svg class="icon-svg-phone">
                                <use xlink:href="/img/sprite.svg#phone" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                            </svg>
                            <span>(050) 337 73 17</span>
                        </a>
                        <div class="icon_arr">
                            <svg class="icon-svg-arr-down">
                                <use xlink:href="/img/sprite.svg#arr-down" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <a href="https://www.google.com/maps/place/%D0%96%D0%9A+%D0%A1%D0%BE%D1%84%D0%B8%D1%8F+%D0%9A%D0%B8%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F/@50.404103,30.3587509,17z/data=!3m1!4b1!4m5!3m4!1s0x40d4cbb67cd1bb9b:0xbdc69073d1068d86!8m2!3d50.404103!4d30.3609396" class="footer_map" target="_blank">
                <svg class="icon-svg-mapMarker">
                    <use xlink:href="/img/sprite.svg#mapMarker" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                </svg>
                <span><?= Yii::t('app', 'с. Софиевская Борщаговка') ?>, <span class="__br"><?= Yii::t('app', 'ул. Горького, 5б') ?></span></span></a>
            <div class="footer_chatWidget">
                <div class="footer_chatWidget-btn">

                </div>
            </div>
        </div>
    </footer>

    <div class="menuModal">
        <div class="container">
            <div class="menuModal_content">
                <div class="menuModal_sections">
                    <div class="menuModal_section">
                        <div class="menu_list">
                            <div class="menu_list-head">
                                <span>Комплекс</span>
                                <svg class="icon-svg-menu_it-arr">
                                    <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>

                            </div>
                            <div class="menu_items-container">
                                <a href="javascript:void(0);" class="menu_list-item">
                                    <svg class="icon-svg-menu_it-arr">
                                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                    <span>Схема застройки</span> </a> <a href="javascript:void(0);" class="menu_list-item">
                                    <svg class="icon-svg-menu_it-arr">
                                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                    <span>Преимущества компании</span> </a> <a href="javascript:void(0);" class="menu_list-item">
                                    <svg class="icon-svg-menu_it-arr">
                                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                    <span>Технические характеристики</span>

                                </a> <a href="javascript:void(0);" class="menu_list-item">
                                    <svg class="icon-svg-menu_it-arr">
                                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                    <span>Документация</span> </a>
                            </div>
                        </div>
                        <div class="menu_list">
                            <div class="menu_list-head"><a href="javascript:void(0);"><span>Квартиры</span></a></div>
                        </div>
                        <div class="menu_list">
                            <div class="menu_list-head"><span>Коммерческая</span>	<svg class="icon-svg-menu_it-arr">
                                    <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg></div>
                            <div class="menu_items-container">
                                <a href="javascript:void(0);" class="menu_list-item">
                                    <svg class="icon-svg-menu_it-arr">
                                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                    <span>Коммерческая</span> </a> <a href="javascript:void(0);" class="menu_list-item">
                                    <svg class="icon-svg-menu_it-arr">
                                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                    <span>Кладовки</span> </a>
                            </div>
                        </div>
                        <div class="menu_list">
                            <div class="menu_list-head"><span>Галлерея</span>	<svg class="icon-svg-menu_it-arr">
                                    <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg></div>
                            <div class="menu_items-container">
                                <a href="javascript:void(0);" class="menu_list-item">
                                    <svg class="icon-svg-menu_it-arr">
                                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                    <span>Ход строительства</span> </a> <a href="javascript:void(0);" class="menu_list-item">
                                    <svg class="icon-svg-menu_it-arr">
                                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                    <span>Фото комплекаса</span> </a> <a href="javascript:void(0);" class="menu_list-item">
                                    <svg class="icon-svg-menu_it-arr">
                                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                    <span>Видео</span>

                                </a> <a href="javascript:void(0);" class="menu_list-item">
                                    <svg class="icon-svg-menu_it-arr">
                                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                    <span>Веб-камера</span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="menuModal_section">
                        <div class="menu_list">
                            <div class="menu_list-head"><span>Пресс-центр</span>	<svg class="icon-svg-menu_it-arr">
                                    <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg></div>
                            <div class="menu_items-container">
                                <a href="javascript:void(0);" class="menu_list-item">
                                    <svg class="icon-svg-menu_it-arr">
                                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                    <span>Акции</span> </a> <a href="javascript:void(0);" class="menu_list-item">
                                    <svg class="icon-svg-menu_it-arr">
                                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                    <span>Новости</span> </a>
                            </div>
                        </div>
                        <div class="menu_list">
                            <div class="menu_list-head"><a href="javascript:void(0);"><span>Пресс-центр</span></a></div>
                        </div>
                        <div class="menu_list">
                            <div class="menu_list-head"><a href="javascript:void(0);"><span>Контакты</span></a></div>
                        </div>
                        <div class="menu_list">
                            <div class="menu_list-head"><a href="javascript:void(0);"><span>Жек</span></a></div>
                        </div>
                        <div class="menu_list">
                            <div class="menu_list-head"><a href="javascript:void(0);"><span>Условия</span></a></div>
                        </div>
                        <div class="menu_social social_map">
                            <a href="javascript:void(0);" class="menu_social-item">
                                <div class="menu_social-item_ico">
                                    <svg version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                         x="0px" y="0px" width="32.3px" height="32.4px" viewBox="0 0 32.3 32.4"
                                         style="overflow:scroll;enable-background:new 0 0 32.3 32.4;" xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #1C9957;
    }

    .st1 {
        fill: #CBCCC9;
    }

    .st2 {
        fill: #FFD73D;
    }

    .st3 {
        fill: #D73F35;
    }

    .st4 {
        fill: #752622;
    }

    .st5 {
        fill: #FFFFFF;
    }

    .st6 {
        fill: #3E7BF1;
    }

    .st7 {
        fill: #EFEFEF;
    }
</style>
                                        <defs>
                                        </defs>
                                        <g id="surface1_1_">
                                            <path class="st0" d="M29.2,29.8V5.6c0-1.3-1-2.5-2.5-2.5H2.5C1.2,3.1,0,4.1,0,5.6v24.3c0,1.3,1,2.5,2.5,2.5h24.3
		C28.2,32.3,29.2,31.3,29.2,29.8z"/>
                                            <path class="st1" d="M29.2,29.8v-24L16.8,18.2C19.1,20.7,29.2,31,29.2,29.8z"/>
                                            <path class="st2" d="M29.2,5.7c0-1.3-1-2.5-2.5-2.5h-0.3L0,29.7V30c0,1.3,1,2.5,2.5,2.5h0.3L29.2,5.9V5.7z"/>
                                            <path class="st3" d="M24.3,0c-4.5,0-8,3.6-8,8c0,5.6,6.2,7.5,7.5,16c0.1,0.5,0.1,0.9,0.5,0.9s0.4-0.4,0.5-0.9
		c1.3-8.5,7.5-10.5,7.5-16C32.4,3.6,28.8,0,24.3,0z"/>
                                            <path class="st4" d="M27.1,8c0,1.6-1.3,2.8-2.8,2.8S21.4,9.6,21.4,8s1.3-2.8,2.8-2.8S27.1,6.5,27.1,8z"/>
                                            <path class="st5" d="M7,8.5v1.7h2.5C9.2,11.2,8.3,12,7,12c-1.4,0-2.7-1.2-2.7-2.7c0-1.4,1.2-2.7,2.7-2.7c0.6,0,1.3,0.3,1.7,0.6
		l1.3-1.3C9.2,5.2,8.1,4.8,7,4.8c-2.5,0-4.4,1.9-4.4,4.4s1.9,4.4,4.4,4.4c3.9,0,4.5-3.5,4.1-5.2L7,8.5z"/>
                                            <polygon class="st6" points="2.7,32.3 26.6,32.3 14.7,20.4 	"/>
                                            <path class="st7" d="M16.8,18.2l-2.1,2.1l11.9,11.9h0.3c1.3,0,2.5-1,2.5-2.5C29.2,31,19.1,20.7,16.8,18.2z"/>
                                        </g>
</svg>
                                </div>
                                <span class="menu_social-item_link"><?= Yii::t('app', 'с. Софиевская Борщаговка') ?>,<br><?= Yii::t('app', 'ул. Горького, 5б') ?></span> </a>
                        </div>
                        <div class="menu_social">
                            <a href="tel:+380503377317" class="menu_social-item">
                                <div class="menu_social-item_ico">
                                    <svg version="1.1"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"x="0px" y="0px" width="31px" height="31px" viewBox="0 0 31 31" style="overflow:scroll;enable-background:new 0 0 31 31;"xml:space="preserve"><style type="text/css"> .st0 {
                                                fill: #44BB6E;
                                            }

                                            .st1 {
                                                fill: #FFFFFF;
                                            }</style><defs></defs><g><path class="st0" d="M29,31H2c-1.1,0-2-0.9-2-2V2c0-1.1,0.9-2,2-2h27c1.1,0,2,0.9,2,2v27C31,30.1,30.1,31,29,31z"/><g><path class="st1" d="M20.6,23.6c-3.2,0-6.5-1.5-9-4c-2.7-2.7-4.2-6.1-4.1-9.3l0,0l0,0c0.2-0.3,0.4-0.5,0.7-0.8 c0.8-0.8,1.8-1.5,3-1.9c0.1,0,0.1,0,0.2,0c0.4,0,0.8,0.2,0.9,0.4c0.4,1.1,0.9,2.6,1.3,4c0,0.2,0,0.8-0.2,0.9l-1.3,0.8 c-0.1,0.1-0.3,0.2-0.3,0.5c-0.1,0.3,0,0.7,0.3,1c0.5,0.7,1.2,1.5,1.9,2.2c0.7,0.7,1.4,1.3,2.2,1.8c0.2,0.2,0.6,0.3,0.8,0.3 c0.3,0,0.5-0.1,0.6-0.3l0.8-1.3c0.1-0.2,0.5-0.3,0.8-0.3c0.1,0,0.1,0,0.1,0c1.7,0.4,2.7,0.7,4,1.3c0.2,0.1,0.5,0.8,0.3,1.1 c-0.4,1.1-1.1,2.1-1.9,3c-0.2,0.2-0.5,0.5-0.8,0.7l0,0L20.6,23.6z"/></g></g></svg>
                                </div>
                                <span class="menu_social-item_link">(050) 337 73 17</span> </a> <a href="tel:+380672453884" class="menu_social-item"> <span class="menu_social-item_link">(067) 245 38 84</span> </a> <a href="tel:+380443740785" class="menu_social-item"> <span class="menu_social-item_link">(044) 374 07 85</span> </a>
                        </div>
                    </div>
                </div>
                <div class="menuModal_bottom">
                    <div class="menu_lang">
                        <a href="javascript:void(0);" class="menu_lang-link">укр</a> <a href="javascript:void(0);" class="menu_lang-link selected">рус</a>
                    </div>
                    <div class="menu_bottom-section">
                        <div class="copy"><?= Yii::t('app', '© 2018 «Cофия Киевская»') ?> / <a href="https://icreations.agency/">iC Agency</a></div>
                        <div class="bottom_social">
                            <a href="javascript:void(0);" class="bottom_social-link">
                                <div class="bottom_social-ico">
                                    <svg class="icon-svg-fb">
                                        <use xlink:href="/img/sprite.svg#fb" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                </div>
                                <div class="bottom_social-txt">facebook</div>
                            </a> <a href="javascript:void(0);" class="bottom_social-link">
                                <div class="bottom_social-ico">
                                    <svg class="icon-svg-inst">
                                        <use xlink:href="/img/sprite.svg#inst" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                </div>
                                <div class="bottom_social-txt">instagram</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
<?php //include __DIR__ . '/../parts/binotel.php' ?>
</body>
</html>
<?php $this->endPage() ?>
