<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Http\Controllers\postController;
use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;
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
route::get( '/' , function(){
    return view('welcome') ;
});

// route::get('home/{hehe}',[HomeController::class, 'showHome']);

// route::get('view', [HomeController::class, 'showView']);

// route::get('/', function(){
//     return view('welcome');
// });

// route::get('/insert', function(){
//     DB::insert('insert into test(title,body) value(?,?)', ['Hello','Laravel'] );
//     return 'DONE';
// });

// route::get('/show',function(){
//     $result = DB::select('select * from test where  id = ?', [1]);
//     return $result ;
// });

// route::get('/{id}', function($id){
//     $update = DB::update('UPDATE test set   body = "oceoccee la" where id > ?', [$id]);
//     return $id;
// });

// route::get('delete',function(){
//     $delete = DB::delete('DELETE FROM test WHERE id = ?', [2]);
//     return 'Done';
// }); fail


Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
 
    $token = csrf_token();
 
    // ...
});

route::prefix('project')-> name('project.') -> group(function(){
    route::get('/lists',[ProjectController::class, 'showListUser'])->name('show_list_user');

    route::get('/adds',[ProjectController::class, 'addUser'])->name('add_user');

    route::post('/adds',[ProjectController::class, 'postUser']);

    route::get('/updates/{id}',[ProjectController::class, 'indexUpdateUser'])->name('index_update_user');

    route::post('/updates/{id}',[ProjectController::class, 'updateUser']);

    route::get('/deletes/{id}',[ProjectController::class, 'deleteUser'])->name('delete_user');

    route::post('/deletes/{id}',[ProjectController::class, 'deleteUser'])->name('delete_user');


});



