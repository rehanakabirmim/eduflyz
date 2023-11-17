@extends('client.layout.template-2')
@section('content')
    <!-- Confirm Password
    ================================================== -->
    <div class="container mb-11">
        <div class="row gx-0">
            <div class="col-md-7 col-xl-4 mx-auto">
                <!-- Login -->
                <h6 class="mb-6 text-center">
                    This is a secure area of the application. Please confirm your password before continuing.
                </h6>
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

                <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                        <!-- Password -->
                        <div class="form-group mb-5">
                            <label for="password">
                                Password
                            </label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="********">
                        </div>

                        <div>
                            <button type="submit" class="btn btn-sm btn-block btn-primary mb-5">
                                Confirm
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
