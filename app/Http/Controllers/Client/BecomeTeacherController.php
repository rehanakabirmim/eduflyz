<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\TeacherRequest;
use Illuminate\Http\Request;

class BecomeTeacherController extends Controller
{
    public function Apply(){
        return view('client.teacherapply');
    }

    public function ApplySubmit(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'details' => 'required'
        ]);

        TeacherRequest::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'details' => $request->details
        ]);

        return back()->with('message', 'Thank You! Your request submitted successfully!');
    }
}
