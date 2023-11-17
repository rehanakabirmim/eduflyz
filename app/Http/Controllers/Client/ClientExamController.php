<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Exam;
use App\Models\ExamAttempt;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientExamController extends Controller
{
    //exam view
    public function Exama($id){
        $exam = Exam::findOrFail($id);
        $exam_status = $exam->status;
        if($exam_status == 'active'){
            $questions = Question::where('exam_id', $id)->with('answers')->inRandomOrder()->get();
            return view('client.giveexam', compact('exam', 'questions'));
        }
        return redirect()->route('home');
    }

    //submit exam
    public function SubmitExam(Request $request){
        $exam_id = $request->exam_id;
        $course_id = Exam::where('exam_id', $exam_id)->value('course_id');
        $qcount = count($request->q);
        $marks = 0;
        $correct_ans = 0;
        for($i = 0; $i <= $qcount; $i++){
            $answer_id = $request->input('ans_'.$i);
            $mark = Answer::where('answer_id',$answer_id)->value('is_correct');
            if($mark == 1){
                $correct_ans++;
            }
            $marks = $marks + $mark;
        }

        $total_q = $request->total_question;
        if($marks == 0){
            $score = 0;
        }
        else{
            $score = ($marks/$total_q)*100;
        }
        
        $attempt_id = ExamAttempt::insertGetId([
            'exam_id' => $request->exam_id,
            'user_id' => Auth::id(),
            'course_id' => $course_id,
            'total_question' => $request->total_question,
            'correct_ans' => $correct_ans,
            'score' => $score,
        ]);
        
        return redirect()->route('exam.result');       

    }

    //Exam result
    public function ExamResult(){
        $user_id = Auth::id();
        $attempt = ExamAttempt::where('user_id', $user_id)->latest('attempt_id')->get()->first();
        return view('client.examresult', compact('attempt'));
    }
}
