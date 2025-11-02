<form wire:submit.prevent="register">
    <div class="card mx-auto" style="max-width: 360px;">
        <div class="card-body">
            {{-- Header Form --}}
            <div class="text-center mb-4">
                <h2>Mendaftar</h2>
            </div>

            {{-- Nama --}}
            <div class="form-group mb-3">
                <label>Nama</label>
                <input type="text" class="form-control" wire:model="name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {{-- Email --}}
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" class="form-control" wire:model="email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {{-- Kata Sandi --}}
            <div class="form-group mb-3">
                <label>Kata Sandi</label>
                <input type="password" class="form-control" wire:model="password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {{-- Tombol Kirim --}}
            <div class="form-group mt-3 text-end">
                <button type="submit" class="btn btn-primary btn-block">Kirim</button>
            </div>

            {{-- Link ke Login --}}
            <p class="text-center mt-3 mb-0">
                Sudah memiliki akun? <a href="{{ route('auth.login') }}">Masuk</a>
            </p>
        </div>
    </div>
</form>
