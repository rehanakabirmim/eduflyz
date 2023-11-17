@extends('client.layout.template-2')
@section('content')
    <!-- Verify Email
    ================================================== -->
    <div class="container mb-11">
        <div class="row gx-0">
            <div class="col-md-7 col-xl-4 mx-auto">
                <!-- Login -->
                <h6 class="mb-6 text-center">
                    Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.
                </h6>
                <div>
                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-danger tex-center">
                        A new verification link has been sent to the email address you provided during registration.
                    </div>
                @endif
                </div>

                <div class="mt-4 flex items-center justify-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <div>
                            <button type="submit" class="btn btn-sm btn-block btn-primary mb-5">
                                Resend Verification Email
                            </button>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="btn btn-sm btn-block btn-dark">
                            Log Out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection