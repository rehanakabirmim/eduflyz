<?php

namespace App\Http\Middleware;

use App\Models\Course;
use App\Models\Order;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Purchase
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id = $request->id;
        $user_id = Auth::id();
        //user perchase check
        $order_id = Order::where('course_id', $id)->where('user_id', $user_id)->value('id');
        $check = Order::find($order_id);

        //course teacher check
        $teacher = Course::where('id', $id)->where('teacher_id', $user_id)->first();

        if($check != null){
            return $next($request);
        }
        elseif(auth()->user()->role == 'admin'){
            return $next($request);
        }
        elseif(isset($teacher)){
            return $next($request);
        }
        else {
            return redirect('/');
        }
        
    }
}
