<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionAnswerController;
use App\Http\Controllers\SendLinkController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $courses = App\Models\Course::all();
    $quesAns = App\Models\QuestionAnswer::with('files')->get();
    return view('welcome', ['courses'=>$courses,'quesAns'=>$quesAns]);
});

// Route::post('/course', function(Request $request){

//         $search = $request->search;

//         if($search == ''){
//            $autocomplate = App\Models\Course::orderby('name','asc')->select('id','name')->limit(5)->get();
//         }else{
//            $autocomplate = App\Models\Course::orderby('name','asc')->select('id','name')->where('name', 'like', '%' .$search . '%')->limit(5)->get();
//         }

//       $response = array();
//       foreach($autocomplate as $autocomplate){
//          $response[] = array("value"=>$autocomplate->id,"label"=>$autocomplate->name);
//       }

//       echo json_encode($response);
//       exit;
// });
Route::get('/ques-by-course/{id}', function ($id) {
    $courses = App\Models\Course::all();
    $quesAns = App\Models\QuestionAnswer::with('course')->where('course_id',$id)->get();
    return view('main.ques-course', ['courses'=>$courses,'quesAns'=>$quesAns]);
});

Route::get('/ques-by-department/{id}', function ($id) {
    // $quesAns = Department::find($id)->courseQues;
    $courses = App\Models\Course::all();
    $quesAns = App\Models\QuestionAnswer::with('course.departmnet')->where('course_id',$id)->get();
    return view('main.ques-course', ['courses'=>$courses,'quesAns'=>$quesAns]);
});

// Route::get('autocomplete', function (Request $request){
//     $search = $request->get('term');

//     $result = App\Models\Course::where('name', 'LIKE', '%'. $search. '%')->get();

//     return response()->json($result);
// });

Route::post('auto', function(Request $request){

     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = App\Models\Course::where('name', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; list-style:none; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="ques-by-course/'.$row->id.'" style="font-size:14px">'.$row->name.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }

});


Route::get('/buy-ques', function () {
    $courses = App\Models\Course::all();
    return view('main.payment',['courses'=>$courses]);
});

Route::get('/teachers', function () {
    $teachers = App\Models\User::where('user_type', 'teacher')->get();
    $courses = App\Models\Course::all();
    return view('main.teacher',['teachers'=>$teachers, 'courses'=>$courses]);
});

// Route::prefix('course')->name('course.')->group(function () {
//     Route::get('/', [CourseController::class, 'index'])->name('index');
//     Route::get('/create', [CourseController::class, 'create'])->name('create');
//     Route::post('/store', [CourseController::class, 'store'])->name('store');
//     Route::get('/{id}/edit', [CourseController::class, 'edit'])->name('edit');
//     Route::post('/update/{id}', [CourseController::class, 'update'])->name('update');
//     Route::get('/delete/{id}', [CourseController::class, 'destroy'])->name('delete');
//     Route::get('/assign-teacher', [CourseController::class, 'assignCourseTeacher'])->name('assign');
//     Route::get('/teacher-assign', [CourseController::class, 'courseAssignTeacher'])->name('assign-teacher');
//     Route::post('/teacher-assign-store', [CourseController::class, 'courseAssignStoreTeacher'])->name('assign.store');
//     Route::get('/teacher-assign-edit/{id}', [CourseController::class, 'courseAssignEditTeacher'])->name('assign.edit');
//     Route::post('/teacher-assign-update/{id}', [CourseController::class, 'courseAssignUpdateTeacher'])->name('assign.update');
//     Route::get('/teacher-assign-delete/{id}', [CourseController::class, 'courseAssignDeleteTeacher'])->name('assign.delete');
//     // student
//     Route::get('/assign-student', [CourseController::class, 'assignCourseStudent'])->name('assign-index');
//     Route::get('/student-assign', [CourseController::class, 'courseAssignStudent'])->name('assign-student');
//     Route::post('/student-assign-store', [CourseController::class, 'courseAssignStoreStudent'])->name('assign-student.store');
//     Route::get('/student-assign-edit/{id}', [CourseController::class, 'courseAssignEditStudent'])->name('assign-student.edit');
//     Route::post('/student-assign-update/{id}', [CourseController::class, 'courseAssignUpdateStudent'])->name('assign-student.update');
//     Route::get('/student-assign-delete/{id}', [CourseController::class, 'courseAssignDeleteStudent'])->name('assign-student.delete');
// });

Route::get('register/teacher', [RegisterController::class, 'techerRegister'])->name('teacher-register');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('isStudent')->group(function () {
    Route::get('/student', [App\Http\Controllers\HomeController::class, 'student'])->name('student');

    Route::prefix('course')->name('course.')->group(function () {
        Route::get('/assign-student', [CourseController::class, 'assignCourseStudent'])->name('assign-index');
        Route::get('/student-assign', [CourseController::class, 'courseAssignStudent'])->name('assign-student');
        Route::post('/student-assign-store', [CourseController::class, 'courseAssignStoreStudent'])->name('assign-student.store');
        Route::get('/student-assign-edit/{id}', [CourseController::class, 'courseAssignEditStudent'])->name('assign-student.edit');
        Route::post('/student-assign-update/{id}', [CourseController::class, 'courseAssignUpdateStudent'])->name('assign-student.update');
        Route::get('/student-assign-delete/{id}', [CourseController::class, 'courseAssignDeleteStudent'])->name('assign-student.delete');
    });

    Route::prefix('department')->name('department.')->group(function () {
        Route::get('/assign-student', [DepartmentController::class, 'assignDepartmentStudent'])->name('assign-index');
        Route::get('/student-assign', [DepartmentController::class, 'departmentAssignStudent'])->name('assign-student');
        Route::post('/student-assign-store', [DepartmentController::class, 'departmentAssignStoreStudent'])->name('assign-student.store');
        Route::get('/student-assign-edit/{id}', [DepartmentController::class, 'departmentAssignEditStudent'])->name('assign-student.edit');
        Route::post('/student-assign-update/{id}', [DepartmentController::class, 'departmentAssignUpdateStudent'])->name('assign-student.update');
        Route::get('/student-assign-delete/{id}', [DepartmentController::class, 'departmentAssignDeleteStudent'])->name('assign-student.delete');
    });

    Route::prefix('send-link')->name('send-link.')->group(function () {
        Route::get('/', [SendLinkController::class, 'index'])->name('index');
        Route::get('/links', [SendLinkController::class, 'studentIndex'])->name('student-index');
    });
});
Route::middleware('isTeacher')->group(function () {
    Route::get('/teacher', [App\Http\Controllers\HomeController::class, 'teacher'])->name('teacher');

    Route::prefix('ques-ans')->name('ques-ans.')->group(function () {
        Route::get('/', [QuestionAnswerController::class, 'index'])->name('index');
        Route::get('/create', [QuestionAnswerController::class, 'create'])->name('create');
        Route::post('/store', [QuestionAnswerController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [QuestionAnswerController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [QuestionAnswerController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [QuestionAnswerController::class, 'destroy'])->name('delete');
    });

    Route::prefix('send-link')->name('send-link.')->group(function () {
        Route::get('/', [SendLinkController::class, 'index'])->name('index');
        Route::get('/links', [SendLinkController::class, 'studentIndex'])->name('student-index');
        Route::get('/create', [SendLinkController::class, 'create'])->name('create');
        Route::post('/store', [SendLinkController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [SendLinkController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [SendLinkController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [SendLinkController::class, 'destroy'])->name('delete');
    });

    Route::prefix('course')->name('course.')->group(function () {
        Route::get('/assign-teacher', [CourseController::class, 'assignCourseTeacher'])->name('assign');
    });

    Route::prefix('department')->name('department.')->group(function () {
        Route::get('/assign-teacher', [DepartmentController::class, 'assignDepartmentTeacher'])->name('assign');
    });
});
Route::middleware('auth')->group(function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');

    Route::prefix('course')->name('course.')->group(function () {
        Route::get('/', [CourseController::class, 'index'])->name('index');
        Route::get('/create', [CourseController::class, 'create'])->name('create');
        Route::post('/store', [CourseController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [CourseController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [CourseController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [CourseController::class, 'destroy'])->name('delete');
        Route::get('/teacher-assign', [CourseController::class, 'courseAssignTeacher'])->name('assign-teacher');
        Route::post('/teacher-assign-store', [CourseController::class, 'courseAssignStoreTeacher'])->name('assign.store');
        Route::get('/teacher-assign-edit/{id}', [CourseController::class, 'courseAssignEditTeacher'])->name('assign.edit');
        Route::post('/teacher-assign-update/{id}', [CourseController::class, 'courseAssignUpdateTeacher'])->name('assign.update');
        Route::get('/teacher-assign-delete/{id}', [CourseController::class, 'courseAssignDeleteTeacher'])->name('assign.delete');
    });

    Route::prefix('department')->name('department.')->group(function () {
        Route::get('/', [DepartmentController::class, 'index'])->name('index');
        Route::get('/create', [DepartmentController::class, 'create'])->name('create');
        Route::post('/store', [DepartmentController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [DepartmentController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [DepartmentController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [DepartmentController::class, 'destroy'])->name('delete');
        Route::get('/teacher-assign', [DepartmentController::class, 'departmentAssignTeacher'])->name('assign-teacher');
        Route::post('/teacher-assign-store', [DepartmentController::class, 'departmentAssignStoreTeacher'])->name('assign.store');
        Route::get('/teacher-assign-edit/{id}', [DepartmentController::class, 'departmentAssignEditTeacher'])->name('assign.edit');
        Route::post('/teacher-assign-update/{id}', [DepartmentController::class, 'departmentAssignUpdateTeacher'])->name('assign.update');
        Route::get('/teacher-assign-delete/{id}', [DepartmentController::class, 'departmentAssignDeleteTeacher'])->name('assign.delete');
    });
});

