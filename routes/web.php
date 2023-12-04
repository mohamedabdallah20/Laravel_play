<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Redirect;
// use App\Http\Controllers\ExampleController;
// enum section: string{
//     case phone='phone';
// }

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

// // Route::get('/', function () {
// //     return view('welcome');
// // });

// Route::get('/', function () {
//     return 'Welcome to Laravel 10 Home Route';
// });
// Route::get('/pram/{id?}', function ($id=null) {
//     return 'Welcome to Laravel 10 ID = '.$id;
// });



// Route::any('/any', function () {
//     return 'Welcome to Any method';
// });

// // Controller
// Route::match(['GET','POST','PUT'],'/match',[ExampleController::class,'test']);
// Route::match(['GET','POST','PUT'],'/match','ExampleController@test');


// Route::get('/go', function () {
//     return '<form action="data" method="post">
//     <input type="hidden" name="_method" value="PUT"/>
//     '.csrf_field().'
//     <input type="submit" value="go"></input>
//     </form>';
// });



Route::get('/', function () {
    return view('welcome');
});


// // Middleware

// // Route::middleware('guest')->get('auth',function(){
// //     return 'This is Auth Route';
// //     });
// // Route::get('auth',function(){
// //     return 'This is Auth Route';
// //     })->middleware('guest');

// middleware controller

Route::get('data','ExampleController@data');

// Route::middleware('testMiddleware:2,3')->group(function(){
//     Route::get('auth',function(){
        
//         return 'This is Auth Route';
//     });
//     });

// // Enum binding
// Route::get('/sections/{section}',function(section $section){
//     return $section->value;
// });


// // Prefix
// Route::prefix('prefix')->group(function(){
//     Route::any('/any', function () {
//         return 'Welcome to Any method';
//     });
    
//     Route::match(['GET','POST','PUT'],'/match',function(){
//         return 'This is  MATCH method';
//     });
// });
// // Group
// Route::group(['prefix'=>'group'],(function(){
//     Route::any('/any', function () {
//         return 'Welcome to Any method';
//     });
    
//     Route::match(['GET','POST','PUT'],'/match',function(){
//         return 'This is  MATCH method';
//     });
// }));


// // FALLBACK redirect

// Route::fallback(function(){
// return redirect('/');
// // return Redirect::to('/');
// });


// // parameter

// // required
// Route::get('/test/{id}', function ($id) {
//     return $id ;
// });

// // NOT required
// Route::get('/test1/{id?}', function () {
//     return 'Not required parameter' ;
// });

// route name
Route::get('/test/', function () {
    return 'route name' ;
})->name('route-name');

Route::get('/login',function(){
return 'You must login first';
})->name('login');




// // Macro
// Route::myMacro();


// Route Resource 
Route::resource('photos','ExampleController');
Route::delete('photos/force/delete/{photo}','ExampleController@forceDelete');
Route::post('photos/restore/{photo}','ExampleController@restore');
