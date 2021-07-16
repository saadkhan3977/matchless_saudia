<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/','HomeController@index');
Route::get('/lang/{id}','HomeController@index');
Route::get('/team','TeamController@index');
Route::get('/team/lang/{id}','TeamController@index');
Route::get('/about','AboutController@index');
Route::get('/about/lang/{id}','AboutController@index');
Route::get('/event/{id}','ScheduleController@index');
Route::get('/event/','AboutController@index');
Route::get('/career/lang/{id}','CareerController@index');
Route::get('/career','CareerController@index');
Route::get('/project','ProjectsController@index');
Route::get('/project/lang/{id}','ProjectsController@index');
Route::get('/project/{title}' ,'ProjectsController@project_detail');
Route::get('/project/{title}/lang/ar' ,'ProjectsController@project_detail');
Route::get('/blog','BlogController@index');
Route::get('/blog/lang/{id}','BlogController@index');

Route::get('/contact','ContactUsController@index');
Route::get('/blog/{title}','BlogController@blog_detail');
Route::post('/blog_comment/{title}','BlogController@comment');

Route::get('/gallery','GalleryController@index');
Route::post('store-newsletter','NewsletterController@store')->name('subscribers.store');
Route::post('/contactus','ContactUsController@store');


Route::group(['prefix' => 'blog'], function () {
    Route::get('/', [
        'as' => 'app.blog',
        'uses' => 'BlogController@index',
    ]);
    Route::get('/{slug}', [
        'as' => 'app.blog.view',
        'uses' => 'BlogController@view',
    ]);
});
// Route::get('/', function () {
// 	$general_wesbstyle =  GeneralSettingWebStyle::first();
//     return view('welcome')
//     ->with(compact('general_wesbstyle'));
// });


	Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
		Route::get('/user_contact','Contact\FormController@contact_us');
		Route::resource('emails','EmailsController');
		Route::resource('gallery','GalleryController');
		Route::resource('/testimonial','TestimonialController');
		Route::resource('/schedule','ScheduleController');
		Route::resource('/jobs','JobsController');
		Route::resource('/team','TeamController');
		Route::resource('/team_title','TeamTitleController');

		Route::post('gallery_store/{id}','GalleryController@store');
		Route::get('gallery_delete/{id}','GalleryController@destroy');
		Route::get('gallery_show','GalleryController@get');
		
		// Consultancy
		// Route::group(['prefix' => 'consultancy', 'namespace' => 'Consultancy'], function(){
			Route::resource('/consultancy_sec_one','Consultancy\SecOneController');

		// });
		// Home Page Sections
		Route::group(['prefix' => 'home', 'namespace' => 'Home'], function(){
			Route::resource('video','VideoController');
			Route::resource('hospitality_consultancy','HospitalityConsultancyController');
			Route::get('sec_two/create','HospitalityConsultancyController@sectwo_create')->name('homesectwo_create');
			Route::post('sec_two','HospitalityConsultancyController@sectwo_store')->name('homesectwo_store');
			Route::get('sec_two/{id}','HospitalityConsultancyController@sectwo_edit')->name('homesectwo_edit');
			Route::put('sec_two/{id}','HospitalityConsultancyController@sectwo_update')->name('homesectwo_update');
			Route::delete('sec_two/{id}','HospitalityConsultancyController@sectwo_delete')->name('homesectwo_delete');
			
			Route::resource('contact','ContactUsController');
			Route::resource('projects','ProjectsController');
			Route::resource('missions','MissionsController');
			Route::resource('missions_features','MissionsFeaturesController');
		});

		// Contact Page Sections
		Route::group(['prefix' => 'contact', 'namespace' => 'Contact'], function(){
			Route::resource('visit','VisitController');
			Route::resource('question','QuestionController');
			Route::resource('form','FormController');
		});

		// Project Page Sections
		Route::group(['prefix' => 'projects', 'namespace' => 'Project'], function(){
			Route::resource('text','PageTextController');
		});
			Route::resource('/projects','Project\ProjectsController');
			Route::get('/projects_slug','Project\ProjectsController@slugcheck');
			Route::get('/projects_edit_slug','Project\ProjectsController@editslugcheck');
			Route::resource('/blog_category','BlogCategoryController');
			Route::resource('/blog_tags','BlogTagsController');
			Route::resource('/blog_page','BlogPageController');
			Route::resource('/blog','BlogController');

		// About Us Page Sections
		Route::group(['prefix' => 'about', 'namespace' => 'About'], function(){
			Route::resource('/about_sec_one','SecOneController');
			Route::resource('/about_sec_two','SecTwoController');
			Route::resource('/about_sec_three','SecThreeController');
			Route::resource('/about_sec_four','SecFourController');
			Route::post('/about_sec_four_heading','SecFourController@heading')->name('about_sec_four_heading');
			Route::put('/about_sec_four_heading/{id}','SecFourController@heading_update')->name('about_sec_four_heading_update');
			Route::delete('/about_sec_four_heading/{id}','SecFourController@heading_delete')->name('about_sec_four_heading_destroy');

			Route::get('/about_sec_five','SecFiveController@index');
			Route::post('/about_sec_five_heading','SecFiveController@heading')->name('about_sec_five_heading_store');
			Route::put('/about_sec_five_heading/{id}','SecFiveController@heading_update')->name('about_sec_five_heading_update');
			Route::delete('/about_sec_five_heading/{id}','SecFiveController@heading_delete')->name('about_sec_five_heading_destroy');

			
			Route::resource('/about_sec_six','SecSixController');
			Route::resource('/about_sec_seven','GalleryController');
			Route::resource('/about_blog','BlogController');
		});

		// Career Page Sections
		Route::group(['prefix' => 'career', 'namespace' => 'Career'], function(){
			Route::resource('/sec_one','SecOneController');
			
			Route::resource('/sec_two','SecTwoController');
			Route::post('/sec_two_heading','SecTwoController@heading_store')->name('sec_two_heading');
			Route::put('/sec_two_heading/{id}','SecTwoController@heading_update')->name('sec_two_heading_put');
			Route::delete('/sec_two_heading/{id}','SecTwoController@heading_destroy')->name('sec_two_heading_delete');
			
			Route::resource('/sec_three','SecThreeController');
			Route::resource('/sec_four','SecFourController');
			Route::post('/sec_four_heading','SecFourController@heading_store');
			Route::put('/sec_four_heading/{id}','SecFourController@heading_update');
		});

		Route::get('/dashboard','DashboardController@index');
		Route::get('/header-menu','MenuController@index');
		Route::resource('/manage-staff','StaffController');
		Route::get('/staff/{id}','StaffController@delete');
		
		Route::match(['get','post'],'/general-setting/logo','GeneralSettingController@logo');
		Route::match(['get','post'],'/general-setting/favicon','GeneralSettingController@favicon');
		Route::match(['get','post'],'/general-setting/header','GeneralSettingController@header');
		Route::match(['get','post'],'/general-setting/webstyle','GeneralSettingController@webstyle');

		Route::get('/general-setting/webstyle_status/{id}','GeneralSettingController@webstyle_status');
		
		Route::get('/general-setting/preloader','GeneralSettingController@preloader');
		Route::post('/general-setting/preloader/website','GeneralSettingController@web_preloader');
		Route::post('/general-setting/preloader/admin','GeneralSettingController@admin_preloader');

		Route::match(['get','post'],'/social-setting/links','SocialSettingController@links');
		Route::match(['get','post'],'/seotools/keywords','SeoToolsController@keywords');
		Route::match(['get','post'],'/social-setting/facebook','SocialSettingController@facebook');
		Route::get('/social-setting/facebook/status','SocialSettingController@facebook_status');
		Route::match(['get','post'],'/social-setting/google','SocialSettingController@google');
		Route::get('/social-setting/google/status','SocialSettingController@google_status');

	});