<x-app>
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
			<!-- bottom bar -->
			<x-bottom-bar />
		<main>
		@if ($banners->isNotEmpty())
		<section class="bg-white pb-2">
			<div class="container">
				<div class="row">
					<div class="owl-carousel owl-theme" id="slideFeatured">
						@foreach ($banners as $banner)
						<div class="item">
							<a href="#">
								<img src="{{ $banner->thumbnail_url }}" width="312" height="128" class="img-slide fit-cover">
							</a>
						</div>
						@endforeach
						<!-- <div class="item">
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
						</div>	 -->
					</div>
				</div>
			</div>
		</section>
		@endif
		<section class="bg-white shadow-bottom pb-0 mb-4">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-3 mb-3">
						<a href="#" class="d-flex flex-column align-items-center text-center">
							<span class="icon-container px-0 py-0 mb-2">
								<img src="https://zakatin.com/v2/img/zakat.svg" loading="lazy" width="56" height="56">
							</span>
							<span class="font-weight-semibold">Zakat</span>
						</a>
					</div>
					<div class="col-3 mb-3">
						<a href="#" class="d-flex flex-column align-items-center text-center">
							<span class="icon-container px-0 py-0 mb-2">
								<img src="https://zakatin.com/v2/img/donasi.svg" loading="lazy" width="56" height="56">
							</span>
							<span class="font-weight-semibold">Donasi</span>
						</a>
					</div>
					<div class="col-3 mb-3">
						<a href="#" class="d-flex flex-column align-items-center text-center">
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
</x-app>
