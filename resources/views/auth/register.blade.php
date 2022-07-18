@extends('layouts.app')

@section('content')
<div class="container ct-form bg-white">
    <div class="row row-cols-1 row-cols-md-2 h-100 align-items-center justify-content-center">
        <div class="col d-none d-md-block">
            <div class="logo text-center">
                <img src="{{ asset('img/logo.png')}}" alt="">
                <div class="logo-text display-3 text-danger">
                    BoolBnB
                </div>
            </div>
        </div>
        <div class="form col bg-danger d-flex align-items-center justify-content-center">
            <div class="text-white">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <h2 class="text-center display-4 pb-4">Register</h2>
                    <div class="form-group row">
                        <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="surname" class="col-form-label text-md-right">{{ __('Surname') }}</label>

                        <div class="">
                            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" surname="surname" value="{{ old('surname') }}" autocomplete="surname" autofocus>

                            @error('surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                        <div class="">
                            <input id="date" type="date" max="3000-01-01" onfocus="this.max=new Date().toISOString().split('T')[0]" class="form-control @error('Date of Birth') is-invalid @enderror" date="date" value="{{ old('Date of Birth') }}" autocomplete="date" autofocus>

                            @error('Date of Birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail*') }}</label>

                        <div class="">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-form-label text-md-right">{{ __('Password*') }}</label>

                        <div class="">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password*') }}</label>

                        <div class="">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="d-flex justify-content-center">
                            <!-- BUTTON -->
                            <div class="d-flex gap-5 pt-4">
                                <div class="button pt-4">
                                    <button class="btn btn-light text-danger fw-bold" type="submit">{{ __('REGISTER') }}</button>
                                </div>
                                <div class="button pt-4">
                                    <label class="pe-2" for="">Already have account?</label>
                                    <button class="btn btn-light text-danger fw-bold" type="submit">LOGIN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection