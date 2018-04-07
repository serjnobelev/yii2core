<?php
    $this->title = 'Тарифы';
    \Yii::$app->view->params['pageClass'] = 'page_conditions';
?>
<section class="conditions-2">
    <div class="page_nav">
        <div class="page_nav-wrap">
            <div class="page_nav-head"><?= Yii::t('menu', 'Условия') ?></div>
            <div class="page_nav-box page_nav__desktop">
                <a href="<?= (Yii::$app->language == 'ru') ? '/finished-build/' : '/ua/finished-build/' ?>" class="page_nav-item">
                    <svg class="icon-svg-arr">
                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    <span><?= Yii::t('menu', 'Готовая квартира') ?></span>
                </a>
                <a href="javascript:void(0);" class="page_nav-item current">
                    <svg class="icon-svg-arr">
                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    <span><?= Yii::t('menu', 'В строящемся доме') ?></span>
                </a>
            </div>
            <div class="page_nav-box page_nav__tablets">
                <div class="select-head">
                    <span><?= Yii::t('menu', 'Готовая квартира') ?></span>
                    <svg class="icon-svg-arr-down-1">
                        <use xlink:href="/img/sprite.svg#arr-down-1" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                </div>
                <div class="select-dropdown">
                    <a href="<?= (Yii::$app->language == 'ru') ? '/finished-build/' : '/ua/finished-build/' ?>" class="select-dropdown-item"><?= Yii::t('menu', 'Готовая квартира') ?></a>
                    <a href="<?= (Yii::$app->language == 'ru') ? '/in-build/' : '/ua/in-build/' ?>" class="select-dropdown-item current"><?= Yii::t('menu', 'В строящемся доме') ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="conditions_section"></div>
        <div class="conditions_section">
            <span class="conditions_header"><?= $text['head'] ?></span>
            <p><?= $text['subhead'] ?></p>
        </div>
    </div>
    <div class="container">
        <div class="conditions_section"></div>
        <div class="conditions_section conditions_section-content">
            <?php foreach ($data as $item): ?>
            <div class="conditions_col">
                <div class="col_content">
                    <div class="head"><?= $item['title'] ?></div>
                    <div class="txt"><?= $item['text'] ?></div>
                </div>
            </div>
            <?php endforeach; ?>
            <div class="conditions_col"></div>
        </div>
    </div>
</section>