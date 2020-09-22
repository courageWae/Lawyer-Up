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


// ALL USERS CAN ACCESS THIS PAGES
Route::get('/', function () {
    return view('lexicon');
});
Route::get('legalSupport/home','legalSupportController@home')->name('Legal_Support_Home');
Route::get('legalSupport/contact','legalSupportController@contact')->name('Legal_Support_Contact');
Route::get('legalSupport/packages','legalSupportController@packages')->name('Legal_Support_Packages');
Route::get('legalSupport/about','legalSupportController@about')->name('Legal_Support_About');
Route::get('legalSupport/lawyers','legalSupportController@lawyers')->name('Legal_Support_Lawyers');
Route::get('legalSupport/lawyer/details/{id}','legalSupportController@showLawyer');
Route::get('legalSupport/packages/family_life_protection_plan','legalSupportController@flpp')->name('flpp');
Route::get('legalSupport/packages/personal_life_protection_plan','legalSupportController@plpp')->name('plpp');
Route::get('legalSupport/packages/business_life_protection_plan','legalSupportController@blpp')->name('blpp');
Route::get('legalSupport/packages/flpp/categories','legalSupportController@flpp_categories');
Route::get('legalSupport/packages/plpp/categories','legalSupportController@plpp_categories')->name('plpp_cat');
Route::get('legalSupport/packages/blpp/categories','legalSupportController@blpp_categories')->name('blpp_cat');
Route::get('/categories/checkout/{id}','Checkout@index');


////////////////////////////////////////////////////////////////////////////////////////
                      ////MESSAGES ROUTE//////
Route::post('/lexicon/message','messagesController')->name('lexicon.message');
Route::post('/legalSupport/message','messagesController')->name('legalSupport.message');
Route::post('/lawyer/message','messagesController')->name('lawyer.message');



Auth::routes();

/////////////////////////////////////////////////////////////////////////////////////
                        ///// USERS ROUTE ///////////
Route::group(['middleware'=>['user','auth'],'namespace'=>'user'],function(){
	Route::get('user/dashboard','userController@index')->name('user.dashboard');
	Route::get('user/profile','userController@profile')->name('user.profile');
	Route::patch('user/profile/edit/{id}','userController@update');
});




/////////////////////////////////////////////////////////////////////////////////////////////////
                   /// ADMIN ROUTES ////
Route::group(['middleware'=>['admin','auth'],'namespace'=>'admin'],function(){
	Route::get('admin/dashboard','adminController@dashboard')->name('admin.dashboard');
	Route::get('admin/profile','adminController@profile');
	Route::patch('admin/profile/{id}/edit','adminController@update');
	Route::get('admin/add','adminController@adminAdd')->name('admin.add');
	Route::post('admin/add','adminController@adminStore')->name('admin.store');
	Route::get('insurer/add','adminController@insurerAdd')->name('insurer.add');
	Route::post('insurer/add','adminController@insurerStore')->name('insurer.store');
	Route::get('lawyer/add','adminController@lawyerAdd')->name('lawyer.add');
	Route::post('lawyer/add','adminController@lawyerStore')->name('lawyer.store');
	Route::get('admin/list','adminController@adminList')->name('admins.list');
	Route::get('insurer/list','adminController@insurerList')->name('insurers.list');
	Route::get('lawyer/list','adminController@lawyerList')->name('lawyers.list');
	Route::get('user/list','adminController@userList')->name('users.list');
	Route::delete('/admin/{id}','adminController@adminDelete');
	Route::delete('/insurer/{id}','adminController@insurerDelete');
	Route::delete('/user/{id}','adminController@userDelete');
	Route::delete('/lawyer/{id}','adminController@lawyerDelete');
	Route::delete('typeOfLawyer/{id}','adminController@typeOfLawyerDelete');
	Route::get('admin/typeOfLawyerAdd','adminController@typeOfLawyerAdd')->name('type.add');
	Route::post('admin/typeOfLawyerAdd','adminController@storeTypeOfLawyer')->name('type.store');
	
});



////////////////////////////////////////////////////////////////////////////////////////////////////
                       /// LAWYERS ROUTES ///
Route::group(['middleware'=>['lawyer','auth'],'namespace'=>'lawyer'],function(){
	Route::get('lawyer/dashboard','lawyerController@index')->name('lawyer.dashboard');
	Route::get('lawyer/profile','lawyerController@profile')->name('lawyer.profile');
	Route::patch('lawyer_profile_edit/{id}','lawyerController@update');


});



////////////////////////////////////////////////////////////////////////////////////////////////////////
                         /// INSURER ROUTES ///
Route::group(['middleware'=>['insurer','auth'],'namespace'=>'insurer'],function(){
	Route::get('insurer/dashboard','insurerController@index')->name('insurer.dashboard');
	Route::get('insurer_client_add','insurerController@clientAdd')->name('client.add');
	Route::post('/clientAdd','insurerController@storeClient')->name('client.store');
	Route::get('/insurer_profile','insurerController@profile')->name('insurer.profile');
	Route::patch('/insurer_profile/{id}','insurerController@update');

});

Route::get('/home', 'HomeController@index')->name('home');
