<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0">
	<meta http-equiv="cleartype" content="on">

	<style>
		.page {
			height: 100%;
			visibility: hidden;
			opacity: 0;
			transition: opacity .2s ease-in, visibility .2s ease-in;
			transition-delay: .3s;
		}
	</style>
	<link href="css/style.min.css" rel="stylesheet">
	<title>SK - Main</title>
</head>

<body>
<!--<div class="">-->
<div class="page page_main">
	<?php include 'views/templates/header.html'; ?>  <?php include 'views/pages/main/main.html'; ?>  <?php include 'views/templates/footer.html'; ?>  <?php include 'views/templates/menu_popup.html'; ?>
</div>

<script async type="text/javascript" src="js/scripts.min.js"></script>
<script type="text/javascript">
    (function (d, w, s) {
        var widgetHash = 'cmmz33h70ut08wiw7hyb', gcw = d.createElement(s);
        gcw.type = 'text/javascript';
        gcw.async = true;
        gcw.src = '//widgets.binotel.com/getcall/widgets/' + widgetHash + '.js';
        var sn = d.getElementsByTagName(s)[0];
        sn.parentNode.insertBefore(gcw, sn);
    })(document, window, 'script');
</script>

<div class="jivo-btn jivo-online-btn jivo-btn-light" onclick="jivo_api.open();" >Напишите нам, мы в онлайне!</div>
<script type='text/javascript'>
    (function () {
        var widget_id = 'tIMtJAixfk';
        var d = document;
        var w = window;

        function l() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//code.jivosite.com/script/widget/' + widget_id;
            var ss = document.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss);
        }

        if (d.readyState == 'complete') {
            l();
        } else {
            if (w.attachEvent) {
                w.attachEvent('onload', l);
            } else {
                w.addEventListener('load', l, false);
            }
        }
    })();

    $('.jivo-st0').on('click', function () {
		    console.log('123')
    })
</script>


</body>
</html>
