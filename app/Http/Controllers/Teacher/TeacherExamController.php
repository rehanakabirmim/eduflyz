<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Course;
use App\Models\Exam;
use App\Models\ExamAttempt;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TeacherExamController extends Controller
{
    public function Index(){
        $courses = Course::where('teacher_id', Auth::id())->get();
        return view('teacher.mcq.allexam', compact('courses'));
    }

    public function AddExam(){
        $courses = Course::where('teacher_id', Auth::id())->latest()->get();
        return view('teacher.mcq.addexam', compact('courses'));
    }

    public function StoreExam(Request $request){
        $request->validate([
            'exam_name' => 'required',
            'course_id' => 'required',
            'slug' => 'required|unique:exams',
        ]);

        Exam::insert([
            'exam_name' => $request->exam_name,
            'course_id' => $request->course_id,
            'slug' => $request->slug,
        ]);

        return redirect()->route('tr.allexam')->with('message', 'Exam stored Successfully!');
    }

    public function EditExam($id){
        $exam = Exam::findOrFail($id);

        return view('teacher.mcq.editexam', compact('exam'));

    }

    public function UpdateExam(Request $request){
        $id = $request->exam_id;
        $current_slug = Exam::where('exam_id', $id)->value('slug');
        $update_slug = $request->slug;
        if($current_slug === $update_slug){
            $request->validate([
                'slug' => 'required',
                'exam_name' => 'required',
            ]);
        }else{
            $request->validate([
                'slug' => 'required|unique:exams',
                'exam_name' => 'required',
            ]);
        }

        Exam::findOrFail($id)->update([
            'exam_name' => $request->exam_name,
            'slug' => $request->slug,
        ]);

        return redirect()->route('tr.allexam')->with('message', 'Exam Updated Successfully!');

    }

    //Delete Exam
    public function DelExam($id){
        Exam::findOrFail($id)->delete();
        return redirect()->route('tr.allexam')->with('message', 'Exam Deleted Successfully!');
    }

    //MCQ
    public function Addmcq($id){
        $exam = Exam::findOrFail($id);
        $questions = Question::with('answers')->get();
        return view('teacher.mcq.addmcq', compact('exam', 'questions'));
    }

    public function StoreMcq(Request $request){
        $correct_ans = $request->correct_ans;
        $c = 0;

        $questionId = Question::insertGetId([
            'exam_id' => $request->exam_id,
            'question' => $request->question,
        ]);

        foreach($request->answers as $answer){
            $is_correct = 0;
            if($c == 0){
                $option = 'A) '.$answer;
                if($correct_ans == 'a'){
                    $is_correct = 1;
                }
            }
            elseif($c == 1){
                $option = 'B) '.$answer;
                if($correct_ans == 'b'){
                    $is_correct = 1;
                }
            }
            if($c == 2){
                $option = 'C) '.$answer;
                if($correct_ans == 'c'){
                    $is_correct = 1;
                }
            }
            if($c == 3){
                $option = 'D) '.$answer;
                if($correct_ans == 'd'){
                    $is_correct = 1;
                }
            }

            Answer::insert([
                'question_id' => $questionId,
                'answer' => $option,
                'is_correct' => $is_correct,

            ]);
            $c++;
        }

        Exam::where('exam_id', $request->exam_id)->increment('question_count',1);

        return Redirect::back()->with('message', 'MCQ Stored Successfully!');
    }

    public function EditMcq($id){
        $question = Question::with('answers')->findOrFail($id);

        return view('teacher.mcq.editmcq', compact('question'));
    }

    public function UpdateMcq(Request $request){
        $correct_ans = $request->correct_ans;
        $c = 0;
        $question_id = $request->question_id;

        Question::findOrFail($question_id)->update([
            'question' => $request->question,
        ]);

        foreach($request->answers as $answer){
            $is_correct = 0;
            if($c == 0){
                $option = 'A) '.$answer;
                if($correct_ans == 'a'){
                    $is_correct = 1;
                }
            }
            elseif($c == 1){
                $option = 'B) '.$answer;
                if($correct_ans == 'b'){
                    $is_correct = 1;
                }
            }
            if($c == 2){
                $option = 'C) '.$answer;
                if($correct_ans == 'c'){
                    $is_correct = 1;
                }
            }
            if($c == 3){
                $option = 'D) '.$answer;
                if($correct_ans == 'd'){
                    $is_correct = 1;
                }
            }

            Answer::findOrFail($request->answer_id[$c])->update([
                'answer' => $option,
                'is_correct' => $is_correct,

            ]);
            $c++;
        }

        $exam_id = Question::where('question_id', $question_id)->value('exam_id');
        $exam_slug = Exam::where('exam_id', $exam_id)->value('slug');

        return redirect()->route('tr.addmcq', [$exam_id, $exam_slug])->with('message', 'MCQ Updated Successfully!');
    }

    //Delete Mcq
    public function DelMcq($id){
        $exam_id = Question::where('question_id', $id)->value('exam_id');
        $answers = Answer::where('question_id', $id)->latest()->get();
        Question::findOrFail($id)->delete();

        foreach($answers as $answer){
            $answer_id = $answer->answer_id;
            Answer::findOrFail($answer_id)->delete();
        }
        Exam::where('exam_id', $exam_id)->decrement('question_count',1);

        return Redirect::back()->with('message', 'MCQ Deleted Successfully!');
    }

    //MCQ Result
    public function McqResult($id){
        $mcq_results = ExamAttempt::where('exam_id', $id)->latest()->get();
        return view('teacher.mcq.mcqresult', compact('mcq_results'));

    }
}
