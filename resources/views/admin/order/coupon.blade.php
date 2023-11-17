@extends('admin.layout.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Add New Coupon</h4>

  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <!-- Category Add -->
        <h5 class="mb-0">Add New Coupon</h5>
        <small class="text-muted float-end">Input Details</small>
      </div>
      <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <form action="{{ route('store.coupon') }}" method="POST">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="coupon_code">Coupon Code</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="NewYear10" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="amount">Amount</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="amount" name="amount" placeholder="10" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="course">Coupon Type</label>
            <div class="col-sm-10">
            <select class="form-select" id="type" name="type" aria-label="Default select example">
                <option value="flat">Flat</option>
                <option value="percentage">Percentage</option>
            </select>
            </div>
        </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Add Coupon</button>
            </div>
          </div>
        </form>
      </div>

      <h5 class="card-header">Available Category Information</h5>
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
                        <th>Coupon Code</th>
                        <th>Amount</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $count = 1; @endphp
                    @foreach ($coupons as $coupon)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $coupon->coupon_code }}</td>
                        <td>{{ $coupon->amount }}</td>
                        <td>
                            {{ $coupon->type }}
                        </td>
                        <td>
                            <!-- <a href="#" class="btn btn-primary">Edit</a> -->
                            <a href="{{route('delcoupon', $coupon->coupon_id)}}" class="btn btn-warning">Delete</a>
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