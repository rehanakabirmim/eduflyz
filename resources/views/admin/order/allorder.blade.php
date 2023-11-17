@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>All Orders</h4>
    <div class="card">
        <h5 class="card-header">Orders List!</h5>
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
                        <th>Course Name</th>
                        <th>Buyer Name</th>
                        <th>Buyer Mail</th>
                        <th>Price</th>
                        <th>Payment Method</th>
                        <th>Trxn Id</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $count = 1; @endphp
                    @foreach ($orders as $order)
                    @php 
                        $user_name = App\Models\User::where('id', $order->user_id)->value('name');
                        $user_email = App\Models\User::where('id', $order->user_id)->value('email');
                        $course_name = App\Models\Course::where('id', $order->course_id)->value('course_name');
                    @endphp
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $course_name }}</td>
                        <td>{{ $user_name }}</td>
                        <td>{{ $user_email }}</td>
                        <td>{{ $order->price }}</td>
                        <td>{{ $order->payment_method }}</td>
                        <td>
                        {{ $order->trxn_id }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>
</div>
@endsection