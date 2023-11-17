
@extends('client.layout.template-2')
@section('content')
    <!-- LOGIN
    ================================================== -->
    <div class="container mb-11">
        <div class="row gx-0">
            <div class="col-md-7 shadow bg-light px-auto col-xl-4 mx-auto">
                <!-- Login -->
                <h3 class="mb-6 text-center">Log In to Your Eduflyz Account!</h3>
                <!-- <a href="{{route('google.login')}}" class="btn btn-sm btn-primary">
                
                Sign in with Google
                
                </a> -->
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

                <!-- Form Login -->
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <!-- Email -->
                    <div class="form-group mb-5">
                        <label for="email">
                            Email
                        </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="user@example.com">
                    </div>

                    <!-- Password -->
                    <div class="form-group mb-5">
                        <label for="password">
                            Password
                        </label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="**********">
                    </div>

                    <div class="d-flex align-items-center mb-5 font-size-sm">
                        <div class="form-check">
                            <input class="form-check-input text-gray-800" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label text-gray-800" for="autoSizingCheck1">
                                Remember me
                            </label>
                        </div>

                        <div class="ms-auto">
                            <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Password</a>
                        </div>
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-block btn-primary btn-sm" type="submit">
                        LOGIN
                    </button>
                </form>

                <!-- Text -->
                <p class="py-2 text-center">
                    Don't have an account? <a class="text-underline" href="{{route('register')}}">Sign up</a>
                </p>
            </div>
        </div>
    </div>

@endsection


