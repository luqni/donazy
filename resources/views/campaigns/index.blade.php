<x-app>
    <div class="main-wrapper">
        <nav class="navbar navbar-top fixed-top  top-0 inset-x-0 z-10">
            <div class="card container d-block">
                <div class="d-flex align-items-center">  
                    <form action="{{ route('campaigns.index') }}" method="GET">
                        <div class="flex items-center space-x-2 p-2">
                            <x-button-back />
                            <label class="block w-full relative text-gray-300 focus-within:text-primary">
                                <input
                                    type="search"
                                    name="search"
                                    placeholder="Cari program"
                                    value="{{ request('search') }}"
                                    class="w-full rounded-full pl-4 pr-8 bg-gray-50 border-gray-300 focus:border-primary focus:ring-primary"
                                />
                                <svg class="absolute right-0 top-0 h-5 w-5 mt-3 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </label>
                        </div>
                    </form>
                    </div>  
            </div>
        </nav>

        <main>
            @if ($campaigns->isNotEmpty())
                @foreach ($campaigns as $campaign)
                <a href="{{ route('campaigns.show', ['slug' => $campaign->slug]) }}" class="card card-campaign-alt">
                    <div class="card rounded mb-3 timeline-item">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <img src="{{ $campaign->thumbnail_cover_url }}" loading="lazy" width="40px" height="40px" class="rounded-circle fit-cover mr-2">
                                <div class="flex-fill">
                                    <span class="font-weight-semibold d-block mb-1">{{ $campaign->partnership_name ? $campaign->partnership_name : 'Turuntangan Pinara' }}</span>
                                    <span class="text-default font-size-sm text-capitalize">2 hari yang lalu</span>
                                </div>
                            </div>
                            <div class="card card-campaign shadow-none border mb-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2">
                                        <img src="{{ $campaign->thumbnail_cover_url }}" loading="lazy" height="64" width="64" class="rounded fit-cover mr-2" onerror="this.onerror=null;this.src='/images/default-image-square.png';">
                                        <h6 class="card-title truncate truncate-3 mb-0">{{ $campaign->name }}</h6>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $campaign->collected_funds_percentage }}"  aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="font-size-sm text-left">
                                            <span class="d-block font-weight-semibold text-success">@idr($campaign->collected_funds)</span>
                                            <span class="text-default">telah terkumpul</span>
                                        </div>
                                        <div class="font-size-sm text-right">
                                            <span class="d-block text-default">Sisa</span>
                                            <span class="text-black">{{ $campaign->time_left }} hari</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach

                <x-pagination :collection="$campaigns" />
            @else
                <div class="p-4 flex flex-col justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div>Data masih kosong</div>
                </div>
            @endif
        </main>

        <x-bottom-bar />
    </div>
</x-app>
