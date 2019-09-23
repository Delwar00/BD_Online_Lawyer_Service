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



//Auth::routes();
Route::get('/', 'frontEndController@index')->name('front');
Auth::routes(['verify' => true]);
Route::get('/match/lvetrification', 'frontEndController@matchLverification')->name('verification');
Route::get('/home', 'HomeController@index')->name('home');
//Services
Route::get('/all/service/{id}','AllsController@BdallService')->name('Services');




 //update Profile
 Route::get('/update/profile', 'HomeController@updateProfile')->name('update');
Route::POST('/update/info/submit', 'HomeController@updateInfoSubmit')->name('submit');
Route::get('/lawyer/view/{id}', 'FrontendController@lawyerProfileView')->name('lawyerProfile');
Route::get('/lawyer/message/submit/{id}','FrontendController@lawyerMessageSubmit')->name('lmessage');
Route::get('/client/message/view','FrontendController@ClientMessageView')->name('cmessage');
Route::get('/client/message/feedback/{id}','FrontendController@clientMessageFeedback')->name('cmessage');
Route::POST('client/message/submit', 'FrontendController@clientMessageSubmit')->name('csubmit');

Route::get('/lawyer/message/feedback/{id}','FrontendController@lawyerMessageFeedback')->name('fmessage');
Route::POST('/message/submit', 'FrontendController@messageSubmit')->name('msubmit');
Route::POST('lawyer/fmessage/submit', 'FrontendController@lawyerfMessageSubmit')->name('lmsubmit');
Route::get('/lawyer/hired/submit/{id}','FrontendController@lawyerHiredSubmit')->name('lhired');
Route::get('/lawyer/message/view','FrontendController@lawyerMessageView')->name('viem');
//header Search
Route::POST('/lawyer/search','FrontendController@lawyerSearch')->name('search');
//service search heder all
Route::POST('/lawyer/service/search','AllsController@lawyerServiceSearch')->name('Ssearch');
//complain box
Route::get('/complain', 'frontEndController@complain')->name('complain');
//Talk to lawyer
 Route::get('/talk/to/lawyer', 'frontEndController@talkToLawyer')->name('talk');
