@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>All Teacher Request</h4>
    <div class="card">
        <h5 class="card-header">Existing Teachers Request!</h5>
        <div class="table-responsive">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if(count($tr_requests) <= 0)
                    <tr><td>No Teacher Request</td></tr>
                    @else
                    @php $count = 1; @endphp
                    @foreach ($tr_requests as $tr_request)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $tr_request->name }}</td>
                        <td>{{ $tr_request->email }}</td>
                        <td>{{ $tr_request->phone }}</td>
                        <td>
                        {{ $tr_request->details }}
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div> 
    </div>
</div>
@endsection