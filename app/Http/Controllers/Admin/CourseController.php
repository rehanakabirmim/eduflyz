<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
        //Edit Course
        public function EditCourse($id){
            $courseinfo = Course::findOrFail($id);
            $categories = CourseCategory::latest()->get();
            $teachers = User::where('role', 'teacher')->latest()->get();
            return view('admin.courses.editcourse', compact('courseinfo','categories', 'teachers'));
        }
    
        //Update Course
        public function UpdateCourse(Request $request){
            $request->validate([
                'course_name' => 'required',
                'category_id' => 'required',
                'teacher_id' => 'required',
                'price' => 'required',
                'course_summary' => 'required',
                'course_description' => 'required',
                'course_learnop' => 'required',
                'course_requirment' => 'required',
                'intro_link' => 'required',
    
            ]);
    
    
            $cat_id = $request->category_id;
            $cat_name = CourseCategory::where('id', $cat_id)->value('category_name');
            $teacher_id = $request->teacher_id;
            $teacher_name = User::where('id', $teacher_id)->value('name');
    
            $id = $request->course_id;
            $course_type = Course::where('id', $id)->value('course_type');
    
            Course::findOrFail($id)->update([
                'course_name' => $request->course_name,
                'category_id' => $request->category_id,
                'category_name' => $cat_name,
                'teacher_id' => $request->teacher_id,
                'teacher_name' => $teacher_name,
                'price' => $request->price,
                'course_summary' => $request->course_summary,
                'course_description'  => $request->course_description,
                'course_learnop'  => $request->course_learnop,
                'course_requirment'  => $request->course_requirment,
                'intro_link' => $request->intro_link,
            ]);
    
            if($course_type === 'recorded'){
                return redirect()->route('recordcourse')->with('message', 'Course Updateded Successfully!');
           }else{
                return redirect()->route('livecourse')->with('message', 'Course Updateded Successfully!');
           }

        }
    
        //Edit Course Image
        public function EditCourseImg($id){
            $courseinfo = Course::findOrFail($id);
            return view('admin.courses.editcourseimg', compact('courseinfo'));
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
                return redirect()->route('recordcourse')->with('message', 'Course Image Updateded Successfully!');
           }else{
                return redirect()->route('livecourse')->with('message', 'Course Image Updateded Successfully!');
           }
        }
    
    
        //Delete Course
        public function DelCourse($id){
            $cat_id = Course::where('id', $id)->value('category_id');
            $course_type = Course::where('id', $id)->value('course_type');
            Course::findOrFail($id)->delete();
            CourseCategory::where('id', $cat_id)->decrement('course_count',1);

            if($course_type === 'recorded'){
                return redirect()->route('recordcourse')->with('message', 'Course Deleted Updateded Successfully!');
           }else{
                return redirect()->route('livecourse')->with('message', 'Course Deleted Updateded Successfully!');
           }
        }
}
