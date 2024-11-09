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
                                <li class="list-inline-item text-default">99+</li>
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
    "Kemanusiaan itu tak mengenal batas negara dan agama. Ia tumbuh dari keajaiban nuranimu tanpa sekat, tanpa musim." (Helvy Tiana Rosa)Sejak berpuluh-puluh tahun lamanya, bahkan sampai detik ini langit Palestina masih merah. Tanda serangan militer Israel terus terjadi, masyarakat sipil terus diusik.Pedih hati ini mendengar teriakan pilu, tangisan seorang Ayah, Ibu dan Anak yang harus kehilangan sanak saudaranya, ya Allah...Hassbunallah wa nikmal wakil nikmal maula wanikman nasir.Ratusan tahun ber(...)</p>
                                <a href="#modalDescription" class="d-inline-flex align-items-center" data-toggle="modal" role="button">Lihat Semua <i class="material-icons font-size-normal ml-1">navigate_next</i></a>

                                <hr>

                                <h6 class="section-title font-weight-semibold mb-3">Detail Lokasi</h6>

                                <div class="card rounded shadow-none border bg-light-alt mb-3">
                                    <div class="card-body text-default">
                                        <p class="mb-1">Perum. IKIP Gunung Anyar B-48 Surabaya. Telp: (031-8783344). WA: 0878-5252-5300</p>
                                        <p class="mb-1">Suraabya,   Gunung Anyar </p>
                                        <p class="mb-1">Kota Surabaya,  Jawa Timur</p>

                                        <hr>

                                        <div class="row">
                                            <div class="col-6">Longitude</div>
                                            <div class="col-6 text-dark text-right"></div>
                                            <div class="col-6">Latitude</div>
                                            <div class="col-6 text-dark text-right"></div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#modalMap" data-toggle="modal">
                                    <img src="https://zakatin.com/v2/img/map.png" height="106px" width="290px" class="img-fluid rounded fit-cover mb-2">
                                </a>
                                <span class="text-default font-size-sm">Klik untuk melihat lokasi penggalangan dana Anda</span>
                            </div>
                        </div>
                        <div class="card rounded mb-3">
                            <div class="card-body">
                                <h6 class="section-title font-weight-semibold mb-3">Penggalang Dana</h6>
                                <a href=										"https://zakatin.com/partners/267"
                                                                            class="d-flex align-items-center font-weight-base text-left m-0">
                                    <img src=" https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/users/20200415/450_2020_04_15_14_22_44_000000.png " height="32px" width="32px" class="fit-cover mr-2">
                                    <div class="flex-fill ml-2">
                                                                                NH Zakat Kita
                                                                        </div>
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
                                            <i class="fas fa-user-circle fa-3x text-success mr-3"></i>
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
                        <div class="font-family-normal">
                                                        <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
    <?xml encoding="utf-8" ?><!--?xml encoding="utf-8" ?--><!--?xml encoding="utf-8" ?--><!--?xml encoding="utf-8" ?--><!--?xml encoding="utf-8" ?--><!--?xml encoding="utf-8" ?--><!--?xml encoding="utf-8" ?--><!--?xml encoding="utf-8" ?--><html><body><div style="text-align: center;"><blockquote style='padding: 10px 20px; margin-bottom: 20px; font-size: 17.5px; border-left: 5px solid rgb(238, 238, 238); font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif; text-align: start;'><blockquote style="padding: 10px 20px; margin-bottom: 20px; border-left: 5px solid rgb(238, 238, 238); color: rgb(51, 51, 51);"><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 12pt; margin-left: 0px; text-align: justify; line-height: normal;"><span times="" new="" roman arial>"Kemanusiaan itu tak mengenal batas negara dan agama. Ia tumbuh dari keajaiban nuranimu tanpa sekat, tanpa musim." (Helvy Tiana Rosa)</span></p></blockquote><p class="MsoNormal" style="margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;"></p><p class="MsoNormal" style="margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;"><span times="" new="" roman color:black></span></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;"><span style="color: rgb(38, 38, 38); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Sejak berpuluh-puluh tahun lamanya, bahkan sampai detik ini langit Palestina masih merah. Tanda serangan militer Israel terus terjadi, masyarakat sipil terus diusik.</span></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;"><span style="color: rgb(38, 38, 38);">Pedih hati ini mendengar teriakan pilu, tangisan seorang Ayah, Ibu dan Anak yang harus kehilangan sanak saudaranya, ya Allah...</span><br></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;"><p></p></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;"><span style="color: rgb(38, 38, 38); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"></span></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;"><span style="color: rgb(38, 38, 38); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic;">Hassbunallah wa nikmal wakil nikmal maula wanikman nasir.</span><p></p></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;"><img src="https://zakatkita.org/media/images/large/KNqumYauUOMRFApqNtDg.jpeg" style="border: 0px; width: 412px;"></p><p class="MsoNormal" style="margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;"><img src="https://zakatkita.org/media/images/large/qloIPjcRyUKhhho55yww.jpeg" style="border: 0px; width: 412px;"><span times="" new="" roman color:black><br></span></p><p class="MsoNormal" style="margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;"><span times="" new="" roman color:black>Ratusan tahun berlalu dan ribuan musim berganti, tetapi jutaan warga Palestina masih berjuang untuk melepaskan diri dari cengkeraman Israel.</span><span times="" new="" roman mso-bidi-font-family:></span></p><p class="MsoNormal" style="margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;"><span times="" new="" roman color:black>Setiap tahun rakyat Palestina melewati berbagai kesulitan untuk tetap bertahan hidup dan ujian itu semakin nyata, keterbatasan membuat semuanya semakin sulit. Tentunya, mereka tidak memiliki banyak pilihan untuk bahan makanan.</span></p><p class="MsoNormal" style="margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;"><img src="https://zakatkita.org/media/images/large/QnmqeoBGpkassJexFrmK.jpeg" style="border: 0px; width: 412px;"><span times="" new="" roman color:black><br></span></p><p class="MsoNormal" style="margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;"><img src="https://zakatkita.org/media/images/large/EPCqQV2gECQ8St5FVlOo.jpeg" style="border: 0px; width: 412px;"></p><h4 style='font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-align: justify;'><span style="color: rgb(38, 38, 38); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-weight: bold;">Palestine Emergency Response</span></h4><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;"><span style="color: rgb(38, 38, 38);">Sebagaimana Pemerintah RI dan seluruh rakyat Indonesia, Nurul Hayat konsisten mendukung dan terus memberikan bantuan kepada rakyat Palestina.</span></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;"><span style="color: rgb(38, 38, 38);"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Saat ini, tim mitra kemanusiaan NH ada di lokasi. Berada diantara puing-puing rumah bekas bom penjajah Israel, mengunjungi dan memberi bantuan secara moral dan material kepada warga di sana.</span><br><br><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Mitra relawan kami di Timur Tengah adalah lembaga terpercaya yang juga menjadi mitra unit kemanusiaan PBB: UNHCR<p></p></span></span></p><p class="MsoNormal" style="margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;"><img src="https://zakatkita.org/media/images/large/lo62qfHLHT2IyEnlBn4M.jpeg" style="border: 0px; width: 458px;"><span style="color: rgb(38, 38, 38); font-style: italic;"><br></span></p><p class="MsoNormal" style="margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;"><span style="color: rgb(38, 38, 38); font-style: italic;">"Perumpamaan orang-orang mukmin dalam hal kasih sayang bagaikan satu tubuh, apabila satu anggota badan merintih kesakitan maka sekujur badan akan merasakan panas dan demam.&rdquo; (HR. Muslim)</span></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;"><span style="font-weight: 700;">Gaza, Palestina... Sejuta cerita, sejuta berita dan sejuta aksinya. Tak sekadar sebuah Negeri yang diberkahi dan Negeri yang di sucikan. Lebih utama lagi, Palestina merupakan Bumi Para Nabi.</span><br></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 0.0001pt; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-weight: 700;"><br></span></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 0.0001pt; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><img src="https://zakatkita.org/media/images/large/6ccM37zWsRGYzoClzPsj.jpeg" style="border: 0px; width: 412px;"><span style="font-weight: 700;"><br></span></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 0.0001pt; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span times="" new="" roman in></span></p><p class="MsoNormal" style="margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;"></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;"><span style="color: rgb(38, 38, 38); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Sahabat, di waktu-waktu mustajab mari sama-sama, sisipkan doa dalam sholat untuk saudara-saudari kita yang didzalimi di sana.</span><p></p></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;"><span style="color: rgb(38, 38, 38); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic; font-weight: bold;">Allahummanshur ikhwananal musliminal fi filistin. Ya Allah, muliakanlah Islam dan kaum Muslimin. Ya Allah, tolonglah kaum Muslimin dan Mujahidin di Palestina.</span></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;"><img src="https://zakatkita.org/media/images/large/YBGRODaj4WnvuKIuCpIQ.jpeg" style="border: 0px; width: 412px;"><span style="color: rgb(38, 38, 38); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic; font-weight: bold;"><br></span><p></p></p><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px;"></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;"><span style="color: rgb(38, 38, 38); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Semoga Allah melindungi dan memberi mereka kekuatan.&nbsp;<span style="font-weight: bold;">Dukung perjuangan dan kehidupan warga Palestina yang menderita melalui sedekah terbaik kita. Bantu biaya hidup keluarga syuhada:</span></span></p></blockquote><p></p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif; text-align: start;'><span style="font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: 13px; white-space: pre-wrap;">==================================</span></p></div><div style="text-align: center;"><p dir="ltr" style='margin: 0pt 0px 12pt; color: rgb(51, 51, 51); font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;'><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Salurkan sedekahmu dengan cara:</span></p><p dir="ltr" style='margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;'><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">1. Klik tombol &ldquo;DONASI SEKARANG&rdquo;</span></p><p dir="ltr" style='margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;'><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">2. Masukkan nominal donasi</span></p><p dir="ltr" style='margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;'><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">3. Pilih metode pembayaran</span></p><p dir="ltr" style='margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;'><br></p><p dir="ltr" style='margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;'><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Sahabat juga bisa membagikan halaman galang dana ini agar semakin banyak yang turut ikut berbuat kebaikan.</span></p><p dir="ltr" style='margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;'><br></p><p dir="ltr" style='margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;'><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Semoga sedekah yang kita keluarkan bisa memberikan kebaikan dan pahala yang berlimpah untuk kita serta memberikan kebahagiaan bagi penerima. Aamiin.</span></p><p dir="ltr" style='margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;'><br></p><p dir="ltr" style='margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;'><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">***</span></p><p dir="ltr" style='margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;'><br></p><p dir="ltr" style='margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;'><br></p></div></body></html>

                                                </div>
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
                                                                583
                                                            donatur telah bergabung
                            </span>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-container">
                        <ul class="list-unstyled">
                                                                                        <li class="d-flex mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">reza</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 3.000 </span> &bull; 14 Juni 2024
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-flex mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rino Cahya Pratama</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 25.000 </span> &bull; 12 April 2024
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-flex mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rino Cahya Pratama</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 07 Maret 2024
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-flex mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">RAYYAN HASNAN</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 20 Januari 2024
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-flex mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ardra Teja B.</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 09 Desember 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-flex mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Haifani Sholihin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 13 November 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-flex mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rino Cahya Pratama</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 27 Oktober 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-flex mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agustine Astri Rizandy</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 25 Oktober 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">rahman arif</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 50.027 </span> &bull; 12 Oktober 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">ELVANO</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 100.021 </span> &bull; 10 Oktober 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ardania Ningsih</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 100.027 </span> &bull; 02 Oktober 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nur Humairoh Umi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 17 September 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ardra Teja B.</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 15 September 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Diah Ratna Sari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 28 Agustus 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 26 Agustus 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nurul Izzah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 20 Agustus 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">RAYYAN HASNAN</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 3.000 </span> &bull; 06 Agustus 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rino Cahya Pratama</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 16 Juli 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Saarah Samhana Alamsyah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 16 Juli 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 15 Juli 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nur Humairoh Umi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 14 Juli 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 05 Juli 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nur Humairoh Umi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 04 Juli 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Riana Widyasari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 20 Juni 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Bahrun</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 08 Juni 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">RAYYAN HASNAN</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 3.000 </span> &bull; 21 Mei 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Diah Ratna Sari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 20 Mei 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Kurniasih</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 06 Mei 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Tommy priyanto</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 06 Mei 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Diah Ratna Sari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 30 April 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Tommy priyanto</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 28 April 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 10 April 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ety Herlinta</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 10 April 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Abdullah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 25.000 </span> &bull; 08 April 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Amaani Sabili Amiin JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 30 Maret 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fadil</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 29 Maret 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Wangsih</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 27 Maret 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Marisca N</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 25 Maret 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Desti Hidayati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 24 Maret 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Debby Syavira Anesia</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 21 Maret 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Widiastuti Dwi Mulyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 07 Maret 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Haifani Sholihin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 11 Februari 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sri Rani Asih</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 09 Februari 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Haifani Sholihin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 08 Februari 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fajar Sagita Oendiarto</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 06 Februari 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Kurniasih</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 03 Februari 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nadilla Kamilatunnisa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 23 Januari 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Muhammad Sultoni</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 22 Januari 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nur Humairoh Umi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 17 Januari 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nurul Izzah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 15 Januari 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Marisca N</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 05 Januari 2023
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Diah Ratna Sari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 15 Desember 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ibu Qomariyah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 14 November 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nur Aini Ananda</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 3.000 </span> &bull; 02 November 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sheila Maria</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 26 Oktober 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ety Herlinta</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 24 Oktober 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agnes Setiyaningrum</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 22 Oktober 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ardra Teja B.</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 19 Oktober 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nadilla Kamilatunnisa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 20 September 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Naufal Fawwaz Ramadhan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 30 Agustus 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rino Cahya Pratama</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 24 Agustus 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rino Cahya Pratama</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 18 Agustus 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sofia Hidayatun</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 15 Agustus 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ita Roihanah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 14 Agustus 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Priccillia Fazha</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 06 Agustus 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Tommy priyanto</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 05 Agustus 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hesti Kusumastuty</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 23 Juli 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Roby Kurniawan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 20 Juli 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Bunga Wijaya</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 19 Juli 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Diah Ratna Sari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 16 Juli 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Bunga Wijaya</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 08 Juli 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agustine Astri Rizandy</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 07 Juli 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Bunga Wijaya</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 02 Juli 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Salmiah La Ongke</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 30 Juni 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sheila Maria</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 29 Juni 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Leli Warti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 21 Juni 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nur Humairoh Umi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 20 Juni 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ramdhan Fahrony</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 17 Juni 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Shania Dian Ayutiningsih</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 3.000 </span> &bull; 16 Juni 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">lulu</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 10 Juni 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Debby Syavira Anesia</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 10 Juni 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Mike Paujiah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 06 Juni 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Tommy priyanto</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 03 Juni 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">vaa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 03 Juni 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">RAYYAN HASNAN</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 Juni 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agustine Astri Rizandy</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 29 Mei 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Wangsih</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 20 Mei 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ibu Samiasih</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 18 Mei 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ramdhan Fahrony</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 17 Mei 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rino Cahya Pratama</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 15 Mei 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Debby Syavira Anesia</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 11 Mei 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Bunga Wijaya</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 11 Mei 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Luthfi Alfafa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.084 </span> &bull; 04 Mei 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Aditya Danu Wardana</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 01 Mei 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nur isnaini rizki</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 28 April 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Abdullah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 20.000 </span> &bull; 27 April 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Debby Syavira Anesia</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 26 April 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/users/20191213/1576212109880_92_2019_12_13_11_41_49_000000.jpeg" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Lia shoran</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 22 April 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ibu Samiasih</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 22 April 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agustine Astri Rizandy</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 18 April 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nur Humairoh Umi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 18 April 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">amelia tarmum</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 16 April 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Jimmy Julian</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 15 April 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Farizal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 13 April 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Yusuf Mukhtar Taqiyyuddin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 09 April 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nur Humairoh Umi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 06 April 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Anissa Islami Islami</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 April 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Widiastuti Dwi Mulyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 29 Maret 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Lilah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 23 Maret 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nur Aini Ananda</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 3.000 </span> &bull; 19 Maret 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Iis Ani Safitri</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 17 Maret 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Karima Muslim</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 15 Maret 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hamdan Fuadi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 13 Maret 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">vaa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 11 Maret 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agnes Setiyaningrum</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 11 Maret 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Alm. Muhammad Zaenuri</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 09 Maret 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rezki Ali</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 07 Maret 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Alm. Sumani Prayitno</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 05 Maret 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Alm. Muhammad Zaenuri</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 05 Maret 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ibu Siti Khaeriyah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 03 Maret 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Alm. Mardiyo Aris Munandar</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 24 Februari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Tommy priyanto</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 21 Februari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rahayu Susanti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 20 Februari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Lina Nur&#039;aini</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 19 Februari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ibu Samiasih</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 16 Februari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rachma Dewi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 16 Februari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rahayu Susanti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 13 Februari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Abdullah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 13 Februari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Arina Fadhila</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 11 Februari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Yuliyanto Agung Prabowo</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 10 Februari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Islahwani Loka Vita Resti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 07 Februari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Arina Fadhila</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 Februari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sally Apriyanti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 31 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rachma Dewi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 30 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Abdullah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 30 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Alexandria</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 28 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sely Fudianti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 27 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agustine Astri Rizandy</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 26 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Riesa Rizkia Agustina Hermawan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 26 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Cordova Kurniawan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 20 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Wyenda Lazuardi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 20 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Cipta Ningtyas</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 16 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Siti Masruroh</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 3.000 </span> &bull; 14 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Alm. Mbah Sumirah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 13 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rezki Ali</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 13 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rayyan Hasnan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 12 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Neti Kurniati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 11 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Faniati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 11 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rahayu Susanti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 09 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Risdiani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 09 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ibu Siti Khaeriyah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 08 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Faniati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 07 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">lulu</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 06 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Miftakhul Hasanah JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 05 Januari 2022
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agung Budiono</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 30 Desember 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Marisca N</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 29 Desember 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Jovina Maulida Annisa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 29 Desember 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hanif ibrahim</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 29 Desember 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Muna Armina KPR</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 26 Desember 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">amelia tarmum</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 25 Desember 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 17 Desember 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Riesa Rizkia Agustina Hermawan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 15 Desember 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ummi Nuraini</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 13 Desember 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Alm. Mbah Sumirah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 11 Desember 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Widiastuti Dwi Mulyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 04 Desember 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Faniati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 02 Desember 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Riza nur rohmat fuady</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 Desember 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Isnendi Muhammad Fatwa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 30 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ummi Nuraini</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 26 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agung Budiono</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 24 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Salmiah La Ongke</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 23 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Didik Trimurdodo</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 22 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nurhikmah Hidayati JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 22 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Chelli Afresia</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 20 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Lidya Rosanti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 19 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Anthy</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 18 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Chelli Afresia</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 13 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Stephannie Mutiara Sukandar KPR</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 11 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Bahrun</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 08 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hanif ibrahim</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 07 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ramdhan Fahrony</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 05 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Widyatami Nurul Maulidina</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 04 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Farizal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 04 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agung Budiono</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 01 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Udin Setiana</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Siska</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 November 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Roby Kurniawan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 31 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Monica Aswanti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 29 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ahmad Syaukat</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 29 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Mutia Azizah JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 28 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Diah Ratna Sari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 27 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Farizal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 24 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sheila Maria</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 23 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ariani Tri Utari JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 22 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Octania Rezie</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 21 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Esatri</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 20 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Pak Bursah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 18 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Puspita Awalina KPR</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 17 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Granada</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 17 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Anisa Fitri</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 16 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Alm. Muhammad Zaenuri</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 14 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Chandra Budi Santoso</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 11 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sely Fudianti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 09 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Roby Kurniawan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 09 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Lidya Rosanti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 08 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ambarwati JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 07 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fahreza</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 05 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Anita Puji Pramesti JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 03 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Farizal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 02 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Enni Nurani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 Oktober 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Azizah fajar</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 30 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Mike Paujiah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 27 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Enni Nurani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 26 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">vaa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 26 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Luthfi Alfafa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 26 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Herlinawati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 26 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nurul Safitri JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 25 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Enni Nurani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 24 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Enni Nurani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 21 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nurul Inayati Hidayat</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 21 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Mike Paujiah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 20 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Azizah fajar</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 19 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Umi Rifatin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 19 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agustine Astri Rizandy</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 19 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sri Utami</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 19 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Mutiara Firdaus</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 18 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Reza Azhari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 14 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Mutiara Firdaus</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 14 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">mecca mahesa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 14 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Isnaeni JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 13 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Enni Nurani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 12 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ridwan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 12 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Priccillia Fazha</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 11 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Indah Yunita</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 11 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Keke Deri Santika</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 11 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Isnendi Muhammad Fatwa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 11 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Asma Azizah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 08 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Diah Ratna Sari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 06 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Roby Kurniawan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 05 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Octania Rezie</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 04 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Yulius Hendra</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 03 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 02 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Riesa Rizkia Agustina Hermawan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 01 September 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ira Saraswati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 31 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ayasy Al Banna</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 31 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Yuliyanto Agung Prabowo</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 30 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Didik Trimurdodo</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 30 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Vera Fernanda KPR</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 29 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 26 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ferdian R</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 23 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Eky JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 22 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Indah Yunita</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 20 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Reza Azhari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 100.169 </span> &bull; 19 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nur Aini Ananda</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 3.000 </span> &bull; 19 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/users/20191211/1576037258816_83_2019_12_11_11_07_38_000000.jpg" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Keluarga Ibu Alwin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 18 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ady Purwanto</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 14 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Al-Akhfiya</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 12 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fadil</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 09 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Eli Fauziah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 09 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Salmiah La Ongke</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 07 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/users/20200328/72_2020_03_28_10_45_24_000000.jpg" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nafisa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 06 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Marlina</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 06 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">dylan mahesa anggasta</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 04 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nadilla Kamilatunnisa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 04 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nurul Safitri JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 03 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Islahwani Loka Vita Resti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 02 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Pramesti Darojah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nur Aisyah Rahmasari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 Agustus 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fathiya Rodhiya</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 29 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Riza nur rohmat fuady</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 28 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Granada</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 25 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sivi Budiananda Sholikhah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 25 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nur Aini Ananda</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 3.000 </span> &bull; 24 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Roby Kurniawan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 22 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Monica Aswanti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 22 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Dirwanti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 22 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nur Khusnawati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 19 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Al-Akhfiya</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 19 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Naily</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 17 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/users/20191211/1576037258816_83_2019_12_11_11_07_38_000000.jpg" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Keluarga Ibu Alwin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 16 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ulfa Karyatiningsih JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 14 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Mari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 12 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Febyani Pravitasari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 12 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rondang Wulan Sumantri</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 10 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Abdullah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 08 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Syamsul Bahtiar</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 05 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Naufal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 05 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fathimah KPR</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 05 Juli 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fenty Iswaningtyas</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 30 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">dylan mahesa anggasta</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 30 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 30 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Enni Nurani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 30 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Tiara Iriyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 28 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ahmad Syaukat</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 27 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Roby Kurniawan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 27 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sheila Maria</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 26 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Diah Ratna Sari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 26 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">alm misnatun</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 26 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Eli Fauziah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 25 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Muhammad Mizwar</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 25 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ira Saraswati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 25 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ayu Kurniasari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 25 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 24 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 23 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Wyenda Lazuardi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 23 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Kurniasih</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 22 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 22 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 21 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 20 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 19 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Yanitra Farandy Angesti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 19 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/users/20191222/106_2019_12_22_20_07_42_000000.jpg" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Kartika Nur Rakhman</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 18 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 18 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ridwan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 17 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 17 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agustine Astri Rizandy</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 17 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">hamba allah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 17 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nabhan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 20.204 </span> &bull; 16 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Didik Trimurdodo</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 16 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rika Nurmala Sari JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 16 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Herlinawati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 16 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 16 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 15 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sofia Hidayatun</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 15 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 14 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Evi Rohmiati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 14 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sudarwati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 13 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 13 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 12 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 11 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 10 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nindy Aulianty</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 10 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Farizal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 10 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Asma Azizah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 50.184 </span> &bull; 09 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 09 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 08 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Farizal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 08 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Farizal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 07 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 07 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sugeng Wahyono</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 07 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Linda Hermawati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 07 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 06 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 05 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Tiara Iriyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 04 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ferdian R</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 04 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 04 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rifa&#039;atul Lailiyah KPR</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 04 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Mike Paujiah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 04 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 03 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hamba Allah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 40.000 </span> &bull; 02 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 02 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Monica Aswanti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 02 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ridwan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 01 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/users/20200615/488_2020_06_15_20_35_52_000000.jpg" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Irfan Dzakir Nugroho</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 01 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Chelli Afresia</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 01 Juni 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 31 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Herlinawati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 30 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 30 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Yuli Altri Rahmawangsih KPR</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 29 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Armita Sari JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 29 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">amelia tarmum</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 29 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Chelli Afresia</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 29 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 29 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hamba Allah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000.000 </span> &bull; 28 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/users/20191211/1576037258816_83_2019_12_11_11_07_38_000000.jpg" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Keluarga Ibu Alwin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 28 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Merina</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 28 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 28 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ferdian R</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 27 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ridwan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 27 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hardiana</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 27 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Andi Ahmad Mujahidin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 27 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 27 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Tanti Indriati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 26 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Wangsih</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 26 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fariza Ika Cahyani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 26 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Farizal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 24 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Alm. Muhammad Zaenuri</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 22 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ahmad Syaukat</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 3.000 </span> &bull; 21 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Abdullah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 20 Mei 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Amelya Setyawati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 19 April 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ayu Anggarini K KPR</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 3.000 </span> &bull; 17 April 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Deni Helwani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 16 April 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Meliana Sari KPR</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 16 April 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rachma Dewi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 15 April 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Anggraeni Dwi Saputri</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 13 April 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sudarwati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 11 April 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Eyang Islamiyah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 09 April 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Farizal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 07 April 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Alexandria</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 07 April 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Eneng Sri Melina</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 05 April 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Irma NurmalaSari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 05 April 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Yanitra Farandy Angesti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 04 April 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Diah Putri Lestiani</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 02 April 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rayyan Hasnan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 02 April 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/users/20200615/488_2020_06_15_20_35_52_000000.jpg" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Irfan Dzakir Nugroho</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 01 April 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sarah Salsabila</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 31 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Mutiara Firdaus</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 30 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Mutiara Wilson Putri</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 30 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hilmy Maulana</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 29 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fajra Rizqi Indri Lestari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 29 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Elisa Febrianti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 28 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Didik Trimurdodo</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 25 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Aisha Putri Hapsari KPR</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.250 </span> &bull; 24 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ahmad Syaukat</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 24 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Andi Hijrian</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 21 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Naufal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 19 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Monica Aswanti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 19 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ady Purwanto</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 18 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Elisa Febrianti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 16 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ahmad Syaukat</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 12 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Mari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 12 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Cipta Ningtyas</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 12 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Yuli Altri Rahmawangsih KPR</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 3.000 </span> &bull; 11 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ahmad Sayuni JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 11 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Gita Octaviani JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 11 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rosidatun Khasanah JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 11 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fikri Abdulloh Ahmad JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 11 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fajra Rizqi Indri Lestari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 10 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rani Nur Hafifah Safitri JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 3.000 </span> &bull; 10 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agung Surya Jaya JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 10 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sugeng Wahyono</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 09 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Farizal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 08 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Naufal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 07 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ahmad Syaukat</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 05 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Naufal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 03 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nisa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 02 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Monica Aswanti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Dwiantoro JMA</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 Maret 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Wangsih</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 27 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Farizal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 26 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ahmad Syaukat</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 23 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hamba Allah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 21 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nur Aini Ananda</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 3.000 </span> &bull; 19 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ibu Siti Khaeriyah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 18 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hernawan Suprapto</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 18 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Salmiah La Ongke</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 3.000 </span> &bull; 16 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Novi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 14 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Anisa Fitri</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 14 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Alexandria</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 11 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Dimas Reza Narendra</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 11 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fandita Resti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 11 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Pramesti Darojah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 09 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Brilliant</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 06 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Muhammad Sidiq Fabrianto</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 05 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Abdullah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 03 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Andiyansyah Zulfikar</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 Februari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hamba Allah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 29 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/users/20200615/488_2020_06_15_20_35_52_000000.jpg" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Irfan Dzakir Nugroho</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 28 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Alexandria</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 26 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Anna Yuliana A.S</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 25 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Abdullah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 24 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Cucu Yuni Yulianti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 21 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Muhammad Asadulloh</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 20 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ardra Teja B.</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 20 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Eyang Islamiyah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 18 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sely Fudianti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 17 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Syamsul Bahtiar</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 16 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Dirwanti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 15 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Naufal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 15 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Naily</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 14 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/users/20200615/488_2020_06_15_20_35_52_000000.jpg" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Irfan Dzakir Nugroho</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 14 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Riza Fahrudin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 12 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Farizal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 12 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Haifani Sholihin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 12 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Novi Gunawan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 12 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hamba Allah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 12 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Widi Heriyanto</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 10 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Imam Nawawi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 09 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Almi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 06 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Maulidah Annazmi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 05 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">H. Kaharudding Agus bin H. Agus Ismail</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 05 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ari Iswanto</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 03 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Farizal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 03 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sugeng Wahyono</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 02 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Farizal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 Januari 2021
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Muhammad Mizwar</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 29 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Aji</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 28 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rezki Ali</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 26 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Al-Akhfiya</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 24 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Dimas Reza Narendra</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 23 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ira Saraswati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 22 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Aji Purnomo</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 20 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Abdullah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 25.000 </span> &bull; 19 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ade Rahman</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 18 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Wangsih</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 18 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Taofik Muhammad Gumelar</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 17 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ayu Kurniasari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 15 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ari Iswanto</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 13 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rachma Dewi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 11 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Evi purnamasary</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 11 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/users/20200615/488_2020_06_15_20_35_52_000000.jpg" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Irfan Dzakir Nugroho</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 09 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sarah Muthiah Widad</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 09 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agus Sugandi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 09 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nadilla Kamilatunnisa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 08 Desember 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fathurrahman</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 30 November 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ari Iswanto</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 30 November 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Bahrun</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 30 November 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Monica Aswanti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 27 November 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Rezki Ali</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 25 November 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Yuni Nurjanah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 19 November 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ilfa Sri Desy</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 14 November 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Atalatif</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 12 November 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ety Herlinta</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 06 November 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hamba Allah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 05 November 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ambang Aries</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 8.000 </span> &bull; 04 November 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Yulius Hendra</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 31 Oktober 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ferdian R</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 28 Oktober 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/users/20200908/482_2020_09_08_20_53_56_000000.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hafidz Noor</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 28 Oktober 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Haifani Sholihin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 25 Oktober 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Andi Ahmad Mujahidin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 25 Oktober 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Dwiana Setiyowati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 21 Oktober 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hamba Allah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 18 Oktober 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Iwan Prasakti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 15 Oktober 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Annisha Putri Andini</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 08 Oktober 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Faniati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 05 Oktober 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Elisa Febrianti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 05 Oktober 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fahrudin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 04 Oktober 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Taofik Muhammad Gumelar</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 03 Oktober 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fadil</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 Oktober 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fourlina Kabiatmini</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 30 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ayu Kurniasari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 29 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nisa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 27 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Shobirin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 27 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 25 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Naufal</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 23 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Novi Gunawan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 19 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agung Budiono</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 18 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ambang Aries</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 17 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Anna Yuliana A.S</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 15 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ambang Aries</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 11 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Izza</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 10 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ambang Aries</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 10.000 </span> &bull; 08 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nadilla Kamilatunnisa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 07 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Maulidah Annazmi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 06 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Novi Gunawan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 05 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Novi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 05 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ferdian R</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 04 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Anisa Fitri</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 03 September 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Naily</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 31 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Novi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 3.000 </span> &bull; 30 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agung Budiono</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 29 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ardi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 28 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nanang Akhmad</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 28 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Mike Paujiah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 28 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nur Aisyah Rahmasari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 27 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Granada</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 26 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Shobirin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 23 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ridwan</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 21 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Faisal Alek Sumantri</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 19 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Izza</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 19 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agung Nugroho</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 12 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Novi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 11 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fenty Iswaningtyas</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 09 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Eli Fauziah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 09 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Monica Aswanti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 07 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nurul Inayati Hidayat</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 07 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Faisal Alek Sumantri</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 07 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Reza Azhari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 01 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fenty Iswaningtyas</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sugeng Wahyono</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 01 Agustus 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Fathurrahman</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 28 Juli 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Tri Mardiyana</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 24 Juli 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Andiyansyah Zulfikar</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 23 Juli 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Syamsul Bahtiar</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 21 Juli 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sofia Hidayatun</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 21 Juli 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Siti Nur&#039;aeni</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 20 Juli 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hanifah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 19 Juli 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hanifah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 18 Juli 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Maulidah Annazmi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 23 Mei 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Elisa Febrianti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 21 Mei 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Mari</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 19 Mei 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Didik Trimurdodo</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 5.000 </span> &bull; 18 Mei 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/users/20191211/1576037258816_83_2019_12_11_11_07_38_000000.jpg" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Keluarga Ibu Alwin</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 14 Mei 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Ibu Harum Djuarso</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 12 Mei 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Pak Bursah</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 12.500 </span> &bull; 05 Mei 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Sekar Utami</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 05 Mei 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Maulidah Annazmi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.500 </span> &bull; 05 Mei 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Agus Sugandi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 04 Mei 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Nisa</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 03 Mei 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Vivi Januarti</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 4.000 </span> &bull; 30 April 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Hasbi</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 30 April 2020
                                            </div>
                                        </div>
                                    </li>
                                                                <li class="d-none mb-3">
                                                                                <img src="https://zakatin.com/v2/img/avatar.png" width="40px" height="40px" class="fit-cover rounded-circle mr-3">
                                                                            <div>
                                            <p class="mb-1">Amelya Setyawati</p>
                                            <div class="text-default font-size-sm"><span class="text-success font-weight-semibold">Rp 2.000 </span> &bull; 29 April 2020
                                            </div>
                                        </div>
                                    </li>
                                
                                                                <button type="button" class="btn btn-block btn-white text-primary font-size-normal" onclick="showAllDonator(this,'modal')">Muat Lebih Banyak</button>
                                                            
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

                        <div class="addthis_toolbox" addthis:url="https://zakatin.com/campaign/foodbasketpalestina" addthis:title="Together Save Palestine: Mari Bantu Saudara Kita di Palestina" addthis:description="&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD HTML 4.0 Transitional//EN&quot; &quot;http://www.w3.org/TR/REC-html40/loose.dtd&quot;&gt;
    &lt;?xml encoding=&quot;utf-8&quot; ?&gt;&lt;!--?xml encoding=&quot;utf-8&quot; ?--&gt;&lt;!--?xml encoding=&quot;utf-8&quot; ?--&gt;&lt;!--?xml encoding=&quot;utf-8&quot; ?--&gt;&lt;!--?xml encoding=&quot;utf-8&quot; ?--&gt;&lt;!--?xml encoding=&quot;utf-8&quot; ?--&gt;&lt;!--?xml encoding=&quot;utf-8&quot; ?--&gt;&lt;!--?xml encoding=&quot;utf-8&quot; ?--&gt;&lt;html&gt;&lt;body&gt;&lt;div style=&quot;text-align: center;&quot;&gt;&lt;blockquote style=&#039;padding: 10px 20px; margin-bottom: 20px; font-size: 17.5px; border-left: 5px solid rgb(238, 238, 238); font-family: Raleway, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; text-align: start;&#039;&gt;&lt;blockquote style=&quot;padding: 10px 20px; margin-bottom: 20px; border-left: 5px solid rgb(238, 238, 238); color: rgb(51, 51, 51);&quot;&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 12pt; margin-left: 0px; text-align: justify; line-height: normal;&quot;&gt;&lt;span times=&quot;&quot; new=&quot;&quot; roman arial&gt;&quot;Kemanusiaan itu tak mengenal batas negara dan agama. Ia tumbuh dari keajaiban nuranimu tanpa sekat, tanpa musim.&quot; (Helvy Tiana Rosa)&lt;/span&gt;&lt;/p&gt;&lt;/blockquote&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;&quot;&gt;&lt;span times=&quot;&quot; new=&quot;&quot; roman color:black&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;&quot;&gt;&lt;span style=&quot;color: rgb(38, 38, 38); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;Sejak berpuluh-puluh tahun lamanya, bahkan sampai detik ini langit Palestina masih merah. Tanda serangan militer Israel terus terjadi, masyarakat sipil terus diusik.&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;&quot;&gt;&lt;span style=&quot;color: rgb(38, 38, 38);&quot;&gt;Pedih hati ini mendengar teriakan pilu, tangisan seorang Ayah, Ibu dan Anak yang harus kehilangan sanak saudaranya, ya Allah...&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;&quot;&gt;&lt;p&gt;&lt;/p&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;&quot;&gt;&lt;span style=&quot;color: rgb(38, 38, 38); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;&quot;&gt;&lt;span style=&quot;color: rgb(38, 38, 38); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic;&quot;&gt;Hassbunallah wa nikmal wakil nikmal maula wanikman nasir.&lt;/span&gt;&lt;p&gt;&lt;/p&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;&quot;&gt;&lt;img src=&quot;https://zakatkita.org/media/images/large/KNqumYauUOMRFApqNtDg.jpeg&quot; style=&quot;border: 0px; width: 412px;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;&quot;&gt;&lt;img src=&quot;https://zakatkita.org/media/images/large/qloIPjcRyUKhhho55yww.jpeg&quot; style=&quot;border: 0px; width: 412px;&quot;&gt;&lt;span times=&quot;&quot; new=&quot;&quot; roman color:black&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;&quot;&gt;&lt;span times=&quot;&quot; new=&quot;&quot; roman color:black&gt;Ratusan tahun berlalu dan ribuan musim berganti, tetapi jutaan warga Palestina masih berjuang untuk melepaskan diri dari cengkeraman Israel.&lt;/span&gt;&lt;span times=&quot;&quot; new=&quot;&quot; roman mso-bidi-font-family:&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;&quot;&gt;&lt;span times=&quot;&quot; new=&quot;&quot; roman color:black&gt;Setiap tahun rakyat Palestina melewati berbagai kesulitan untuk tetap bertahan hidup dan ujian itu semakin nyata, keterbatasan membuat semuanya semakin sulit. Tentunya, mereka tidak memiliki banyak pilihan untuk bahan makanan.&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;&quot;&gt;&lt;img src=&quot;https://zakatkita.org/media/images/large/QnmqeoBGpkassJexFrmK.jpeg&quot; style=&quot;border: 0px; width: 412px;&quot;&gt;&lt;span times=&quot;&quot; new=&quot;&quot; roman color:black&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;&quot;&gt;&lt;img src=&quot;https://zakatkita.org/media/images/large/EPCqQV2gECQ8St5FVlOo.jpeg&quot; style=&quot;border: 0px; width: 412px;&quot;&gt;&lt;/p&gt;&lt;h4 style=&#039;font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-align: justify;&#039;&gt;&lt;span style=&quot;color: rgb(38, 38, 38); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-weight: bold;&quot;&gt;Palestine Emergency Response&lt;/span&gt;&lt;/h4&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;&quot;&gt;&lt;span style=&quot;color: rgb(38, 38, 38);&quot;&gt;Sebagaimana Pemerintah RI dan seluruh rakyat Indonesia, Nurul Hayat konsisten mendukung dan terus memberikan bantuan kepada rakyat Palestina.&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;&quot;&gt;&lt;span style=&quot;color: rgb(38, 38, 38);&quot;&gt;&lt;span style=&quot;background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;Saat ini, tim mitra kemanusiaan NH ada di lokasi. Berada diantara puing-puing rumah bekas bom penjajah Israel, mengunjungi dan memberi bantuan secara moral dan material kepada warga di sana.&lt;/span&gt;&lt;br&gt;&lt;br&gt;&lt;span style=&quot;background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;Mitra relawan kami di Timur Tengah adalah lembaga terpercaya yang juga menjadi mitra unit kemanusiaan PBB: UNHCR&lt;p&gt;&lt;/p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;&quot;&gt;&lt;img src=&quot;https://zakatkita.org/media/images/large/lo62qfHLHT2IyEnlBn4M.jpeg&quot; style=&quot;border: 0px; width: 458px;&quot;&gt;&lt;span style=&quot;color: rgb(38, 38, 38); font-style: italic;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;&quot;&gt;&lt;span style=&quot;color: rgb(38, 38, 38); font-style: italic;&quot;&gt;&quot;Perumpamaan orang-orang mukmin dalam hal kasih sayang bagaikan satu tubuh, apabila satu anggota badan merintih kesakitan maka sekujur badan akan merasakan panas dan demam.&amp;rdquo; (HR. Muslim)&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;Gaza, Palestina... Sejuta cerita, sejuta berita dan sejuta aksinya. Tak sekadar sebuah Negeri yang diberkahi dan Negeri yang di sucikan. Lebih utama lagi, Palestina merupakan Bumi Para Nabi.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 0.0001pt; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 0.0001pt; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;&lt;img src=&quot;https://zakatkita.org/media/images/large/6ccM37zWsRGYzoClzPsj.jpeg&quot; style=&quot;border: 0px; width: 412px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 0.0001pt; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;&lt;span times=&quot;&quot; new=&quot;&quot; roman in&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin: 12pt 0cm; color: rgb(51, 51, 51); font-size: 14px; text-align: justify; line-height: normal;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;&quot;&gt;&lt;span style=&quot;color: rgb(38, 38, 38); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;Sahabat, di waktu-waktu mustajab mari sama-sama, sisipkan doa dalam sholat untuk saudara-saudari kita yang didzalimi di sana.&lt;/span&gt;&lt;p&gt;&lt;/p&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;&quot;&gt;&lt;span style=&quot;color: rgb(38, 38, 38); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic; font-weight: bold;&quot;&gt;Allahummanshur ikhwananal musliminal fi filistin. Ya Allah, muliakanlah Islam dan kaum Muslimin. Ya Allah, tolonglah kaum Muslimin dan Mujahidin di Palestina.&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;&quot;&gt;&lt;img src=&quot;https://zakatkita.org/media/images/large/YBGRODaj4WnvuKIuCpIQ.jpeg&quot; style=&quot;border: 0px; width: 412px;&quot;&gt;&lt;span style=&quot;color: rgb(38, 38, 38); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic; font-weight: bold;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;p&gt;&lt;/p&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 14px; text-align: justify;&quot;&gt;&lt;span style=&quot;color: rgb(38, 38, 38); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;Semoga Allah melindungi dan memberi mereka kekuatan.&amp;nbsp;&lt;span style=&quot;font-weight: bold;&quot;&gt;Dukung perjuangan dan kehidupan warga Palestina yang menderita melalui sedekah terbaik kita. Bantu biaya hidup keluarga syuhada:&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;&lt;/p&gt;&lt;p style=&#039;margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Raleway, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; text-align: start;&#039;&gt;&lt;span style=&quot;font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: 13px; white-space: pre-wrap;&quot;&gt;==================================&lt;/span&gt;&lt;/p&gt;&lt;/div&gt;&lt;div style=&quot;text-align: center;&quot;&gt;&lt;p dir=&quot;ltr&quot; style=&#039;margin: 0pt 0px 12pt; color: rgb(51, 51, 51); font-family: Raleway, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;&#039;&gt;&lt;span style=&quot;font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;&quot;&gt;Salurkan sedekahmu dengan cara:&lt;/span&gt;&lt;/p&gt;&lt;p dir=&quot;ltr&quot; style=&#039;margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;&#039;&gt;&lt;span style=&quot;font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;&quot;&gt;1. Klik tombol &amp;ldquo;DONASI SEKARANG&amp;rdquo;&lt;/span&gt;&lt;/p&gt;&lt;p dir=&quot;ltr&quot; style=&#039;margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;&#039;&gt;&lt;span style=&quot;font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;&quot;&gt;2. Masukkan nominal donasi&lt;/span&gt;&lt;/p&gt;&lt;p dir=&quot;ltr&quot; style=&#039;margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;&#039;&gt;&lt;span style=&quot;font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;&quot;&gt;3. Pilih metode pembayaran&lt;/span&gt;&lt;/p&gt;&lt;p dir=&quot;ltr&quot; style=&#039;margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;&#039;&gt;&lt;br&gt;&lt;/p&gt;&lt;p dir=&quot;ltr&quot; style=&#039;margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;&#039;&gt;&lt;span style=&quot;font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;&quot;&gt;Sahabat juga bisa membagikan halaman galang dana ini agar semakin banyak yang turut ikut berbuat kebaikan.&lt;/span&gt;&lt;/p&gt;&lt;p dir=&quot;ltr&quot; style=&#039;margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;&#039;&gt;&lt;br&gt;&lt;/p&gt;&lt;p dir=&quot;ltr&quot; style=&#039;margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;&#039;&gt;&lt;span style=&quot;font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;&quot;&gt;Semoga sedekah yang kita keluarkan bisa memberikan kebaikan dan pahala yang berlimpah untuk kita serta memberikan kebahagiaan bagi penerima. Aamiin.&lt;/span&gt;&lt;/p&gt;&lt;p dir=&quot;ltr&quot; style=&#039;margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;&#039;&gt;&lt;br&gt;&lt;/p&gt;&lt;p dir=&quot;ltr&quot; style=&#039;margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;&#039;&gt;&lt;span style=&quot;font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;&quot;&gt;***&lt;/span&gt;&lt;/p&gt;&lt;p dir=&quot;ltr&quot; style=&#039;margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;&#039;&gt;&lt;br&gt;&lt;/p&gt;&lt;p dir=&quot;ltr&quot; style=&#039;margin: 0pt 0px; color: rgb(51, 51, 51); font-family: Raleway, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: start; line-height: 1.38;&#039;&gt;&lt;br&gt;&lt;/p&gt;&lt;/div&gt;&lt;/body&gt;&lt;/html&gt;
    " addthis:media=" https://zk-media-storage-uat.oss-ap-southeast-5.aliyuncs.com/images/campaigns/20231013/320_240_450ef987d165f_2023_10_13_zakatin..jpg ">
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
