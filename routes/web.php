<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\CareerlistController;
use App\Http\Controllers\QuizController;


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

Route::get('/', [HomeController::class, 'index']);

Route::get('/careerlist', [CareerlistController::class, 'index']);
Route::get('/careerlist/action/', [CareerlistController::class, 'action'])->name('Careerlist.index.action');
Route::get('/careerdetail/{id}', [CareerlistController::class, 'show']);



Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/quiz', function () {
    return view('quiz.index');
});


Route::get('/quizpage', function () {
    return view('quiz.quizpage');
});

Route::get('/quizresult', function () {
    return view('quiz.quizresult');
});


Route::get('/quizpage', [QuizController::class, 'index']);
Route::post('/quizpage/result/', [QuizController::class, 'result'])->name('quiz.quizpage.result');


Route::get('/skill', function () {
    return view('skill.index');
});

Route::get('/training', function () {
    return view('training.index');
});

Route::get('/acdemy', function () {
    return view('acdemy.index');
});

Route::get('/university', function () {
    return view('university.index');
});

Route::get('/idol', function () {
    return view('idol.index');
});

Route::get('/webboard', function () {
    return view('webboard.index');
});

Route::get('/webboard/topic', function () {
    return view('webboard.topic');
});



// ------Admin------
Route::get('/login', function () {
    return view('login.index');
});

Route::get('/forgotpassword', function () {
    return view('login.forgotpassword');
});

Route::get('/register', function () {
    return view('register.index');
});

Route::get('/regissuccess', function () {
    return view('register.success');
});

Route::get('/profile', function () {
    return view('profile.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});





// ------Admin------
Route::get('/component', function () {
    return view('component.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admincareerlist', function () {
    return view('admincareerlist.index');
});

Route::get('/admincareerdetail', function () {
    return view('admincareerlist.admindetail');
});

Route::get('/admincareergroup', function () {
    return view('admincareerlist.admincareergroup');
});

Route::get('/D1', function () {
    return view('component.D1');
});



Route::get('/user', function () {
    return view('user.index');
});

Route::get('/role', function () {
    return view('role.index');
});

Route::get('/roledetail', function () {
    return view('role.detail');
});


Route::get('/activitylogging', function () {
    return view('activitylogging.index');
});



// Test
Route::get('/test', function () {
    return view('test.index');
});
