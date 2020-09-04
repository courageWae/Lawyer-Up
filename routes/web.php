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
Route::get('/legal_support_home','legalSupportController@home')->name('Legal_Support_Home');
Route::get('/legal_support_contact','legalSupportController@contact')->name('Legal_Support_Contact');
Route::get('/legal_support_packages','legalSupportController@packages')->name('Legal_Support_Packages');
Route::get('/legal_support_about','legalSupportController@about')->name('Legal_Support_About');
Route::get('/legal_support_lawyers','legalSupportController@lawyers')->name('Legal_Support_Lawyers');
Route::get('/lawyer_details/{id}','legalSupportController@showLawyer');
Route::get('/legal_support_family_life_protection_paln','legalSupportController@flpp')->name('flpp');
Route::get('/legal_support_personal_life_protection_paln','legalSupportController@plpp')->name('plpp');
Route::get('/legal_support_business_life_protection_paln','legalSupportController@blpp')->name('blpp');
Route::get('/legal_support_flpp_categories','legalSupportController@flpp_categories')->name('flpp_cat');
Route::get('/legal_support_plpp_categories','legalSupportController@plpp_categories')->name('plpp_cat');
Route::get('/legal_support_blpp_categories','legalSupportController@blpp_categories')->name('blpp_cat');
Route::get('/checkout','legalSupportController@checkout')->name('checkout');


////////////////////////////////////////////////////////////////////////////////////////
                      ////MESSAGES ROUTE//////
Route::post('/lexicon_message','messagesController');
Route::post('/legal_support_message','messagesController');
Route::post('/lawyer_message','messagesController');



Auth::routes();

/////////////////////////////////////////////////////////////////////////////////////
                        ///// USERS ROUTE ///////////
Route::group(['middleware'=>['user','auth'],'namespace'=>'user'],function(){
	Route::get('user_dashboard','userController@index')->name('user.dashboard');
	Route::get('user_profile','userController@profile')->name('user.profile');
	Route::patch('user_profile_edit/{id}','userController@update');
});




/////////////////////////////////////////////////////////////////////////////////////////////////
                   /// ADMIN ROUTES ////
Route::group(['middleware'=>['admin','auth'],'namespace'=>'admin'],function(){
	Route::get('admin_dashboard','adminController@dashboard')->name('admin.dashboard');
	Route::get('profile/{id}','adminController@profile');
	Route::get('admin_add','adminController@adminAdd')->name('admin.add');
	Route::post('admin_add','adminController@adminStore')->name('admin.store');
	Route::get('insurer_add','adminController@insurerAdd')->name('insurer.add');
	Route::post('insurer_add','adminController@insurerStore')->name('insurer.store');
	Route::get('lawyer_add','adminController@lawyerAdd')->name('lawyer.add');
	Route::post('lawyer_add','adminController@lawyerStore')->name('lawyer.store');
	Route::get('admin_list','adminController@adminList')->name('admins.list');
	Route::get('insurer_list','adminController@insurerList')->name('insurers.list');
	Route::get('lawyer_list','adminController@lawyerList')->name('lawyers.list');
	Route::get('user_list','adminController@userList')->name('users.list');
	Route::delete('/admin/{id}','adminController@adminDelete');
	Route::delete('/insurer/{id}','adminController@insurerDelete');
	

});



////////////////////////////////////////////////////////////////////////////////////////////////////
                       /// LAWYERS ROUTES ///
Route::group(['middleware'=>['lawyer','auth'],'namespace'=>'lawyer'],function(){
	Route::get('lawyer_dashboard','lawyerController@index')->name('lawyer.dashboard');
	Route::get('lawyer_profile','lawyerController@profile')->name('lawyer.profile');
	Route::patch('lawyer_profile_edit/{id}','lawyerController@update');


});



////////////////////////////////////////////////////////////////////////////////////////////////////////
                         /// INSURER ROUTES ///
Route::group(['middleware'=>['insurer','auth'],'namespace'=>'insurer'],function(){
	Route::get('insurer/dashboard','insurerController@index')->name('insurer.dashboard');
	Route::get('insurer/client_add','insurerController@clientAdd')->name('client.add');
	Route::get('insurer/profile','insurerController@profile')->name('insurer.profile');

});

Route::get('/home', 'HomeController@index')->name('home');
