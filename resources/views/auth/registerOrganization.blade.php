<x-app>
    <div class="main-wrapper"> 
        

        <nav class="navbar navbar-top fixed-top  top-0 inset-x-0 z-10">
            <div class="card container d-block">
                <div class="d-flex align-items-center">  
                    <form action="{{ route('campaigns.index') }}" method="GET">
                        <div class="flex items-center space-x-2 p-2">
                            <x-button-back />
                        </div>
                    </form>
                    </div>  
            </div>
        </nav>
    
        <main>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <!-- <p  align="justify">Silahkan masukkan alamat email dan password Anda.</p> -->

            <form method="POST" action="{{ route('register.organization') }}">
                @csrf

                <!-- Name -->
                <div class="card-body">
                    <x-label for="name" value="Nama Lembaga" />
                    <input id="name" class="block mt-1 w-full" type="text" name="name_organization" :value="old('name')" required autofocus />
                </div>

                <!-- Name -->
                <div class="card-body">
                    <x-label for="name" value="Jenis Lembaga" />
                    <input id="name" class="block mt-1 w-full" type="text" name="category_organization" :value="old('name')" required autofocus />
                </div>

                <!-- Name -->
                <div class="card-body">
                    <x-label for="name" value="Nama Penanggung Jawab" />
                    <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="card-body">
                    <x-label for="email" value="Alamat Email Penanggung Jawab" />
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="card-body">
                    <x-label for="phone" value="Nomor HP" />
                    <input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
                </div>

                <!-- Password -->
                <div class="card-body">
                    <x-label for="password" value="Kata Sandi" />
                    <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="card-body">
                    <x-label for="password_confirmation" value="Konfirmasi Kata Sandi" />
                    <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                </div>

                <div class="card-body">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">Sudah terdaftar?</a>
                    <x-button type="submit" class="ml-4">Daftar</x-button>
                </div>

                <input type="hidden" name="partner" value="1">
            </form>
        </main>
        <x-bottom-bar />
    </div>
</x-app>
