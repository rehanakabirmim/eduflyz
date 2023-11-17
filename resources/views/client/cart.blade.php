@extends('client.layout.template-2')
@section('content')
<div class="container pb-6 pb-xl-10 py-10">
    @if(session()->has('message'))
    <div class="alert alert-success">
    {{ session()->get('message') }}
    </div>
    @endif
    <!-- SHOP CART
    ================================================== -->

        <div class="row">
            <div id="primary" class="content-area">
                <main id="main" class="site-main ">
                    <div class="page type-page status-publish hentry">
                        <!-- .entry-header -->
                        <div class="entry-content">
                            <div>
                                <div class="table-responsive">
                                    <table class="shop_table shop_table_responsive cart">
                                        <thead>
                                            <tr>
                                                <th  class="product-name">Course</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-remove">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        @php
                                        $total = 0;
                                        @endphp

                                        @foreach ($cart_items as $item)
                                        @php
                                        $course_name = App\Models\Course::where('id', $item->course_id)->value('course_name');
                                        @endphp
                                            <tr class="cart_item">
                                                <td  class="product-name" data-title="Product">
                                                    <div class="d-flex align-items-center">

                                                        {{$course_name}}

                                                    </div>
                                                </td>

                                                <td class="product-price" data-title="Price">
                                                ৳{{$item->price}}
                                                </td>

                                                <td class="product-remove">
                                                    <a href="{{route('removecart',$item->id)}}" class="remove" aria-label="Remove this item">
                                                        <i class="far fa-trash-alt text-secondary font-size-sm"></i>
                                                    </a>
                                                </td>

                                           
                                            </tr>
                                            @php
                                            $total = $total + $item->price;
                                            @endphp
                                            @endforeach
                                            <tr>
                                                <td colspan="5" class="actions">
                                                    <div class="coupon">
                                                        <form action="{{ route('update.cart') }}" method="POST">
                                                        @csrf
                                                            <input type="hidden" name="total" value="{{$total}}">
                                                            <label for="coupon_code">Coupon:</label>
                                                            <input type="text" name="coupon_code" class="input-text" id="coupon_code" placeholder="Coupon code">
                                                            <input type="submit" class="button mt-2" value="Apply coupon">
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- .entry-content -->
</div>
</main>
</div>
<div id="secondary" class="sidebar" role="complementary">
    <div class="cart-collaterals">
        <div class="cart_totals">
            <h2>Cart totals</h2>

            <table class="shop_table shop_table_responsive">
                <tbody>
                    <tr class="cart-subtotal">
                        <th>Subtotal</th>
                        <td data-title="Subtotal">৳{{$total}}</td>
                    </tr>

                    @if(session()->has('discount'))
                    <tr class="cart-subtotal">
                        @php
                        $discount = session()->get('discount');
                        $total = $total - $discount;
                        @endphp
                        <th>Discount</th>
                        <td data-title="Discount">৳{{ $discount }}</td>
                    </tr>
                    @endif



                    <tr class="order-total">
                        <th>Total</th>
                        <td data-title="Total"><strong>৳{{$total}}</strong> </td>
                    </tr>
                </tbody>
            </table>

            <div class="wc-proceed-to-checkout">
                @if ($total <= 0) <a href="" class="btn btn-primary disabled checkout-button">Proceed To Checkout</a>
                    @else
                    <form action="{{route('bkash-create-payment')}}" method="get">
                        @csrf
                        <input type="hidden" name="total" id="total" value="{{$total}}">
                        <input type="submit" value="Pay With bKash To Checkout" class="btn btn-primary checkout-button">
                    </form>
                    <!-- <a href="" class="btn btn-primary checkout-button">Pay With bKash To Checkout</a> -->
                    @endif
            </div>
        </div>
    </div>
</div>
</div>
</div>


@endsection
