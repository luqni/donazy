<x-partner::app>
    <div class="flex items-center space-x-2">
        <x-partner::back :href="route('partner::campaigns.index')" />
        <x-partner::page-title value="Buat Program" />
    </div>

    <x-partner::form-container>
        <form action="{{ route('partner::campaigns.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-partner::campaigns.form />
            <x-partner::button variant="primary" type="submit" value="Simpan" />
        </form>
    </x-partner::form-container>

    <x-slot name="scripts">
        <script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js" defer></script>
    </x-slot>
</x-partner::app>
