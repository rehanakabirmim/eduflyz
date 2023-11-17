<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;
use App\Models\User;

class RecordedCourseController extends Controller
{
    //All Recorded Course
    public function Rcourse(){
        $courses = Course::where('course_type', 'recorded')->latest()->get();
        return view('admin.recorded-course.recordedcourses', compact('courses'));
    }
    
    //Add Recorded Course
    public function Index(){
        $categories = CourseCategory::latest()->get();
        $teachers = User::where('role', 'teacher')->latest()->get();
        return view('admin.recorded-course.addcourse', compact('categories', 'teachers'));
    }

    //Store Recorded Course
    public function StoreCourse(Request $request){
        $request->validate([
            'course_name' => 'required|unique:courses',
            'category_id' => 'required',
            'teacher_id' => 'required',
            'price' => 'required',
            'course_summary' => 'required',
            'course_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'course_description' => 'required',
            'course_learnop' => 'required',
            'course_requirment' => 'required'

        ]);

        $image = $request->file('course_img');
        $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $image->move(public_path('upload'), $img_name);
        $img_url = 'upload/'. $img_name;

        $cat_id = $request->category_id;
        $cat_name = CourseCategory::where('id', $cat_id)->value('category_name');
        $teacher_id = $request->teacher_id;
        $teacher_name = User::where('id', $teacher_id)->value('name');

        $course_type = 'recorded';

        Course::insert([
            'course_name' => $request->course_name,
            'course_type' => $course_type,
            'category_id' => $request->category_id,
            'category_name' => $cat_name,
            'teacher_id' => $request->teacher_id,
            'teacher_name' => $teacher_name,
            'price' => $request->price,
            'course_summary' => $request->course_summary,
            'course_img' => $img_url,
            'course_description'  => $request->course_description,
            'course_learnop'  => $request->course_learnop,
            'course_requirment'  => $request->course_requirment,
            'intro_link' => $request->intro_link,
            'slug'  => strtolower(str_replace(array( ' ','\'','"',',' , ';', '<', '>','/','%' ), '-', $request->course_name)),
        ]);

        CourseCategory::where('id', $cat_id)->increment('course_count',1);

        return redirect()->route('recordcourse')->with('message', 'Course Uploaded Successfully!');
    }


}
