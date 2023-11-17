<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherCourseController extends Controller
{
    //Recorded Course
    public function Rcourse(){
        $teacher_id = Auth::id();
        $courses = Course::where('course_type', 'recorded')->where('teacher_id',$teacher_id)->latest()->get();
        return view('teacher.courses.recorded', compact('courses'));
    }

    //Live Courses
    public function Lcourse(){
        $teacher_id = Auth::id();
        $courses = Course::where('course_type', 'live')->where('teacher_id',$teacher_id)->latest()->get();
        return view('teacher.courses.live', compact('courses'));
    }

    //Edit Course
    public function EditCourse($id){
        $teacher_id = Course::where('id', $id)->value('teacher_id');
        if($teacher_id == Auth::id()){
            $courseinfo = Course::findOrFail($id);
            $categories = CourseCategory::latest()->get();
            return view('teacher.courses.editcourse', compact('courseinfo','categories'));
        }else{
            return redirect()->route('teacher.dashboard')->with('message', 'Sorry You have no access to do it!');
        }
        
    }

    //Update Course
    public function UpdateCourse(Request $request){
        $request->validate([
            'course_name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'course_summary' => 'required',
            'course_description' => 'required',
            'course_learnop' => 'required',
            'course_requirment' => 'required',
            'intro_link' => 'required',

        ]);


        $cat_id = $request->category_id;
        $cat_name = CourseCategory::where('id', $cat_id)->value('category_name');

        $id = $request->course_id;
        $course_type = Course::where('id', $id)->value('course_type');

        Course::findOrFail($id)->update([
            'course_name' => $request->course_name,
            'category_id' => $request->category_id,
            'category_name' => $cat_name,
            'price' => $request->price,
            'course_summary' => $request->course_summary,
            'course_description'  => $request->course_description,
            'course_learnop'  => $request->course_learnop,
            'course_requirment'  => $request->course_requirment,
            'intro_link' => $request->intro_link,
        ]);

        if($course_type === 'recorded'){
            return redirect()->route('teacher.recordcourse')->with('message', 'Course Updateded Successfully!');
       }else{
            return redirect()->route('teacher.livecourse')->with('message', 'Course Updateded Successfully!');
       }

    }

    //Edit Course Image
    public function EditCourseImg($id){
        $teacher_id = Course::where('id', $id)->value('teacher_id');
        if($teacher_id == Auth::id()){
            $courseinfo = Course::findOrFail($id);
            return view('teacher.courses.editcourseimg', compact('courseinfo'));
        }else{
            return redirect()->route('teacher.dashboard')->with('message', 'Sorry You have no access to do it!');
        }
    }

    //Update Course Image
    public function UpdateCourseImg(Request $request){
        $request->validate([
            'course_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('course_img');
        $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $image->move(public_path('upload'), $img_name);
        $img_url = 'upload/'. $img_name;

        $id = $request->course_id;
        $course_type = Course::where('id', $id)->value('course_type');

        Course::findOrFail($id)->update([
            'course_img' => $img_url,
        ]);

       if($course_type === 'recorded'){
            return redirect()->route('teacher.recordcourse')->with('message', 'Course Image Updateded Successfully!');
       }else{
            return redirect()->route('teacher.livecourse')->with('message', 'Course Image Updateded Successfully!');
       }
    }

}
