@php
use Illuminate\Support\Str;
@endphp
<x-app>
<div class="main-wrapper">
	<nav class="navbar navbar-top fixed-top">
	    <div class="container d-block">
            <div class="d-flex align-items-center">
                <a href="/" class="d-block text-default mr-3">
                    <span class="icon"><i class="material-icons">arrow_back</i></span>
                </a>
                <h5 class="page-title d-none mr-3" id="titleFade">{{ $campaign->name }}</h5>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link p-0" href="#modalShare" data-toggle="modal" role="button">
                            <span class="icon"><i class="material-icons">share</i></span>
                        </a>
                    </li>
                </ul>
            </div>  
	    </div>
    </nav>
    <nav class="navbar navbar-bottom fixed-bottom shadow-top">
	    <div class="container">
            @if ($campaign->canClose() && !$campaign->isClosed())
				<a href="{{ !$campaign->isClosed() ? route('campaigns.transactions.create', ['slug' => $campaign->slug]) : '#' }}" class="btn btn-block btn-primary ">Donasi Sekarang</a>
            @else
                <a href="javascript:void(0);" class="btn btn-block btn-primary disabled" aria-disabled="true">Donasi Ditutup</a>
            @endif
		</div>
    
    </nav>
	
    <script>
    fbq('track', 'ViewContent');
    </script>

    <main>
        <section class="bg-white shadow-bottom mb-3 py-0">
            <div class="container">
                <h3 class="font-weight-bold">{{ $campaign->name }}</h3>
                <div class="row">
                    <img src="{{ $campaign->original_cover_url }}" height="270px" width="360px" class="fit-cover mb-3">
                </div>
                <div class="progress my-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $campaign->collected_funds_percentage }}" aria-valuenow="7476466" aria-valuemin="0" aria-valuemax=""></div>
                </div>
                <p class="text-success mb-1">Terkumpul</p>
                <h6 class="text-success font-weight-semibold mb-4">@idr($campaign->collected_funds)</h6>
                <div class="row">
                    <div class="col-6 text-default mb-3">Kategori donasi</div>
                    <div class="col-6 text-right mb-3">Lainnya</div>
                    @if ($campaign->canClose() && !$campaign->isClosed())
                        <div class="col-6 text-default mb-3">Sisa hari</div>
                        @if ($campaign->time_left > 0)
                            <div class="col-6 text-right mb-3">{{ $campaign->time_left }} hari lagi</div>
                        @else
                            <div class="col-6 text-right mb-3">Hari terakhir</div>
                        @endif
                    @endif
                    <div class="col-6 text-default mb-3">
                        <a href="#modalDonator" role="button" data-toggle="modal">
                            <ul class="list-inline img-stacked">
                                <li class="list-inline-item"><img src="https://zakatin.com/v2/img/avatar.png" width="24px" height="24px" class="rounded-circle fit-cover"></li>
                                <li class="list-inline-item"><img src="https://zakatin.com/v2/img/avatar.png" width="24px" height="24px" class="rounded-circle fit-cover"></li>
                                <li class="list-inline-item"><img src="https://zakatin.com/v2/img/avatar.png" width="24px" height="24px" class="rounded-circle fit-cover"></li>
                                <li class="list-inline-item"><img src="https://zakatin.com/v2/img/avatar.png" width="24px" height="24px" class="rounded-circle fit-cover"></li>
                                @if ($campaign->donors >= 99)
                                <li class="list-inline-item text-default">99+</li>
                                @else
                                <li class="list-inline-item text-default">{{ $campaign->donors }}</li>
                                @endif
                            </ul>
                        </a>
                    </div>
                    <div class="col-6 text-right mb-3">{{ $campaign->donors }} donatur telah bergabung</div>
                </div>
                <div class="row px-3">
                    <ul class="nav flex-nowrap">
                        <li class="nav-item">
                            <a class="nav-link text-nowrap px-0 mr-4 active" data-toggle="tab" href="#detail" role="tab" aria-selected="true">Info Detail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-nowrap px-0 mr-4" id="donatorNavTab" data-toggle="tab" href="#donator" role="tab" aria-selected="false">Daftar Donatur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-nowrap px-0" data-toggle="tab" href="#news" role="tab" aria-selected="false">Berita Terbaru</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="detail" role="tabpanel">
                        <div class="card rounded mb-3">
                            <div class="card-body">
                                <h6 class="section-title font-weight-semibold mb-3">Deskripsi</h6>
                                <p class="text-default">
                                {!! Str::limit($campaign->description, 300) !!}
                                @if (Str::length($campaign->description) > 300)
                                <a href="#modalDescription" class="d-inline-flex align-items-center" data-toggle="modal" role="button">Baca Selengkapnya <i class="material-icons font-size-normal ml-1">navigate_next</i></a>
                                @endif
                                </p>

                                <hr>

                                <h6 class="section-title font-weight-semibold mb-3">Detail Lokasi</h6>

                                <div class="card rounded shadow-none border bg-light-alt mb-3">
                                    <div class="card-body text-default">
                                        {!! $campaign->location_name !!}

                                        <!-- <hr>

                                        <div class="row">
                                            <div class="col-6">Longitude</div>
                                            <div class="col-6 text-dark text-right"></div>
                                            <div class="col-6">Latitude</div>
                                            <div class="col-6 text-dark text-right"></div>
                                        </div> -->
                                    </div>
                                </div>

                                <!-- <a href="#modalMap" data-toggle="modal">
                                    <img src="https://zakatin.com/v2/img/map.png" height="106px" width="290px" class="img-fluid rounded fit-cover mb-2">
                                </a>
                                <span class="text-default font-size-sm">Klik untuk melihat lokasi penggalangan dana Anda</span> -->
                            </div>
                        </div>
                        <div class="card rounded mb-3">
                            <div class="card-body">
                                <h6 class="section-title font-weight-semibold mb-3">Penggalang Dana</h6>
                                <a href="#" class="d-flex align-items-center font-weight-base text-left m-0">
                                    <img src=" https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/users/20200415/450_2020_04_15_14_22_44_000000.png " height="32px" width="32px" class="fit-cover mr-2">
                                    <div class="flex-fill ml-2">{{ $campaign->partnership_name ? $campaign->partnership_name : 'Turuntangan Pinara' }}</div>
                                    <span class="icon"><i class="material-icons">navigate_next</i></span>
                                </a>
                                <hr>
                                <div class="alert alert-success-alt d-flex align-items-center" role="alert">
                                    <span class="icon icon-lg mr-3"><i class="material-icons">check_circle</i></span>
                                    <p class="font-size-sm mb-0">Kami telah memverifikasi data penggalang dana dan kebenaran kondisi penerima manfaat.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card rounded mb-3">
                            <div class="card-body">
                                <h6 class="text-center font-weight-bold mb-3">Ingin menggalang dana?</h6>
                                <a href="/user-campaigns" class="btn btn-block btn-secondary">Buat Sekarang</a>
                                <hr>
                                <a href="https://api.whatsapp.com/send?phone=6281237777036&amp;text=Halo%20admin,%20saya%20ingin%20melaporkan%20campaign...%20https://zakatin.com/campaign/foodbasketpalestina&amp;source=&amp;data=" target="_blank" class="btn btn-block btn-white text-primary font-size-normal">Laporkan campaign ini</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="donator" role="tabpanel">
                        <div class="card rounded">
                            <div class="card-body">
                                <h6 class="section-title font-weight-semibold mb-1">Daftar Donatur</h6>
                                <span class="text-default font-size-sm d-block mb-3">{{ $campaign->donors }} donatur telah bergabung</span>
                                <ul class="list-unstyled" id="donatorList">
                                    @foreach ($transactions as $transaction)
                                        <li class="d-flex donator-list-item mb-3">
                                            <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                            <div>
                                                <p class="mb-1">{{ !$transaction->isAnonymous() ? $transaction->user_name : 'Hamba Allah' }}</p>
                                                <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">@idr($transaction->total) </span> &bull; {{ $transaction->updated_at->diffForHumans() }}</div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn btn-block btn-white text-primary font-size-normal" id="btnShowAllDonator" onclick="showAllDonator(this,'tab')" style="display: none;">Lihat Semua</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="news" role="tabpanel">
                        <div class="card rounded">
                            <div class="card-body">
                                <div class="mb-2">
                                    <h6 class="section-title font-weight-semibold mb-1">Berita terbaru</h6>
                                    <span class="text-default font-size-sm d-block mb-1">Kabar terkini tentang campaign ini.</span>
                                </div>
                                <ul class="list-tree" id="newsList">
                                                                        <li class=" news-list-item pb-3">
                                            <span class="text-default font-size-sm">16 Mei 2024 09:21:48 &bull; Together Save Palestine: Mari Bantu Saudara Kita di Palestina</span>
                                            <div class="list-tree-content">
                                                <div class="news-description"><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
    <?xml encoding="utf-8" ?><html><body><p>Kabar baik untuk #SahabatSejuk semua. Alhamdulillah donasi&nbsp; termanfaatkan dengan baik untuk disalurkan kepada yang membutuhkan.</p><p>Alhamdulillah donasi yang diberikan dapat memberikan senyuman untuk mereka.</p><p>Kami ucapkan terima kasih untuk para donatur Nurul Hayat. Semoga senyuman mereka, menjadikan jalan kemudahan setiap urusan kita. Aamiin.</p></body></html>
    </div>
                                                                                        </div>
                                        </li>
                                                                        <li class=" news-list-item pb-3">
                                            <span class="text-default font-size-sm">03 Desember 2023 14:04:28 &bull; Together Save Palestine: Mari Bantu Saudara Kita di Palestina</span>
                                            <div class="list-tree-content">
                                                <div class="news-description"><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
    <?xml encoding="utf-8" ?><html><body><p><br><img style="width: 100%;" src="https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/articles/contents/20231203/summernote_450_2023_12_03_14_04_27_000000_0.jpeg"></p><p>Kabar baik untuk #SahabatSejuk semua. Alhamdulillah donasi&nbsp; termanfaatkan dengan baik untuk disalurkan kepada saudara-saudara di Gaza.</p><p>Alhamdulillah donasi yang diberikan dapat meringankan dan memberikan senyuman untuk mereka.</p><p>Kami ucapkan terima kasih untuk para donatur Nurul Hayat. Semoga senyuman mereka, menjadikan jalan kemudahan setiap urusan kita. Aamiin.</p></body></html>
    </div>
                                                                                        </div>
                                        </li>
                                                                        <li class="d-none news-list-item pb-3">
                                            <span class="text-default font-size-sm">04 Januari 2023 09:29:00 &bull; Together Save Palestine: Mari Bantu Saudara Kita di Palestina</span>
                                            <div class="list-tree-content">
                                                <div class="news-description"><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
    <?xml encoding="utf-8" ?><html><body><p>Kabar baik untuk #SahabatSejuk semua. Alhamdulillah donasi untuk saudara palestina termanfaatkan dengan baik disalurkan untuk kebutuhan mereka di sana</p><p>Alhamdulillah donasi yang diberikan dapat memberikan senyuman untuk mereka.</p><p>Kami ucapkan terima kasih untuk para donatur Nurul Hayat. Semoga senyuman mereka, menjadikan jalan kemudahan setiap urusan kita. Aamiin.</p></body></html>
    </div>
                                                                                        </div>
                                        </li>
                                                                        <li class="d-none news-list-item pb-3">
                                            <span class="text-default font-size-sm">12 Mei 2021 10:04:47 &bull; Paket Makanan untuk Keluarga Syuhada di Palestina</span>
                                            <div class="list-tree-content">
                                                <div class="news-description"><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
    <?xml encoding="utf-8" ?><html><body><p><span style='color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Ramadhan tahun ini membawa cerita yang berbeda, begitu juga di Palestina</span><br style='color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><br style='color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Berawal dari cerita puasa ditengah pandemi Covid-19, sampai berbuka di antara puing-puing bangunan yang hancur akibat perang.</span><br style='color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><br style='color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Alhamdulillah, tahun ini NH Zakat Kita kembali membagikan 160 parcel Ramadhan kepada keluarga yang membutuhkan di berbagai daerah Palestina: AL Burij. Khan Younis. Rafah.</span><br style='color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><br style='color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style='color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Semoga yang tak seberapa ini, menjadi kekuatan untuk mereka menjalani Ramadhan ditengah Pandemi. Terima kasih para donatur. Semoga Allah yang membalas segala kebaikan dengan berlipat ganda. Aamiin.</span></p><p><span style='color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Berikut link dokumentasinya: https://www.instagram.com/tv/B___Z2hpGSJ/?igshid=13eyzzq7n983n<br></span><br style='color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'></p></body></html>
    </div>
                                                                                        </div>
                                        </li>
                                                                        <li class="d-none news-list-item pb-3">
                                            <span class="text-default font-size-sm">19 April 2021 13:27:11 &bull; Makanan untuk Saudara di Palestina</span>
                                            <div class="list-tree-content">
                                                <div class="news-description"><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
    <?xml encoding="utf-8" ?><html><body><p>Penyaluran Program Makanan untuk Saudara di Palestina<br></p></body></html>
    </div>
                                                                                        </div>
                                        </li>
                                                                </ul>
                                <button type="button" class="btn btn-block btn-white text-primary font-size-normal" id="btnShowAllNews" onclick="showAllNews(this)" style="display: none;">Lihat Semua</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="modal fade" id="modalShare" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-header bg-white sticky-top">
                        <h4 class="modal-title font-weight-semibold w-100">Bagikan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-container">

                        <div class="addthis_toolbox">
                            <div class="custom_images">
                                <ul class="list-unstyled font-weight-semibold">
                                    <li><a href="#" class="addthis_button_facebook d-flex align-items-center mb-3"><span class="icon ml-0 mr-2"><i class="material-icons">facebook</i></span> Facebook</a></li>
                                    <li><a href="#" class="addthis_button_twitter d-flex align-items-center mb-3"><span class="icon ml-0 mr-2"><i class="fab fa-twitter"></i></span> Twitter</a></li>
                                    <li><a href="#" class="d-flex align-items-center copyButton"><span class="icon ml-0 mr-2"><i class="material-icons">link</i></span> Salin URL</a><input class="linkToCopy" value="" style="position: absolute; z-index: -999; opacity: 0;" /></li>
                                </ul>
                            </div>
                        </div>

                        <span class='copyResult text-success'></span>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalDescription" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-header bg-white sticky-top">
                        <h4 class="modal-title font-weight-semibold w-100">Deskripsi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-container">
                        <div class="font-family-normal">{!! $campaign->description !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalDonator" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-header bg-white sticky-top">
                        <div>
                            <h4 class="modal-title font-weight-semibold w-100">Daftar Donatur</h4>
                            <span class="text-default font-size-sm">
                            {{ $campaign->donors }} donatur telah bergabung
                            </span>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-container">
                        <ul class="list-unstyled">
                        @foreach ($transactions as $transaction)
                            <li class="d-flex mb-3">
                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                <div>
                                    <p class="mb-1">{{ !$transaction->isAnonymous() ? $transaction->user_name : 'Hamba Allah' }}</p>
                                    <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">@idr($transaction->total) </span> &bull; {{ $transaction->updated_at->diffForHumans() }}
                                    </div>
                                </div>
                            </li>
                        @endforeach 
                        @if ($campaign->donors >= 10)
                        <button type="button" class="btn btn-block btn-white text-primary font-size-normal" onclick="showAllDonator(this,'modal')">Muat Lebih Banyak</button>
                         @endif                                   
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalCreateSuccess" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-header bg-white sticky-top">
                        <h4 class="modal-title font-weight-semibold w-100">Berhasil Dibuat</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-container">
                        <div class="text-center">
                            <div class="alert-icon text-success mb-3">
                                <i class="material-icons">check_circle</i>
                            </div>
                            <h6 class="font-weight-semibold text-center">Galang dana Anda berhasil dibuat!</h6>
                            <p>Mulai sebarkan tautan galang dana Anda untuk memaksimalkan dana yang akan terkumpul.</p>
                        </div>
                        <hr>
                        <h6 class="font-weight-semibold mb-3">Bagikan Tautan</h6>
                            <div class="custom_images">
                                <ul class="list-unstyled font-weight-semibold">
                                    <li><a href="#" class="addthis_button_facebook d-flex align-items-center mb-3"><span class="icon ml-0 mr-2"><i class="material-icons">facebook</i></span> Facebook</a></li>
                                    <li><a href="#" class="addthis_button_twitter d-flex align-items-center mb-3"><span class="icon ml-0 mr-2"><i class="fab fa-twitter"></i></span> Twitter</a></li>
                                    <li><a href="#" class="d-flex align-items-center copyButton"><span class="icon ml-0 mr-2"><i class="material-icons">link</i></span> Salin URL</a><input class="linkToCopy" value="" style="position: absolute; z-index: -999; opacity: 0;" /></li>
                                </ul>
                            </div>
                        </div>

                        <span class='copyResult text-success'></span>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

	<script src="https://zakatin.com/v2/js/jquery.min.js"></script>
	<script src="https://zakatin.com/v2/js/popper.min.js"></script>
	<script src="https://zakatin.com/v2/js/bootstrap.min.js"></script>
	<script src="https://zakatin.com/v2/js/mdb.min.js"></script>
	<script src="https://zakatin.com/v2/js/perfect-scrollbar.min.js"></script>
	<script src="https://zakatin.com/v2/vendors/momentjs/js/moment-with-locales.min.js"></script>
	<script src="https://zakatin.com/v2/vendors/autoNumericjs/autoNumeric.js"></script>
	<script src="https://zakatin.com/v2/js/app.js"></script>
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
<script src="https://zakatin.com/v2/js/pages/campaigns.js"></script>
<script>
	function getCampaignId() {
		return '177'
	}
</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e188173592f2f37"></script>
	</div>
</x-app>
