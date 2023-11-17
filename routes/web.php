<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\CourseCategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\LiveCourseController;
use App\Http\Controllers\Admin\McqController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\RecordedCourseController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Auth\GoogleLoginController;
use App\Http\Controllers\BkashTokenizePaymentController;
use App\Http\Controllers\Client\BecomeTeacherController;
use App\Http\Controllers\Client\ClientExamController;
use App\Http\Controllers\Client\ClientOrderController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Teacher\TeacherAssignmentController;
use App\Http\Controllers\Teacher\TeacherCourseController;
use App\Http\Controllers\Teacher\TeacherDashboardController;
use App\Http\Controllers\Teacher\TeacherExamController;
use App\Http\Controllers\Teacher\TeacherLessonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Google Login Controller
Route::controller(GoogleLoginController::class)->group(function(){
    Route::get('/auth/google/redirect', 'GoogleLogin')->name('google.login');
    Route::get('/auth/google/callback', 'GoogleCallback')->name('google.callback');

});

//Teacher Apply Controller
Route::controller(BecomeTeacherController::class)->group(function(){
    Route::get('/teacher-apply', 'Apply')->name('teacher.apply');
    Route::post('/teacher-apply-submit', 'ApplySubmit')->name('teacher.apply.submit');

});

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'Index')->name('home');
    Route::get('/my-courses', 'Mycourses')->name('mycourses');
    Route::get('/allcourse', 'AllCourse')->name('allcourse');

});

Route::controller(ClientController::class)->group(function(){
    Route::get('/course/{id}/{slug}', 'SingleCourse')->name('single.course');
    Route::post('/store-reviews', 'StoreReview')->name('store.review');
    Route::post('/store-stream', 'StoreStream')->name('store.stream');
    Route::post('/submit-assignment', 'SubmitAssignment')->name('submit.assignment');

});

Route::middleware('purchased')->group(function () {
    Route::controller(ClientController::class)->group(function(){
        Route::get('/recorded-course/{id}/{slug}', 'RecordedCourse')->name('recorded.course');
        Route::get('/recorded-course/{id}/{lid}/{slug}', 'RecordedLesson')->name('recorded.lesson');
        Route::get('/live-course/{id}/{slug}', 'LiveCourse')->name('live.course');
    });
});

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', [HomeController::class, 'Dashboard'])->name('dashboard');

});

//Cart & Orders pages with auth middleware
Route::middleware('auth')->group(function(){
    Route::controller(ClientOrderController::class)->group(function(){
        Route::get('/cart', 'Cart')->name('cart');
        Route::post('/cart-update', 'CartUpdate')->name('update.cart');
        Route::post('/addcart', 'AddCart')->name('addcart');


        Route::get('/removecart/{id}', 'DeleteCart')->name('removecart');
        // Route::post('/removecart', 'DeleteCart')->name('removecart');

    });

    Route::controller(ClientExamController::class)->group(function(){
        Route::get('/exama/{id}/{slug}', 'Exama')->name('exama');
        Route::post('/exam-submit', 'SubmitExam')->name('submit.exam');
        Route::get('/exam-result', 'ExamResult')->name('exam.result');
    });
});

//Routes for Profile page
Route::middleware('auth')->group(function () {
    Route::controller(ProfileController::class)->group(function(){
        Route::patch('/profile', 'update')->name('profile.update');
        Route::get('/user/profile','UserProfile')->name('user.profile');
        Route::post('/proinfo-update', 'ProInfoUpdate')->name('proinfo.update');
        Route::post('/proimg-update', 'ProImgUpdate')->name('proimg.update');

        // Route::get('/payout/teacher/balance/{$id}', 'payoutTeacherBalance');
    });
});

//Admin Middleware
Route::middleware(['auth', 'role:admin', 'verified'])->group(function(){


    Route::controller(AdminDashboardController::class)->group(function(){
        //Admin Dashboard
        Route::get('/admin/dashboard', 'Index')->name('admin.dashboard');
    });

    Route::controller(TestimonialController::class)->group(function(){
         //testimonial
         Route::get('/admin/all-testimonial', 'Alltestimonial')->name('all.testimonial');
         Route::get('/admin/edit-testimonial/{id}', 'EditTestimonial')->name('edit.testimonial');
         Route::post('/admin/update-testimonial', 'UpTestimonial')->name('update.testimonial');
         Route::get('/admin/del-testimonial/{id}', 'DelTestimonial')->name('del.testimonial');
         Route::get('/admin/add-testimonial', 'AddTestimonial')->name('add.testimonial');
         Route::post('/admin/store-testimonial', 'StoreTestimonial')->name('store.testimonial');


    });

    Route::controller(CourseCategoryController::class)->group(function(){
        //Course Category
        Route::get('/admin/add-course-category', 'AddCourseCategory')->name('addcourse.category');
        Route::get('/admin/all-course-category', 'AllCourseCategory')->name('allcourse.category');
        Route::post('/admin/store-category', 'StoreCategory')->name('store.category');
        Route::get('/admin/edit-course-category/{id}', 'EditCourseCategory')->name('editcourse.category');
        Route::post('/admin/update-category', 'UpdateCategory')->name('update.category');
        Route::get('/admin/del-course-category/{id}', 'DelCourseCategory')->name('delcourse.category');

    });

    Route::controller(RecordedCourseController::class)->group(function(){
        Route::get('/admin/addcourse', 'Index')->name('addcourse');
        Route::post('/admin/storecourses', 'StoreCourse')->name('storercourse');
        Route::get('/admin/recoredcourses', 'Rcourse')->name('recordcourse');
    });

    Route::controller(LiveCourseController::class)->group(function(){
        Route::get('/admin/livecourses', 'Index')->name('livecourse');
        Route::get('/admin/addlcourse', 'AddCourse')->name('addlcourse');
        Route::post('/admin/storelcourses', 'StoreCourse')->name('storelcourse');
        Route::get('/admin/add-assignment', 'AddAssignment')->name('add.assignment');
        Route::post('/admin/store-assignment', 'StoreAssignment')->name('store.assignment');
        Route::get('/admin/all-assignment', 'AllAssignment')->name('all.assignment');
        Route::get('/admin/edit-assignment/{id}', 'EditAssignment')->name('edit.assignment');
        Route::post('/admin/update-assignment', 'UpAssignment')->name('update.assignment');
        Route::get('/admin/del-assignment/{id}', 'DelAssignment')->name('del.assignment');
    });

    Route::controller(CourseController::class)->group(function(){
        Route::get('/admin/editcourse/{id}', 'EditCourse')->name('editcourse');
        Route::get('/admin/del-course/{id}', 'DelCourse')->name('deletecourse');
        Route::post('/admin/updatercourses', 'UpdateCourse')->name('updatecourse');
        Route::get('/admin/editcourse-image/{id}', 'EditCourseImg')->name('editcourse.image');
        Route::post('/admin/updatecourse-image', 'UpdateCourseImg')->name('updatecourse.image');

    });

    Route::controller(LessonController::class)->group(function(){
        Route::get('/admin/addlesson', 'Index')->name('addlesson');
        Route::post('/admin/store-lesson', 'StoreLesson')->name('store.lesson');
        Route::get('/admin/alllesson', 'Alllesson')->name('alllesson');
        Route::get('/admin/edit-lesson/{id}', 'EditLesson')->name('editlesson');
        Route::post('/admin/update-lessom', 'UpdateLesson')->name('update.lesson');
        Route::get('/admin/editlesson-image/{id}', 'EditLessonImg')->name('editlesson.image');
        Route::post('/admin/updatelesson-image', 'UpdateLessonImg')->name('updatelesson.image');
        Route::get('/admin/del-lesson/{id}', 'Dellesson')->name('deletelesson');
    });
    Route::controller(McqController::class)->group(function(){
        //Exam
        Route::get('/admin/allexam', 'Index')->name('allexam');
        Route::get('/admin/addexam', 'AddExam')->name('addexam');
        Route::post('/admin/store-exam', 'StoreExam')->name('store.exam');
        Route::get('/admin/editexam/{id}', 'EditExam')->name('editexam');
        Route::post('/admin/update-exam', 'UpdateExam')->name('update.exam');
        Route::get('/admin/del-exam/{id}', 'DelExam')->name('deleteexam');
        //MCQ
        Route::get('/admin/addmcq/{id}/{slug}', 'Addmcq')->name('addmcq');
        Route::post('/admin/store-mcq', 'StoreMcq')->name('store.mcq');
        Route::get('/admin/edit-mcq/{id}', 'EditMcq')->name('editmcq');
        Route::post('/admin/update-mcq', 'UpdateMcq')->name('update.mcq');
        Route::get('/admin/del-mcq/{id}', 'DelMcq')->name('deletemcq');
        //MCQ Result
        Route::get('/admin/mcq-result/{id}', 'McqResult')->name('mcqresult');
    });
    Route::controller(TeacherController::class)->group(function(){
        Route::get('/admin/addteacher', 'Index')->name('addteacher');
        Route::post('/admin/store-teacher', 'StoreTeacher')->name('store.teacher');
        Route::get('/admin/allteacher', 'Allteacher')->name('allteacher');
        //Teacher Request
        Route::get('/admin/teacher-request', 'TeachReq')->name('teacher.request');
    });
    Route::controller(OrderController::class)->group(function(){
        Route::get('/admin/allorder', 'Index')->name('allorder');
        Route::get('/admin/coupon', 'Coupon')->name('coupon');
        Route::post('/admin/store-coupon', 'StoreCoupon')->name('store.coupon');
        Route::get('/admin/del-coupon/{id}', 'DelCoupon')->name('delcoupon');
    });

    Route::controller(BkashTokenizePaymentController::class)->group(function(){
        //search payment
        Route::get('/bkash/search/{trxID}', 'searchTnx')->name('bkash-serach');

        //refund payment routes
        Route::get('/bkash/refund', 'refund')->name('bkash-refund');
        Route::get('/bkash/refund/status', 'refundStatus')->name('bkash-refund-status');

    });

    Route::controller(CertificateController::class)->group(function(){

        Route::get('/create/course/certificate', 'createCourseCertificate')->name('create.course.certificate');
        Route::post('/store/certificate', 'storeCertificate')->name('store.certificate');
        Route::get('/all/course/certificate', 'allCourseCertificate')->name('all.course.certificate');
        Route::get('/delete/certificate/{id}', 'deleteCertificate')->name('delete.certificate');
        Route::get('/print/certificate/{id}', 'printCertificate')->name('print.certificate');

    });





}); //End Admin Middleware

//Teacher Middleware
Route::middleware(['auth', 'role:teacher', 'verified'])->group(function(){
    Route::controller(TeacherDashboardController::class)->group(function(){
        Route::get('/teacher/dashboard', 'Index')->name('teacher.dashboard');
    });

    Route::controller(TeacherCourseController::class)->group(function(){
        Route::get('/teacher/recoredcourses', 'Rcourse')->name('teacher.recordcourse');
        Route::get('/teacher/livecourses', 'Lcourse')->name('teacher.livecourse');
        Route::get('/teacher/editcourse/{id}', 'EditCourse')->name('tr.editcourse');
        Route::post('/teacher/updatercourses', 'UpdateCourse')->name('tr.updatecourse');
        Route::get('/teacher/editcourse-image/{id}', 'EditCourseImg')->name('tr.editcourse.image');
        Route::post('/teacher/updatecourse-image', 'UpdateCourseImg')->name('tr.updatecourse.image');
    });

    Route::controller(TeacherLessonController::class)->group(function(){
        Route::get('/teacher/addlesson', 'AddLesson')->name('tr.addlesson');
        Route::post('/teacher/store-lesson', 'StoreLesson')->name('tr.store.lesson');
        Route::get('/teacher/alllesson', 'Alllesson')->name('tr.alllesson');
        Route::get('/teacher/edit-lesson/{id}', 'EditLesson')->name('tr.editlesson');
        Route::post('/teacher/update-lessom', 'UpdateLesson')->name('tr.update.lesson');
        Route::get('/teacher/editlesson-image/{id}', 'EditLessonImg')->name('tr.editlesson.image');
        Route::post('/teacher/updatelesson-image', 'UpdateLessonImg')->name('tr.updatelesson.image');
        Route::get('/teacher/del-lesson/{id}', 'Dellesson')->name('tr.deletelesson');

    });

    Route::controller(TeacherAssignmentController::class)->group(function(){
        Route::get('/teacher/add-assignment', 'AddAssignment')->name('tr.add.assignment');
        Route::post('/teacher/store-assignment', 'StoreAssignment')->name('tr.store.assignment');
        Route::get('/teacher/all-assignment', 'AllAssignment')->name('tr.all.assignment');
        Route::get('/teacher/edit-assignment/{id}', 'EditAssignment')->name('tr.edit.assignment');
        Route::post('/teacher/update-assignment', 'UpAssignment')->name('tr.update.assignment');
        Route::get('/teacher/del-assignment/{id}', 'DelAssignment')->name('tr.del.assignment');
        //View Assignment
        Route::get('/teacher/view-assignment/{id}', 'ViewAssignment')->name('tr.view.assignment');

    });

    Route::controller(TeacherExamController::class)->group(function(){
        //Exam
        Route::get('/teacher/allexam', 'Index')->name('tr.allexam');
        Route::get('/teacher/addexam', 'AddExam')->name('tr.addexam');
        Route::post('/teacher/store-exam', 'StoreExam')->name('tr.store.exam');
        Route::get('/teacher/editexam/{id}', 'EditExam')->name('tr.editexam');
        Route::post('/teacher/update-exam', 'UpdateExam')->name('tr.update.exam');
        Route::get('/teacher/del-exam/{id}', 'DelExam')->name('tr.deleteexam');
        //MCQ
        Route::get('/teacher/addmcq/{id}/{slug}', 'Addmcq')->name('tr.addmcq');
        Route::post('/teacher/store-mcq', 'StoreMcq')->name('tr.store.mcq');
        Route::get('/teacher/edit-mcq/{id}', 'EditMcq')->name('tr.editmcq');
        Route::post('/teacher/update-mcq', 'UpdateMcq')->name('tr.update.mcq');
        Route::get('/teacher/del-mcq/{id}', 'DelMcq')->name('tr.deletemcq');
        //MCQ Result
        Route::get('/teacher/mcq-result/{id}', 'McqResult')->name('tr.mcqresult');

    });

}); //End Teacher Middleware

//Bkash Payments Route
Route::middleware(['auth', 'verified'])->group(function(){
    // Payment Routes for bKash
    Route::get('/bkash/payment', [App\Http\Controllers\BkashTokenizePaymentController::class,'index']);
    Route::get('/bkash/create-payment', [App\Http\Controllers\BkashTokenizePaymentController::class,'createPayment'])->name('bkash-create-payment');
    Route::get('/bkash/callback', [App\Http\Controllers\BkashTokenizePaymentController::class,'callBack'])->name('bkash-callBack');

});

require __DIR__.'/auth.php';
