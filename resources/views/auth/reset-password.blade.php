@extends('client.layout.template-2')
@section('content')
    <!-- Reset Password
    ================================================== -->
    <div class="container mb-11">
        <div class="row gx-0">
            <div class="col-md-7 col-xl-4 mx-auto">
                <!-- Login -->
                <h3 class="mb-6 text-center">Reset Password</h3>
                <div>
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

                <!-- Form Forget Password -->
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <!-- Email -->
                    <div class="form-group mb-5">
                        <label for="email">
                            Email
                        </label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email', $request->email)}}">
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
                        Reset Password
                    </button>

                </form>
            </div>
        </div>
    </div>

@endsection
