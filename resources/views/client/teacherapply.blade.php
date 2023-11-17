@extends('client.layout.template-2')
@section('content')
<div class="container">
    <!-- PGE TITLE
    ================================================== -->
    <header class="py-8 py-md-11" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">Apply to Teach with Us!</h1>
        </div>
    </header>

    <div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
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

    <div class="row w-xl-65 mx-auto mb-5 shadow">
        <form action="{{route('teacher.apply.submit')}}" method="POST">
            @csrf
            <div class="form-group mb-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="">
            </div>

            <div class="form-group mb-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="">
            </div>

            <div class="form-group mb-6">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="">
            </div>

            <div class="form-group mb-6 col-12">
                <label for="details">About You & Linkedln Profile Link</label>
                <textarea class="form-control" id="details" name="details" rows="6" placeholder="You & Your Details"></textarea>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block mw-md-300p mb-10">SEND</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
