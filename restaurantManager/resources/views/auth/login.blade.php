@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height:90vh">
    <div class="col-sm-10 col-md-5 col-lg-3">
        <div class="card card-body shadow">
            <div class="col text-center my-3">
                <h3><i class="fas fa-utensils"></i> RestaurantManager</h3>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="form-floating mb-3">
                        <input id="email" type="email" placeholder="E-Mail Address" class="form-control @error('email') is-invalid @enderror" name="email" autofocus>
                        <label for="email">{{ __('E-Mail Address') }}</label>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="form-floating mb-3">
                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required >
                        <label for="password">{{ __('Password') }}</label>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success text-light">
                            {{ __('Login') }}
                        </button>
                    </div>
                        
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
