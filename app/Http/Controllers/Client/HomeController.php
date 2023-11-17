<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Course;
use App\Models\Exam;
use App\Models\ExamAttempt;
use App\Models\GivenExamAnswer;
use App\Models\Order;
use App\Models\Question;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //Home Page
    public function Index(){
        $rcourses = Course::where('course_type', 'recorded')->latest()->get();
        $lcourses = Course::where('course_type', 'live')->latest()->get();
        $role = 'teacher';
        $teachers = User::whereIn('role',['teacher'])->get();
        $testimonials = Testimonial::latest()->get();
        return view('client.home', compact('rcourses', 'lcourses', 'teachers', 'testimonials'));
    }

    //Dashboard route based on user type
    public function Dashboard(){
        $user_id = Auth::id();
        $user_role = User::where('id', $user_id)->value('role');
        
        if($user_role === 'admin'){
            return redirect()->route('admin.dashboard');
        }
        elseif($user_role === 'teacher'){
            return redirect()->route('teacher.dashboard');
        }
        else{
            return redirect()->route('home');
        }
    }

    //My Course Page
    public function Mycourses(){
        $user_id = Auth::id();
        $my_courses = Order::where('user_id', $user_id)->latest()->get();

        return view('client.mycourses', compact('my_courses'));
    }

    //All Course Page
    public function AllCourse(){
        $rcourses = Course::where('course_type', 'recorded')->latest()->get();
        $lcourses = Course::where('course_type', 'live')->latest()->get();

        return view('client.allcourses', compact('rcourses', 'lcourses'));
    }

    

}
