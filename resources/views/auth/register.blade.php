@extends('client.layout.template-2')
@section('content')
<!-- REGISTER
    ================================================== -->
    <div class="container mb-11">
        <div class="row gx-0">
            <div class="col-md-7 shadow bg-light  col-xl-5 mx-auto">
                <!-- Register -->
                <h3 class="mb-6 text-center">Sign Up and Start Learning!</h3>

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

                <!-- Form Register -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Username -->
                    <div class="form-group mb-5">
                        <label for="name">
                            Name
                        </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="John Doe">
                    </div>

                    <!-- Email -->
                    <div class="form-group mb-5">
                        <label for="email">
                            Email
                        </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="johndoe@example.com">
                    </div>

                    <!-- custome field  -->

                    <!-- phone -->
                    <div class="form-group mb-5">
                        <label for="phone">
                            Phone
                        </label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="+88">
                    </div>

                    <!-- Password -->
                    <div class="form-group mb-5">
                        <label for="password">
                            Password
                        </label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="********">
                    </div>

                     <!-- Confirm Password -->
                     <div class="form-group mb-5">
                        <label for="password-confirm">
                            Confirm Password
                        </label>
                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="********">
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-block btn-primary btn-sm" type="submit">
                        SIGN UP
                    </button>

                </form>

                <!-- Text -->
                <p class="py-2 text-center">
                    Already have an account? <a class="text-underline" href="{{route('login')}}">Log In</a>
                </p>
            </div>
        </div>
    </div>
@endsection
