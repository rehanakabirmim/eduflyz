@extends('client.layout.template-2')
@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

 

    <div class="row w-xl-65 mx-auto p-7 my-5 border rounded shadow mb-6">
        <div class="row">
           <div class="col-9">
            <span class= "h3">Profiel Image</span>
           </div>
           <div class="col-3">


            @if ($user->role == 'teacher')
            <span class="text-primary">Balance: </span><span> {{number_format($user->balance,2)}} ৳</span>

            @endif

           </div>
        </div>



        <p>You Can Update You Profile image from here!</p>

        <div><img src="{{asset($user->img)}}" style="height: 200px;" /></div>
        <form method="post" action="{{ route('proimg.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        <div class="form-group mb-5">
            <label for="img">
                Upload New Image
            </label>
            <input class="form-control" type="file" id="img" name="img" />
        </div>
        <input type="submit" value="Update Profile Image" class="btn btn-sm btn-primary" />
        </form>



    </div>

    <div class="row w-xl-65 mx-auto p-7 my-5 border rounded shadow mb-6">
        <h3>Update Profile Information</h3>
        <p>We recommend to update your profile!</p>
        <form method="post" action="{{ route('proinfo.update') }}" class="mt-6 space-y-6">
        @csrf

        <div class="form-group mb-5">
            <label for="username">
                Title
            </label>
            <input type="text" class="form-control" id="username" name="username" value="{{old('username', $user->username)}}">
        </div>

        <div class="form-group mb-5">
            <label for="phone">
                Phone
            </label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone', $user->phone)}}">
        </div>

        <div class="form-group mb-5">
            <label for="address">
                Address
            </label>
            <input type="address" class="form-control" id="address" name="address" value="{{old('address', $user->address)}}">
        </div>

        <div class="form-group mb-5">
            <label for="description">
                Description
            </label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="5">{{old('description', $user->description)}}</textarea>
        </div>

        <div class="flex items-center gap-4">
            <input type="submit" value="Update" class="btn btn-sm btn-primary">
        </div>
        </form>
    </div>

    <div class="row w-xl-65 mx-auto p-7 my-5 border rounded shadow mb-6">
        <h3>Update Password</h3>
        <p>Ensure your account is using a long, random password to stay secure.</p>
        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="form-group mb-5">
            <label for="current_password">
                Current Password
            </label>
            <input type="password" class="form-control" id="current_password" name="current_password">
        </div>

        <div class="form-group mb-5">
            <label for="password">
                New Password
            </label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group mb-5">
            <label for="password_confirmation">
                Confirm Password
            </label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>

        <div class="flex items-center gap-4">
            <input type="submit" value="Update" class="btn btn-sm btn-primary">

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >Updated</p>
            @endif
        </div>
        </form>
    </div>

    <div class="row w-xl-65 mx-auto p-7 my-5 border rounded shadow mb-6">
        <h3>Profile Information</h3>
        <p>Update your account's profile information and email address.</p>
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')
            <div class="form-group mb-5">
                <label for="name">
                    Name
                </label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name', $user->name)}}">
            </div>
            <div class="form-group mb-5">
                <label for="email">
                    Email
                </label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email', $user->email)}}">
            </div>
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        Your email address is unverified.

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            Click here to re-send the verification email.
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            A new verification link has been sent to your email address.
                        </p>
                    @endif
                </div>
            @endif
            <div class="flex items-center gap-4">
            <input type="submit" value="Save" class="btn btn-sm btn-primary">

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >Saved.</p>
            @endif
        </div>
        </form>
    </div>
</div>

@endsection
