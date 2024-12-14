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
					<div class="owl-carousel owl-theme" id="slideCampaign_{{ $loop->index }}">
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

			<div id="campaignList"></div>
			<div class="d-none" id="partnerImage">
				<img src="https://zakatin.com/v2/img/partner/lazismu.webp" loading="lazy" width="48" height="28" class="fit-contain mx-1 mb-2">
				<img src="https://zakatin.com/v2/img/partner/nu-care.webp" loading="lazy" width="70" height="28" class="fit-contain mx-1 mb-2">
				<img src="https://zakatin.com/v2/img/partner/nurul-hayat.webp" loading="lazy" width="34" height="28" class="fit-contain mx-1 mb-2">
				<img src="https://zakatin.com/v2/img/partner/dewan-dakwah.webp" loading="lazy" width="76" height="28" class="fit-contain mx-1 mb-2">
				<img src="https://zakatin.com/v2/img/partner/wahdah.webp" loading="lazy" width="32" height="28" class="fit-contain mx-1 mb-2">
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

		<script src="https://zakatin.com/v2/vendors/select2/js/select2.full.min.js"></script>

		<script src="https://zakatin.com/v2/js/helpers/campaign.js"></script>
		<!-- <script src="https://zakatin.com/v2/js/pages/home.js"></script> -->
		<script src="{{ mix('js/home.js') }}" defer></script>
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
