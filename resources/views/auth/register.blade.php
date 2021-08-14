@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</div>

                <div class="card-body">

                    @isset($url)
                    @if ($url=='agent' || $url=='subagent')

                    <form method="POST" action='{{ route('register.agentcreate') }}' aria-label="{{ __('Register') }}">

                    @endif
                    @else
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @endisset
                            @csrf
                            @method('POST')

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            @isset($url)

                            @if ($url=='agent' || $url=='subagent')

                            <div class="form-group row">
                                    {{-- <input type="text" name="township" id="township" class="form-control @error('township') is-invalid @enderror" required autocomplete="name" autofocus> --}}
                                    <label for="select-region" class="col-md-4 col-form-label text-md-right">Select Region</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="select-region" name="region">
                                            <option value="">Yangon</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="select-township" class="col-md-4 col-form-label text-md-right">Select Township</label>
                                <div class="col-md-6">
                                        <select class="form-control" id="select-township" name="township">
                                            <option selected>Please select region first</option>
                                        </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phno" class="col-md-4 col-form-label text-md-right">{{ __('Ph No') }}</label>

                                <div class="col-md-6">
                                    <input id="phno" type="text" class="form-control" name="phno" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phno" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address" autofocus>
                                </div>
                            </div>

                            @endif

                            @endisset




                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
