<?php
    $this->title = 'Тарифы';
    \Yii::$app->view->params['pageClass'] = 'page_news';
?>
<section class="news-1">
    <div class="page_nav">
        <div class="page_nav-wrap">
            <div class="page_nav-head"><?= Yii::t('menu', 'Пресс-центр') ?></div>
            <div class="page_nav-box page_nav__desktop">
                <a href="javascript:void(0);" class="page_nav-item ">
                    <svg class="icon-svg-arr">
                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    <span><?= Yii::t('menu', 'Акции') ?></span>
                </a>
                <a href="javascript:void(0);" class="page_nav-item current">
                    <svg class="icon-svg-arr">
                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    <span><?= Yii::t('menu', 'Новости') ?></span>
                </a>
            </div>
            <div class="page_nav-box page_nav__tablets">
                <div class="select-head">
                    <span><?= Yii::t('menu', 'Новости') ?></span>
                    <svg class="icon-svg-arr-down-1">
                        <use xlink:href="/img/sprite.svg#arr-down-1" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                </div>
                <div class="select-dropdown">
                    <a href="javascript:void(0);" class="select-dropdown-item"><?= Yii::t('menu', 'Акции') ?></a>
                    <a href="<?= (Yii::$app->language == 'ru') ? '/news/' : '/ua/news/' ?>" class="select-dropdown-item current"><?= Yii::t('menu', 'Новости') ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="news_section"></div>
    </div>
    <div class="container">
        <div class="news_section"></div>
        <div class="news_section news_section-content">
            <div class="news_list-items">
                <?php foreach ($news as $item): ?>
                <div class="news_item">
                    <a href="<?= (Yii::$app->language == 'ru') ? '/news/' . $item['link'] : '/ua/news/' . $item['link'] ?>" class="news_item-img"> <img src="/img/news/<?= $item['image'] ?>" alt="news img">
                        <div class="img_subscr">Читать полностью…</div>
                    </a>
                    <div class="news_item-info">
                        <div class="news_item-info_date"><?= $item['date'] . ', ' . $item['time'] ?></div>
                        <a href="<?= (Yii::$app->language == 'ru') ? '/news/' . $item['link'] : '/ua/news/' . $item['link'] ?>" class="news_item-info_head"><?= $item['title'] ?></a>
                        <div class="news_item-info_txt"><?= $item['text'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="pagination">
                <div class="p_arr"></div>
                <div class="p_list">
                    <div class="p_list-item selected">1</div>
                    <div class="p_list-item">2</div>
                    <div class="p_list-item">3</div>
                    <div class="p_list-item">4</div>
                    <div class="p_list-item">5</div>
                </div>
                <div class="p_arr"></div>
            </div>
        </div>
    </div>
</section>