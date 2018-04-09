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
<div class="page page_news">
	<?php include 'views/templates/header.html'; ?>
	<?php include 'views/pages/news/news-1.html'; ?>
	<?php include 'views/templates/footer.html'; ?>
	<?php include 'views/templates/menu_popup.html'; ?>
</div>

<script async type="text/javascript" src="js/scripts.min.js"></script>
<script type="text/javascript">
	// (function(d, w, s) {
	// 	var widgetHash = 'cmmz33h70ut08wiw7hyb', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
	// 	gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
	// 	var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
	// })(document, window, 'script');
</script>
</body>
</html>
