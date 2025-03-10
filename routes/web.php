<?php

use App\Http\Controllers\AccessorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\FatherController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HabitController;
use App\Http\Controllers\HusbnadController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\JameController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\MakanikController;
use App\Http\Controllers\MisController;
use App\Http\Controllers\MotherController;
use App\Http\Controllers\SirController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\storeController as ControllersStoreController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\WifeController;
use App\Http\Middleware\ValidUser;
use App\Models\Accessor;
use App\Models\Contact;
use App\Models\Facebook;
use App\Models\Father;
use App\Models\Habit;
use App\Models\Instagram;
use App\Models\Student;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', UserController::class);
Route::resource('post', PostController::class);
Route::resource('emp', EmployeeController::class);
Route::resource('habit',HabitController::class);
Route::resource('student',StudentController::class);
Route::resource('contact',ContactController::class);
Route::resource('father',FatherController::class);
Route::resource('mother',MotherController::class);
Route::resource('google',GoogleController::class);
Route::resource('facebook',FacebookController::class);
Route::resource('insta',InstagramController::class);
Route::resource('feed',FeedController::class);
Route::resource('vid',VideoController::class);
Route::resource('tag',TagController::class);
Route::resource('bike',BikeController::class);
Route::resource('car',CarController::class);
Route::resource('makanik',MakanikController::class);
Route::resource('json',JsonController::class);
Route::resource('jam',JameController::class);
Route::resource('hus',HusbnadController::class);
Route::resource('wife',WifeController::class);
Route::resource('sir',SirController::class);
Route::resource('miss',MisController::class);
Route::resource('store',storeController::class);
// Route::resource('upload',UploadController::class);
Route::resource('accessor',AccessorController::class);


Route::view('register','register')->name('register');
Route::view('login','login')->name('login')->middleware(ValidUser::class);

Route::post('registerSave', [UserController::class, 'registerSave'])->name('registerSave');

Route::get('/session',function(){
    $sesion = session()->all();
        echo "<pre>";
        print_r($sesion);
        echo "</pre>";
//     $user = session('user');
// echo $user; // Output: Ali
// if (!session()->has('user')) {
//     echo "User logged in!";
// }
// session(['name'=>'kawish']);
session()->regenerate();
});


Route::get('session/create',function(){
    // session(['user' => 'Ali']);  
    session()->forget('user'); 
    
});


Route::get('/flash',function(){
    session()->flash('message','this is flassad h message');
    return redirect('/show');
});
Route::get('/show',function(){
    return session('message', 'No message found!');
});
 