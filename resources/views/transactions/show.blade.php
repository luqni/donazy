<x-app>
    <div class="main-wrapper">
        <!-- mulai -->
        <header class="fixed top-0 inset-x-0 z-10">
            <x-bg-main>
                <x-container>
                    <div class="flex items-center space-x-2 p-2">
                        <x-button-back href="/my-transactions" />
                        <h5 class="line-clamp-1">Detail Donasi Saya</h5>
                    </div>
                </x-container>
            </x-bg-main>
        </header>

        <x-container>
            <main class="py-20">
                <x-bg-main class="p-4">
                    @switch($transaction->status)
                    @case(\App\Models\Transaction::STATUS_WAITING)
                            <x-transactions.waiting :transaction="$transaction" :paymentMethod="$paymentMethod" />
                            @break
                        @case(\App\Models\Transaction::STATUS_PAID)
                            <x-transactions.paid :transaction="$transaction" :paymentMethod="$paymentMethod" />
                            @break
                        @case(\App\Models\Transaction::STATUS_EXPIRED)
                            <x-transactions.expired :transaction="$transaction" :paymentMethod="$paymentMethod" />
                            @break
                        @case(\App\Models\Transaction::STATUS_CANCELED)
                            <x-transactions.canceled :transaction="$transaction" :paymentMethod="$paymentMethod" />
                            @break
                    @endswitch
                </x-bg-main>
            </main>
        </x-container>

        <x-bottom-bar />
        <!-- berakhir -->
    </div>
    
</x-app>
