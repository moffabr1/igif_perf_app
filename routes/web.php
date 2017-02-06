<?php


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::group(['middleware' => ['web','auth']], function () {
//    Route::get('/home', ['as' => 'index','uses' => 'HomeController@index']);
    Route::get('/igif/', ['as' => 'index','uses' => 'HomeController@index']);
//    Route::resource('igif/admin/users', 'AdminUsersController');
//    Route::resource('igif/admin/clubs', 'AdminClubsController');
});

Route::group(['middleware' => 'admin'], function () {

    Route::resource('igif/admin/users', 'AdminUsersController');

    Route::get('igif/admin/clubs/autocomplete', ['uses' => 'AdminClubsController@autocomplete', 'as' => 'igif.admin.clubs.autocomplete']);

//    Route::get('igif/admin/clubs', ['uses' => 'AdminClubsController@index', 'as' => 'igif.admin.clubs.index']);
//    Route::get('igif/admin/clubs/create', ['uses' => 'AdminClubsController@create', 'as' => 'igif.admin.clubs.create']);

    Route::resource('igif/admin/clubs', 'AdminClubsController');
    Route::resource('igif/admin/courses', 'AdminCoursesController');
    Route::resource('igif/admin/scorecards', 'AdminScorecardsController');

//    Route::resource('clubs', 'AdminClubsController', [
//        'as' => 'igif.admin'
//    ]);


});












//    Route::resource('users', 'AdminUsersController', [
//        'as' => 'igif.admin'
//    ]);
//    This will give you routes such as prefix.faq.index, prefix.faq.store, etc.

//    Route::resource('igif/admin/courses', 'AdminCoursesController');
//    Route::resource('igif/admin/clubs', 'AdminClubsController');
//    Route::resource('igif/admin/scorecards', 'AdminScorecardsController');



//Route::get('/', function()
//{
//    return View::make('welcome');
//});
//
////Route::resource('/activate', 'UserMembershipController@activate');
//
//Route::auth();
//Route::get('/redirect', 'SocialAuthController@redirect');
//Route::get('/callback', 'SocialAuthController@callback');
//
//Route::group(['middleware' => 'igif'], function () {
//
//    Route::resource('igif/player/scores', 'PlayerScoresController');
//    Route::resource('igif/player/scorecards', 'PlayerScorecardsController');
//
//    Route::get('/igif/player/stats', 'PlayerStatsController@index');
//    Route::get('/igif/player/stats/gir', 'PlayerStatsController@gir');
////    Route::get('/igif/player/stats/scoring', 'PlayerStatsController@scoring')->name('scoring');
//    Route::get('/igif/player/stats/scoring', 'PlayerStatsScoringController@scoring')->name('scoring');
//
//    Route::get('/igif/player/stats/proximity', 'PlayerStatsController@proximity')->name('proximity');
//
//    Route::get('/igif/player/stats/fairways', 'PlayerStatsController@fairways')->name('fairways');
//    Route::get('/igif/player/stats/tee', 'PlayerTeeStatsController@tee')->name('tee');
//
//    Route::get('/igif/player/stats/gir', 'PlayerStatsController@gir')->name('gir');
//    Route::get('/igif/player/stats/putting', 'PlayerStatsController@putting')->name('putting');
//    Route::get('/igif/player/stats/proximity', 'PlayerStatsController@proximity')->name('proximity');
//    Route::get('/igif/player/stats/scrambling', 'PlayerScramblingStatsController@scrambling')->name('scrambling');
//
////    Route::get('/igif/player/training', 'Training\PlayerTrainingController@index');
//
//
////    Route::get('/igif/player/stats/dashboard', function()
////    {
////        return View::make('igif.player.stats.dashboard');
////    });
//
//
//    Route::get('/igif', 'HomeController@index');
//
//    Route::get('/ajax-call', function(){
//
//        if(Input::get('state') != '') {
//
//            $id = Request::get('state');
//            $clubs = \App\Club::where('state_province_name', '=', $id )->orderBy('club_name', 'ASC')->get();
//            return Response::json($clubs);
//        }
//        elseif (Input::get('club_id') != '') {
//
//            $id = Request::get('club_id');
//            $courses = \App\Course::where('club_id', '=', $id )->orderBy('course_name', 'ASC')->get();
//            return Response::json($courses);
//        }
//        elseif (Input::get('course_id') != '') {
//
//            $id = Request::get('course_id');
//            $scorecards = \App\Scorecard::where('course_id', '=', $id )->get();
//            return Response::json($scorecards);
//        }
//        elseif (Input::get('scorecard_id') != '') {
//
//            $id = Request::get('scorecard_id');
//            $scorecards = \App\Scorecard::where('id', '=', $id )->get();
//            return Response::json($scorecards);
//        }
//
//
//    });
//
//});
//
//Route::group(['middleware' => 'admin'], function () {
//
//    Route::get('igif/admin/clubs/autocomplete', ['uses' => 'AdminClubsController@autocomplete', 'as' => 'igif.admin.clubs.autocomplete']);
//
//    Route::resource('igif/admin/users', 'AdminUsersController');
//    Route::resource('igif/admin/courses', 'AdminCoursesController');
//    Route::resource('igif/admin/clubs', 'AdminClubsController');
//    Route::resource('igif/admin/scorecards', 'AdminScorecardsController');
//
//    Route::resource('igif/admin/training', 'AdminTrainingController', ['except' => [
//        'edit'
//    ]]);
//
////
//////    Route::resource('igif/admin/training', 'AdminTrainingController');
////    Route::get('igif/admin/training', 'AdminTrainingController@index');
//////    Route::get('igif/admin/training/{id}/{category}', 'AdminTrainingController@edit');
//
//    Route::get('/igif/admin/training/edit-drill/{id}/{category}', [
//        'as' => 'edit-drill',
//        'uses' => 'AdminTrainingController@edit'
//    ]);
////
////    Route::get('igif/admin/training/{id}', 'AdminTrainingController@update');
////
//////    AdminTrainingController@update
//
//
//});

