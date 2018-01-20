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

/* routes user to the index page. */
Route::get('/', function () {
    return view('welcome');
});


/* routes user to the login page */
Route::get('/login', 'UserLoginController@login');

/* Auth routes */
Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('home');
Route::post('/login','Auth\LoginController@login');

/* --------- routes for NoteController ---------- */

    /*------------- GET Requests -------------*/ 
Route::get('/dashboard/createnote', 'NoteController@noteform')->name('createnote');
Route::get('/dashboard/note/{id}', 'NoteController@viewNote')->name('viewnote');
Route::get('/dashboard/editnote/{id}', 'NoteController@editNoteForm')->name('editnoteform');
Route::get('/dashboard/deletenote/{id}', 'NoteController@deleteNote')->name('deletenote');

    /*------------- POST Requests -------------*/
Route::post('/dashboard/addnote', 'NoteController@addNote')->name('addnote');
Route::post('/dashboard/editnote/{id}', 'NoteController@editNote')->name('editnote');
Route::post('dashboard/note/{id}/postlike', 'NoteController@postLike')->name('postlike');


/* ---------- routes for CommentController ----------- */
    
    /* -------------- GET Requests --------------- */
Route::get('/dashboard/{id}/comment', 'CommentController@commentForm')->name('createcomment');

    /* -------------- POST Requests -------------- */
Route::post('/dashboard/comment/{id}', 'CommentController@postcomment')->name('addcomment');
