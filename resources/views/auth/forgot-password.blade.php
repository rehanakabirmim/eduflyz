@extends('client.layout.template-2')
@section('content')
    <!-- Session Status -->
    <!-- <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf -->

                        <!-- Email Address -->
                        <!-- <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div> -->


                        <!-- <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right" value="__('Email')">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Email Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Forget Password
================================================== -->
    <div class="container mb-11">
        <div class="row gx-0">
            <div class="col-md-7 col-xl-4 mx-auto">
                <!-- Login -->
                <h6 class="mb-6 text-center">
                    Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                </h6>
                <div>
                <x-auth-session-status class="mb-4" :status="session('status')" />
                    @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                    @endif
                </div>

                <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('password.email') }}">
                @csrf
                        <!-- Email -->
                        <div class="form-group mb-5">
                            <label for="email">
                                Email
                            </label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="user@example.com">
                        </div>

                        <div>
                            <button type="submit" class="btn btn-sm btn-block btn-primary mb-5">
                                Email Password Reset Link
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
