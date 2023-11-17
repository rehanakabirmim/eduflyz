@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>All Teacher</h4>
    <div class="card">
        <h5 class="card-header">Existing Teachers!</h5>
        @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Title</th>
                        <th>Balance</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $count = 1; @endphp
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                        {{ $user->username }}
                        </td>
                        <td> {{number_format($user->balance,2)}} ৳ </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
