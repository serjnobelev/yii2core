<?php
    $this->title = 'Тарифы';
    \Yii::$app->view->params['pageClass'] = 'page_contacts';
?>
<section class="contacts">
    <div class="container">
        <div class="contacts_section contacts_left">
            <div class="contacts_head"><?= Yii::t('menu', 'Контакты') ?></div>
            <div class="contacts_group">
                <div class="contacts_subHead"><?= Yii::t('app', 'Отдел продаж') ?>:</div>
                <a href="javascript:void(0);" class="contacts_item">
                    <div class="contacts_item-ico">
                        <svg class="icon-svg-mapMarker">
                            <use xlink:href="/img/sprite.svg#mapMarker" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                        </svg>
                    </div>
                    <span class="contacts_item-txt"><?= $contacts['sales_addr'] ?></span>
                </a>
                <div class="contacts_group-phones">
                    <a href="tel:+<?= $contacts['phone_city_link'] ?>" class="contacts_item contacts_phone">
                        <div class="contacts_item-ico">
                            <svg class="icon-svg-phone">
                                <use xlink:href="/img/sprite.svg#phone" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                            </svg>
                        </div>
                        <span class="contacts_item-txt"><?= $contacts['phone_city'] ?></span>
                    </a>
                    <a href="tel:+<?= $contacts['phone_kyivstar_link'] ?>" class="contacts_item contacts_phone">
                        <div class="contacts_item-ico">
                            <svg class="icon-svg-kievstar">
                                <use xlink:href="/img/sprite.svg#kievstar" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                            </svg>
                        </div>
                        <span class="contacts_item-txt"><?= $contacts['phone_kyivstar'] ?></span>
                    </a>
                    <a href="tel:+<?= $contacts['phone_vodafone_link'] ?>" class="contacts_item contacts_phone">
                        <div class="contacts_item-ico">
                            <svg class="icon-svg-vodafone">
                                <use xlink:href="/img/sprite.svg#vodafone" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                            </svg>
                        </div>
                        <span class="contacts_item-txt"><?= $contacts['phone_vodafone'] ?></span>
                    </a>
                </div>
                <a href="javascript:void(0);" class="contacts_item contacts_date">
                    <div class="contacts_item-ico">
                        <svg class="icon-svg-date">
                            <use xlink:href="/img/sprite.svg#date" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                        </svg>
                    </div>
                    <span class="contacts_item-group">
						<span class="contacts_item-txt"><?= $contacts['schedule1'] ?></span>
						<span class="contacts_item-txt"><?= $contacts['schedule2'] ?></span>
					</span>
                </a>
            </div>
            <div class="contacts_group">
                <div class="contacts_subHead"><?= Yii::t('app', 'Отдел снабжения') ?>:</div>
                <div class="contacts_group-phones">
                    <a href="tel:+<?= $contacts['phone_supply_link'] ?>" class="contacts_item contacts_phone">
                        <div class="contacts_item-ico">
                            <svg class="icon-svg-phone">
                                <use xlink:href="/img/sprite.svg#phone" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                            </svg>
                        </div>
                        <span class="contacts_item-txt"><?= $contacts['phone_supply'] ?></span>
                    </a>
                </div>
            </div>
            <div class="contacts_social">
                <?php
                if ($contacts['facebook']): ?>
                    <a href="<?= $contacts['facebook'] ?>" class="contacts_social-item" target="_blank">
                        <svg class="icon-svg-fb"><use xlink:href="/img/sprite.svg#fb" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg>
                        <span>facebook</span>
                    </a>
                <?php endif; ?>
                <?php
                if ($contacts['instagram']): ?>
                    <a href="<?= $contacts['instagram'] ?>" class="contacts_social-item">
                        <svg version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                             x="0px" y="0px" width="24.9px" height="24.9px" viewBox="0 0 24.9 24.9" style="enable-background:new 0 0 24.9 24.9;"
                             xml:space="preserve">
<style type="text/css">
    ._st0 {
        clip-path: url(#SVGID_2_);
        fill: #8125B2;
    }

    ._st1 {
        clip-path: url(#SVGID_2_);
        fill: #8225B1;
    }

    ._st2 {
        clip-path: url(#SVGID_2_);
        fill: #8325B0;
    }

    ._st3 {
        clip-path: url(#SVGID_2_);
        fill: #8425AF;
    }

    ._st4 {
        clip-path: url(#SVGID_2_);
        fill: #8525AE;
    }

    ._st5 {
        clip-path: url(#SVGID_2_);
        fill: #8625AD;
    }

    ._st6 {
        clip-path: url(#SVGID_2_);
        fill: #8625AC;
    }

    ._st7 {
        clip-path: url(#SVGID_2_);
        fill: #8725AB;
    }

    ._st8 {
        clip-path: url(#SVGID_2_);
        fill: #8825AA;
    }

    ._st9 {
        clip-path: url(#SVGID_2_);
        fill: #8925A9;
    }

    ._st10 {
        clip-path: url(#SVGID_2_);
        fill: #8A26A8;
    }

    ._st11 {
        clip-path: url(#SVGID_2_);
        fill: #8B26A7;
    }

    ._st12 {
        clip-path: url(#SVGID_2_);
        fill: #8C26A6;
    }

    ._st13 {
        clip-path: url(#SVGID_2_);
        fill: #8D26A5;
    }

    ._st14 {
        clip-path: url(#SVGID_2_);
        fill: #8E26A4;
    }

    ._st15 {
        clip-path: url(#SVGID_2_);
        fill: #8F26A3;
    }

    ._st16 {
        clip-path: url(#SVGID_2_);
        fill: #9026A2;
    }

    ._st17 {
        clip-path: url(#SVGID_2_);
        fill: #9126A1;
    }

    ._st18 {
        clip-path: url(#SVGID_2_);
        fill: #9226A0;
    }

    ._st19 {
        clip-path: url(#SVGID_2_);
        fill: #93269F;
    }

    ._st20 {
        clip-path: url(#SVGID_2_);
        fill: #94269E;
    }

    ._st21 {
        clip-path: url(#SVGID_2_);
        fill: #94269D;
    }

    ._st22 {
        clip-path: url(#SVGID_2_);
        fill: #95269C;
    }

    ._st23 {
        clip-path: url(#SVGID_2_);
        fill: #96269B;
    }

    ._st24 {
        clip-path: url(#SVGID_2_);
        fill: #97269A;
    }

    ._st25 {
        clip-path: url(#SVGID_2_);
        fill: #982699;
    }

    ._st26 {
        clip-path: url(#SVGID_2_);
        fill: #992698;
    }

    ._st27 {
        clip-path: url(#SVGID_2_);
        fill: #9A2697;
    }

    ._st28 {
        clip-path: url(#SVGID_2_);
        fill: #9B2795;
    }

    ._st29 {
        clip-path: url(#SVGID_2_);
        fill: #9C2794;
    }

    ._st30 {
        clip-path: url(#SVGID_2_);
        fill: #9D2793;
    }

    ._st31 {
        clip-path: url(#SVGID_2_);
        fill: #9E2792;
    }

    ._st32 {
        clip-path: url(#SVGID_2_);
        fill: #9F2791;
    }

    ._st33 {
        clip-path: url(#SVGID_2_);
        fill: #A02790;
    }

    ._st34 {
        clip-path: url(#SVGID_2_);
        fill: #A1278F;
    }

    ._st35 {
        clip-path: url(#SVGID_2_);
        fill: #A1278E;
    }

    ._st36 {
        clip-path: url(#SVGID_2_);
        fill: #A2278D;
    }

    ._st37 {
        clip-path: url(#SVGID_2_);
        fill: #A3278C;
    }

    ._st38 {
        clip-path: url(#SVGID_2_);
        fill: #A4278B;
    }

    ._st39 {
        clip-path: url(#SVGID_2_);
        fill: #A5278A;
    }

    ._st40 {
        clip-path: url(#SVGID_2_);
        fill: #A62789;
    }

    ._st41 {
        clip-path: url(#SVGID_2_);
        fill: #A72788;
    }

    ._st42 {
        clip-path: url(#SVGID_2_);
        fill: #A82787;
    }

    ._st43 {
        clip-path: url(#SVGID_2_);
        fill: #A92786;
    }

    ._st44 {
        clip-path: url(#SVGID_2_);
        fill: #AA2785;
    }

    ._st45 {
        clip-path: url(#SVGID_2_);
        fill: #AB2784;
    }

    ._st46 {
        clip-path: url(#SVGID_2_);
        fill: #AC2883;
    }

    ._st47 {
        clip-path: url(#SVGID_2_);
        fill: #AD2882;
    }

    ._st48 {
        clip-path: url(#SVGID_2_);
        fill: #AE2881;
    }

    ._st49 {
        clip-path: url(#SVGID_2_);
        fill: #AF2880;
    }

    ._st50 {
        clip-path: url(#SVGID_2_);
        fill: #AF287F;
    }

    ._st51 {
        clip-path: url(#SVGID_2_);
        fill: #B0287E;
    }

    ._st52 {
        clip-path: url(#SVGID_2_);
        fill: #B1287D;
    }

    ._st53 {
        clip-path: url(#SVGID_2_);
        fill: #B2287C;
    }

    ._st54 {
        clip-path: url(#SVGID_2_);
        fill: #B3287B;
    }

    ._st55 {
        clip-path: url(#SVGID_2_);
        fill: #B4287A;
    }

    ._st56 {
        clip-path: url(#SVGID_2_);
        fill: #B52879;
    }

    ._st57 {
        clip-path: url(#SVGID_2_);
        fill: #B62878;
    }

    ._st58 {
        clip-path: url(#SVGID_2_);
        fill: #B72877;
    }

    ._st59 {
        clip-path: url(#SVGID_2_);
        fill: #B82876;
    }

    ._st60 {
        clip-path: url(#SVGID_2_);
        fill: #B92875;
    }

    ._st61 {
        clip-path: url(#SVGID_2_);
        fill: #BA2874;
    }

    ._st62 {
        clip-path: url(#SVGID_2_);
        fill: #BB2873;
    }

    ._st63 {
        clip-path: url(#SVGID_2_);
        fill: #BC2872;
    }

    ._st64 {
        clip-path: url(#SVGID_2_);
        fill: #BD2971;
    }

    ._st65 {
        clip-path: url(#SVGID_2_);
        fill: #BD2970;
    }

    ._st66 {
        clip-path: url(#SVGID_2_);
        fill: #BE296F;
    }

    ._st67 {
        clip-path: url(#SVGID_2_);
        fill: #BF296E;
    }

    ._st68 {
        clip-path: url(#SVGID_2_);
        fill: #C0296D;
    }

    ._st69 {
        clip-path: url(#SVGID_2_);
        fill: #C1296C;
    }

    ._st70 {
        clip-path: url(#SVGID_2_);
        fill: #C2296B;
    }

    ._st71 {
        clip-path: url(#SVGID_2_);
        fill: #C3296A;
    }

    ._st72 {
        clip-path: url(#SVGID_2_);
        fill: #C42969;
    }

    ._st73 {
        clip-path: url(#SVGID_2_);
        fill: #C42A69;
    }

    ._st74 {
        clip-path: url(#SVGID_2_);
        fill: #C42B68;
    }

    ._st75 {
        clip-path: url(#SVGID_2_);
        fill: #C52C68;
    }

    ._st76 {
        clip-path: url(#SVGID_2_);
        fill: #C52D67;
    }

    ._st77 {
        clip-path: url(#SVGID_2_);
        fill: #C52E67;
    }

    ._st78 {
        clip-path: url(#SVGID_2_);
        fill: #C52F67;
    }

    ._st79 {
        clip-path: url(#SVGID_2_);
        fill: #C63066;
    }

    ._st80 {
        clip-path: url(#SVGID_2_);
        fill: #C63166;
    }

    ._st81 {
        clip-path: url(#SVGID_2_);
        fill: #C63265;
    }

    ._st82 {
        clip-path: url(#SVGID_2_);
        fill: #C63365;
    }

    ._st83 {
        clip-path: url(#SVGID_2_);
        fill: #C73465;
    }

    ._st84 {
        clip-path: url(#SVGID_2_);
        fill: #C73564;
    }

    ._st85 {
        clip-path: url(#SVGID_2_);
        fill: #C73664;
    }

    ._st86 {
        clip-path: url(#SVGID_2_);
        fill: #C73763;
    }

    ._st87 {
        clip-path: url(#SVGID_2_);
        fill: #C83863;
    }

    ._st88 {
        clip-path: url(#SVGID_2_);
        fill: #C83963;
    }

    ._st89 {
        clip-path: url(#SVGID_2_);
        fill: #C83A62;
    }

    ._st90 {
        clip-path: url(#SVGID_2_);
        fill: #C83B62;
    }

    ._st91 {
        clip-path: url(#SVGID_2_);
        fill: #C93C62;
    }

    ._st92 {
        clip-path: url(#SVGID_2_);
        fill: #C93D61;
    }

    ._st93 {
        clip-path: url(#SVGID_2_);
        fill: #C93E61;
    }

    ._st94 {
        clip-path: url(#SVGID_2_);
        fill: #C93F60;
    }

    ._st95 {
        clip-path: url(#SVGID_2_);
        fill: #CA4060;
    }

    ._st96 {
        clip-path: url(#SVGID_2_);
        fill: #CA4160;
    }

    ._st97 {
        clip-path: url(#SVGID_2_);
        fill: #CA425F;
    }

    ._st98 {
        clip-path: url(#SVGID_2_);
        fill: #CA435F;
    }

    ._st99 {
        clip-path: url(#SVGID_2_);
        fill: #CB445E;
    }

    ._st100 {
        clip-path: url(#SVGID_2_);
        fill: #CB455E;
    }

    ._st101 {
        clip-path: url(#SVGID_2_);
        fill: #CB465E;
    }

    ._st102 {
        clip-path: url(#SVGID_2_);
        fill: #CB475D;
    }

    ._st103 {
        clip-path: url(#SVGID_2_);
        fill: #CC485D;
    }

    ._st104 {
        clip-path: url(#SVGID_2_);
        fill: #CC495C;
    }

    ._st105 {
        clip-path: url(#SVGID_2_);
        fill: #CC4A5C;
    }

    ._st106 {
        clip-path: url(#SVGID_2_);
        fill: #CC4B5C;
    }

    ._st107 {
        clip-path: url(#SVGID_2_);
        fill: #CD4C5B;
    }

    ._st108 {
        clip-path: url(#SVGID_2_);
        fill: #CD4D5B;
    }

    ._st109 {
        clip-path: url(#SVGID_2_);
        fill: #CD4E5A;
    }

    ._st110 {
        clip-path: url(#SVGID_2_);
        fill: #CD4F5A;
    }

    ._st111 {
        clip-path: url(#SVGID_2_);
        fill: #CE505A;
    }

    ._st112 {
        clip-path: url(#SVGID_2_);
        fill: #CE5159;
    }

    ._st113 {
        clip-path: url(#SVGID_2_);
        fill: #CE5259;
    }

    ._st114 {
        clip-path: url(#SVGID_2_);
        fill: #CE5358;
    }

    ._st115 {
        clip-path: url(#SVGID_2_);
        fill: #CF5458;
    }

    ._st116 {
        clip-path: url(#SVGID_2_);
        fill: #CF5558;
    }

    ._st117 {
        clip-path: url(#SVGID_2_);
        fill: #CF5657;
    }

    ._st118 {
        clip-path: url(#SVGID_2_);
        fill: #CF5757;
    }

    ._st119 {
        clip-path: url(#SVGID_2_);
        fill: #D05856;
    }

    ._st120 {
        clip-path: url(#SVGID_2_);
        fill: #D05956;
    }

    ._st121 {
        clip-path: url(#SVGID_2_);
        fill: #D05A56;
    }

    ._st122 {
        clip-path: url(#SVGID_2_);
        fill: #D05B55;
    }

    ._st123 {
        clip-path: url(#SVGID_2_);
        fill: #D15C55;
    }

    ._st124 {
        clip-path: url(#SVGID_2_);
        fill: #D15D54;
    }

    ._st125 {
        clip-path: url(#SVGID_2_);
        fill: #D15E54;
    }

    ._st126 {
        clip-path: url(#SVGID_2_);
        fill: #D15F54;
    }

    ._st127 {
        clip-path: url(#SVGID_2_);
        fill: #D26153;
    }

    ._st128 {
        clip-path: url(#SVGID_2_);
        fill: #D26253;
    }

    ._st129 {
        clip-path: url(#SVGID_2_);
        fill: #D26353;
    }

    ._st130 {
        clip-path: url(#SVGID_2_);
        fill: #D26452;
    }

    ._st131 {
        clip-path: url(#SVGID_2_);
        fill: #D36552;
    }

    ._st132 {
        clip-path: url(#SVGID_2_);
        fill: #D36651;
    }

    ._st133 {
        clip-path: url(#SVGID_2_);
        fill: #D36751;
    }

    ._st134 {
        clip-path: url(#SVGID_2_);
        fill: #D36851;
    }

    ._st135 {
        clip-path: url(#SVGID_2_);
        fill: #D46950;
    }

    ._st136 {
        clip-path: url(#SVGID_2_);
        fill: #D46A50;
    }

    ._st137 {
        clip-path: url(#SVGID_2_);
        fill: #D46B4F;
    }

    ._st138 {
        clip-path: url(#SVGID_2_);
        fill: #D46C4F;
    }

    ._st139 {
        clip-path: url(#SVGID_2_);
        fill: #D56D4F;
    }

    ._st140 {
        clip-path: url(#SVGID_2_);
        fill: #D56E4E;
    }

    ._st141 {
        clip-path: url(#SVGID_2_);
        fill: #D56F4E;
    }

    ._st142 {
        clip-path: url(#SVGID_2_);
        fill: #D5704D;
    }

    ._st143 {
        clip-path: url(#SVGID_2_);
        fill: #D6714D;
    }

    ._st144 {
        clip-path: url(#SVGID_2_);
        fill: #D6724D;
    }

    ._st145 {
        clip-path: url(#SVGID_2_);
        fill: #D6734C;
    }

    ._st146 {
        clip-path: url(#SVGID_2_);
        fill: #D6744C;
    }

    ._st147 {
        clip-path: url(#SVGID_2_);
        fill: #D7754B;
    }

    ._st148 {
        clip-path: url(#SVGID_2_);
        fill: #D7764B;
    }

    ._st149 {
        clip-path: url(#SVGID_2_);
        fill: #D7774B;
    }

    ._st150 {
        clip-path: url(#SVGID_2_);
        fill: #D7784A;
    }

    ._st151 {
        clip-path: url(#SVGID_2_);
        fill: #D8794A;
    }

    ._st152 {
        clip-path: url(#SVGID_2_);
        fill: #D87A49;
    }

    ._st153 {
        clip-path: url(#SVGID_2_);
        fill: #D87B49;
    }

    ._st154 {
        clip-path: url(#SVGID_2_);
        fill: #D87C49;
    }

    ._st155 {
        clip-path: url(#SVGID_2_);
        fill: #D97D48;
    }

    ._st156 {
        clip-path: url(#SVGID_2_);
        fill: #D97E48;
    }

    ._st157 {
        clip-path: url(#SVGID_2_);
        fill: #D97F47;
    }

    ._st158 {
        clip-path: url(#SVGID_2_);
        fill: #D98047;
    }

    ._st159 {
        clip-path: url(#SVGID_2_);
        fill: #DA8147;
    }

    ._st160 {
        clip-path: url(#SVGID_2_);
        fill: #7124C3;
    }

    ._st161 {
        clip-path: url(#SVGID_2_);
        fill: #7224C2;
    }

    ._st162 {
        clip-path: url(#SVGID_2_);
        fill: #7324C1;
    }

    ._st163 {
        clip-path: url(#SVGID_2_);
        fill: #7424C0;
    }

    ._st164 {
        clip-path: url(#SVGID_2_);
        fill: #7524BF;
    }

    ._st165 {
        clip-path: url(#SVGID_2_);
        fill: #7624BE;
    }

    ._st166 {
        clip-path: url(#SVGID_2_);
        fill: #7724BD;
    }

    ._st167 {
        clip-path: url(#SVGID_2_);
        fill: #7824BC;
    }

    ._st168 {
        clip-path: url(#SVGID_2_);
        fill: #7824BB;
    }

    ._st169 {
        clip-path: url(#SVGID_2_);
        fill: #7925BA;
    }

    ._st170 {
        clip-path: url(#SVGID_2_);
        fill: #7A25B9;
    }

    ._st171 {
        clip-path: url(#SVGID_2_);
        fill: #7B25B8;
    }

    ._st172 {
        clip-path: url(#SVGID_2_);
        fill: #7C25B7;
    }

    ._st173 {
        clip-path: url(#SVGID_2_);
        fill: #7D25B6;
    }

    ._st174 {
        clip-path: url(#SVGID_2_);
        fill: #7E25B5;
    }

    ._st175 {
        clip-path: url(#SVGID_2_);
        fill: #7F25B4;
    }

    ._st176 {
        clip-path: url(#SVGID_2_);
        fill: #8025B3;
    }

    ._st177 {
        clip-path: url(#SVGID_2_);
        fill: #DA8246;
    }

    ._st178 {
        clip-path: url(#SVGID_2_);
        fill: #DA8346;
    }

    ._st179 {
        clip-path: url(#SVGID_2_);
        fill: #DA8445;
    }

    ._st180 {
        clip-path: url(#SVGID_2_);
        fill: #DB8545;
    }

    ._st181 {
        clip-path: url(#SVGID_2_);
        fill: #DB8645;
    }

    ._st182 {
        clip-path: url(#SVGID_2_);
        fill: #DB8744;
    }

    ._st183 {
        clip-path: url(#SVGID_2_);
        fill: #DB8844;
    }

    ._st184 {
        clip-path: url(#SVGID_2_);
        fill: #DC8944;
    }

    ._st185 {
        clip-path: url(#SVGID_2_);
        fill: #DC8A43;
    }

    ._st186 {
        clip-path: url(#SVGID_2_);
        fill: #DC8B43;
    }

    ._st187 {
        clip-path: url(#SVGID_2_);
        fill: #DC8C42;
    }

    ._st188 {
        clip-path: url(#SVGID_2_);
        fill: #DD8D42;
    }

    ._st189 {
        clip-path: url(#SVGID_2_);
        fill: #DD8E42;
    }

    ._st190 {
        clip-path: url(#SVGID_2_);
        fill: #DD8F41;
    }

    ._st191 {
        clip-path: url(#SVGID_2_);
        fill: #DD9041;
    }

    ._st192 {
        clip-path: url(#SVGID_2_);
        fill: #DE9140;
    }

    ._st193 {
        clip-path: url(#SVGID_2_);
        fill: #DE9240;
    }

    ._st194 {
        clip-path: url(#SVGID_2_);
        fill: #DE9340;
    }

    ._st195 {
        clip-path: url(#SVGID_2_);
        fill: #DE943F;
    }

    ._st196 {
        clip-path: url(#SVGID_2_);
        fill: #DF953F;
    }

    ._st197 {
        clip-path: url(#SVGID_2_);
        fill: #DF963E;
    }

    ._st198 {
        clip-path: url(#SVGID_2_);
        fill: #DF973E;
    }

    ._st199 {
        clip-path: url(#SVGID_4_);
        fill: #A82787;
    }

    ._st200 {
        clip-path: url(#SVGID_4_);
        fill: #A92786;
    }

    ._st201 {
        clip-path: url(#SVGID_4_);
        fill: #AA2785;
    }

    ._st202 {
        clip-path: url(#SVGID_4_);
        fill: #AB2784;
    }

    ._st203 {
        clip-path: url(#SVGID_4_);
        fill: #AC2883;
    }

    ._st204 {
        clip-path: url(#SVGID_4_);
        fill: #AD2882;
    }

    ._st205 {
        clip-path: url(#SVGID_4_);
        fill: #AE2881;
    }

    ._st206 {
        clip-path: url(#SVGID_4_);
        fill: #AF2880;
    }

    ._st207 {
        clip-path: url(#SVGID_4_);
        fill: #AF287F;
    }

    ._st208 {
        clip-path: url(#SVGID_4_);
        fill: #B0287E;
    }

    ._st209 {
        clip-path: url(#SVGID_4_);
        fill: #B1287D;
    }

    ._st210 {
        clip-path: url(#SVGID_4_);
        fill: #B2287C;
    }

    ._st211 {
        clip-path: url(#SVGID_4_);
        fill: #B3287B;
    }

    ._st212 {
        clip-path: url(#SVGID_4_);
        fill: #B4287A;
    }

    ._st213 {
        clip-path: url(#SVGID_4_);
        fill: #B52879;
    }

    ._st214 {
        clip-path: url(#SVGID_4_);
        fill: #B62878;
    }

    ._st215 {
        clip-path: url(#SVGID_4_);
        fill: #B72877;
    }

    ._st216 {
        clip-path: url(#SVGID_4_);
        fill: #B82876;
    }

    ._st217 {
        clip-path: url(#SVGID_4_);
        fill: #B92875;
    }

    ._st218 {
        clip-path: url(#SVGID_4_);
        fill: #BA2874;
    }

    ._st219 {
        clip-path: url(#SVGID_4_);
        fill: #BB2873;
    }

    ._st220 {
        clip-path: url(#SVGID_4_);
        fill: #BC2872;
    }

    ._st221 {
        clip-path: url(#SVGID_4_);
        fill: #BD2971;
    }

    ._st222 {
        clip-path: url(#SVGID_4_);
        fill: #BD2970;
    }

    ._st223 {
        clip-path: url(#SVGID_4_);
        fill: #BE296F;
    }

    ._st224 {
        clip-path: url(#SVGID_4_);
        fill: #BF296E;
    }

    ._st225 {
        clip-path: url(#SVGID_4_);
        fill: #C0296D;
    }

    ._st226 {
        clip-path: url(#SVGID_4_);
        fill: #C1296C;
    }

    ._st227 {
        clip-path: url(#SVGID_4_);
        fill: #C2296B;
    }

    ._st228 {
        clip-path: url(#SVGID_4_);
        fill: #C3296A;
    }

    ._st229 {
        clip-path: url(#SVGID_4_);
        fill: #C42969;
    }

    ._st230 {
        clip-path: url(#SVGID_4_);
        fill: #C42A69;
    }

    ._st231 {
        clip-path: url(#SVGID_4_);
        fill: #C42B68;
    }

    ._st232 {
        clip-path: url(#SVGID_4_);
        fill: #C52C68;
    }

    ._st233 {
        clip-path: url(#SVGID_4_);
        fill: #C52D67;
    }

    ._st234 {
        clip-path: url(#SVGID_4_);
        fill: #C52E67;
    }

    ._st235 {
        clip-path: url(#SVGID_4_);
        fill: #C52F67;
    }

    ._st236 {
        clip-path: url(#SVGID_4_);
        fill: #C63066;
    }

    ._st237 {
        clip-path: url(#SVGID_4_);
        fill: #C63166;
    }

    ._st238 {
        clip-path: url(#SVGID_4_);
        fill: #C63265;
    }

    ._st239 {
        clip-path: url(#SVGID_4_);
        fill: #C63365;
    }

    ._st240 {
        clip-path: url(#SVGID_4_);
        fill: #C73465;
    }

    ._st241 {
        clip-path: url(#SVGID_4_);
        fill: #C73564;
    }

    ._st242 {
        clip-path: url(#SVGID_4_);
        fill: #C73664;
    }

    ._st243 {
        clip-path: url(#SVGID_4_);
        fill: #C73763;
    }

    ._st244 {
        clip-path: url(#SVGID_4_);
        fill: #C83863;
    }

    ._st245 {
        clip-path: url(#SVGID_4_);
        fill: #C83963;
    }

    ._st246 {
        clip-path: url(#SVGID_4_);
        fill: #C83A62;
    }

    ._st247 {
        clip-path: url(#SVGID_4_);
        fill: #C83B62;
    }

    ._st248 {
        clip-path: url(#SVGID_4_);
        fill: #C93C62;
    }

    ._st249 {
        clip-path: url(#SVGID_4_);
        fill: #C93D61;
    }

    ._st250 {
        clip-path: url(#SVGID_4_);
        fill: #C93E61;
    }

    ._st251 {
        clip-path: url(#SVGID_4_);
        fill: #C93F60;
    }

    ._st252 {
        clip-path: url(#SVGID_4_);
        fill: #CA4060;
    }

    ._st253 {
        clip-path: url(#SVGID_4_);
        fill: #CA4160;
    }

    ._st254 {
        clip-path: url(#SVGID_4_);
        fill: #CA425F;
    }

    ._st255 {
        clip-path: url(#SVGID_4_);
        fill: #CA435F;
    }

    ._st256 {
        clip-path: url(#SVGID_4_);
        fill: #CB445E;
    }

    ._st257 {
        clip-path: url(#SVGID_4_);
        fill: #CB455E;
    }

    ._st258 {
        clip-path: url(#SVGID_4_);
        fill: #CB465E;
    }

    ._st259 {
        clip-path: url(#SVGID_4_);
        fill: #CB475D;
    }

    ._st260 {
        clip-path: url(#SVGID_4_);
        fill: #CC485D;
    }

    ._st261 {
        clip-path: url(#SVGID_4_);
        fill: #97269A;
    }

    ._st262 {
        clip-path: url(#SVGID_4_);
        fill: #982699;
    }

    ._st263 {
        clip-path: url(#SVGID_4_);
        fill: #992698;
    }

    ._st264 {
        clip-path: url(#SVGID_4_);
        fill: #9A2697;
    }

    ._st265 {
        clip-path: url(#SVGID_4_);
        fill: #9B2795;
    }

    ._st266 {
        clip-path: url(#SVGID_4_);
        fill: #9C2794;
    }

    ._st267 {
        clip-path: url(#SVGID_4_);
        fill: #9D2793;
    }

    ._st268 {
        clip-path: url(#SVGID_4_);
        fill: #9E2792;
    }

    ._st269 {
        clip-path: url(#SVGID_4_);
        fill: #9F2791;
    }

    ._st270 {
        clip-path: url(#SVGID_4_);
        fill: #A02790;
    }

    ._st271 {
        clip-path: url(#SVGID_4_);
        fill: #A1278F;
    }

    ._st272 {
        clip-path: url(#SVGID_4_);
        fill: #A1278E;
    }

    ._st273 {
        clip-path: url(#SVGID_4_);
        fill: #A2278D;
    }

    ._st274 {
        clip-path: url(#SVGID_4_);
        fill: #A3278C;
    }

    ._st275 {
        clip-path: url(#SVGID_4_);
        fill: #A4278B;
    }

    ._st276 {
        clip-path: url(#SVGID_4_);
        fill: #A5278A;
    }

    ._st277 {
        clip-path: url(#SVGID_4_);
        fill: #A62789;
    }

    ._st278 {
        clip-path: url(#SVGID_4_);
        fill: #A72788;
    }

    ._st279 {
        clip-path: url(#SVGID_4_);
        fill: #CC495C;
    }

    ._st280 {
        clip-path: url(#SVGID_4_);
        fill: #CC4A5C;
    }

    ._st281 {
        clip-path: url(#SVGID_4_);
        fill: #CC4B5C;
    }

    ._st282 {
        clip-path: url(#SVGID_4_);
        fill: #CD4C5B;
    }

    ._st283 {
        clip-path: url(#SVGID_4_);
        fill: #CD4D5B;
    }

    ._st284 {
        clip-path: url(#SVGID_4_);
        fill: #CD4E5A;
    }

    ._st285 {
        clip-path: url(#SVGID_4_);
        fill: #CD4F5A;
    }

    ._st286 {
        clip-path: url(#SVGID_4_);
        fill: #CE505A;
    }

    ._st287 {
        clip-path: url(#SVGID_4_);
        fill: #CE5159;
    }

    ._st288 {
        clip-path: url(#SVGID_4_);
        fill: #CE5259;
    }

    ._st289 {
        clip-path: url(#SVGID_4_);
        fill: #CE5358;
    }

    ._st290 {
        clip-path: url(#SVGID_4_);
        fill: #CF5458;
    }

    ._st291 {
        clip-path: url(#SVGID_4_);
        fill: #CF5558;
    }

    ._st292 {
        clip-path: url(#SVGID_4_);
        fill: #CF5657;
    }

    ._st293 {
        clip-path: url(#SVGID_4_);
        fill: #CF5757;
    }

    ._st294 {
        clip-path: url(#SVGID_4_);
        fill: #D05856;
    }

    ._st295 {
        clip-path: url(#SVGID_4_);
        fill: #D05956;
    }

    ._st296 {
        clip-path: url(#SVGID_4_);
        fill: #D05A56;
    }

    ._st297 {
        clip-path: url(#SVGID_4_);
        fill: #D05B55;
    }

    ._st298 {
        clip-path: url(#SVGID_4_);
        fill: #D15C55;
    }

    ._st299 {
        clip-path: url(#SVGID_4_);
        fill: #D15D54;
    }

    ._st300 {
        clip-path: url(#SVGID_4_);
        fill: #D15E54;
    }

    ._st301 {
        clip-path: url(#SVGID_4_);
        fill: #D15F54;
    }

    ._st302 {
        clip-path: url(#SVGID_6_);
        fill: #8E26A4;
    }

    ._st303 {
        clip-path: url(#SVGID_6_);
        fill: #8F26A3;
    }

    ._st304 {
        clip-path: url(#SVGID_6_);
        fill: #9026A2;
    }

    ._st305 {
        clip-path: url(#SVGID_6_);
        fill: #9126A1;
    }

    ._st306 {
        clip-path: url(#SVGID_6_);
        fill: #9226A0;
    }

    ._st307 {
        clip-path: url(#SVGID_6_);
        fill: #93269F;
    }

    ._st308 {
        clip-path: url(#SVGID_6_);
        fill: #94269E;
    }

    ._st309 {
        clip-path: url(#SVGID_6_);
        fill: #94269D;
    }

    ._st310 {
        clip-path: url(#SVGID_6_);
        fill: #95269C;
    }

    ._st311 {
        clip-path: url(#SVGID_6_);
        fill: #96269B;
    }

    ._st312 {
        clip-path: url(#SVGID_6_);
        fill: #97269A;
    }

    ._st313 {
        clip-path: url(#SVGID_6_);
        fill: #982699;
    }

    ._st314 {
        clip-path: url(#SVGID_6_);
        fill: #992698;
    }

    ._st315 {
        clip-path: url(#SVGID_6_);
        fill: #9A2697;
    }

    ._st316 {
        clip-path: url(#SVGID_6_);
        fill: #9B2795;
    }

    ._st317 {
        clip-path: url(#SVGID_6_);
        fill: #9C2794;
    }

    ._st318 {
        clip-path: url(#SVGID_6_);
        fill: #9D2793;
    }

    ._st319 {
        clip-path: url(#SVGID_6_);
        fill: #9E2792;
    }

    ._st320 {
        clip-path: url(#SVGID_6_);
        fill: #9F2791;
    }

    ._st321 {
        clip-path: url(#SVGID_6_);
        fill: #A02790;
    }

    ._st322 {
        clip-path: url(#SVGID_6_);
        fill: #A1278F;
    }

    ._st323 {
        clip-path: url(#SVGID_6_);
        fill: #A1278E;
    }

    ._st324 {
        clip-path: url(#SVGID_8_);
        fill: #8125B2;
    }

    ._st325 {
        clip-path: url(#SVGID_8_);
        fill: #8225B1;
    }

    ._st326 {
        clip-path: url(#SVGID_8_);
        fill: #8325B0;
    }

    ._st327 {
        clip-path: url(#SVGID_8_);
        fill: #8425AF;
    }

    ._st328 {
        clip-path: url(#SVGID_8_);
        fill: #8525AE;
    }

    ._st329 {
        clip-path: url(#SVGID_8_);
        fill: #8625AD;
    }

    ._st330 {
        clip-path: url(#SVGID_8_);
        fill: #8625AC;
    }

    ._st331 {
        clip-path: url(#SVGID_8_);
        fill: #8725AB;
    }

    ._st332 {
        clip-path: url(#SVGID_8_);
        fill: #8825AA;
    }

    ._st333 {
        clip-path: url(#SVGID_8_);
        fill: #8925A9;
    }

    ._st334 {
        clip-path: url(#SVGID_8_);
        fill: #8A26A8;
    }

    ._st335 {
        clip-path: url(#SVGID_8_);
        fill: #8B26A7;
    }

    ._st336 {
        clip-path: url(#SVGID_8_);
        fill: #8C26A6;
    }

    ._st337 {
        clip-path: url(#SVGID_8_);
        fill: #8D26A5;
    }

    ._st338 {
        clip-path: url(#SVGID_8_);
        fill: #8E26A4;
    }

    ._st339 {
        clip-path: url(#SVGID_8_);
        fill: #8F26A3;
    }

    ._st340 {
        clip-path: url(#SVGID_8_);
        fill: #9026A2;
    }

    ._st341 {
        clip-path: url(#SVGID_8_);
        fill: #9126A1;
    }

    ._st342 {
        clip-path: url(#SVGID_8_);
        fill: #9226A0;
    }

    ._st343 {
        clip-path: url(#SVGID_8_);
        fill: #93269F;
    }

    ._st344 {
        clip-path: url(#SVGID_8_);
        fill: #94269E;
    }

    ._st345 {
        clip-path: url(#SVGID_8_);
        fill: #94269D;
    }

    ._st346 {
        clip-path: url(#SVGID_8_);
        fill: #95269C;
    }

    ._st347 {
        clip-path: url(#SVGID_8_);
        fill: #96269B;
    }

    ._st348 {
        clip-path: url(#SVGID_8_);
        fill: #97269A;
    }

    ._st349 {
        clip-path: url(#SVGID_8_);
        fill: #982699;
    }

    ._st350 {
        clip-path: url(#SVGID_8_);
        fill: #992698;
    }

    ._st351 {
        clip-path: url(#SVGID_8_);
        fill: #9A2697;
    }

    ._st352 {
        clip-path: url(#SVGID_8_);
        fill: #9B2795;
    }

    ._st353 {
        clip-path: url(#SVGID_8_);
        fill: #9C2794;
    }

    ._st354 {
        clip-path: url(#SVGID_8_);
        fill: #9D2793;
    }

    ._st355 {
        clip-path: url(#SVGID_8_);
        fill: #9E2792;
    }

    ._st356 {
        clip-path: url(#SVGID_8_);
        fill: #9F2791;
    }

    ._st357 {
        clip-path: url(#SVGID_8_);
        fill: #A02790;
    }

    ._st358 {
        clip-path: url(#SVGID_8_);
        fill: #A1278F;
    }

    ._st359 {
        clip-path: url(#SVGID_8_);
        fill: #A1278E;
    }

    ._st360 {
        clip-path: url(#SVGID_8_);
        fill: #A2278D;
    }

    ._st361 {
        clip-path: url(#SVGID_8_);
        fill: #A3278C;
    }

    ._st362 {
        clip-path: url(#SVGID_8_);
        fill: #A4278B;
    }

    ._st363 {
        clip-path: url(#SVGID_8_);
        fill: #A5278A;
    }

    ._st364 {
        clip-path: url(#SVGID_8_);
        fill: #A62789;
    }

    ._st365 {
        clip-path: url(#SVGID_8_);
        fill: #A72788;
    }

    ._st366 {
        clip-path: url(#SVGID_8_);
        fill: #A82787;
    }

    ._st367 {
        clip-path: url(#SVGID_8_);
        fill: #A92786;
    }

    ._st368 {
        clip-path: url(#SVGID_8_);
        fill: #AA2785;
    }

    ._st369 {
        clip-path: url(#SVGID_8_);
        fill: #AB2784;
    }

    ._st370 {
        clip-path: url(#SVGID_8_);
        fill: #AC2883;
    }

    ._st371 {
        clip-path: url(#SVGID_8_);
        fill: #AD2882;
    }

    ._st372 {
        clip-path: url(#SVGID_8_);
        fill: #AE2881;
    }

    ._st373 {
        clip-path: url(#SVGID_8_);
        fill: #AF2880;
    }

    ._st374 {
        clip-path: url(#SVGID_8_);
        fill: #AF287F;
    }

    ._st375 {
        clip-path: url(#SVGID_8_);
        fill: #B0287E;
    }

    ._st376 {
        clip-path: url(#SVGID_8_);
        fill: #B1287D;
    }

    ._st377 {
        clip-path: url(#SVGID_8_);
        fill: #B2287C;
    }

    ._st378 {
        clip-path: url(#SVGID_8_);
        fill: #B3287B;
    }

    ._st379 {
        clip-path: url(#SVGID_8_);
        fill: #B4287A;
    }

    ._st380 {
        clip-path: url(#SVGID_8_);
        fill: #B52879;
    }

    ._st381 {
        clip-path: url(#SVGID_8_);
        fill: #B62878;
    }

    ._st382 {
        clip-path: url(#SVGID_8_);
        fill: #B72877;
    }

    ._st383 {
        clip-path: url(#SVGID_8_);
        fill: #B82876;
    }

    ._st384 {
        clip-path: url(#SVGID_8_);
        fill: #B92875;
    }

    ._st385 {
        clip-path: url(#SVGID_8_);
        fill: #BA2874;
    }

    ._st386 {
        clip-path: url(#SVGID_8_);
        fill: #BB2873;
    }

    ._st387 {
        clip-path: url(#SVGID_8_);
        fill: #BC2872;
    }

    ._st388 {
        clip-path: url(#SVGID_8_);
        fill: #BD2971;
    }

    ._st389 {
        clip-path: url(#SVGID_8_);
        fill: #BD2970;
    }

    ._st390 {
        clip-path: url(#SVGID_8_);
        fill: #BE296F;
    }

    ._st391 {
        clip-path: url(#SVGID_8_);
        fill: #BF296E;
    }

    ._st392 {
        clip-path: url(#SVGID_8_);
        fill: #C0296D;
    }

    ._st393 {
        clip-path: url(#SVGID_8_);
        fill: #C1296C;
    }

    ._st394 {
        clip-path: url(#SVGID_8_);
        fill: #C2296B;
    }

    ._st395 {
        clip-path: url(#SVGID_8_);
        fill: #C3296A;
    }

    ._st396 {
        clip-path: url(#SVGID_8_);
        fill: #C42969;
    }

    ._st397 {
        clip-path: url(#SVGID_8_);
        fill: #C42A69;
    }

    ._st398 {
        clip-path: url(#SVGID_8_);
        fill: #C42B68;
    }

    ._st399 {
        clip-path: url(#SVGID_8_);
        fill: #C52C68;
    }

    ._st400 {
        clip-path: url(#SVGID_8_);
        fill: #C52D67;
    }

    ._st401 {
        clip-path: url(#SVGID_8_);
        fill: #C52E67;
    }

    ._st402 {
        clip-path: url(#SVGID_8_);
        fill: #C52F67;
    }

    ._st403 {
        clip-path: url(#SVGID_8_);
        fill: #C63066;
    }

    ._st404 {
        clip-path: url(#SVGID_8_);
        fill: #C63166;
    }

    ._st405 {
        clip-path: url(#SVGID_8_);
        fill: #C63265;
    }

    ._st406 {
        clip-path: url(#SVGID_8_);
        fill: #C63365;
    }

    ._st407 {
        clip-path: url(#SVGID_8_);
        fill: #C73465;
    }

    ._st408 {
        clip-path: url(#SVGID_8_);
        fill: #C73564;
    }

    ._st409 {
        clip-path: url(#SVGID_8_);
        fill: #C73664;
    }

    ._st410 {
        clip-path: url(#SVGID_8_);
        fill: #C73763;
    }

    ._st411 {
        clip-path: url(#SVGID_8_);
        fill: #C83863;
    }

    ._st412 {
        clip-path: url(#SVGID_8_);
        fill: #C83963;
    }

    ._st413 {
        clip-path: url(#SVGID_8_);
        fill: #C83A62;
    }

    ._st414 {
        clip-path: url(#SVGID_8_);
        fill: #C83B62;
    }

    ._st415 {
        clip-path: url(#SVGID_8_);
        fill: #C93C62;
    }

    ._st416 {
        clip-path: url(#SVGID_8_);
        fill: #C93D61;
    }

    ._st417 {
        clip-path: url(#SVGID_8_);
        fill: #C93E61;
    }

    ._st418 {
        clip-path: url(#SVGID_8_);
        fill: #C93F60;
    }

    ._st419 {
        clip-path: url(#SVGID_8_);
        fill: #CA4060;
    }

    ._st420 {
        clip-path: url(#SVGID_8_);
        fill: #CA4160;
    }

    ._st421 {
        clip-path: url(#SVGID_8_);
        fill: #CA425F;
    }

    ._st422 {
        clip-path: url(#SVGID_8_);
        fill: #CA435F;
    }

    ._st423 {
        clip-path: url(#SVGID_8_);
        fill: #CB445E;
    }

    ._st424 {
        clip-path: url(#SVGID_8_);
        fill: #CB455E;
    }

    ._st425 {
        clip-path: url(#SVGID_8_);
        fill: #CB465E;
    }

    ._st426 {
        clip-path: url(#SVGID_8_);
        fill: #CB475D;
    }

    ._st427 {
        clip-path: url(#SVGID_8_);
        fill: #CC485D;
    }

    ._st428 {
        clip-path: url(#SVGID_8_);
        fill: #CC495C;
    }

    ._st429 {
        clip-path: url(#SVGID_8_);
        fill: #CC4A5C;
    }

    ._st430 {
        clip-path: url(#SVGID_8_);
        fill: #CC4B5C;
    }

    ._st431 {
        clip-path: url(#SVGID_8_);
        fill: #CD4C5B;
    }

    ._st432 {
        clip-path: url(#SVGID_8_);
        fill: #CD4D5B;
    }

    ._st433 {
        clip-path: url(#SVGID_8_);
        fill: #CD4E5A;
    }

    ._st434 {
        clip-path: url(#SVGID_8_);
        fill: #CD4F5A;
    }

    ._st435 {
        clip-path: url(#SVGID_8_);
        fill: #CE505A;
    }

    ._st436 {
        clip-path: url(#SVGID_8_);
        fill: #CE5159;
    }

    ._st437 {
        clip-path: url(#SVGID_8_);
        fill: #CE5259;
    }

    ._st438 {
        clip-path: url(#SVGID_8_);
        fill: #CE5358;
    }

    ._st439 {
        clip-path: url(#SVGID_8_);
        fill: #CF5458;
    }

    ._st440 {
        clip-path: url(#SVGID_8_);
        fill: #CF5558;
    }

    ._st441 {
        clip-path: url(#SVGID_8_);
        fill: #CF5657;
    }

    ._st442 {
        clip-path: url(#SVGID_8_);
        fill: #CF5757;
    }

    ._st443 {
        clip-path: url(#SVGID_8_);
        fill: #D05856;
    }

    ._st444 {
        clip-path: url(#SVGID_8_);
        fill: #D05956;
    }

    ._st445 {
        clip-path: url(#SVGID_8_);
        fill: #D05A56;
    }

    ._st446 {
        clip-path: url(#SVGID_8_);
        fill: #D05B55;
    }

    ._st447 {
        clip-path: url(#SVGID_8_);
        fill: #D15C55;
    }

    ._st448 {
        clip-path: url(#SVGID_8_);
        fill: #D15D54;
    }

    ._st449 {
        clip-path: url(#SVGID_8_);
        fill: #D15E54;
    }

    ._st450 {
        clip-path: url(#SVGID_8_);
        fill: #D15F54;
    }

    ._st451 {
        clip-path: url(#SVGID_8_);
        fill: #D26153;
    }

    ._st452 {
        clip-path: url(#SVGID_8_);
        fill: #D26253;
    }

    ._st453 {
        clip-path: url(#SVGID_8_);
        fill: #D26353;
    }

    ._st454 {
        clip-path: url(#SVGID_8_);
        fill: #D26452;
    }

    ._st455 {
        clip-path: url(#SVGID_8_);
        fill: #D36552;
    }

    ._st456 {
        clip-path: url(#SVGID_8_);
        fill: #D36651;
    }

    ._st457 {
        clip-path: url(#SVGID_8_);
        fill: #D36751;
    }

    ._st458 {
        clip-path: url(#SVGID_8_);
        fill: #D36851;
    }

    ._st459 {
        clip-path: url(#SVGID_8_);
        fill: #D46950;
    }

    ._st460 {
        clip-path: url(#SVGID_8_);
        fill: #D46A50;
    }

    ._st461 {
        clip-path: url(#SVGID_8_);
        fill: #D46B4F;
    }

    ._st462 {
        clip-path: url(#SVGID_8_);
        fill: #D46C4F;
    }

    ._st463 {
        clip-path: url(#SVGID_8_);
        fill: #D56D4F;
    }

    ._st464 {
        clip-path: url(#SVGID_8_);
        fill: #D56E4E;
    }

    ._st465 {
        clip-path: url(#SVGID_8_);
        fill: #D56F4E;
    }

    ._st466 {
        clip-path: url(#SVGID_8_);
        fill: #D5704D;
    }

    ._st467 {
        clip-path: url(#SVGID_8_);
        fill: #D6714D;
    }

    ._st468 {
        clip-path: url(#SVGID_8_);
        fill: #D6724D;
    }

    ._st469 {
        clip-path: url(#SVGID_8_);
        fill: #D6734C;
    }

    ._st470 {
        clip-path: url(#SVGID_8_);
        fill: #D6744C;
    }

    ._st471 {
        clip-path: url(#SVGID_8_);
        fill: #D7754B;
    }

    ._st472 {
        clip-path: url(#SVGID_8_);
        fill: #D7764B;
    }

    ._st473 {
        clip-path: url(#SVGID_8_);
        fill: #D7774B;
    }

    ._st474 {
        clip-path: url(#SVGID_8_);
        fill: #D7784A;
    }

    ._st475 {
        clip-path: url(#SVGID_8_);
        fill: #D8794A;
    }

    ._st476 {
        clip-path: url(#SVGID_8_);
        fill: #D87A49;
    }

    ._st477 {
        clip-path: url(#SVGID_8_);
        fill: #D87B49;
    }

    ._st478 {
        clip-path: url(#SVGID_8_);
        fill: #D87C49;
    }

    ._st479 {
        clip-path: url(#SVGID_8_);
        fill: #D97D48;
    }

    ._st480 {
        clip-path: url(#SVGID_8_);
        fill: #D97E48;
    }

    ._st481 {
        clip-path: url(#SVGID_8_);
        fill: #D97F47;
    }

    ._st482 {
        clip-path: url(#SVGID_8_);
        fill: #D98047;
    }

    ._st483 {
        clip-path: url(#SVGID_8_);
        fill: #DA8147;
    }

    ._st484 {
        clip-path: url(#SVGID_8_);
        fill: #7124C3;
    }

    ._st485 {
        clip-path: url(#SVGID_8_);
        fill: #7224C2;
    }

    ._st486 {
        clip-path: url(#SVGID_8_);
        fill: #7324C1;
    }

    ._st487 {
        clip-path: url(#SVGID_8_);
        fill: #7424C0;
    }

    ._st488 {
        clip-path: url(#SVGID_8_);
        fill: #7524BF;
    }

    ._st489 {
        clip-path: url(#SVGID_8_);
        fill: #7624BE;
    }

    ._st490 {
        clip-path: url(#SVGID_8_);
        fill: #7724BD;
    }

    ._st491 {
        clip-path: url(#SVGID_8_);
        fill: #7824BC;
    }

    ._st492 {
        clip-path: url(#SVGID_8_);
        fill: #7824BB;
    }

    ._st493 {
        clip-path: url(#SVGID_8_);
        fill: #7925BA;
    }

    ._st494 {
        clip-path: url(#SVGID_8_);
        fill: #7A25B9;
    }

    ._st495 {
        clip-path: url(#SVGID_8_);
        fill: #7B25B8;
    }

    ._st496 {
        clip-path: url(#SVGID_8_);
        fill: #7C25B7;
    }

    ._st497 {
        clip-path: url(#SVGID_8_);
        fill: #7D25B6;
    }

    ._st498 {
        clip-path: url(#SVGID_8_);
        fill: #7E25B5;
    }

    ._st499 {
        clip-path: url(#SVGID_8_);
        fill: #7F25B4;
    }

    ._st500 {
        clip-path: url(#SVGID_8_);
        fill: #8025B3;
    }

    ._st501 {
        clip-path: url(#SVGID_8_);
        fill: #DA8246;
    }

    ._st502 {
        clip-path: url(#SVGID_8_);
        fill: #DA8346;
    }

    ._st503 {
        clip-path: url(#SVGID_8_);
        fill: #DA8445;
    }

    ._st504 {
        clip-path: url(#SVGID_8_);
        fill: #DB8545;
    }

    ._st505 {
        clip-path: url(#SVGID_8_);
        fill: #DB8645;
    }

    ._st506 {
        clip-path: url(#SVGID_8_);
        fill: #DB8744;
    }

    ._st507 {
        clip-path: url(#SVGID_8_);
        fill: #DB8844;
    }

    ._st508 {
        clip-path: url(#SVGID_8_);
        fill: #DC8944;
    }

    ._st509 {
        clip-path: url(#SVGID_8_);
        fill: #DC8A43;
    }

    ._st510 {
        clip-path: url(#SVGID_8_);
        fill: #DC8B43;
    }

    ._st511 {
        clip-path: url(#SVGID_8_);
        fill: #DC8C42;
    }

    ._st512 {
        clip-path: url(#SVGID_8_);
        fill: #DD8D42;
    }

    ._st513 {
        clip-path: url(#SVGID_8_);
        fill: #DD8E42;
    }

    ._st514 {
        clip-path: url(#SVGID_8_);
        fill: #DD8F41;
    }

    ._st515 {
        clip-path: url(#SVGID_8_);
        fill: #DD9041;
    }

    ._st516 {
        clip-path: url(#SVGID_8_);
        fill: #DE9140;
    }

    ._st517 {
        clip-path: url(#SVGID_8_);
        fill: #DE9240;
    }

    ._st518 {
        clip-path: url(#SVGID_8_);
        fill: #DE9340;
    }

    ._st519 {
        clip-path: url(#SVGID_8_);
        fill: #DE943F;
    }

    ._st520 {
        clip-path: url(#SVGID_8_);
        fill: #DF953F;
    }

    ._st521 {
        clip-path: url(#SVGID_8_);
        fill: #DF963E;
    }

    ._st522 {
        clip-path: url(#SVGID_8_);
        fill: #DF973E;
    }

    ._st523 {
        clip-path: url(#SVGID_10_);
        fill: #A82787;
    }

    ._st524 {
        clip-path: url(#SVGID_10_);
        fill: #A92786;
    }

    ._st525 {
        clip-path: url(#SVGID_10_);
        fill: #AA2785;
    }

    ._st526 {
        clip-path: url(#SVGID_10_);
        fill: #AB2784;
    }

    ._st527 {
        clip-path: url(#SVGID_10_);
        fill: #AC2883;
    }

    ._st528 {
        clip-path: url(#SVGID_10_);
        fill: #AD2882;
    }

    ._st529 {
        clip-path: url(#SVGID_10_);
        fill: #AE2881;
    }

    ._st530 {
        clip-path: url(#SVGID_10_);
        fill: #AF2880;
    }

    ._st531 {
        clip-path: url(#SVGID_10_);
        fill: #AF287F;
    }

    ._st532 {
        clip-path: url(#SVGID_10_);
        fill: #B0287E;
    }

    ._st533 {
        clip-path: url(#SVGID_10_);
        fill: #B1287D;
    }

    ._st534 {
        clip-path: url(#SVGID_10_);
        fill: #B2287C;
    }

    ._st535 {
        clip-path: url(#SVGID_10_);
        fill: #B3287B;
    }

    ._st536 {
        clip-path: url(#SVGID_10_);
        fill: #B4287A;
    }

    ._st537 {
        clip-path: url(#SVGID_10_);
        fill: #B52879;
    }

    ._st538 {
        clip-path: url(#SVGID_10_);
        fill: #B62878;
    }

    ._st539 {
        clip-path: url(#SVGID_10_);
        fill: #B72877;
    }

    ._st540 {
        clip-path: url(#SVGID_10_);
        fill: #B82876;
    }

    ._st541 {
        clip-path: url(#SVGID_10_);
        fill: #B92875;
    }

    ._st542 {
        clip-path: url(#SVGID_10_);
        fill: #BA2874;
    }

    ._st543 {
        clip-path: url(#SVGID_10_);
        fill: #BB2873;
    }

    ._st544 {
        clip-path: url(#SVGID_10_);
        fill: #BC2872;
    }

    ._st545 {
        clip-path: url(#SVGID_10_);
        fill: #BD2971;
    }

    ._st546 {
        clip-path: url(#SVGID_10_);
        fill: #BD2970;
    }

    ._st547 {
        clip-path: url(#SVGID_10_);
        fill: #BE296F;
    }

    ._st548 {
        clip-path: url(#SVGID_10_);
        fill: #BF296E;
    }

    ._st549 {
        clip-path: url(#SVGID_10_);
        fill: #C0296D;
    }

    ._st550 {
        clip-path: url(#SVGID_10_);
        fill: #C1296C;
    }

    ._st551 {
        clip-path: url(#SVGID_10_);
        fill: #C2296B;
    }

    ._st552 {
        clip-path: url(#SVGID_10_);
        fill: #C3296A;
    }

    ._st553 {
        clip-path: url(#SVGID_10_);
        fill: #C42969;
    }

    ._st554 {
        clip-path: url(#SVGID_10_);
        fill: #C42A69;
    }

    ._st555 {
        clip-path: url(#SVGID_10_);
        fill: #C42B68;
    }

    ._st556 {
        clip-path: url(#SVGID_10_);
        fill: #C52C68;
    }

    ._st557 {
        clip-path: url(#SVGID_10_);
        fill: #C52D67;
    }

    ._st558 {
        clip-path: url(#SVGID_10_);
        fill: #C52E67;
    }

    ._st559 {
        clip-path: url(#SVGID_10_);
        fill: #C52F67;
    }

    ._st560 {
        clip-path: url(#SVGID_10_);
        fill: #C63066;
    }

    ._st561 {
        clip-path: url(#SVGID_10_);
        fill: #C63166;
    }

    ._st562 {
        clip-path: url(#SVGID_10_);
        fill: #C63265;
    }

    ._st563 {
        clip-path: url(#SVGID_10_);
        fill: #C63365;
    }

    ._st564 {
        clip-path: url(#SVGID_10_);
        fill: #C73465;
    }

    ._st565 {
        clip-path: url(#SVGID_10_);
        fill: #C73564;
    }

    ._st566 {
        clip-path: url(#SVGID_10_);
        fill: #C73664;
    }

    ._st567 {
        clip-path: url(#SVGID_10_);
        fill: #C73763;
    }

    ._st568 {
        clip-path: url(#SVGID_10_);
        fill: #C83863;
    }

    ._st569 {
        clip-path: url(#SVGID_10_);
        fill: #C83963;
    }

    ._st570 {
        clip-path: url(#SVGID_10_);
        fill: #C83A62;
    }

    ._st571 {
        clip-path: url(#SVGID_10_);
        fill: #C83B62;
    }

    ._st572 {
        clip-path: url(#SVGID_10_);
        fill: #C93C62;
    }

    ._st573 {
        clip-path: url(#SVGID_10_);
        fill: #C93D61;
    }

    ._st574 {
        clip-path: url(#SVGID_10_);
        fill: #C93E61;
    }

    ._st575 {
        clip-path: url(#SVGID_10_);
        fill: #C93F60;
    }

    ._st576 {
        clip-path: url(#SVGID_10_);
        fill: #CA4060;
    }

    ._st577 {
        clip-path: url(#SVGID_10_);
        fill: #CA4160;
    }

    ._st578 {
        clip-path: url(#SVGID_10_);
        fill: #CA425F;
    }

    ._st579 {
        clip-path: url(#SVGID_10_);
        fill: #CA435F;
    }

    ._st580 {
        clip-path: url(#SVGID_10_);
        fill: #CB445E;
    }

    ._st581 {
        clip-path: url(#SVGID_10_);
        fill: #CB455E;
    }

    ._st582 {
        clip-path: url(#SVGID_10_);
        fill: #CB465E;
    }

    ._st583 {
        clip-path: url(#SVGID_10_);
        fill: #CB475D;
    }

    ._st584 {
        clip-path: url(#SVGID_10_);
        fill: #CC485D;
    }

    ._st585 {
        clip-path: url(#SVGID_10_);
        fill: #97269A;
    }

    ._st586 {
        clip-path: url(#SVGID_10_);
        fill: #982699;
    }

    ._st587 {
        clip-path: url(#SVGID_10_);
        fill: #992698;
    }

    ._st588 {
        clip-path: url(#SVGID_10_);
        fill: #9A2697;
    }

    ._st589 {
        clip-path: url(#SVGID_10_);
        fill: #9B2795;
    }

    ._st590 {
        clip-path: url(#SVGID_10_);
        fill: #9C2794;
    }

    ._st591 {
        clip-path: url(#SVGID_10_);
        fill: #9D2793;
    }

    ._st592 {
        clip-path: url(#SVGID_10_);
        fill: #9E2792;
    }

    ._st593 {
        clip-path: url(#SVGID_10_);
        fill: #9F2791;
    }

    ._st594 {
        clip-path: url(#SVGID_10_);
        fill: #A02790;
    }

    ._st595 {
        clip-path: url(#SVGID_10_);
        fill: #A1278F;
    }

    ._st596 {
        clip-path: url(#SVGID_10_);
        fill: #A1278E;
    }

    ._st597 {
        clip-path: url(#SVGID_10_);
        fill: #A2278D;
    }

    ._st598 {
        clip-path: url(#SVGID_10_);
        fill: #A3278C;
    }

    ._st599 {
        clip-path: url(#SVGID_10_);
        fill: #A4278B;
    }

    ._st600 {
        clip-path: url(#SVGID_10_);
        fill: #A5278A;
    }

    ._st601 {
        clip-path: url(#SVGID_10_);
        fill: #A62789;
    }

    ._st602 {
        clip-path: url(#SVGID_10_);
        fill: #A72788;
    }

    ._st603 {
        clip-path: url(#SVGID_10_);
        fill: #CC495C;
    }

    ._st604 {
        clip-path: url(#SVGID_10_);
        fill: #CC4A5C;
    }

    ._st605 {
        clip-path: url(#SVGID_10_);
        fill: #CC4B5C;
    }

    ._st606 {
        clip-path: url(#SVGID_10_);
        fill: #CD4C5B;
    }

    ._st607 {
        clip-path: url(#SVGID_10_);
        fill: #CD4D5B;
    }

    ._st608 {
        clip-path: url(#SVGID_10_);
        fill: #CD4E5A;
    }

    ._st609 {
        clip-path: url(#SVGID_10_);
        fill: #CD4F5A;
    }

    ._st610 {
        clip-path: url(#SVGID_10_);
        fill: #CE505A;
    }

    ._st611 {
        clip-path: url(#SVGID_10_);
        fill: #CE5159;
    }

    ._st612 {
        clip-path: url(#SVGID_10_);
        fill: #CE5259;
    }

    ._st613 {
        clip-path: url(#SVGID_10_);
        fill: #CE5358;
    }

    ._st614 {
        clip-path: url(#SVGID_10_);
        fill: #CF5458;
    }

    ._st615 {
        clip-path: url(#SVGID_10_);
        fill: #CF5558;
    }

    ._st616 {
        clip-path: url(#SVGID_10_);
        fill: #CF5657;
    }

    ._st617 {
        clip-path: url(#SVGID_10_);
        fill: #CF5757;
    }

    ._st618 {
        clip-path: url(#SVGID_10_);
        fill: #D05856;
    }

    ._st619 {
        clip-path: url(#SVGID_10_);
        fill: #D05956;
    }

    ._st620 {
        clip-path: url(#SVGID_10_);
        fill: #D05A56;
    }

    ._st621 {
        clip-path: url(#SVGID_10_);
        fill: #D05B55;
    }

    ._st622 {
        clip-path: url(#SVGID_10_);
        fill: #D15C55;
    }

    ._st623 {
        clip-path: url(#SVGID_10_);
        fill: #D15D54;
    }

    ._st624 {
        clip-path: url(#SVGID_10_);
        fill: #D15E54;
    }

    ._st625 {
        clip-path: url(#SVGID_10_);
        fill: #D15F54;
    }

    ._st626 {
        clip-path: url(#SVGID_12_);
        fill: #8E26A4;
    }

    ._st627 {
        clip-path: url(#SVGID_12_);
        fill: #8F26A3;
    }

    ._st628 {
        clip-path: url(#SVGID_12_);
        fill: #9026A2;
    }

    ._st629 {
        clip-path: url(#SVGID_12_);
        fill: #9126A1;
    }

    ._st630 {
        clip-path: url(#SVGID_12_);
        fill: #9226A0;
    }

    ._st631 {
        clip-path: url(#SVGID_12_);
        fill: #93269F;
    }

    ._st632 {
        clip-path: url(#SVGID_12_);
        fill: #94269E;
    }

    ._st633 {
        clip-path: url(#SVGID_12_);
        fill: #94269D;
    }

    ._st634 {
        clip-path: url(#SVGID_12_);
        fill: #95269C;
    }

    ._st635 {
        clip-path: url(#SVGID_12_);
        fill: #96269B;
    }

    ._st636 {
        clip-path: url(#SVGID_12_);
        fill: #97269A;
    }

    ._st637 {
        clip-path: url(#SVGID_12_);
        fill: #982699;
    }

    ._st638 {
        clip-path: url(#SVGID_12_);
        fill: #992698;
    }

    ._st639 {
        clip-path: url(#SVGID_12_);
        fill: #9A2697;
    }

    ._st640 {
        clip-path: url(#SVGID_12_);
        fill: #9B2795;
    }

    ._st641 {
        clip-path: url(#SVGID_12_);
        fill: #9C2794;
    }

    ._st642 {
        clip-path: url(#SVGID_12_);
        fill: #9D2793;
    }

    ._st643 {
        clip-path: url(#SVGID_12_);
        fill: #9E2792;
    }

    ._st644 {
        clip-path: url(#SVGID_12_);
        fill: #9F2791;
    }

    ._st645 {
        clip-path: url(#SVGID_12_);
        fill: #A02790;
    }

    ._st646 {
        clip-path: url(#SVGID_12_);
        fill: #A1278F;
    }

    ._st647 {
        clip-path: url(#SVGID_12_);
        fill: #A1278E;
    }
</style>
                            <defs>
                            </defs>
                            <g>
                                <g>
                                    <g>
                                        <defs>
                                            <path id="SVGID_1_" d="M17.5,0H7.4C3.3,0,0,3.3,0,7.4v10.1c0,4.1,3.3,7.4,7.4,7.4h10.1c4.1,0,7.4-3.3,7.4-7.4V7.4
					C24.9,3.3,21.6,0,17.5,0z M22.4,17.5c0,2.7-2.2,4.9-4.9,4.9H7.4c-2.7,0-4.9-2.2-4.9-4.9V7.4c0-2.7,2.2-4.9,4.9-4.9h10.1
					c2.7,0,4.9,2.2,4.9,4.9V17.5z"/>
                                        </defs>
                                        <clipPath id="SVGID_2_">
                                            <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <rect x="2.5" y="2.5" class="_st0" width="19.9" height="0"/>
                                        <rect x="2.5" y="2.6" class="_st1" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="2.7" class="_st2" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="2.8" class="_st3" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="3" class="_st4" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="3.1" class="_st5" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="3.3" class="_st6" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="3.4" class="_st7" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="3.6" class="_st8" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="3.7" class="_st9" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="3.9" class="_st10" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="4" class="_st11" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="4.2" class="_st12" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="4.3" class="_st13" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="4.4" class="_st14" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="4.6" class="_st15" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="4.7" class="_st16" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="4.9" class="_st17" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="5" class="_st18" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="5.2" class="_st19" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="5.3" class="_st20" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="5.5" class="_st21" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="5.6" class="_st22" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="5.7" class="_st23" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="5.9" class="_st24" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="6" class="_st25" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="6.2" class="_st26" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="6.3" class="_st27" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="6.5" class="_st28" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="6.6" class="_st29" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="6.8" class="_st30" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="6.9" class="_st31" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="7.1" class="_st32" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="7.2" class="_st33" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="7.3" class="_st34" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="7.5" class="_st35" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="7.6" class="_st36" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="7.8" class="_st37" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="7.9" class="_st38" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="8.1" class="_st39" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="8.2" class="_st40" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="8.4" class="_st41" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="8.5" class="_st42" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="8.7" class="_st43" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="8.8" class="_st44" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="8.9" class="_st45" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="9.1" class="_st46" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="9.2" class="_st47" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="9.4" class="_st48" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="9.5" class="_st49" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="9.7" class="_st50" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="9.8" class="_st51" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="10" class="_st52" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="10.1" class="_st53" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="10.3" class="_st54" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="10.4" class="_st55" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="10.5" class="_st56" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="10.7" class="_st57" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="10.8" class="_st58" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="11" class="_st59" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="11.1" class="_st60" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="11.3" class="_st61" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="11.4" class="_st62" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="11.6" class="_st63" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="11.7" class="_st64" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="11.8" class="_st65" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="12" class="_st66" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="12.1" class="_st67" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="12.3" class="_st68" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="12.4" class="_st69" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="12.6" class="_st70" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="12.7" class="_st71" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="12.9" class="_st72" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="13" class="_st72" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="13.1" class="_st73" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="13.2" class="_st74" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="13.3" class="_st75" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="13.4" class="_st76" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="13.6" class="_st77" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="13.7" class="_st78" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="13.8" class="_st79" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="13.9" class="_st80" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="14" class="_st81" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="14.1" class="_st82" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="14.2" class="_st83" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="14.3" class="_st84" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="14.4" class="_st85" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="14.5" class="_st86" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="14.6" class="_st87" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="14.7" class="_st88" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="14.8" class="_st89" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="15" class="_st90" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="15.1" class="_st91" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="15.2" class="_st92" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="15.3" class="_st93" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="15.4" class="_st94" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="15.5" class="_st95" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="15.6" class="_st96" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="15.7" class="_st97" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="15.8" class="_st98" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="15.9" class="_st99" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="16" class="_st100" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="16.1" class="_st101" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="16.2" class="_st102" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="16.4" class="_st103" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="16.5" class="_st104" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="16.6" class="_st105" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="16.7" class="_st106" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="16.8" class="_st107" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="16.9" class="_st108" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="17" class="_st109" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="17.1" class="_st110" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="17.2" class="_st111" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="17.3" class="_st112" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="17.4" class="_st113" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="17.5" class="_st114" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="17.7" class="_st115" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="17.8" class="_st116" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="17.9" class="_st117" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="18" class="_st118" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="18.1" class="_st119" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="18.2" class="_st120" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="18.3" class="_st121" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="18.4" class="_st122" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="18.5" class="_st123" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="18.6" class="_st124" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="18.7" class="_st125" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="18.8" class="_st126" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="18.9" class="_st127" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="19.1" class="_st128" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="19.2" class="_st129" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="19.3" class="_st130" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="19.4" class="_st131" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="19.5" class="_st132" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="19.6" class="_st133" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="19.7" class="_st134" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="19.8" class="_st135" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="19.9" class="_st136" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="20" class="_st137" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="20.1" class="_st138" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="20.2" class="_st139" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="20.3" class="_st140" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="20.5" class="_st141" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="20.6" class="_st142" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="20.7" class="_st143" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="20.8" class="_st144" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="20.9" class="_st145" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="21" class="_st146" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="21.1" class="_st147" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="21.2" class="_st148" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="21.3" class="_st149" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="21.4" class="_st150" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="21.5" class="_st151" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="21.6" class="_st152" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="21.8" class="_st153" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="21.9" class="_st154" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="22" class="_st155" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="22.1" class="_st156" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="22.2" class="_st157" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="22.3" class="_st158" width="19.9" height="0.1"/>
                                        <rect x="2.5" y="22.4" class="_st159" width="19.9" height="0"/>
                                        <rect class="_st160" width="24.9" height="0.1"/>
                                        <rect y="0.1" class="_st161" width="24.9" height="0.1"/>
                                        <rect y="0.2" class="_st162" width="24.9" height="0.1"/>
                                        <rect y="0.4" class="_st163" width="24.9" height="0.1"/>
                                        <rect y="0.5" class="_st164" width="24.9" height="0.1"/>
                                        <rect y="0.7" class="_st165" width="24.9" height="0.1"/>
                                        <rect y="0.8" class="_st166" width="24.9" height="0.1"/>
                                        <rect y="1" class="_st167" width="24.9" height="0.1"/>
                                        <rect y="1.1" class="_st168" width="24.9" height="0.1"/>
                                        <rect y="1.2" class="_st169" width="24.9" height="0.1"/>
                                        <rect y="1.4" class="_st170" width="24.9" height="0.1"/>
                                        <rect y="1.5" class="_st171" width="24.9" height="0.1"/>
                                        <rect y="1.7" class="_st172" width="24.9" height="0.1"/>
                                        <rect y="1.8" class="_st173" width="24.9" height="0.1"/>
                                        <rect y="2" class="_st174" width="24.9" height="0.1"/>
                                        <rect y="2.1" class="_st175" width="24.9" height="0.1"/>
                                        <rect y="2.3" class="_st176" width="24.9" height="0.1"/>
                                        <rect y="2.4" class="_st0" width="24.9" height="0.1"/>
                                        <rect y="2.6" class="_st1" width="24.9" height="0.1"/>
                                        <rect y="2.7" class="_st2" width="24.9" height="0.1"/>
                                        <rect y="2.8" class="_st3" width="24.9" height="0.1"/>
                                        <rect y="3" class="_st4" width="24.9" height="0.1"/>
                                        <rect y="3.1" class="_st5" width="24.9" height="0.1"/>
                                        <rect y="3.3" class="_st6" width="24.9" height="0.1"/>
                                        <rect y="3.4" class="_st7" width="24.9" height="0.1"/>
                                        <rect y="3.6" class="_st8" width="24.9" height="0.1"/>
                                        <rect y="3.7" class="_st9" width="24.9" height="0.1"/>
                                        <rect y="3.9" class="_st10" width="24.9" height="0.1"/>
                                        <rect y="4" class="_st11" width="24.9" height="0.1"/>
                                        <rect y="4.2" class="_st12" width="24.9" height="0.1"/>
                                        <rect y="4.3" class="_st13" width="24.9" height="0.1"/>
                                        <rect y="4.4" class="_st14" width="24.9" height="0.1"/>
                                        <rect y="4.6" class="_st15" width="24.9" height="0.1"/>
                                        <rect y="4.7" class="_st16" width="24.9" height="0.1"/>
                                        <rect y="4.9" class="_st17" width="24.9" height="0.1"/>
                                        <rect y="5" class="_st18" width="24.9" height="0.1"/>
                                        <rect y="5.2" class="_st19" width="24.9" height="0.1"/>
                                        <rect y="5.3" class="_st20" width="24.9" height="0.1"/>
                                        <rect y="5.5" class="_st21" width="24.9" height="0.1"/>
                                        <rect y="5.6" class="_st22" width="24.9" height="0.1"/>
                                        <rect y="5.7" class="_st23" width="24.9" height="0.1"/>
                                        <rect y="5.9" class="_st24" width="24.9" height="0.1"/>
                                        <rect y="6" class="_st25" width="24.9" height="0.1"/>
                                        <rect y="6.2" class="_st26" width="24.9" height="0.1"/>
                                        <rect y="6.3" class="_st27" width="24.9" height="0.1"/>
                                        <rect y="6.5" class="_st28" width="24.9" height="0.1"/>
                                        <rect y="6.6" class="_st29" width="24.9" height="0.1"/>
                                        <rect y="6.8" class="_st30" width="24.9" height="0.1"/>
                                        <rect y="6.9" class="_st31" width="24.9" height="0.1"/>
                                        <rect y="7.1" class="_st32" width="24.9" height="0.1"/>
                                        <rect y="7.2" class="_st33" width="24.9" height="0.1"/>
                                        <rect y="7.3" class="_st34" width="24.9" height="0.1"/>
                                        <rect y="7.5" class="_st35" width="24.9" height="0.1"/>
                                        <rect y="7.6" class="_st36" width="24.9" height="0.1"/>
                                        <rect y="7.8" class="_st37" width="24.9" height="0.1"/>
                                        <rect y="7.9" class="_st38" width="24.9" height="0.1"/>
                                        <rect y="8.1" class="_st39" width="24.9" height="0.1"/>
                                        <rect y="8.2" class="_st40" width="24.9" height="0.1"/>
                                        <rect y="8.4" class="_st41" width="24.9" height="0.1"/>
                                        <rect y="8.5" class="_st42" width="24.9" height="0.1"/>
                                        <rect y="8.7" class="_st43" width="24.9" height="0.1"/>
                                        <rect y="8.8" class="_st44" width="24.9" height="0.1"/>
                                        <rect y="8.9" class="_st45" width="24.9" height="0.1"/>
                                        <rect y="9.1" class="_st46" width="24.9" height="0.1"/>
                                        <rect y="9.2" class="_st47" width="24.9" height="0.1"/>
                                        <rect y="9.4" class="_st48" width="24.9" height="0.1"/>
                                        <rect y="9.5" class="_st49" width="24.9" height="0.1"/>
                                        <rect y="9.7" class="_st50" width="24.9" height="0.1"/>
                                        <rect y="9.8" class="_st51" width="24.9" height="0.1"/>
                                        <rect y="10" class="_st52" width="24.9" height="0.1"/>
                                        <rect y="10.1" class="_st53" width="24.9" height="0.1"/>
                                        <rect y="10.3" class="_st54" width="24.9" height="0.1"/>
                                        <rect y="10.4" class="_st55" width="24.9" height="0.1"/>
                                        <rect y="10.5" class="_st56" width="24.9" height="0.1"/>
                                        <rect y="10.7" class="_st57" width="24.9" height="0.1"/>
                                        <rect y="10.8" class="_st58" width="24.9" height="0.1"/>
                                        <rect y="11" class="_st59" width="24.9" height="0.1"/>
                                        <rect y="11.1" class="_st60" width="24.9" height="0.1"/>
                                        <rect y="11.3" class="_st61" width="24.9" height="0.1"/>
                                        <rect y="11.4" class="_st62" width="24.9" height="0.1"/>
                                        <rect y="11.6" class="_st63" width="24.9" height="0.1"/>
                                        <rect y="11.7" class="_st64" width="24.9" height="0.1"/>
                                        <rect y="11.8" class="_st65" width="24.9" height="0.1"/>
                                        <rect y="12" class="_st66" width="24.9" height="0.1"/>
                                        <rect y="12.1" class="_st67" width="24.9" height="0.1"/>
                                        <rect y="12.3" class="_st68" width="24.9" height="0.1"/>
                                        <rect y="12.4" class="_st69" width="24.9" height="0.1"/>
                                        <rect y="12.6" class="_st70" width="24.9" height="0.1"/>
                                        <rect y="12.7" class="_st71" width="24.9" height="0.1"/>
                                        <rect y="12.9" class="_st72" width="24.9" height="0.1"/>
                                        <rect y="13" class="_st72" width="24.9" height="0.1"/>
                                        <rect y="13.1" class="_st73" width="24.9" height="0.1"/>
                                        <rect y="13.2" class="_st74" width="24.9" height="0.1"/>
                                        <rect y="13.3" class="_st75" width="24.9" height="0.1"/>
                                        <rect y="13.4" class="_st76" width="24.9" height="0.1"/>
                                        <rect y="13.6" class="_st77" width="24.9" height="0.1"/>
                                        <rect y="13.7" class="_st78" width="24.9" height="0.1"/>
                                        <rect y="13.8" class="_st79" width="24.9" height="0.1"/>
                                        <rect y="13.9" class="_st80" width="24.9" height="0.1"/>
                                        <rect y="14" class="_st81" width="24.9" height="0.1"/>
                                        <rect y="14.1" class="_st82" width="24.9" height="0.1"/>
                                        <rect y="14.2" class="_st83" width="24.9" height="0.1"/>
                                        <rect y="14.3" class="_st84" width="24.9" height="0.1"/>
                                        <rect y="14.4" class="_st85" width="24.9" height="0.1"/>
                                        <rect y="14.5" class="_st86" width="24.9" height="0.1"/>
                                        <rect y="14.6" class="_st87" width="24.9" height="0.1"/>
                                        <rect y="14.7" class="_st88" width="24.9" height="0.1"/>
                                        <rect y="14.8" class="_st89" width="24.9" height="0.1"/>
                                        <rect y="15" class="_st90" width="24.9" height="0.1"/>
                                        <rect y="15.1" class="_st91" width="24.9" height="0.1"/>
                                        <rect y="15.2" class="_st92" width="24.9" height="0.1"/>
                                        <rect y="15.3" class="_st93" width="24.9" height="0.1"/>
                                        <rect y="15.4" class="_st94" width="24.9" height="0.1"/>
                                        <rect y="15.5" class="_st95" width="24.9" height="0.1"/>
                                        <rect y="15.6" class="_st96" width="24.9" height="0.1"/>
                                        <rect y="15.7" class="_st97" width="24.9" height="0.1"/>
                                        <rect y="15.8" class="_st98" width="24.9" height="0.1"/>
                                        <rect y="15.9" class="_st99" width="24.9" height="0.1"/>
                                        <rect y="16" class="_st100" width="24.9" height="0.1"/>
                                        <rect y="16.1" class="_st101" width="24.9" height="0.1"/>
                                        <rect y="16.2" class="_st102" width="24.9" height="0.1"/>
                                        <rect y="16.4" class="_st103" width="24.9" height="0.1"/>
                                        <rect y="16.5" class="_st104" width="24.9" height="0.1"/>
                                        <rect y="16.6" class="_st105" width="24.9" height="0.1"/>
                                        <rect y="16.7" class="_st106" width="24.9" height="0.1"/>
                                        <rect y="16.8" class="_st107" width="24.9" height="0.1"/>
                                        <rect y="16.9" class="_st108" width="24.9" height="0.1"/>
                                        <rect y="17" class="_st109" width="24.9" height="0.1"/>
                                        <rect y="17.1" class="_st110" width="24.9" height="0.1"/>
                                        <rect y="17.2" class="_st111" width="24.9" height="0.1"/>
                                        <rect y="17.3" class="_st112" width="24.9" height="0.1"/>
                                        <rect y="17.4" class="_st113" width="24.9" height="0.1"/>
                                        <rect y="17.5" class="_st114" width="24.9" height="0.1"/>
                                        <rect y="17.7" class="_st115" width="24.9" height="0.1"/>
                                        <rect y="17.8" class="_st116" width="24.9" height="0.1"/>
                                        <rect y="17.9" class="_st117" width="24.9" height="0.1"/>
                                        <rect y="18" class="_st118" width="24.9" height="0.1"/>
                                        <rect y="18.1" class="_st119" width="24.9" height="0.1"/>
                                        <rect y="18.2" class="_st120" width="24.9" height="0.1"/>
                                        <rect y="18.3" class="_st121" width="24.9" height="0.1"/>
                                        <rect y="18.4" class="_st122" width="24.9" height="0.1"/>
                                        <rect y="18.5" class="_st123" width="24.9" height="0.1"/>
                                        <rect y="18.6" class="_st124" width="24.9" height="0.1"/>
                                        <rect y="18.7" class="_st125" width="24.9" height="0.1"/>
                                        <rect y="18.8" class="_st126" width="24.9" height="0.1"/>
                                        <rect y="18.9" class="_st127" width="24.9" height="0.1"/>
                                        <rect y="19.1" class="_st128" width="24.9" height="0.1"/>
                                        <rect y="19.2" class="_st129" width="24.9" height="0.1"/>
                                        <rect y="19.3" class="_st130" width="24.9" height="0.1"/>
                                        <rect y="19.4" class="_st131" width="24.9" height="0.1"/>
                                        <rect y="19.5" class="_st132" width="24.9" height="0.1"/>
                                        <rect y="19.6" class="_st133" width="24.9" height="0.1"/>
                                        <rect y="19.7" class="_st134" width="24.9" height="0.1"/>
                                        <rect y="19.8" class="_st135" width="24.9" height="0.1"/>
                                        <rect y="19.9" class="_st136" width="24.9" height="0.1"/>
                                        <rect y="20" class="_st137" width="24.9" height="0.1"/>
                                        <rect y="20.1" class="_st138" width="24.9" height="0.1"/>
                                        <rect y="20.2" class="_st139" width="24.9" height="0.1"/>
                                        <rect y="20.3" class="_st140" width="24.9" height="0.1"/>
                                        <rect y="20.5" class="_st141" width="24.9" height="0.1"/>
                                        <rect y="20.6" class="_st142" width="24.9" height="0.1"/>
                                        <rect y="20.7" class="_st143" width="24.9" height="0.1"/>
                                        <rect y="20.8" class="_st144" width="24.9" height="0.1"/>
                                        <rect y="20.9" class="_st145" width="24.9" height="0.1"/>
                                        <rect y="21" class="_st146" width="24.9" height="0.1"/>
                                        <rect y="21.1" class="_st147" width="24.9" height="0.1"/>
                                        <rect y="21.2" class="_st148" width="24.9" height="0.1"/>
                                        <rect y="21.3" class="_st149" width="24.9" height="0.1"/>
                                        <rect y="21.4" class="_st150" width="24.9" height="0.1"/>
                                        <rect y="21.5" class="_st151" width="24.9" height="0.1"/>
                                        <rect y="21.6" class="_st152" width="24.9" height="0.1"/>
                                        <rect y="21.8" class="_st153" width="24.9" height="0.1"/>
                                        <rect y="21.9" class="_st154" width="24.9" height="0.1"/>
                                        <rect y="22" class="_st155" width="24.9" height="0.1"/>
                                        <rect y="22.1" class="_st156" width="24.9" height="0.1"/>
                                        <rect y="22.2" class="_st157" width="24.9" height="0.1"/>
                                        <rect y="22.3" class="_st158" width="24.9" height="0.1"/>
                                        <rect y="22.4" class="_st159" width="24.9" height="0.1"/>
                                        <rect y="22.5" class="_st177" width="24.9" height="0.1"/>
                                        <rect y="22.6" class="_st178" width="24.9" height="0.1"/>
                                        <rect y="22.7" class="_st179" width="24.9" height="0.1"/>
                                        <rect y="22.8" class="_st180" width="24.9" height="0.1"/>
                                        <rect y="22.9" class="_st181" width="24.9" height="0.1"/>
                                        <rect y="23" class="_st182" width="24.9" height="0.1"/>
                                        <rect y="23.2" class="_st183" width="24.9" height="0.1"/>
                                        <rect y="23.3" class="_st184" width="24.9" height="0.1"/>
                                        <rect y="23.4" class="_st185" width="24.9" height="0.1"/>
                                        <rect y="23.5" class="_st186" width="24.9" height="0.1"/>
                                        <rect y="23.6" class="_st187" width="24.9" height="0.1"/>
                                        <rect y="23.7" class="_st188" width="24.9" height="0.1"/>
                                        <rect y="23.8" class="_st189" width="24.9" height="0.1"/>
                                        <rect y="23.9" class="_st190" width="24.9" height="0.1"/>
                                        <rect y="24" class="_st191" width="24.9" height="0.1"/>
                                        <rect y="24.1" class="_st192" width="24.9" height="0.1"/>
                                        <rect y="24.2" class="_st193" width="24.9" height="0.1"/>
                                        <rect y="24.3" class="_st194" width="24.9" height="0.1"/>
                                        <rect y="24.4" class="_st195" width="24.9" height="0.1"/>
                                        <rect y="24.6" class="_st196" width="24.9" height="0.1"/>
                                        <rect y="24.7" class="_st197" width="24.9" height="0.1"/>
                                        <rect y="24.8" class="_st198" width="24.9" height="0.1"/>
                                        <rect y="24.9" class="_st198" width="24.9" height="0.1"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <defs>
                                            <path id="SVGID_3_" d="M12.5,6C8.9,6,6,8.9,6,12.5c0,3.6,2.9,6.5,6.5,6.5s6.5-2.9,6.5-6.5C18.9,8.9,16,6,12.5,6z M12.5,16.4
					c-2.2,0-3.9-1.8-3.9-3.9c0-2.2,1.8-3.9,3.9-3.9c2.2,0,3.9,1.8,3.9,3.9C16.4,14.6,14.6,16.4,12.5,16.4z"/>
                                        </defs>
                                        <clipPath id="SVGID_4_">
                                            <use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <rect x="8.5" y="8.5" class="_st199" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="8.6" class="_st200" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="8.8" class="_st201" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="8.9" class="_st202" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="9.1" class="_st203" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="9.2" class="_st204" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="9.4" class="_st205" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="9.5" class="_st206" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="9.7" class="_st207" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="9.8" class="_st208" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="10" class="_st209" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="10.1" class="_st210" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="10.2" class="_st211" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="10.4" class="_st212" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="10.5" class="_st213" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="10.7" class="_st214" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="10.8" class="_st215" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="11" class="_st216" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="11.1" class="_st217" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="11.3" class="_st218" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="11.4" class="_st219" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="11.5" class="_st220" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="11.7" class="_st221" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="11.8" class="_st222" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="12" class="_st223" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="12.1" class="_st224" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="12.3" class="_st225" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="12.4" class="_st226" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="12.6" class="_st227" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="12.7" class="_st228" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="12.9" class="_st229" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="13" class="_st229" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="13.1" class="_st230" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="13.2" class="_st231" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="13.3" class="_st232" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="13.4" class="_st233" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="13.5" class="_st234" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="13.6" class="_st235" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="13.8" class="_st236" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="13.9" class="_st237" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="14" class="_st238" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="14.1" class="_st239" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="14.2" class="_st240" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="14.3" class="_st241" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="14.4" class="_st242" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="14.5" class="_st243" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="14.6" class="_st244" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="14.7" class="_st245" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="14.8" class="_st246" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="14.9" class="_st247" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="15" class="_st248" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="15.2" class="_st249" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="15.3" class="_st250" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="15.4" class="_st251" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="15.5" class="_st252" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="15.6" class="_st253" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="15.7" class="_st254" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="15.8" class="_st255" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="15.9" class="_st256" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="16" class="_st257" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="16.1" class="_st258" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="16.2" class="_st259" width="7.9" height="0.1"/>
                                        <rect x="8.5" y="16.3" class="_st260" width="7.9" height="0.1"/>
                                        <rect x="6" y="6" class="_st261" width="12.9" height="0"/>
                                        <rect x="6" y="6" class="_st262" width="12.9" height="0.1"/>
                                        <rect x="6" y="6.2" class="_st263" width="12.9" height="0.1"/>
                                        <rect x="6" y="6.3" class="_st264" width="12.9" height="0.1"/>
                                        <rect x="6" y="6.5" class="_st265" width="12.9" height="0.1"/>
                                        <rect x="6" y="6.6" class="_st266" width="12.9" height="0.1"/>
                                        <rect x="6" y="6.8" class="_st267" width="12.9" height="0.1"/>
                                        <rect x="6" y="6.9" class="_st268" width="12.9" height="0.1"/>
                                        <rect x="6" y="7" class="_st269" width="12.9" height="0.1"/>
                                        <rect x="6" y="7.2" class="_st270" width="12.9" height="0.1"/>
                                        <rect x="6" y="7.3" class="_st271" width="12.9" height="0.1"/>
                                        <rect x="6" y="7.5" class="_st272" width="12.9" height="0.1"/>
                                        <rect x="6" y="7.6" class="_st273" width="12.9" height="0.1"/>
                                        <rect x="6" y="7.8" class="_st274" width="12.9" height="0.1"/>
                                        <rect x="6" y="7.9" class="_st275" width="12.9" height="0.1"/>
                                        <rect x="6" y="8.1" class="_st276" width="12.9" height="0.1"/>
                                        <rect x="6" y="8.2" class="_st277" width="12.9" height="0.1"/>
                                        <rect x="6" y="8.4" class="_st278" width="12.9" height="0.1"/>
                                        <rect x="6" y="8.5" class="_st199" width="12.9" height="0.1"/>
                                        <rect x="6" y="8.6" class="_st200" width="12.9" height="0.1"/>
                                        <rect x="6" y="8.8" class="_st201" width="12.9" height="0.1"/>
                                        <rect x="6" y="8.9" class="_st202" width="12.9" height="0.1"/>
                                        <rect x="6" y="9.1" class="_st203" width="12.9" height="0.1"/>
                                        <rect x="6" y="9.2" class="_st204" width="12.9" height="0.1"/>
                                        <rect x="6" y="9.4" class="_st205" width="12.9" height="0.1"/>
                                        <rect x="6" y="9.5" class="_st206" width="12.9" height="0.1"/>
                                        <rect x="6" y="9.7" class="_st207" width="12.9" height="0.1"/>
                                        <rect x="6" y="9.8" class="_st208" width="12.9" height="0.1"/>
                                        <rect x="6" y="10" class="_st209" width="12.9" height="0.1"/>
                                        <rect x="6" y="10.1" class="_st210" width="12.9" height="0.1"/>
                                        <rect x="6" y="10.2" class="_st211" width="12.9" height="0.1"/>
                                        <rect x="6" y="10.4" class="_st212" width="12.9" height="0.1"/>
                                        <rect x="6" y="10.5" class="_st213" width="12.9" height="0.1"/>
                                        <rect x="6" y="10.7" class="_st214" width="12.9" height="0.1"/>
                                        <rect x="6" y="10.8" class="_st215" width="12.9" height="0.1"/>
                                        <rect x="6" y="11" class="_st216" width="12.9" height="0.1"/>
                                        <rect x="6" y="11.1" class="_st217" width="12.9" height="0.1"/>
                                        <rect x="6" y="11.3" class="_st218" width="12.9" height="0.1"/>
                                        <rect x="6" y="11.4" class="_st219" width="12.9" height="0.1"/>
                                        <rect x="6" y="11.5" class="_st220" width="12.9" height="0.1"/>
                                        <rect x="6" y="11.7" class="_st221" width="12.9" height="0.1"/>
                                        <rect x="6" y="11.8" class="_st222" width="12.9" height="0.1"/>
                                        <rect x="6" y="12" class="_st223" width="12.9" height="0.1"/>
                                        <rect x="6" y="12.1" class="_st224" width="12.9" height="0.1"/>
                                        <rect x="6" y="12.3" class="_st225" width="12.9" height="0.1"/>
                                        <rect x="6" y="12.4" class="_st226" width="12.9" height="0.1"/>
                                        <rect x="6" y="12.6" class="_st227" width="12.9" height="0.1"/>
                                        <rect x="6" y="12.7" class="_st228" width="12.9" height="0.1"/>
                                        <rect x="6" y="12.9" class="_st229" width="12.9" height="0.1"/>
                                        <rect x="6" y="13" class="_st229" width="12.9" height="0.1"/>
                                        <rect x="6" y="13.1" class="_st230" width="12.9" height="0.1"/>
                                        <rect x="6" y="13.2" class="_st231" width="12.9" height="0.1"/>
                                        <rect x="6" y="13.3" class="_st232" width="12.9" height="0.1"/>
                                        <rect x="6" y="13.4" class="_st233" width="12.9" height="0.1"/>
                                        <rect x="6" y="13.5" class="_st234" width="12.9" height="0.1"/>
                                        <rect x="6" y="13.6" class="_st235" width="12.9" height="0.1"/>
                                        <rect x="6" y="13.8" class="_st236" width="12.9" height="0.1"/>
                                        <rect x="6" y="13.9" class="_st237" width="12.9" height="0.1"/>
                                        <rect x="6" y="14" class="_st238" width="12.9" height="0.1"/>
                                        <rect x="6" y="14.1" class="_st239" width="12.9" height="0.1"/>
                                        <rect x="6" y="14.2" class="_st240" width="12.9" height="0.1"/>
                                        <rect x="6" y="14.3" class="_st241" width="12.9" height="0.1"/>
                                        <rect x="6" y="14.4" class="_st242" width="12.9" height="0.1"/>
                                        <rect x="6" y="14.5" class="_st243" width="12.9" height="0.1"/>
                                        <rect x="6" y="14.6" class="_st244" width="12.9" height="0.1"/>
                                        <rect x="6" y="14.7" class="_st245" width="12.9" height="0.1"/>
                                        <rect x="6" y="14.8" class="_st246" width="12.9" height="0.1"/>
                                        <rect x="6" y="14.9" class="_st247" width="12.9" height="0.1"/>
                                        <rect x="6" y="15" class="_st248" width="12.9" height="0.1"/>
                                        <rect x="6" y="15.2" class="_st249" width="12.9" height="0.1"/>
                                        <rect x="6" y="15.3" class="_st250" width="12.9" height="0.1"/>
                                        <rect x="6" y="15.4" class="_st251" width="12.9" height="0.1"/>
                                        <rect x="6" y="15.5" class="_st252" width="12.9" height="0.1"/>
                                        <rect x="6" y="15.6" class="_st253" width="12.9" height="0.1"/>
                                        <rect x="6" y="15.7" class="_st254" width="12.9" height="0.1"/>
                                        <rect x="6" y="15.8" class="_st255" width="12.9" height="0.1"/>
                                        <rect x="6" y="15.9" class="_st256" width="12.9" height="0.1"/>
                                        <rect x="6" y="16" class="_st257" width="12.9" height="0.1"/>
                                        <rect x="6" y="16.1" class="_st258" width="12.9" height="0.1"/>
                                        <rect x="6" y="16.2" class="_st259" width="12.9" height="0.1"/>
                                        <rect x="6" y="16.3" class="_st260" width="12.9" height="0.1"/>
                                        <rect x="6" y="16.4" class="_st279" width="12.9" height="0.1"/>
                                        <rect x="6" y="16.6" class="_st280" width="12.9" height="0.1"/>
                                        <rect x="6" y="16.7" class="_st281" width="12.9" height="0.1"/>
                                        <rect x="6" y="16.8" class="_st282" width="12.9" height="0.1"/>
                                        <rect x="6" y="16.9" class="_st283" width="12.9" height="0.1"/>
                                        <rect x="6" y="17" class="_st284" width="12.9" height="0.1"/>
                                        <rect x="6" y="17.1" class="_st285" width="12.9" height="0.1"/>
                                        <rect x="6" y="17.2" class="_st286" width="12.9" height="0.1"/>
                                        <rect x="6" y="17.3" class="_st287" width="12.9" height="0.1"/>
                                        <rect x="6" y="17.4" class="_st288" width="12.9" height="0.1"/>
                                        <rect x="6" y="17.5" class="_st289" width="12.9" height="0.1"/>
                                        <rect x="6" y="17.6" class="_st290" width="12.9" height="0.1"/>
                                        <rect x="6" y="17.7" class="_st291" width="12.9" height="0.1"/>
                                        <rect x="6" y="17.8" class="_st292" width="12.9" height="0.1"/>
                                        <rect x="6" y="18" class="_st293" width="12.9" height="0.1"/>
                                        <rect x="6" y="18.1" class="_st294" width="12.9" height="0.1"/>
                                        <rect x="6" y="18.2" class="_st295" width="12.9" height="0.1"/>
                                        <rect x="6" y="18.3" class="_st296" width="12.9" height="0.1"/>
                                        <rect x="6" y="18.4" class="_st297" width="12.9" height="0.1"/>
                                        <rect x="6" y="18.5" class="_st298" width="12.9" height="0.1"/>
                                        <rect x="6" y="18.6" class="_st299" width="12.9" height="0.1"/>
                                        <rect x="6" y="18.7" class="_st300" width="12.9" height="0.1"/>
                                        <rect x="6" y="18.8" class="_st301" width="12.9" height="0.1"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <defs>
                                            <circle id="SVGID_5_" cx="18.9" cy="6.1" r="1.5"/>
                                        </defs>
                                        <clipPath id="SVGID_6_">
                                            <use xlink:href="#SVGID_5_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <rect x="17.4" y="4.5" class="_st302" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="4.6" class="_st303" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="4.7" class="_st304" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="4.9" class="_st305" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="5" class="_st306" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="5.2" class="_st307" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="5.3" class="_st308" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="5.5" class="_st309" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="5.6" class="_st310" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="5.7" class="_st311" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="5.9" class="_st312" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="6" class="_st313" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="6.2" class="_st314" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="6.3" class="_st315" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="6.5" class="_st316" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="6.6" class="_st317" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="6.8" class="_st318" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="6.9" class="_st319" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="7" class="_st320" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="7.2" class="_st321" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="7.3" class="_st322" width="3.1" height="0.1"/>
                                        <rect x="17.4" y="7.5" class="_st323" width="3.1" height="0.1"/>
                                    </g>
                                </g>
                            </g>
</svg>
                        <span>instagram</span>
                    </a>
                <?php endif; ?>
                <?php
                if ($contacts['viber']): ?>
                    <a href="<?= $contacts['viber'] ?>" class="contacts_social-item">
                        <svg version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                             x="0px" y="0px" width="25px" height="26.4px" viewBox="0 0 25 26.4" style="enable-background:new 0 0 25 26.4;"
                             xml:space="preserve">
<defs>
</defs>
                            <g>
                                <path style="fill:#FFFFFF;" d="M22.2,2.6C21.5,2,18.9,0,13,0c0,0-7-0.4-10.3,2.7C0.7,4.6,0.1,7.4,0,10.8s-0.2,9.8,6,11.6l0,0L6,25
		c0,0,0,1.1,0.7,1.3c0.9,0.3,1.4-0.6,2.2-1.4c0.4-0.5,1.1-1.2,1.5-1.7c4.2,0.4,7.5-0.5,7.9-0.6c0.9-0.3,5.7-0.9,6.5-7.3
		C25.6,8.6,24.4,4.5,22.2,2.6z"/>
                                <path style="fill:#8E72EB;" d="M20.8,3.9c-0.6-0.5-2.9-2-7.9-2c0,0-5.9-0.4-8.8,2.2C2.5,5.7,2,8,1.9,10.9c-0.1,2.9-0.4,8.3,4.9,9.8l0,4.4
		c0,0.2,0,0.4,0.2,0.5c0.1,0,0.3,0,0.4-0.2c0.8-0.8,3.5-4.1,3.5-4.1c3.6,0.2,6.5-0.5,6.8-0.6c0.7-0.2,4.6-0.6,5.3-5.9
		C23.6,9.3,22.6,5.5,20.8,3.9z M18.6,16.9L18.6,16.9c-0.3,0.5-0.6,0.9-1,1.3l0,0c-0.5,0.4-1,0.6-1.6,0.4l0,0
		c-1.1-0.3-3.6-1.6-5.3-2.9C8,13.6,6.1,10.2,5.6,8.3l0,0C5.4,7.7,5.6,7.1,6,6.6l0,0c0.4-0.4,0.8-0.8,1.3-1l0,0
		c0.5-0.2,0.9-0.2,1.2,0.2c0.4,0.4,1.2,1.4,1.7,2.4c0.3,0.6,0.1,1.1-0.2,1.4L9.4,10c-0.3,0.3-0.3,0.7-0.3,0.7s0.9,3.5,4.3,4.3
		c0,0,0.5,0,0.7-0.3l0.5-0.6c0.2-0.3,0.8-0.5,1.4-0.2c0.7,0.4,1.7,1.1,2.4,1.7C18.8,16,18.9,16.5,18.6,16.9z M12.9,7.1
		c-0.2,0-0.3-0.2-0.3-0.4c0-0.2,0.2-0.3,0.4-0.3c1.4,0.1,2.5,0.6,3.4,1.5c0.8,0.9,1.2,2,1.2,3.3c0,0.2-0.2,0.3-0.3,0.3h0
		c-0.2,0-0.3-0.2-0.3-0.3c0-1.1-0.3-2.1-1-2.8C15.1,7.6,14.1,7.2,12.9,7.1z M15.7,10.6c0,0.2-0.1,0.3-0.3,0.4h0
		c-0.2,0-0.3-0.1-0.3-0.3C15,9.5,14.5,9,13.4,8.9c-0.2,0-0.3-0.2-0.3-0.4c0-0.2,0.2-0.3,0.4-0.3C14.9,8.3,15.7,9.1,15.7,10.6z
		 M18.9,12.2L18.9,12.2c-0.2,0-0.3-0.1-0.3-0.3c0-2-0.6-3.6-1.8-4.8c-1.2-1.1-2.7-1.7-4.4-1.7c-0.2,0-0.3-0.2-0.3-0.3
		c0-0.2,0.2-0.3,0.3-0.3h0c1.9,0,3.6,0.7,4.9,1.9c1.3,1.3,2,3,2,5.2C19.2,12.1,19.1,12.2,18.9,12.2z"/>
                            </g>
</svg>
                        <span>viber</span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="contacts_section contacts_right">
            <div class="contacts_right-top">
                <div class="widget_nav-wrap">
                    <div class="widget_nav-head"><?= Yii::t('app', 'Маршрут от') ?></div>
                    <div class="widget_nav-box page_nav__tablets">
                        <div class="widget_select-head">
                            <svg class="icon-svg-road">
                                <use xlink:href="/img/sprite.svg#road" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                            </svg>
                            <span><?= Yii::t('app', 'Выберите пункт') ?></span>
                            <svg class="icon-svg-arr-down-1">
                                <use xlink:href="/img/sprite.svg#arr-down-1" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                            </svg>
                        </div>
                        <div class="widget_select-dropdown">
                            <a href="javascript:void(0);" class="widget_select-dropdown-item">Павла Чубинского, 2</a> <a href="javascript:void(0);" class="widget_select-dropdown-item current">Горького, 5-Г</a>
                        </div>
                    </div>
                </div>
                <a href="https://www.google.com/maps/place/%D0%96%D0%9A+%D0%A1%D0%BE%D1%84%D0%B8%D1%8F+%D0%9A%D0%B8%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F/@50.404103,30.3587509,17z/data=!3m1!4b1!4m5!3m4!1s0x40d4cbb67cd1bb9b:0xbdc69073d1068d86!8m2!3d50.404103!4d30.3609396" class="gmap_link" target="_blank">
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
            <div class="contacts_right-map">
                <!--<div class="marker_info">ЖК «София Киевская»</div><div class="marker_info">ЖК «София Киевская»</div>-->
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>
<script>
    function initMap() {
        var uluru = {lat: 50.4041064, lng: 30.360949};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru
        });

        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: '/img/mapMarker.svg',
        });

        var contentString = '<div class="marker_info">ЖК «София Киевская»</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2_6LhSULG58-LHtShe82FcuAcKZuHzxs&callback=initMap" async defer></script>