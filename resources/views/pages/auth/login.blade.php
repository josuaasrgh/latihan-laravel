@extends('layouts.guest')

@section('title', 'Masuk')

@section('content')
    @livewire('auth-login-livewire')

    <hr>
    <p class="mt-3">
        Belum memiliki akun? <a href="{{ route('auth.register') }}">Daftar</a>
    </p>
@endsection
