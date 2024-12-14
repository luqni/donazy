function initCarousel() {
	$('#slideFeatured').owlCarousel({
		center: true,
		items: 2,
		loop: true,
		margin: 12,
		autoWidth:true,
		dots: false,
		responsive: {
			320: {
				items: 2
			}
		}
	});

	$('#slideCampaign').owlCarousel({
		items: 2,
		loop: true,
		margin: 12,
		dots: false,
		responsive: {
			320: {
				items: 2
			}
		}
	});

	$('#slidePartner').owlCarousel({
		items: 1,
		margin: 20,
		autoWidth:true,
		dots: true,
		loop: true,
		nav: false,
		responsive: {
			320: {
				items: 1
			}
		}
	});

	$('#slidePartner .owl-next').on('click', function () {
		$(this).hide()
	})
}

function loadCampaign() {
	const start = $('#campaignList .card-campaign').length

	let length = 12

	$("#load_more").prop("disabled", true);

	$.ajax({
		method: 'GET',
		url: '/api/v2/home-campaigns?start='+ start +'&length='+ length,
	})
	.done(function(res) {
		renderCampaign(start, length, res)
		initCarousel()
		$("#load_more").prop("disabled", false);
	});
}

function getMapData() {
	let query = ''

	const provinceId = $('#mapSearch').val()

	if (provinceId) {
		query = '&province_id='+ provinceId
	}

	$.ajax({
		method: 'GET',
		url: '/api/v2/campaigns?start=0'+ query
	})
	.done(function(res) {
		initMap(res.result.data)
	});
}

function initSelect2() {
	$('#mapSearch').select2({
		placeholder: 'Cari provinsi',
		ajax: {
			url: '/api/v2/provinces?start=0',
			dataType: 'json',
			type: 'GET',
			data: function (params) {
				const query = { keyword: params.term }
				return query;
			},
			processResults: function (data) {
				const res = data.result.data
				return {
					results: $.map(res, function (res) {
						return {
							text: res.province_name,
							id: res.province_id
						}
					})
				};
			}
		}
	}).on('select2:select', function () {
		getMapData()
	})
}