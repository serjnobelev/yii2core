<?php
    $this->title = 'Документы';
    \Yii::$app->view->params['pageClass'] = 'page_documents';
?>
<section class="documents">
    <div class="page_nav">
        <div class="page_nav-wrap">
            <div class="page_nav-head">Комплекс</div>
            <div class="page_nav-box page_nav__desktop">
                <a href="javascript:void(0);" class="page_nav-item">
                    <svg class="icon-svg-arr">
                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    <span>Схема застройки</span></a> <a href="javascript:void(0);" class="page_nav-item">
                    <svg class="icon-svg-arr">
                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    <span>Технические характеристики</span></a>

                <a href="javascript:void(0);" class="page_nav-item current">
                    <svg class="icon-svg-arr">
                        <use xlink:href="/img/sprite.svg#menu_it-arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    <span>Документация</span></a>
            </div>
            <div class="page_nav-box page_nav__tablets">
                <div class="select-head">
                    <span>Документация</span>
                    <svg class="icon-svg-arr-down-1">
                        <use xlink:href="/img/sprite.svg#arr-down-1" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                </div>
                <div class="select-dropdown">
                    <a href="javascript:void(0);" class="select-dropdown-item">Ход строительства</a> <a href="javascript:void(0);" class="select-dropdown-item current">Фото комплекса</a> <a href="javascript:void(0);" class="select-dropdown-item">Веб-камера</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="documents_section"></div>
        <div class="documents_section">
            <div class="swiper_wrap">
                <div class="swiper-container documents_swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($docs as $doc): ?>
                        <div class="swiper-slide">
                            <img src="<?= Yii::$app->params['docsImgPath'] . $doc['image'] ?>" alt="swiper slide">
                            <div class="slide_text"></div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
                <div class="swiper-button-prev">
                    <svg class="icon-svg-swiper_arr">
                        <use xlink:href="/img/sprite.svg#swiper_arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg class="icon-svg-swiper_arr">
                        <use xlink:href="/img/sprite.svg#swiper_arr" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                </div>

            </div>
            <a href="javascript:void(0);" class="download_doc">
                <svg version="1.1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     x="0px" y="0px" width="22.7px" height="25px" viewBox="0 0 22.7 25" style="enable-background:new 0 0 22.7 25;"
                     xml:space="preserve">
<defs>
</defs>
                    <g>
                        <polygon style="fill: #e1e6e9" points="18.1,0 4.7,0 4.7,25 22.7,25 22.7,4.5 	"/>
                        <polygon style="fill:#B6BABF" points="18.1,4.5 22.7,4.5 18.1,0 	"/>
                        <path style="fill:#FFBD01" d="M9.1,9.1H0.3C0.1,9.1,0,9,0,8.8V3.7c0-0.2,0.1-0.3,0.3-0.3h8.8c0.2,0,0.3,0.1,0.3,0.3v5.1
		C9.4,8.9,9.2,9.1,9.1,9.1z"/>
                        <path  style="fill:#FFBD01" d="M16.6,13.9l-0.5-1.1c-0.1-0.2-0.3-0.4-0.6-0.4h-3.6c-0.3,0-0.5,0.1-0.6,0.4l-0.5,1.1c-0.1,0.2-0.3,0.4-0.6,0.4
		H8.4c-0.4,0-0.7,0.3-0.7,0.7v6c0,0.4,0.3,0.7,0.7,0.7h10.7c0.4,0,0.7-0.3,0.7-0.7v-6c0-0.4-0.3-0.7-0.7-0.7h-1.8
		C16.9,14.3,16.7,14.1,16.6,13.9z"/>
                        <circle style="fill: #e1e6e9" cx="13.7" cy="17.9" r="2.8"/>
                        <circle style="fill:#FFBD01" cx="13.7" cy="17.9" r="1.8"/>
                        <g>
                            <path  style="fill:#EBF0F3" d="M2.5,6.7c0,0.1,0,0.2,0,0.3c0,0.1-0.1,0.2-0.1,0.3S2.2,7.5,2.1,7.6S1.8,7.7,1.6,7.7S1.2,7.6,1,7.5
			C0.9,7.4,0.8,7.2,0.7,7l0.5-0.1c0,0.1,0.1,0.2,0.1,0.2s0.1,0.1,0.2,0.1s0.1,0,0.2,0l0.1-0.1c0-0.1,0-0.1,0.1-0.2
			c0-0.1,0-0.1,0-0.2v-2h0.5L2.5,6.7L2.5,6.7z"/>
                            <path  style="fill:#EBF0F3" d="M3.2,4.7h1c0.2,0,0.3,0,0.5,0c0.1,0,0.3,0.1,0.4,0.2s0.2,0.2,0.2,0.3s0.1,0.2,0.1,0.4c0,0.2,0,0.3-0.1,0.4
			S5.2,6.2,5.1,6.3C5,6.4,4.9,6.4,4.7,6.4c-0.1,0-0.3,0-0.4,0H3.9v1.2H3.4V4.7H3.2z M4.1,6c0.1,0,0.2,0,0.2,0c0.1,0,0.1,0,0.2-0.1
			c0.1,0,0.1-0.1,0.1-0.1c0-0.1,0.1-0.1,0.1-0.2s0-0.2-0.1-0.2c0-0.1-0.1-0.1-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1s-0.2,0-0.2,0H3.7v0.9
			L4.1,6L4.1,6z"/>
                            <path style="fill:#EBF0F3" d="M8.3,7.5C8.1,7.6,8,7.6,7.8,7.7c-0.2,0-0.4,0.1-0.6,0.1s-0.5,0-0.7-0.1S6.1,7.5,6,7.4S5.7,7.1,5.7,6.9
			C5.6,6.7,5.6,6.5,5.6,6.3s0-0.5,0.1-0.6C5.8,5.5,5.9,5.3,6,5.2C6.1,5.1,6.3,5,6.5,4.9c0.2-0.1,0.4-0.1,0.6-0.1s0.5,0,0.7,0.1
			s0.4,0.2,0.5,0.3L7.9,5.6C7.8,5.5,7.7,5.4,7.6,5.4S7.3,5.3,7.2,5.3c-0.2,0-0.3,0-0.4,0.1S6.6,5.5,6.5,5.6C6.4,5.7,6.3,5.8,6.3,5.9
			c0,0.1-0.1,0.3-0.1,0.4c0,0.2,0,0.3,0.1,0.4S6.4,6.9,6.5,7c0.1,0.1,0.2,0.2,0.3,0.2c0.1,0.1,0.3,0.1,0.4,0.1c0.2,0,0.4,0,0.6-0.1
			V6.4H7.2V6h1.1L8.3,7.5L8.3,7.5z"/>
                        </g>
                    </g>
</svg>


                <span>Скачать JPG</span>
            </a>
        </div>
        <div class="documents_section">
            <div class="documents_list">
                <div class="documents_list-head">Документация</div>
                <div class="documents_list-box ps_flag">
                    <?php foreach ($docs as $doc): ?>
                        <div class="documents_list-item<?php if($doc['id'] == 1) echo ' current'; ?>" data-href="<?= '/site/download-doc/?image=' . $doc['image'] ?>">
                            <svg class="icon-svg-sheet">
                                <use xlink:href="/img/sprite.svg#sheet" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                            </svg>
                            <span><?= $doc['title'] ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
