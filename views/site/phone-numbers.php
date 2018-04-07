<?php
    $this->title = 'Тарифы';
    \Yii::$app->view->params['pageClass'] = 'page_rates';
?>
<section class="rates-1">
    <div class="page_nav">
        <div class="page_nav-wrap">
            <div class="page_nav-head">ЖЕК</div>
            <div class="page_nav-box page_nav__desktop">
                <a href="javascript:void(0);" class="page_nav-item current">
                    <svg class="icon-svg-arr">
                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    <span><?= Yii::t('menu', 'Полезные телефоны') ?></span>
                </a>
                <a href="<?= (Yii::$app->language == 'ru') ? '/rates/' : '/ua/rates/' ?>" class="page_nav-item">
                    <svg class="icon-svg-arr">
                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    <span><?= Yii::t('menu', 'Тарифы') ?></span>
                </a>
            </div>
            <div class="page_nav-box page_nav__tablets">
                <div class="select-head">
                    <span><?= Yii::t('menu', 'Полезные телефоны') ?></span>
                    <svg class="icon-svg-arr-down-1">
                        <use xlink:href="/img/sprite.svg#arr-down-1" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                </div>
                <div class="select-dropdown">
                    <a href="<?= (Yii::$app->language == 'ru') ? '/phone-numbers/' : '/ua/phone-numbers/' ?>" class="select-dropdown-item"><?= Yii::t('menu', 'Полезные телефоны') ?></a>
                    <a href="<?= (Yii::$app->language == 'ru') ? '/rates/' : '/ua/rates/' ?>" class="select-dropdown-item current"><?= Yii::t('menu', 'Тарифы') ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="rates_section">
            <div class="rates_section-head">Уважаемые жители ЖК «София Киевская»!</div>
            <div class="rates_section-text">ЖЭО «София Киевская» предоставляет широкий комплекс разных услуг по обслуживанию нашего жилого комплекса. Для вас работает круглосуточный сервис и охрана. Вы можете воспользоваться оперативными и качественными услугами сантехника, электрика и других специалистов.</div>
            <div class="rates_section-info">
                <?php foreach ($phones as $phone): ?>
                    <div class="info_group">
                        <a href="tel:+<?= $phone['link'] ?>" class="info_btn">
                            <svg class="icon-phone">
                                <use xlink:href="/img/sprite.svg#phone" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                            </svg>
                            <span><?= $phone['phone'] ?></span>
                        </a>
                        <div class="info_head">
                            <span><?= $phone['title'] ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
