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
<div class="page page_contacts">
	<?php include 'views/templates/header.html'; ?>
	<?php include 'views/pages/contacts/contacts.html'; ?>
	<?php include 'views/templates/footer.html'; ?>
	<?php include 'views/templates/menu_popup.html'; ?>
</div>

<script async type="text/javascript" src="js/scripts.min.js"></script>
<script>
    function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2_6LhSULG58-LHtShe82FcuAcKZuHzxs&callback=initMap"
        async defer></script>

<script type="text/javascript">
	// (function(d, w, s) {
	// 	var widgetHash = 'cmmz33h70ut08wiw7hyb', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
	// 	gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
	// 	var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
	// })(document, window, 'script');
</script>
</body>
</html>
