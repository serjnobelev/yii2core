<?php
    $this->title = 'Главная';
    \Yii::$app->view->params['pageClass'] = 'page_main';
?>

<section class="main">
    <div class="bigNumbers">
        <div class="text-wrap"><?= Yii::t('app', '10 наших') ?><span><?= Yii::t('app', 'преимуществ') ?></span></div>
        <div class="big_n">
            <svg class="icon-svg-slide_n-1">
                <use xlink:href="/img/sprite.svg#digit__1" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
        </div>
        <div class="big_n">
            <svg class="icon-svg-slide_n-1">
                <use xlink:href="/img/sprite.svg#digit__2" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
        </div>
        <div class="big_n">
            <svg class="icon-svg-slide_n-1">
                <use xlink:href="/img/sprite.svg#digit__3" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
        </div>
        <div class="big_n">
            <svg class="icon-svg-slide_n-1">
                <use xlink:href="/img/sprite.svg#digit__4" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
        </div>
        <div class="big_n">
            <svg class="icon-svg-slide_n-1">
                <use xlink:href="/img/sprite.svg#digit__5" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
        </div>
        <div class="big_n">
            <svg class="icon-svg-slide_n-1">
                <use xlink:href="/img/sprite.svg#digit__6" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
        </div>
        <div class="big_n">
            <svg class="icon-svg-slide_n-1">
                <use xlink:href="/img/sprite.svg#digit__7" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
        </div>
        <div class="big_n">
            <svg class="icon-svg-slide_n-1">
                <use xlink:href="/img/sprite.svg#digit__8" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
        </div>
        <div class="big_n">
            <svg class="icon-svg-slide_n-1">
                <use xlink:href="/img/sprite.svg#digit__9" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
        </div>
        <div class="big_n">
            <svg class="icon-svg-slide_n-1">
                <use xlink:href="/img/sprite.svg#digit__10" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
        </div>
    </div>
    <div id="fullpage">
        <div class="section">
            <img class="slide_img" src="/img/main/slides/slider_01.jpg" alt="slide img">
            <div class="slide_content">
                <div class="init_slide">
                    <svg class="icon-svg-logo">
                        <use xlink:href="/img/sprite.svg#logo" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    <div class="init_slideBtns">
                        <a href="javascript:void(0);" class="init_btn">
                            <div class="init_slide-btnImg">
                                <svg class="icon-svg-slide-ico-1">
                                    <use xlink:href="/img/sprite.svg#init-slide-ico-1" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>
                            </div>
                            <span>выбрать<br>квартиру</span>
                        </a>
                        <a href="javascript:void(0);" class="init_btn">
                            <div class="init_slide-btnImg">
                                <svg class="icon-svg-slide-ico-2">
                                    <use xlink:href="/img/sprite.svg#init-slide-ico-2" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>
                            </div>
                            <span>условия<br>покупки</span>
                        </a>
                        <a href="javascript:void(0);" class="init_btn">
                            <div class="init_slide-btnImg">
                                <svg class="icon-svg-slide-ico-3">
                                    <use xlink:href="/img/sprite.svg#init-slide-ico-3" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>
                            </div>
                            <span>веб<br>камера</span>
                        </a>
                        <a href="javascript:void(0);" class="init_btn">
                            <div class="init_slide-btnImg">
                                <svg class="icon-svg-slide-ico-4">
                                    <use xlink:href="/img/sprite.svg#init-slide-ico-4" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>
                            </div>
                            <span>фото<br>галлерея</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php foreach ($pluses as $plus): ?>
            <div class="section">
                <img class="slide_img" src="/img/main/slides/<?= $plus['image'] ?>" alt="slide img">
                <div class="slide_content">
                    <div class="simlpe_slide">
                        <div class="adv_wrap">
                            <div class="adv_exp">
                                <h2 class="adv_exp-head"><?= $plus['title'] ?></h2>
                                <div class="adv_exp-text"><?= $plus['text'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    <div class="animArrGroup">
        <svg class="icon-svg-slide_arr">
            <use xlink:href="/img/sprite.svg#slide_arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
        </svg>
        <svg class="icon-svg-slide_arr">
            <use xlink:href="/img/sprite.svg#slide_arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
        </svg>
        <svg class="icon-svg-slide_arr">
            <use xlink:href="/img/sprite.svg#slide_arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
        </svg>
    </div>
</section>