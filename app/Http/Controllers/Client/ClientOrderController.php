<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientOrderController extends Controller
{
    //View cart page
    public function Cart(){
        $userid = Auth::id();
        $cart_items = Cart::where('user_id', $userid)->get();
        return view('client.cart', compact('cart_items'));
    }

    //Add to cart 
    public function AddCart(Request $request){
        //Delete exising same Course By Users to keep one unique course in cart per user
        $course_id = $request->course_id;
        $cart_items = Cart::where('course_id', $course_id)->get();
        foreach($cart_items as $items){
            $id = $items->id;
            $user_id = $items->user_id;
            if($user_id == Auth::id()){
                Cart::findOrFail($id)->delete();
            }
        }

        //store course in cart
        Cart::insert([
            'course_id' => $request->course_id,
            'user_id' => Auth::id(),
            'price' => $request->price,

        ]);
        
        return redirect()->route('cart')->with('message', 'Your Courses Added To Cart Successfully!');

    }

    //Update cart with coupon code
    public function CartUpdate(Request $request){
        $total = $request->total;
        $code = $request->coupon_code;
        $coupon = Coupon::where('coupon_code', $code)->first();

        if(!$coupon){
            return redirect()->route('cart')->with('message', 'Sorry! Invalid Coupon!');
        }else{
            $coupon_type = $coupon->type;
            $amount = $coupon->amount;
            $discount = 0;
            if($coupon_type == 'flat' && $total != 0){
                $discount = $amount;
            }
            elseif($coupon_type == 'percentage' && $total != 0){
                $discount = floor(($total * $amount)/100);
            }

            return redirect()->route('cart')->with('discount', $discount);
        }
        
        
    }

    //Delete Course from cart
    public function DeleteCart($id){
        Cart::findOrFail($id)->delete();
        return redirect()->route('cart')->with('message', 'The Item Removed Successfully!');
    }

}
