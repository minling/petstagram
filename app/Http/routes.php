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

Route::get('/posts', function () {
    return view('posts/index');

    $posts = Post::orderBy('created_at', 'asc')->get();

    return view('posts', [
        'posts' => $posts
      ]);
});

Route::get('/posts/new', function () {
  return view('posts/new');
});


Route::post('/posts', function (Request $request) {
  $validator = Validator::make($request->all(), [
          'title' => 'required|max:255',
      ]);

  if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

  $post = new App\Post();
  $post->title = $request->title;
  $post->save();

  return redirect('/posts');
});







