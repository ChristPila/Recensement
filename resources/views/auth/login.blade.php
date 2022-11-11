@extends('layouts.auth')

@section('form')

<div class="card">
    <div class="card-body login-card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" 
                value="{{ old('email') }}" required autocomplete="email" autofocus>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>
            </div>
        </form>
        <p class="mb-0">
            @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __("S'enregistrer") }}</a>
            @endif
        </p>
    </div>

</div>


@endsection
