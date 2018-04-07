<?php
    $this->title = 'Тарифы';
    \Yii::$app->view->params['pageClass'] = 'page_news';
?>
<section class="news-2">
    <div class="page_nav">
        <div class="page_nav-wrap">
            <div class="page_nav-head">Пресс-центр</div>
            <div class="page_nav-box page_nav__desktop">
                <a href="javascript:void(0);" class="page_nav-item ">
                    <svg class="icon-svg-arr">
                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    <span>Акции</span> </a> <a href="javascript:void(0);" class="page_nav-item current">
                    <svg class="icon-svg-arr">
                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    <span>Новости</span> </a>
            </div>
            <div class="page_nav-box page_nav__tablets">
                <div class="select-head">
                    <span>Новости</span>
                    <svg class="icon-svg-arr-down-1">
                        <use xlink:href="/img/sprite.svg#arr-down-1" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                </div>
                <div class="select-dropdown">
                    <a href="javascript:void(0);" class="select-dropdown-item">Акции</a> <a href="javascript:void(0);" class="select-dropdown-item current">Новости</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="news_section"></div>
        <div class="news_section news_section-content">
            <div class="news_head"><?= $news['title'] ?></div>
            <div class="news_cover">
                <div class="news_img"><img src="/img/news/<?= $news['image'] ?>" alt="news img"></div>
                <div class="news_info">
                    <div class="news_date">
                        <svg class="icon-svg-date">
                            <use xlink:href="/img/sprite.svg#date" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                        </svg>
                        <span><?= $news['datetime'] ?></span>
                    </div>
                    <div class="news_social">
                        <span class="label">Поделиться:</span>
                        <div class="news_social-list">
                            <a href="">
                                <svg class="icon-svg-fb">
                                    <use xlink:href="/img/sprite.svg#fb" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>
                            </a> <a href="">
                                <svg class="icon-svg-tw">
                                    <use xlink:href="/img/sprite.svg#tw" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>
                            </a> <a href="">
                                <svg class="icon-svg-gplus">
                                    <use xlink:href="/img/sprite.svg#gplus" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>
                            </a>

                        </div>
                    </div>

                </div>
            </div>
            <div class="news_content">
                <div class="news_txt"><?= $news['text'] ?></div>
            </div>
            <a href="<?= (Yii::$app->language == 'ru') ? '/news/' : '/ua/news/' ?>" class="backToNews">
                <svg class="icon-svg-arr-left">
                    <use xlink:href="/img/sprite.svg#arr-left" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                </svg>
                <span>все новости</span>
            </a>
        </div>
        <div class="news_section news_section-widgets">
            <div class="news_widgets-wrap">
                <div class="news_section-widget ">
                    <div class="news_section-widget_head">ПОСЛЕДНИЕ НОВОСТИ</div>
                    <div class="news_section-widget_list ps_flag1 news_section-widget_list-1">
                        <?php foreach ($lastnews as $last): ?>
                        <div class="widget_list-item">
                            <div class="widget_list-item_date"><?= $last['datetime'] ?></div>
                            <a href="<?= $last['title_link'] ?>" class="widget_list-item_txt"><?= $last['title'] ?></a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="news_section-widget">
                    <div class="news_section-widget_head">ДЕЙСТВУЮЩИЕ АКЦИИ</div>
                    <div class="news_section-widget_list ps_flag1 news_section-widget_list-2">
                        <div class="widget_list-item">
                            <div class="widget_list-item_date">25.02.2018</div>
                            <a href="javascript:void(0);" class="widget_list-item_txt">На старт! Внимание! Продаем!</a>
                        </div>
                        <div class="widget_list-item">
                            <div class="widget_list-item_date">25.02.2018</div>
                            <a href="javascript:void(0);" class="widget_list-item_txt">На старт! Внимание! Продаем!</a>
                        </div>
                        <div class="widget_list-item">
                            <div class="widget_list-item_date">25.02.2018</div>
                            <a href="javascript:void(0);" class="widget_list-item_txt">На старт! Внимание! Продаем!</a>
                        </div>
                        <div class="widget_list-item">
                            <div class="widget_list-item_date">25.02.2018</div>
                            <a href="javascript:void(0);" class="widget_list-item_txt">На старт! Внимание! Продаем!</a>
                        </div>
                        <div class="widget_list-item">
                            <div class="widget_list-item_date">25.02.2018</div>
                            <a href="javascript:void(0);" class="widget_list-item_txt">На старт! Внимание! Продаем!</a>
                        </div>
                        <div class="widget_list-item">
                            <div class="widget_list-item_date">25.02.2018</div>
                            <a href="javascript:void(0);" class="widget_list-item_txt">На старт! Внимание! Продаем!</a>
                        </div>
                        <div class="widget_list-item">
                            <div class="widget_list-item_date">25.02.2018</div>
                            <a href="javascript:void(0);" class="widget_list-item_txt">На старт! Внимание! Продаем!</a>
                        </div>
                        <div class="widget_list-item">
                            <div class="widget_list-item_date">25.02.2018</div>
                            <a href="javascript:void(0);" class="widget_list-item_txt">На старт! Внимание! Продаем!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>