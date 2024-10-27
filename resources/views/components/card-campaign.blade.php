@props(['campaign'])

<a href="{{ route('campaigns.show', ['slug' => $campaign->slug]) }}" class="card card-campaign-alt">
    <!-- @if ($campaign->canClose() && $campaign->isClosed())
        <div class="absolute inset-0 flex items-center justify-center bg-primary bg-opacity-30">
            <div class="px-3 py-2 rounded text-xl uppercase bg-white text-primary">Ditutup</div>
        </div>
    @endif -->
    <!-- <div class="card card-campaign-alt"> -->
        <img src="{{ $campaign->thumbnail_cover_url }}" loading="lazy" width="152" height="76" class="card-img fit-cover">
        <div class="card-body">
            <div class="mb-3">
                <div class="text-dark font-weight-semibold truncate truncate-3 mb-2">{{ $campaign->name }}</div>
                <div class="card-campaign-user">{{ $campaign->name }}</div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $campaign->collected_funds_percentage }}" aria-valuenow="7476466" aria-valuemin="0" aria-valuemax=""></div>
            </div>
            <div class="font-size-sm text-left">
                <span class="d-block font-weight-semibold text-success">@idr($campaign->collected_funds)</span>
            </div>
        </div>
    <!-- </div> -->


    <!-- <img class="w-full h-40 object-cover object-center" src="{{ $campaign->thumbnail_cover_url }}" />
    <div class="p-4 border block">
        <h3 class="font-bold mt-2 line-clamp-2">{{ $campaign->name }}</h3>
        <p class="text-gray-500 text-sm mt-2 line-clamp-1">{{ $campaign->name }}</p>
        <div class="h-2 bg-gray-200 rounded my-2 overflow-hidden">
            <div style="width: {{ $campaign->collected_funds_percentage }}" class="h-2 bg-primary"></div>
        </div>

        <div class="flex flex-row justify-between">
            <div class="flex flex-col">
                <p class="text-sm text-gray-400">Donasi Terkumpul</p>
                <p class="font-bold">@idr($campaign->collected_funds)</p>
            </div>
            @if ($campaign->canClose() && !$campaign->isClosed())
                <div class="flex flex-col text-right">
                    <p class="text-sm text-gray-400">Sisa Waktu</p>
                    <p class="font-bold">{{ $campaign->time_left ? "{$campaign->time_left} Hari" : "Hari ini" }}</p>
                </div>
            @endif
        </div>
    </div> -->
</a>
