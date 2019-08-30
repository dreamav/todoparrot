<?php

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

//Route::get('/', 'WelcomeController@index');
Route::get('/', function (){
    $user = App\User::first();
//    $post = $user->posts()->create([
//        'title'=>'foobar',
//        'body'=>'loremipsum'
//    ]);
//    $post->tags()->attach(1);

    $posts = $user->posts;
    foreach ($posts as $post){
        $tags = $post->tags;
            foreach ($tags as $tag) {
                echo $tag->name;
            }
    }

//    $users = App\User::where('id', 1)->get();
//
//    foreach ($users as $user) {
//        echo $user->name;
//    }

    return view('home');
});

Route::get('lists/category/{category}', 'ListsController@category');
Route::resource('lists', 'ListsController');
Auth::routes();

Route::get('/home', ["uses"=>'HomeController@index',"as"=>"home","middleware"=>"mymiddle"]);
