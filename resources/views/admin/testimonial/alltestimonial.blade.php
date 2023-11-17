@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Testimonial</h4>

  <div class="col-xxl">
    <div class="card mb-4">
      <h5 class="card-header">All Testimonial</h5>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        <div class="table-responsive">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Comment</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @php $count = 1; @endphp
                @if(count($testimonials) <= 0)
                <tr><td>No Testimonials</td></tr>
                @else
                <tbody class="table-border-bottom-0">
                    @foreach ($testimonials as $testimonial)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $testimonial->name }}</td>
                        <td>
                            {{ $testimonial->title }}
                        </td>
                        <td>{{ $testimonial->comment }}</td>
                        <td><img src="{{ asset($testimonial->tm_img) }}" style="width:75px"/></td>
                        <td>
                            <a href="{{route('edit.testimonial',$testimonial->tm_id)}}" class="btn btn-primary mb-2">Edit</a>
                            <a href="{{route('del.testimonial', $testimonial->tm_id)}}" class="btn btn-warning">Delete</a>
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
                @endif
            </table>
        </div>
    </div>
  </div>
</div>
@endsection