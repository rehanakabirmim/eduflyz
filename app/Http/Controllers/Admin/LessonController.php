<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function Index(){
        $courses = Course::latest()->get();
        return view('admin.lesson.addlesson', compact('courses'));
    }

    public function StoreLesson(Request $request){
        $request->validate([
            'lesson_name' => 'required',
            'course_id' => 'required',
            'slug' => 'required|unique:courses',
            'lesson_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'lesson_link' => 'required',
            'lesson_duration' => 'required',
            'lesson_serial' => 'required',

        ]);

        $image = $request->file('lesson_img');
        $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $image->move(public_path('upload'), $img_name);
        $img_url = 'upload/'. $img_name;

        $course_id = $request->course_id;
        $course_type = Course::where('id', $course_id)->value('course_type');
        $course_name = Course::where('id', $course_id)->value('course_name');

        $lesson_duration = $request->lesson_duration;

        Lesson::insert([
            'lesson_name' => $request->lesson_name,
            'course_id' => $request->course_id,
            'course_name' => $course_name,
            'slug' => $request->slug,
            'lesson_img' => $img_url,
            'lesson_link' => $request->lesson_link,
            'lesson_duration' => $request->lesson_duration,
            'lesson_serial' => $request->lesson_serial,
        ]);

        Course::where('id', $course_id)->increment('lesson_count',1);
        if($course_type === 'recorded'){
            Course::where('id', $course_id)->increment('course_duration', $lesson_duration);
        }
        
        return redirect()->route('alllesson')->with('message', 'Lesson Added Successfully!');
    }


    public function Alllesson(){
        $lessons = Lesson::latest()->get();
        return view('admin.lesson.alllesson', compact('lessons'));
    }

    public function EditLesson($id){
        $lesson = Lesson::findOrFail($id);
        $courses = Course::latest()->get();
        return view('admin.lesson.editlesson', compact('lesson', 'courses'));
    }

    public function UpdateLesson(Request $request){
        $id = $request->lesson_id;
        $current_slug = Lesson::where('id', $id)->value('slug');
        $update_slug = $request->slug;
        if($current_slug === $update_slug){
            $request->validate([
                'slug' => 'required',
            ]);
        }else{            
            $request->validate([
                'slug' => 'required|unique:lessons',
            ]);       
        }

        $request->validate([
            'lesson_name' => 'required',
            'lesson_link' => 'required',
            'lesson_duration' => 'required',
            'lesson_serial' => 'required',

        ]);

        $course_id = Lesson::where('id', $id)->value('course_id');
        $course_type = Course::where('id', $course_id)->value('course_type');

        $lesson_duration = Lesson::where('id', $id)->value('lesson_duration');
        $lesson_duration_updated = $request->lesson_duration;

        Lesson::findOrFail($id)->update([
            'lesson_name' => $request->lesson_name,
            'slug' => $request->slug,
            'lesson_link' => $request->lesson_link,
            'lesson_duration' => $request->lesson_duration,
            'lesson_serial' => $request->lesson_serial,
        ]);

        //Course::where('id', $course_id)->increment('lesson_count',1);
        if($course_type === 'recorded'){
            Course::where('id', $course_id)->decrement('course_duration', $lesson_duration);
            Course::where('id', $course_id)->increment('course_duration', $lesson_duration_updated);
        }
        
        return redirect()->route('alllesson')->with('message', 'Lesson Updated Successfully!');

    }

    public function EditLessonImg($id){
        $lesson = Lesson::findOrFail($id);

        return view('admin.lesson.editlessonimg', compact('lesson'));
    }

    public function UpdateLessonImg(Request $request){
        $id = $request->lesson_id;

        $request->validate([
            'lesson_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('lesson_img');
        $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $image->move(public_path('upload'), $img_name);
        $img_url = 'upload/'. $img_name;

        Lesson::findOrFail($id)->update([
            'lesson_img' => $img_url,
        ]);

        return redirect()->route('alllesson')->with('message', 'Lesson Image Updated Successfully!');
        
    }

    //Delete Lesson
    public function Dellesson($id){
        $course_id = Lesson::where('id', $id)->value('course_id');
        $lesson_duration = Lesson::where('id', $id)->value('lesson_duration');

        Lesson::findOrFail($id)->delete();
        
        Course::where('id', $course_id)->decrement('lesson_count',1);

        $course_type = Course::where('id', $course_id)->value('course_type');
        if($course_type === 'recorded'){
            Course::where('id', $course_id)->decrement('course_duration', $lesson_duration);
        }

        return redirect()->route('alllesson')->with('message', 'Lesson Deleted Successfully!');
    }
}
