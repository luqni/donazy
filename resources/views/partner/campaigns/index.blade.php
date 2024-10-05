<x-partner::app>
    <x-partner::page-title value="Program" />

    <x-partner::success-alert />

    <div class="flex justify-between items-center space-x-2 rounded-lg mb-4">
        <div>
            <form action="{{ route('partner::campaigns.index') }}" method="GET">
                <x-partner::search />
            </form>
        </div>
        <div>
            <x-partner::link
                variant="primary"
                :href="route('partner::campaigns.create')"
                value="Buat"
                class="mt-1"
            />
        </div>
    </div>

    <div class="w-full overflow-hidden rounded-lg shadow-md">
        <x-partner::table>
            <thead>
                <x-partner::col-header>
                    <x-partner::row-header>
                        <x-partner::sortable value="ID" name="id" />
                    </x-partner::row-header>
                    <x-partner::row-header>
                        <x-partner::sortable value="Nama" name="name" />
                    </x-partner::row-header>
                    <x-partner::row-header>
                        <x-partner::sortable value="Slug" name="slug" />
                    </x-partner::row-header>
                    <x-partner::row-header>
                        <x-partner::sortable value="Kebutuhan Dana" name="funds" />
                    </x-partner::row-header>
                    <x-partner::row-header>
                        <x-partner::sortable value="Dana Terkumpul" name="collected_funds" />
                    </x-partner::row-header>
                    <x-partner::row-header>
                        <x-partner::sortable value="Waktu Terbit" name="published_at" />
                    </x-partner::row-header>
                    <x-partner::row-header>
                        <x-partner::sortable value="Waktu Ditutup" name="closed_at" />
                    </x-partner::row-header>
                    <x-partner::row-header>Aksi</x-partner::row-header>
                </x-partner::col-header>
            </thead>
            <x-partner::tbody>
                @forelse ($campaigns as $campaign)
                    <x-partner::col>
                        <x-partner::row>{{ $campaign->id }}</x-partner::row>
                        <x-partner::row>{{ $campaign->name }}</x-partner::row>
                        <x-partner::row>{{ $campaign->slug }}</x-partner::row>
                        <x-partner::row>@if($campaign->isUnlimitedFunds()) @idr($campaign->funds) @else Tidak terbatas @endif</x-partner::row>
                        <x-partner::row>@idr($campaign->collected_funds)</x-partner::row>
                        <x-partner::row>{{ $campaign->published_at }}</x-partner::row>
                        <x-partner::row>{{ $campaign->closed_at }}</x-partner::row>
                        <x-partner::row>
                            <div class="flex items-center text-sm">
                                <x-partner::row-show-action :href="route('partner::campaigns.show', $campaign)" />
                                <x-partner::row-edit-action :href="route('partner::campaigns.edit', $campaign)" />
                                <x-partner::row-delete-action :href="route('partner::campaigns.destroy', $campaign)" />
                            </div>
                        </x-partner::row>
                    </x-partner::col>
                @empty
                    <x-partner::col>
                        <x-partner::row colspan="8">
                            <x-partner::empty />
                        </x-partner::row>
                    </x-partner::col>
                @endforelse
            </x-partner::tbody>
        </x-partner::table>
        <x-partner::pagination :collection="$campaigns" />
    </div>
</x-partner::app>
