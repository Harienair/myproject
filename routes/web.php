<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
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
/*
Route::get('/', function () {
    return view('welcome');
});*//*
Route::get('/', function () {
    return view('home.index');
})->name('home.index');
Route::get('/contact', function () {
    return view('home.Contact');
})->name('home.contact');*/

Route::get('/', [HomeController:: class, 'home'])->name('home.index');
Route::get('/contact',[HomeController:: class, 'contact'])->name('home.contact');

Route::get('/single',AboutController:: class);

$posts = [
    1 => [
        'title' => 'into laravel',
        'content' => 'it is an frame work',
        'is_new' => true
    ],
    2 => [
        'title' => 'into php',
        'content' => 'it is an serverside scrpting lang',
        'is_new' => false
    ],
    3 => [
        'title' => 'into java',
        'content' => 'it is an serverside scrpting lang',
        'is_new' => false
    ]
    
    ];

Route::resource('posts', PostController::class);
//-> only (['index','show','create','store','update','edit']);
    /*
Route::get('/posts' , function (request $request) use ($posts){
    //dd(request()->all());
    dd((int)request()->query('page', 1));
    return view('posts.index', ['posts' => $posts]);
});

Route::get('/posts/{id}', function ($id) use ($posts) {

        abort_if(!isset($posts[$id]),404);

    return view('posts.show', ['post' => $posts[$id]]);
})
->name('posts.show');*/

Route::get('/recent-posts/{days_ago?}', function ($daysAgo=20){
    return 'posts from ' . $daysAgo . 'days ago';
})->name('posts.recent.index')->middleware('auth');



/*
Route::prefix('/fun')->name('fun')->group(function() { }) to group the same routes
Route::get('/fun/response', function() use($posts){
    return response($posts, 201)
    ->header('Content-Type', 'application/Json')
    ->cookie('MY_COOKIE', 'hari', '3600');
});
Route::get('/fun/redirect', function(){
    return redirect('/aa');
});
Route::get('/fun/namedroute', function(){
    return redirect() -> route('posts.show',['id' => 1]);
});
//into json string
Route::get('/fun/json', function() use($posts){
    return response() -> json($posts);
});
    //download
Route::get('/fun/download', function() use($posts){
    return response() -> download(public_path('/hari.jpg'));
});
*/