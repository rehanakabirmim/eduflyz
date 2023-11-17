<?php

namespace App\Http\Controllers\Client;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\AssignmentSubmission;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Course;
use App\Models\CourseReview;
use App\Models\Exam;
use App\Models\ExamAttempt;
use App\Models\Lesson;
use App\Models\Order;
use App\Models\Stream;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    public function SingleCourse($id){
        //Single Course Page Data
        $scourse = Course::findOrFail($id);
        $course_type = Course::where('id', $id)->value('course_type');

        $courses = Course::where('course_type', $course_type)->latest()->get();

        $lessons = Lesson::where('course_id', $id)->latest()->get();

        //Is purchased query for button
        $user_id = Auth::id();
        $order_id = Order::where('course_id', $id)->where('user_id', $user_id)->value('id');
        $purchased = Order::find($order_id);

        //Reviews
        $reviews = CourseReview::where('course_id', $id)->latest()->get();

        return view('client.singlecourse', compact('scourse', 'courses', 'course_type', 'lessons', 'purchased', 'reviews'));
    }

    public function StoreReview(Request $request){
        $request->validate([
            'course_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'rating' => 'required',

        ]);

        $user_id = Auth::id();

        CourseReview::insert([
            'course_id' => $request->course_id,
            'user_id' => $user_id,
            'title' => $request->title,
            'content' => $request->content,
            'rating' => $request->rating,
        ]);

        return Redirect::back();
    }

    public function RecordedCourse($id){
        $course = Course::findOrFail($id);
        $lessons = Lesson::where('course_id', $id)->latest()->get();

        //Reviews
        $reviews = CourseReview::where('course_id', $id)->latest()->get();

        return view('client.recordedcourse', compact('course', 'lessons', 'reviews'));
    }

    public function RecordedLesson($id, $lid){
        $course = Course::findOrFail($id);
        $lessons = Lesson::where('course_id', $id)->latest()->get();
        $slesson = Lesson::findOrFail($lid);

        //Reviews
        $reviews = CourseReview::where('course_id', $id)->latest()->get();

        return view('client.recordedcourse', compact('course', 'lessons','slesson', 'reviews'));
    }

    public function LiveCourse($id){
        //Reviews
        $reviews = CourseReview::where('course_id', $id)->latest()->get();

        //Assignments
        $assignments = Assignment::where('course_id', $id)->where('status', 'active')->latest('id')->get();

        //stream
        $streams = Stream::where('course_id', $id)->latest('id')->get();

        //mcq
        $exams = Exam::where('course_id', $id)->where('status', 'active')->latest()->get();

        //lessons
        $lessons = Lesson::where('course_id', $id)->latest()->get();

        //Aleady Submitted Assignments List
        $user_id = Auth::id();
        $assignments_list = AssignmentSubmission::where('course_id', $id)->where('user_id', $user_id)->get();

        //Aleady given Exam
        $eattempts_list = ExamAttempt::where('course_id', $id)->where('user_id', $user_id)->get();

        $course = Course::findOrFail($id);
        return view('client.livecourse', compact('course', 'reviews', 'streams', 'exams', 'lessons' ,'assignments', 'assignments_list', 'eattempts_list'));
    }

    public function StoreStream(Request $request){
        $request->validate([
            'content' => 'required'
        ]);

        Stream::insert([
            'course_id' => $request->course_id,
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return Redirect::back();

    }

    public function SubmitAssignment(Request $request){
        $request->validate([
            'assignment_file' => 'required|mimetypes:application/pdf|max:10000',
        ]);

        $assignment = $request->file('assignment_file');
        $assignment_name = hexdec(uniqid()).'.'. $assignment->getClientOriginalExtension();
        $assignment->move(public_path('upload/assignment'), $assignment_name);
        $assignment_url = 'upload/assignment/'. $assignment_name;

        AssignmentSubmission::insert([
            'assignment_id' => $request->assignment_id,
            'course_id' => $request->course_id,
            'user_id' => Auth::id(),
            'submitted_file' => $assignment_url,
            'created_at' => Carbon::now()->toDateString(),
        ]);

        return Redirect::back()->with('message', 'Assignment Uploaded Successfully');
    }

}

