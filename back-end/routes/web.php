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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/seekerAnalysis', function () {
    return view('seekerAnalysis');
});

Route::get('/creatorAnalysis', function () {
    return view('creatorAnalysis');
});

Route::get('/investorAnalysis', function () {
    return view('investorAnalysis');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/learn', function () {
    return view('learn');
});

Auth::routes();

Route::get('/home', 'HomeController@home');


Route::get('/translation', function () {
    return view('translation');
});





//USER-REVIEW relationships
Route::get('/reviewHome', 'ReviewController@reviewHome');

Route::post('/reviewHome', 'ReviewController@reviewHome')->name('feedFilter');

Route::get('/review', 'ReviewController@review');

Route::get('/myPoints', 'ReviewController@myPoints');

Route::get('/reviewFormSpeak', 'ReviewController@reviewFormSpeak');

Route::get('/myReviews', 'ReviewController@myReviews');

Route::post('/postReview', 'ReviewController@postReview');

Route::post('/postReviewAudio', 'ReviewController@postReviewAudio');

Route::get('/upvoteReview/{id}', 'ReviewController@upvoteReview');

Route::get('/downvoteReview/{id}', 'ReviewController@downvoteReview');





//USER-CREATOR relationships
Route::get('/ideaHome', 'CreatorController@ideaHome');

Route::get('/ideaForm', 'CreatorController@ideaForm');

Route::get('/myIdeas', 'CreatorController@myIdeas');

Route::post('/postIdea', 'CreatorController@postIdea');

Route::get('/downloadPoc/{name}', 'CreatorController@downloadPoc');

Route::get('/viewIdeas', 'CreatorController@viewIdeas');

Route::get('/showStartups', 'CreatorController@showStartups');

Route::get('/showMyStartups', 'CreatorController@showMyStartups');

Route::get('/startupsDetails/{id}', 'CreatorController@startupsDetails');





//INVESTOR-IDEA-INVESTMENT relationships
Route::get('/investAmount/{id}', 'InvestorController@investAmount');

Route::post('/startInvestment', 'InvestorController@startInvestment');

Route::get('/showInvestments', 'InvestorController@showInvestments');

Route::get('/myInvestments', 'InvestorController@myInvestments');

Route::get('/startupsInvestments/{id}', 'InvestorController@startupsInvestments');

Route::get('/investorDetails/{id}', 'InvestorController@investorDetails');





//SEEKER-APPLICATION-JOB-JOB_APPLICATION relationships
Route::get('/jobHome', 'SeekerController@jobHome');

Route::get('/showJobs/{id}', 'SeekerController@showJobs');

Route::get('/postJobs/{id}', 'SeekerController@postJobs');

Route::post('/processJob', 'SeekerController@processJob');

Route::get('/showMyJobs/{id}', 'SeekerController@showMyJobs');

Route::get('/showApplicants/{id}', 'SeekerController@showApplicants');

Route::get('/sendApplication/{id}', 'SeekerController@sendApplication');

Route::get('/profileForm', 'SeekerController@profileForm');

Route::get('/showProfile', 'SeekerController@showProfile');

Route::post('/processProfile', 'SeekerController@processProfile');

Route::get('/updateProfile', 'SeekerController@updateProfile');

Route::post('/processUpdateProfileForm/{id}', 'SeekerController@processUpdateProfileForm');

Route::get('/jobApplication', 'SeekerController@jobApplication');

Route::get('/downloadResume', 'SeekerController@downloadResume');

Route::get('/downloadResume2/{name}', 'SeekerController@downloadResume2');

Route::get('/startupsJobs/{id}', 'SeekerController@startupsJobs');

Route::get('/showApplications/{id}', 'SeekerController@showApplications');

Route::get('/confirmApplication/{id}/{job_id}', 'SeekerController@confirmApplication');

Route::get('/myApplications', 'SeekerController@myApplications');





//Chat page
Route::get('/chatHome', 'HomeController@chatHome');
Route::get('user/register',['uses'=>'UserController@register','as'=>'user.register']);
Route::resource('conversation','ConversationController');
Route::resource('message','MessageController');