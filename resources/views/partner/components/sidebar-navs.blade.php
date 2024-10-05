<div class="py-4 text-gray-500 dark:text-gray-400">
    <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
        {{ config('app.name', 'Laravel') }}
    </a>
    <ul class="mt-6">
        <x-admin::nav-link label="Beranda" :url="route('partner::home')" :active="request()->routeIs('admin::home')" />
        <x-admin::nav-link label="Program" :url="route('partner::campaigns.index')" :active="request()->routeIs('partner::campaigns.*')" />
    </ul>
</div>
