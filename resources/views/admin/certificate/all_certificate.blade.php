@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Certificate</h4>

  <div class="col-xxl">
    <div class="card mb-4">
      <h5 class="card-header">All Certificate</h5>

            @if(Session::has('notification'))
            <div class="alert alert-success alert_success" role="alert">
            <strong>Success</strong> {{Session::get('notification')}}
            </div>
        @endif
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>Certificate ID</th>
                        <th>Certificate Name</th>
                        <th>Student Name</th>
                        <th>Course Name </th>
                        <th>Create Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                    @foreach ($all_certificate as $key =>  $certificate)
                    <tr>
                        <td>{{ $certificate->id }}</td>
                        <td>{{ $certificate->certificate_name }}</td>
                        <td>{{ $certificate->user_name }}</td>
                        <td>{{ $certificate->course_name }}</td>
                        <td>{{ $certificate->created_at }}</td>

                        <td>
                            <a href="{{route('delete.certificate',$certificate->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            <a href="{{route('print.certificate',$certificate->id)}}" class="btn btn-info btn-sm">Print</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>
@endsection
