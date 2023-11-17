<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\TeacherRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function Index(){
        return view('admin.teacher.addteacher');
    }

    public function StoreTeacher(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'phone' => 'required|max:20|unique:users',
            'email' => 'required',
            'balance' => 'required',
            'password' => 'required',
        ]);

        User::insert([
            'name' => $request->name,
            'username' => $request->username,
            'phone' => $request->phone,
            'role' => 'teacher',
            'email' => $request->email,
            'balance' => $request->balance,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('allteacher')->with('message', 'New Teacher Added Successfully!');

    }

    public function Allteacher(){
        $users = User::where('role', 'teacher')->latest()->get();
        return view('admin.teacher.allteacher', compact('users'));
    }

    public function TeachReq(){
        $tr_requests = TeacherRequest::latest()->get();
        return view('admin.teacher.teacherreq', compact('tr_requests'));
    }
}
