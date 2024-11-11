<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="icon" type="image/png" sizes="16x16" href="https://zakatin.com/v2/img/favicon.png">
	<meta name="description" content="Zakatin adalah peta penemu orang yang butuh bantuanmu.">
    <meta name="keywords" content="zakatin, zakat, donasi, kalkulator zakat">
    <meta property="fb:app_id" content="1667686990037690">
    <meta property="og:url" content="https://zakatin.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Zakatin - Home">
    <meta property="og:image" content="https://zakatin.com/images/logo-big.png">
    <meta property="og:description" content="Zakatin adalah peta penemu orang yang butuh bantuanmu.">
    <meta property="og:site_name" content="Zakatin">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ZakatinC">
    <meta name="twitter:creator" content="@ZakatinC">
    <meta name="twitter:url" content="https://zakatin.com">
    <meta name="twitter:title" content="Zakatin - Home">
    <meta name="twitter:description" content="Zakatin adalah peta penemu orang yang butuh bantuanmu.">
    <meta name="twitter:image" content="https://zakatin.com/images/logo-big.png">
    <meta name="twitter:dnt" content="on">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Web Application Manifest -->
    <link rel="manifest" href="https://zakatin.com/manifest.json">
    <!-- Chrome for Android theme color -->
    <meta name="theme-color" content="#000000">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Zakatin">
    <link rel="icon" sizes="512x512" href="/images/icons/icon-512x512.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Zakatin">
    <link rel="apple-touch-icon" href="/images/icons/icon-512x512.png">


    <link href="/images/icons/splash-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-750x1334.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1242x2208.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-828x1792.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1242x2688.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1536x2048.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1668x2224.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1668x2388.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-2048x2732.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

    <!-- Tile for Win8 -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/icons/icon-512x512.png">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {!! $styles ?? null !!}

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>

    {!! $scripts ?? null !!}

    <script type="text/javascript">
        // Initialize the service worker
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/serviceworker.js', {
                scope: '.'
            }).then(function (registration) {
                // Registration was successful
                // console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
            }, function (err) {
                // registration failed :(
                // console.log('Laravel PWA: ServiceWorker registration failed: ', err);
            });
        }
    </script>	
    <script>
		window.paceOptions = {
			ajax: {
				trackMethods: ['GET', 'POST', 'PUT', 'DELETE', 'REMOVE']
			},
			restartOnRequestAfter: 30
		};
	</script>
	<script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">
	<link rel="stylesheet" href="https://zakatin.com/v2/vendors/pace/minimal.css">
	<link rel="stylesheet" href="https://zakatin.com/v2/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="https://zakatin.com/v2/css/bootstrap.css">
	<link rel="stylesheet" href="https://zakatin.com/v2/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
	<link rel="stylesheet" href="https://zakatin.com/v2/css/app.css">
	<link rel="stylesheet" href="https://zakatin.com/v2/vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://zakatin.com/v2/vendors/owl-carousel/css/owl.theme.default.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>

    <script>
        function initMap(datas) {
            var map = L.map('map', {zoomControl: false}).setView([-0.789275, 113.921327], 4);

            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                maxZoom: 18,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                accessToken: 'pk.eyJ1Ijoiem1yaXN5YWQiLCJhIjoiY2tpa2M0bzhvMDhjNzJ0bzEwYjJ5M3hsNiJ9.tcZ4Ka280apgWO1pkdTjFA'
            }).addTo(map)

            L.control.zoom({
                position : 'bottomright'
            }).addTo(map)

            const mapIcon = L.icon({
                iconUrl: '/v2/img/svg/location_on-24px.svg',
                iconSize: [32, 32],
                iconAnchor: [16, 32],
                popupAnchor: [0, -24]
            });

            for (let i = 0; i < datas.length; i++) {
                const data = datas[i],
                marker = L.marker([data.longitude, data.latitude], {
                    icon: mapIcon
                }),
                content = `<div class="d-flex align-items-center mb-2">
                    <img src="`+ data.image +`" width="56px" height="56px" class="fit-cover rounded mr-2">
                    <a href="/campaigns/donations/1" class="font-weight-semibold font-size-sm text-dark truncate-3">`+ data.title +`</a>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: `+ data.progress +`%" aria-valuenow="`+ data.progress +`" aria-valuemin="0" aria-valuemax="`+ data.progress +`"></div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="font-size-sm text-left">
                        <span class="d-block font-weight-semibold text-success">`+ data.amount +`</span>
                    </div>
                </div>
                <hr>
                <p class="font-size-sm text-default mb-2">`+ data.address +`</p>
                <a href="https://www.google.com/maps/search/?api=1&query=`+ data.longitude +`,`+ data.latitude +`" target="_blank" class="font-size-normal font-weight-semibold text-primary d-inline-flex align-items-center">Buka Maps <span class="icon icon-sm"><i class="material-icons">near_me</i></span></a>`

                marker.bindPopup(content, {
                    maxWidth : 195
                }).addTo(map);
            }

            map.on('popupopen', function(centerMarker) {
                const cM = map.project(centerMarker.popup._latlng),
                zoom = map.getZoom() + 2

                cM.y -= centerMarker.popup._container.clientHeight / 8
                map.setView(map.unproject(cM), zoom, {
                    animate: true
                });
            });
        }
    </script>
    <link rel="stylesheet" href="https://zakatin.com/v2/vendors/select2/css/select2.min.css">
    <link rel="stylesheet" href="https://zakatin.com/v2/vendors/select2/css/select2-materialize.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152428271-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-152428271-1');
    </script>
	<!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '231131437993384');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=231131437993384&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
	<style>
		body{
			-webkit-print-color-adjust: exact;
			background-color:#f5f5f5;
		}

		.main-wrapper{
			max-width: 360px !important;
			margin:0 auto !important;
			background-color:#fff;
		}
	</style>
</head>

<body>
    <!-- <x-loading /> -->

    {!! $slot !!}
</body>

</html>
