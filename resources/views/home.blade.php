
<!DOCTYPE html>
<html lang="en">
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
    <title>Zakatin - Home</title>
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
	<div class="main-wrapper">
        <nav class="navbar navbar-top fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <!-- <img src="/v2/img/brand-img.svg" width="109" height="28"> -->
                    <h3>Logo</h3>
                </a>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link p-0" href="/search">
                            <span class="icon"><i class="material-icons">search</i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-bottom fixed-bottom">
            <div class="container p-0">
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item flex-fill">
                        <a class="nav-link p-0 active" href="/">
                            <span class="icon"><i class="material-icons">home</i></span>
                            <span class="nav-title">Home</span>
                        </a>
                    </li>
                    <li class="nav-item flex-fill">
                        <a class="nav-link p-0" href="#">
                            <span class="icon"><i class="material-icons">article</i></span>
                            <span class="nav-title">Kanal</span>
                        </a>
                    </li>
                    <li class="nav-item flex-fill">
                        <a class="nav-link p-0" href="#">
                            <span class="icon"><i class="material-icons">campaign</i></span>
                            <span class="nav-title">Galang Dana</span>
                        </a>
                    </li>
                    <li class="nav-item flex-fill">
                        <a class="nav-link p-0" href="#">
                            <span class="icon"><i class="material-icons">list_alt</i></span>
                            <span class="nav-title">Transaksi</span>
                        </a>
                    </li>
                    <li class="nav-item flex-fill">
                        <a class="nav-link p-0" href="#">
                            <span class="icon"><i class="material-icons">account_circle</i></span>
                            <span class="nav-title">Profil</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
	<main>
	<section class="bg-white pb-2">
		<div class="container">
			<div class="row">
				<div class="owl-carousel owl-theme" id="slideFeatured">
				<div class="item">
						<a href="#">
							<img src="https://zakatin.com/v2/img/slider/slider-zakat-dec-21.jpg" width="312" height="128" class="img-slide fit-cover">
						</a>
					</div>
					<div class="item">
						<a href="#">
							<img src="https://zakatin.com/v2/img/slider/banner-lebaran.jpg" width="312" height="128" class="img-slide fit-cover">
						</a>
					</div>
					<div class="item">
						<a href="#">
							<img src="https://zakatin.com/v2/img/slider/yzmu-juli-2.jpg" width="312" height="128" class="img-slide fit-cover">
						</a>
					</div>
					
					<div class="item">
						<a href="#">
							<img src="https://zakatin.com/v2/img/slider/slider-4.webp" width="312" height="128" class="img-slide fit-cover">
						</a>
					</div>	
				</div>
			</div>
		</div>
	</section>

	<section class="bg-white shadow-bottom pb-0 mb-4">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-3 mb-3">
					<a href="https://zakatin.com/zakats" class="d-flex flex-column align-items-center text-center">
						<span class="icon-container px-0 py-0 mb-2">
							<img src="https://zakatin.com/v2/img/zakat.svg" loading="lazy" width="56" height="56">
						</span>
						<span class="font-weight-semibold">Zakat</span>
					</a>
				</div>
				<div class="col-3 mb-3">
					<a href="https://zakatin.com/campaigns" class="d-flex flex-column align-items-center text-center">
						<span class="icon-container px-0 py-0 mb-2">
							<img src="https://zakatin.com/v2/img/donasi.svg" loading="lazy" width="56" height="56">
						</span>
						<span class="font-weight-semibold">Donasi</span>
					</a>
				</div>
				<div class="col-3 mb-3">
					<a href=						https://zakatin.com/infak-subuh
						 class="d-flex flex-column align-items-center text-center">
						<span class="icon-container px-0 py-0 mb-2">
							<img src="https://zakatin.com/v2/img/infak-subuh.svg" loading="lazy" width="56" height="56">
						</span>
						<span class="font-weight-semibold">Infak Subuh</span>
					</a>
				</div>
				
				
			</div>
		</div>
	</section>

	<section>
    @if ($sliders->isNotEmpty())
        @foreach ($sliders as $slider)
		<div class="container">
			<h6 class="section-title">{{ $slider->name }}</h6>
			<div class="owl-carousel owl-theme" id="slideCampaign">
                @foreach ($slider->campaigns as $campaign)
				<div class="item">
                    <x-card-campaign :campaign="$campaign" />
				</div>
                @endforeach
            </div>
		</div>
        @endforeach
     @endif
	</section>

	<section>
		<div class="container">
			<h6 class="section-title">Bantu Sesama Mulai dari yang Terdekat</h6>
			<a href="#modalMap" data-toggle="modal">
				<img src="https://zakatin.com/v2/img/map.webp" loading="lazy" width="330" height="144" class="img-fluid rounded">
			</a>
		</div>
	</section>

	<div id="campaignList">
	</div>
	<div class="d-none" id="partnerImage">
	
	<img src="https://zakatin.com/v2/img/partner/lazismu.webp" loading="lazy" width="48" height="28" class="fit-contain mx-1 mb-2">
    <img src="https://zakatin.com/v2/img/partner/nu-care.webp" loading="lazy" width="70" height="28" class="fit-contain mx-1 mb-2">
    <img src="https://zakatin.com/v2/img/partner/nurul-hayat.webp" loading="lazy" width="34" height="28" class="fit-contain mx-1 mb-2">
    <img src="https://zakatin.com/v2/img/partner/dewan-dakwah.webp" loading="lazy" width="76" height="28" class="fit-contain mx-1 mb-2">
    <img src="https://zakatin.com/v2/img/partner/wahdah.webp" loading="lazy" width="32" height="28" class="fit-contain mx-1 mb-2">	</div>
	<div class="d-none" id="testimonyItems">
	
	<div class="item">
        <div class="card card-testimony">
            <iframe class="card-img" loading="lazy" width="224" height="128" src="https://www.youtube.com/embed/GthuwgrSbfg" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/GthuwgrSbfg?autoplay=1><img src=https://img.youtube.com/vi/GthuwgrSbfg/hqdefault.jpg alt='Apa Itu Zakatin?'><span>▶</span></a>" title="Apa Itu Zakatin?" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="item">
        <div class="card card-testimony">
            <iframe class="card-img" loading="lazy" width="224" height="128" src="https://www.youtube.com/embed/fHU_tni413s" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/fHU_tni413s?autoplay=1><img src=https://img.youtube.com/vi/fHU_tni413s/hqdefault.jpg alt='Zaky Menemukan Peta Baru'><span>▶</span></a>" title="Zaky Menemukan Peta Baru" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="item">
        <div class="card card-testimony">
            <iframe class="card-img" loading="lazy" width="224" height="128" src="https://www.youtube.com/embed/tp7gJk7zN4A" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/tp7gJk7zN4A?autoplay=1><img src=https://img.youtube.com/vi/tp7gJk7zN4A/hqdefault.jpg alt='Bangun Rumah Guru Ngaji Bersama Ustadz Salim A. Fillah'><span>▶</span></a>" title="Bangun Rumah Guru Ngaji Bersama Ustadz Salim A. Fillah" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>	
    </div>

	<section id="loadCampaignContainer">
		<div class="container">
			<h6 class="text-center font-weight-semibold py-3">
				<a href="javascript:void(0)" class="text-decoration-none" onclick="loadCampaign()" id="load_more">Muat Lebih Banyak</a>
			</h6>
		</div>
	</section>

	
	
	<div class="modal fade" id="modalMap" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-header bg-white sticky-top">
					<h4 class="modal-title w-100">Salurkan ke yang Terdekat</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-container position-relative">
					<div class="map-container"></div>
					<div class="map-search">
						<select class="form-control" id="mapSearch">
							<option></option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</main>

	<script src="https://zakatin.com/v2/js/jquery.min.js"></script>
	<script src="https://zakatin.com/v2/js/popper.min.js"></script>
	<script src="https://zakatin.com/v2/js/bootstrap.min.js"></script>
	<script src="https://zakatin.com/v2/js/mdb.min.js"></script>
	<script src="https://zakatin.com/v2/js/perfect-scrollbar.min.js"></script>
	<script src="https://zakatin.com/v2/vendors/momentjs/js/moment-with-locales.min.js"></script>
	<script src="https://zakatin.com/v2/vendors/autoNumericjs/autoNumeric.js"></script>
	<script src="https://zakatin.com/v2/js/app.js"></script>
	<script src="https://zakatin.com/v2/vendors/owl-carousel/js/owl.carousel.min.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

<script>
	function initMap(datas,center = null) {
		$('.map-container').html('<div id="map" class="map-content"></div>')

		if (center==1) {
			var map = L.map('map', {zoomControl: false}).setView([datas[0].campaign_latitude, datas[0].campaign_longitude], 4);
		} else {
			var map = L.map('map', {zoomControl: false}).setView([-0.789275, 113.921327], 4);
		}
		
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
			iconAnchor: [14, 32],
			popupAnchor: [0, -24]
		});

		for (let i = 0; i < datas.length; i++) {
			const data = datas[i]

			if (data.campaign_longitude && data.campaign_latitude) {
				const marker = L.marker([data.campaign_latitude, data.campaign_longitude], {
					icon: mapIcon
				})

				let progress = 100,
				progressText = ''

				if (data.campaign_amount_need) {
					progress = data.total_campaign_amount / parseInt(data.campaign_amount_need) * 100

					if (data.total_campaign_amount >= parseInt(data.campaign_amount_need) || data.campaign_limit_status == 0 || data.campaign_end_date == null) {
						progress = 100
					} else {
						progress = progress.toFixed(2)
					}
				}

				if (data.campaign_limit_status !== 0) {
					progressText = ' ('+ progress +'%)'
				}

				const content = `<div class="d-flex align-items-center mb-2">
					<img src="`+ data.campaign_image +`" width="56px" height="56px" class="fit-cover rounded mr-2">
					<a href="/`+ data.campaign_custom_link +`" class="font-weight-semibold font-size-sm text-dark truncate-3">`+ data.campaign_name +`</a>
				</div>
				<div class="progress">
					<div class="progress-bar bg-success" role="progressbar" style="width: `+ progress +`%" aria-valuenow="`+ progress +`" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="d-flex justify-content-between">
					<div class="font-size-sm text-left">
						<span class="d-block font-weight-semibold text-success">Rp `+ formatNumber(data.total_campaign_amount) + progressText +`</span>
					</div>
				</div>
				<hr>
				<p class="font-size-sm text-default mb-2">`+ data.campaign_address +`</p>
				<a href="`+ data.campaign_gmaps_url +`" target="_blank" class="font-size-normal font-weight-semibold text-primary d-inline-flex align-items-center">Buka Maps <span class="icon icon-sm"><i class="material-icons">near_me</i></span></a>`

				marker.bindPopup(content, {
					maxWidth : 195
				}).addTo(map);
			}
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

	function initQurbanMap(datas,center = null) {
		$('.map-container').html('<div id="map" class="map-content"></div>')

		if (center==1) {
			var map = L.map('map', {zoomControl: false}).setView([datas[0].data.latitude, datas[0].data.longitude], 4);
		} else {
			var map = L.map('map', {zoomControl: false}).setView([-0.789275, 113.921327], 4);
		}
		
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
			iconAnchor: [14, 32],
			popupAnchor: [0, -24]
		});

		for (let i = 0; i < datas.length; i++) {
			const data = datas[i]
			url = data.data.product_google_maps_url
			
			var regex = new RegExp('@(.*),(.*),');
            var lon_lat_match = url.match(regex);
            var latitude = lon_lat_match[1];
            var longitude = lon_lat_match[2];

			if (longitude && latitude) {
				const marker = L.marker([latitude, longitude], {
					icon: mapIcon
				})

				const content = `<div class="d-flex align-items-center mb-2">
					<img src="`+ data.tpr_image +`" width="56px" height="56px" class="fit-cover rounded mr-2" onerror="this.onerror=null;this.src='/images/default-image-square.png';">
						<div class="">
							<a href="/`+ data.tpr_custom_link +`" class="font-weight-semibold font-size-sm text-dark truncate-3">`+ data.tpr_name +`</a>
						</div>
					</div>
					
				<div class="flex-fill alert alert-light mb-3 p-2" role="alert">
					<div class="font-size-sm text-left">
						<p class="my-1">Harga</p>
						<span class="d-block font-weight-semibold" style="color: #fe7400">Rp `+ formatNumber(data.data.product_price) + `</span>
					</div>
				</div>
				<div class="mb-3">
					<p class="font-size-sm text-default m-0">`+ data.data.product_address +`, `+ data.data.product_district +`, `+ data.data.product_city +`, `+ data.data.product_province +`</p>
				</div>

				<a href="`+ data.data.product_google_maps_url +`" target="_blank" class="font-size-normal font-weight-semibold text-primary d-inline-flex align-items-center">Buka Maps <span class="icon icon-sm"><i class="material-icons">near_me</i></span></a>`

				marker.bindPopup(content, {
					maxWidth : 195
				}).addTo(map);
			}
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
<script src="https://zakatin.com/v2/vendors/select2/js/select2.full.min.js"></script>

<script src="https://zakatin.com/v2/js/helpers/campaign.js"></script>
<script src="https://zakatin.com/v2/js/pages/home.js"></script>
<script>
	$(window).on('load', function () {
		initCarousel()
	})

	$(function () {
		let map
		$('#modalMap').on('shown.bs.modal', function () {
			if (!map) {
				map = getMapData()
			}
		})

		loadCampaign()
		initSelect2()
	})
</script>
	</div>
</body>
</html>
