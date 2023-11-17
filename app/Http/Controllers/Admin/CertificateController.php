<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\AssignmentSubmission;
use App\Models\Certificate;
use App\Models\Course;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    //view all certificate
    public function allCourseCertificate() {
        $all_certificate = Certificate::latest()->get();
        return view('admin.certificate.all_certificate', compact('all_certificate'));
    }

    //certificate creation form
    public function createCourseCertificate() {

        $courses = Course::where('course_type', 'live')->latest()->get();
        $users = User::where('role', 'user')->latest()->get();

        return view('admin.certificate.create_certificate', compact('courses', 'users'));
    }

    //store  certificate
    public function storeCertificate(Request $request) {

       $course = Course::where('id', $request->course_id)->first();

       $student = User::where('id', $request->user_id)->first();
       $this_course_assignment = Assignment::where('course_id', $course->id)->get()->count();
       $student_submitted_assignment = AssignmentSubmission::where('course_id', $course->id)->where('user_id', $student->id)->get()->count();

        // check if student has submitted all assignment

        if($this_course_assignment == $student_submitted_assignment){

            // check student already have a certificate

            if($certificate_exist = Certificate::where('user_id', $student->id)->first() != ''){
                return back()->with('notification', 'This Student Certificate Already Created');
            }else{


                 // create certificate
            $insert = Certificate::insert([
                'certificate_name' => $request->certificate_name,
                'course_id' => $course->id,
                'course_name' => $course->course_name,
                'user_id' => $student->id,
                'user_name' => $student->name,
                'user_phone' => $student->phone,
                'user_email' => $student->email,
                'created_at' => Carbon::now(),
            ]);

            if($insert){
                return redirect()->route('all.course.certificate')->with('notification', "Certificate Created Successfully");
            }else{
                return back()->with('notification', "Opp's Something Is Wrong");

            }
            }

            die();


        }else{
            return back()->with('notification', 'This Student Does Not Submit All Assignment');
        }

    }

    public function deleteCertificate($id){
        $delete = Certificate::find($id)->delete();

        if($delete){
            return back()->with('notification', "Certificate Delete Successfully");
        }else{
            return back()->with('notification', "Opp's Something Is Wrong");
        }
    }

    public function printCertificate($id){
        $certificate_info = Certificate::find($id);
        $course_info = Course::where('id', $certificate_info->course_id)->first();
        $student_info = User::where('id', $certificate_info->user_id)->first();
  
        return view('admin.certificate.single_certificate', compact('course_info', 'student_info'));
      }
}
