<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function Index(){
        $orders = Order::all();
        return view('admin.order.allorder', compact('orders'));
    }

    public function Coupon(){
        $coupons = Coupon::all();
        return view('admin.order.coupon', compact('coupons'));
    }

    public function StoreCoupon(Request $request){
        $request->validate([
            'coupon_code' => 'required|unique:coupons',
            'amount' => 'required',
            'type' => 'required'
        ]);

        Coupon::insert([
            'coupon_code' => $request->coupon_code,
            'amount' => $request->amount,
            'type' => $request->type,

        ]);

        return redirect()->route('coupon')->with('message', 'Coupon Added Successfully!');

    }

    public function DelCoupon($id){
        
        Coupon::findOrFail($id)->delete();

        return Redirect::back()->with('message', 'MCQ Deleted Successfully!');
    }
}
