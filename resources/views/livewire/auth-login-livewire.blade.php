<div class="container mt-5">
    <h2 class="mb-4">Login</h2>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form wire:submit.prevent="login">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input wire:model="email" type="email" class="form-control" id="email" required>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input wire:model="password" type="password" class="form-control" id="password" required>
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
