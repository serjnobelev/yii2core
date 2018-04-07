<?php
    $this->title = 'Тарифы';
    \Yii::$app->view->params['pageClass'] = 'page_rates';
?>
<section class="rates-2">
    <div class="page_nav">
        <div class="page_nav-wrap">
            <div class="page_nav-head">ЖЕК</div>
            <div class="page_nav-box page_nav__desktop">
                <a href="<?= (Yii::$app->language == 'ru') ? '/phone-numbers/' : '/ua/phone-numbers/' ?>" class="page_nav-item">
                    <svg class="icon-svg-arr">
                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    <span><?= Yii::t('menu', 'Полезные телефоны') ?></span>
                </a>
                <a href="javascript:void(0);" class="page_nav-item current">
                    <svg class="icon-svg-arr">
                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    <span><?= Yii::t('menu', 'Тарифы') ?></span>
                </a>
            </div>
            <div class="page_nav-box page_nav__tablets">
                <div class="select-head">
                    <span><?= Yii::t('menu', 'Тарифы') ?></span>
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
        <div class="rates_section rates_content">
            <div class="widget_nav-wrap">
                <div class="widget_nav-head">Адрес</div>
                <div class="widget_nav-box page_nav__tablets">
                    <div class="widget_select-head">
                        <svg class="icon-svg-mapMarker">
                            <use xlink:href="/img/sprite.svg#mapMarker" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                        </svg>
                        <span><?= $rate['addr'] ?></span>
                        <svg class="icon-svg-arr-down-1">
                            <use xlink:href="/img/sprite.svg#arr-down-1" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                        </svg>
                    </div>
                    <div class="widget_select-dropdown">
                        <?php foreach ($addresses as $address): ?>
                            <a href="<?= (Yii::$app->language == 'ru') ? '/rates/' . $address['addrLink'] : '/ua/rates/' . $address['addrLink'] ?>" class="widget_select-dropdown-item"><?= $address['addr'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="rates_section-head"><?= Yii::t('app', 'Тарифы на коммунальные услуги в ЖК София Киевская') ?></div>
            <div class="rates_section-table">
                <div class="table_head"><?= Yii::t('app', 'Услуги по содержанию домов, сооружений и придомовых территорий') ?></div>
                <div class="table_content">
                    <div class="table_content-row">
                        <div class="table_content-col"><span><?= Yii::t('app', 'Тариф для первого этажа (за кв.м. общей площади)') ?></span></div>
                        <div class="table_content-col"><span><?= $rate['floor_rates'] ?> грн</span></div>
                    </div>
                    <div class="table_content-row">
                        <div class="table_content-col"><span><?= Yii::t('app', 'Тариф для других этажей (за кв.м. общей площади)') ?></span></div>
                        <div class="table_content-col"><span><?= $rate['another_rates'] ?> грн</span></div>
                    </div>
                </div>
            </div>

            <div class="rates_section-table">
                <div class="table_head"><?= Yii::t('app', 'Услуги по централизованному теплоснабжению и водоподогреву') ?></div>
                <div class="table_content">
                    <div class="table_content-row">
                        <div class="table_content-col"><span><?= Yii::t('app', 'Для жителей домов в которых установлены квартирные приборы учета тепловой энергии (за 1 Гкал)') ?></span></div>
                        <div class="table_content-col"><span><?= $rate['with_meters'] ?> грн</span></div>
                    </div>
                    <div class="table_content-row">
                        <div class="table_content-col"><span><?= Yii::t('app', 'Для жителей домов без квартирных приборов тепловой энергии') ?></span></div>
                        <div class="table_content-col"><span><?= $rate['without_meters'] ?> грн</span></div>
                    </div>
                </div>
            </div>

            <div class="rates_section-table">
                <div class="table_head"><?= Yii::t('app', 'Услуги по централизованному водоснабжению и водоотвода') ?></div>
                <div class="table_content">
                    <div class="table_content-row">
                        <div class="table_content-col"><span><?= Yii::t('app', 'Водоснабжение (за 1 куб.м.)') ?></span></div>
                        <div class="table_content-col"><span><?= $rate['watter'] ?> грн</span></div>
                    </div>
                    <div class="table_content-row">
                        <div class="table_content-col"><span><?= Yii::t('app', 'Водоотвод (за 1 куб.м.)') ?></span></div>
                        <div class="table_content-col"><span><?= $rate['drainage'] ?> грн</span></div>
                    </div>
                </div>
            </div>

            <div class="rates_section-table">
                <div class="table_head"><?= Yii::t('app', 'Услуги по охране комплекса') ?></div>
                <div class="table_content">
                    <div class="table_content-row">
                        <div class="table_content-col"><span><?= Yii::t('app', 'Квартиры') ?></span></div>
                        <div class="table_content-col"><span><?= $rate['apartment'] ?> грн</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rates_section rates_widget">
            <div class="rates_widget-head">список адресов</div>
            <?php foreach ($addresses as $address): ?>
                <a href="<?= (Yii::$app->language == 'ru') ? '/rates/' . $address['addrLink'] : '/ua/rates/' . $address['addrLink'] ?>" class="rates_widget-item">
                    <svg class="icon-svg-mapMarker">
                        <use xlink:href="/img/sprite.svg#mapMarker" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    <span class="rates_widget-item_text"><?= $address['addr'] ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>