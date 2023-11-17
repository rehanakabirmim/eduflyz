<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;

class LiveCourseController extends Controller
{
    public function Index(){
        $courses = Course::where('course_type', 'live')->latest()->get();
        return view('admin.live-course.livecourses', compact('courses'));
    }


    public function AddCourse(){
        $categories = CourseCategory::latest()->get();
        $teachers = User::where('role', 'teacher')->latest()->get();
        return view('admin.live-course.addcourse', compact('categories', 'teachers'));
    }


    public function StoreCourse(Request $request){
        $request->validate([
            'course_name' => 'required|unique:courses',
            'category_id' => 'required',
            'teacher_id' => 'required',
            'price' => 'required',
            'course_summary' => 'required',
            'course_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'course_description' => 'required',
            'course_duration' => 'required',
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

        $course_type = 'live';

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
            'course_duration' => $request->course_duration,
            'intro_link' => $request->intro_link,
            'slug'  => strtolower(str_replace(array( ' ','\'','"',',' , ';', '<', '>','/','%' ), '-', $request->course_name)),
        ]);

        CourseCategory::where('id', $cat_id)->increment('course_count',1);

        return redirect()->route('livecourse')->with('message', 'Course Uploaded Successfully!');
    }

    //All Assignment
    public function AllAssignment(){
        $assignments = Assignment::latest()->get();

        return view('admin.live-course.allassignment', compact('assignments'));
    }

    //Add Assignment
    public function AddAssignment(){
        $courses = Course::where('course_type', 'live')->latest()->get();
        return view('admin.live-course.addassignment', compact('courses'));
    }

    //Store Assignment
    public function StoreAssignment(Request $request){
        $request->validate([
            'assignment_name' => 'required',
            'course_id' => 'required',
            'slug' => 'required',
            'due_date' => 'required',
        ]);

        Assignment::insert([
            'assignment_name' => $request->assignment_name,
            'course_id' => $request->course_id,
            'slug' => $request->slug,
            'due_date' => $request->due_date,
        ]);

        return redirect()->route('all.assignment')->with('message', 'Assignmet Stored Successfully');

    }

    //Edit Assignment
    public function EditAssignment($id){
        $assignment = Assignment::findOrFail($id);
        $courses = Course::where('course_type', 'live')->latest()->get();
        return view('admin.live-course.editassignment', compact('courses', 'assignment'));
    }

    //Update Assignment
    public function UpAssignment(Request $request){
        $id = $request->assignment_id;

        $request->validate([
            'assignment_name' => 'required',
            'course_id' => 'required',
            'status' => 'required',
            'due_date' => 'required',
        ]);

        Assignment::findOrFail($id)->update([
            'assignment_name' => $request->assignment_name,
            'course_id' => $request->course_id,
            'status' => $request->status,
            'due_date' => $request->due_date,
        ]);

        return redirect()->route('all.assignment')->with('message', 'Assignmet Updated Successfully');

    }

    //Delete Assignment
    public function DelAssignment($id){
        Assignment::findOrFail($id)->delete();
        return redirect()->route('all.assignment')->with('message', 'Assignmet Deleted Successfully');

    }
}
