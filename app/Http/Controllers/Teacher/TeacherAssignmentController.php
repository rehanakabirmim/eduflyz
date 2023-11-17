<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\AssignmentSubmission;
use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherAssignmentController extends Controller
{
    //All Assignment
    public function AllAssignment(){
        $courses = Course::where('teacher_id', Auth::id())->get();
        return view('teacher.assignment.allassignment', compact('courses'));
    }

    //Add Assignment
    public function AddAssignment(){
        $courses = Course::where('course_type', 'live')->where('teacher_id', Auth::id())->latest()->get();
        return view('teacher.assignment.addassignment', compact('courses'));
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

        return redirect()->route('tr.all.assignment')->with('message', 'Assignmet Stored Successfully');

    }

    //Edit Assignment
    public function EditAssignment($id){
        $assignment = Assignment::findOrFail($id);
        $courses = Course::where('course_type', 'live')->where('teacher_id', Auth::id())->latest()->get();
        return view('teacher.assignment.editassignment', compact('courses', 'assignment'));
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

        return redirect()->route('tr.all.assignment')->with('message', 'Assignmet Updated Successfully');

    }

    //Delete Assignment
    public function DelAssignment($id){
        Assignment::findOrFail($id)->delete();
        return redirect()->route('tr.all.assignment')->with('message', 'Assignmet Deleted Successfully');

    }

    //View Submitted Assignment
    public function ViewAssignment($id){
        $assignments = AssignmentSubmission::latest()->get();
        return view('teacher.assignment.viewassignment', compact('assignments'));
    }
}
