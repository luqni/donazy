<x-partner::app>
    <div class="flex items-center space-x-2">
        <x-partner::page-title value="Profil Lembaga" />
    </div>

    <x-partner::form-container>
        <form action="{{ route('partner::profile.update') }}" method="POST">
            @csrf
            @method('PUT')
            <label class="block text-sm mb-4">
                <x-partner::label value="Nama Lembaga" required />
                <x-partner::input type="text" name="name" placeholder="Nama" :error="$errors->has('name')"
                    :value="old('name', $user->name)" />
                @error('name')
                    <x-partner::input-helper error :value="$message" />
                @enderror
            </label>
            <label class="block text-sm mb-4">
                <x-partner::label value="Email" required />
                <x-partner::input type="email" name="email" placeholder="Email" :error="$errors->has('email')"
                    :value="old('email', $user->email)" />
                @error('email')
                    <x-partner::input-helper error :value="$message" />
                @enderror
            </label>
            <label class="block text-sm mb-4">
                <x-partner::label value="Nomor HP" required />
                <x-partner::input type="text" name="phone" placeholder="Nomor HP" :error="$errors->has('phone')"
                    :value="old('phone', $user->phone)" />
                @error('phone')
                    <x-partner::input-helper error :value="$message" />
                @enderror
            </label>
            <label class="block text-sm mb-4">
                <x-partner::label value="Kata Sandi Sebelumnya" />
                <x-partner::input type="password" name="old_password" placeholder="Kata Sandi Sebelumnya"
                    :error="$errors->has('old_password')" />
                <x-partner::input-helper value="Biarkan kosong bila tidak ada perubahan" />
                @error('old_password')
                    <x-partner::input-helper error :value="$message" />
                @enderror
            </label>
            <label class="block text-sm mb-4">
                <x-partner::label value="Kata Sandi Baru" />
                <x-partner::input type="password" name="password" placeholder="Kata Sandi Baru"
                    :error="$errors->has('password')" />
                <x-partner::input-helper value="Biarkan kosong bila tidak ada perubahan" />
                @error('password')
                    <x-partner::input-helper error :value="$message" />
                @enderror
            </label>
            <label class="block text-sm mb-4">
                <x-partner::label value="Konfirmasi Kata Sandi" />
                <x-partner::input type="password" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" />
                <x-partner::input-helper value="Biarkan kosong bila tidak ada perubahan" />
            </label>
            <x-partner::button variant="primary" type="submit" value="Simpan" />
        </form>
    </x-partner::form-container>
</x-partner::app>
