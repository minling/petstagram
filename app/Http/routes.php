<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'function ()' {
//     return view('welcome');
// });


Route::get('/', 'HomeController@index');

Route::resource('posts', 'PostsController');

// Route::get('posts', 'PostsController@index');

// Route::get('posts/create', 'PostsController@create');

// Route::get('posts/{id}', 'PostsController@show');

// Route::get('posts/{id}/edit', 'PostsController@edit');

// Route::patch('posts/{id}', 'PostsController@update');


// Route::post('posts', 'PostsController@store');
// Route::post('/posts', function (Request $request) {
//   $validator = Validator::make($request->all(), [
//           'title' => 'required|max:255',
//       ]);

//   if ($validator->fails()) {
//         return redirect('/')
//             ->withInput()
//             ->withErrors($validator);
//     }

//   $post = new App\Post();
//   $post->title = $request->title;
//   $post->save();

//   return redirect('/posts');
// });







