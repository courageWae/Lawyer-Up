<?php

use Illuminate\Support\Facades\Route;
use App\TypeOfAttorney;

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
Auth::routes();
Route::view('/','lexicon');

Route::name('legal.')->prefix('legalSupport')->group(function(){
	Route::get('home','LegalSupportController@home')->name('home');
   Route::get('contact','LegalSupportController@contact')->name('contact');
   Route::get('message','MessageController')->name('message');
   Route::get('packages','LegalSupportController@packages')->name('plans');
   Route::get('about','LegalSupportController@about')->name('about');
   Route::get('lawyers','LegalSupportController@lawyers')->name('lawyers');
   Route::get('lawyer/details/{lawyer}','LegalSupportController@show_lawyer')->name('lawyer.details');
   Route::name('plans.')->prefix('plans')->group(function(){
      Route::get('flpp','LegalSupportController@flpp')->name('flpp');
      Route::get('plpp','LegalSupportController@plpp')->name('plpp');
      Route::get('blpp','LegalSupportController@blpp')->name('blpp');
      Route::get('flpp/categories/{category}','LegalSupportController@flpp_categories')->name('flpp.category');
      Route::get('plpp/categories/{category}','LegalSupportController@plpp_categories')->name('plpp.category');
      Route::get('blpp/categories/{category}','LegalSupportController@blpp_categories')->name('blpp.category');
    });
});




Route::get('book-lawyer/{lawyer}',"BookingController@book")->name('book');
Route::get('get-date',"BookingController@getdate")->name('getdate');
Route::get('build-calendar',"BookingController@build_calendar")->name('buildcalendar');
Route::get('checkSlots',"BookingController@checkSlots")->name('checkSlots');
Route::get('booking/{date}/{lawyer_id}',"BookingController@booking")->name('booking');
Route::post('booking/{date}',"BookingController@submitbook")->name('submitbook');
Route::delete('/delete/{id}/{date}', 'BookingController@destroy');



/* USERS ROUTE */
Route::group(['middleware'=>['user','auth'],'prefix'=>'user'],function(){
	Route::get('dashboard','UserController@dashboard')->name('user.dashboard');
	Route::get('profile','UserController@profile')->name('user.profile');
	Route::get('profile/edit','UserController@show_profile')->name('user.profile.edit');
	Route::patch('profile/edit/{user}','UserController@update_profile')->name('user.profile.update');
	Route::get('plan/purchase/invoice/{category}','InvoiceController@index')->name('user.invoice'); 
	Route::get('appointments','UserController@appointments')->name('user.appointments');
	Route::get('package/{category}','UserController@package_details')->name('user.viewPackage');
	Route::get('appointments/{booking}','UserController@view_appointment')->name('user.viewAppointment');
});




/* ADMIN ROUTES */
Route::group(['middleware'=>['admin','auth'],'prefix'=>'admin'],function(){
	Route::get('dashboard','AdminController@dashboard')->name('admin.dashboard');
	Route::get('profile','AdminController@profile')->name('admin.profile');
   Route::patch('profile/{admin}','AdminController@update_profile')->name('admin.profile.update');
   Route::match(['get','post'],'add/new/admin','AdminController@add_admin')->name('admin.add');
	Route::match(['get','post'],'add/new/lawyer','AdminController@add_lawyer')->name('lawyer.add');
	Route::match(['get','post'],'add/new/insurer','AdminController@add_insurer')->name('insurer.add');
	Route::get('list/of/administrators','AdminController@list_admin')->name('admin.list');
	Route::get('delete/admin/{admin}','AdminController@delete_admin')->name('admin.delete');
	Route::get('view/admin/{admin}','AdminController@view_admin')->name('admin.view');
	Route::get('list/of/insurer','AdminController@list_insurer')->name('insurer.list');
	Route::get('delete/insurer/{insurer}','AdminController@delete_insurer')->name('insurer.delete');
	Route::get('view/insurer/{insurer}','AdminController@view_insurer')->name('insurer.view');
   Route::get('list/of/lawyers','AdminController@list_lawyer')->name('lawyer.list');
	Route::get('view/lawyers/{lawyer}','AdminController@view_lawyer')->name('lawyer.view');
	Route::get('delete/lawyer/{lawyer}','AdminController@delete_lawyer')->name('lawyer.delete');
	Route::get('list/of/clients','AdminController@list_user')->name('user.list');
	Route::get('view/user/{client}','AdminController@view_user')->name('user.view');
	Route::get('delete/user/{client}','AdminController@delete_user')->name('user.delete');
	Route::match(['get','post'],'add/type/of/lawyer','AdminController@type_of_lawyer_add')->name('type.lawyer.add');
	Route::get('delete/type/of/lawyer/{typeOfLawyer}','AdminController@delete_typeOfLawyer')->name('typeOfLawyer.delete');
});


/* LAWYER ROUTES */
Route::group(['middleware'=>['lawyer','auth'],'prefix'=>'lawyer'],function(){
	Route::get('dashboard','LawyerController@dashboard')->name('lawyer.dashboard');
	Route::get('list/of/client','LawyerController@list_client')->name('lawyer.list.client');
	Route::get('profile','LawyerController@profile')->name('lawyer.profile');
	Route::get('profile/{lawyer}','LawyerController@show_profile')->name('lawyer.show.profile');
	Route::patch('profile/{lawyer}','LawyerController@update_profile')->name('lawyer.update.profile');
	Route::get('appointments/{appointment}','LawyerController@view_appointment')->name('lawyer.appointment');
	Route::get('clients/{id}/view','LawyerController@view_client')->name('lawyer.view.client');
	Route::get('clients/appointment/approve/{book}','LawyerController@approve_appointment')->name('lawyer.approve');
});


                         /// INSURER ROUTES ///
Route::group(['middleware'=>['insurer','auth'],'prefix'=>'insurer'],function(){
	Route::get('dashboard','InsurerController@dashboard')->name('insurer.dashboard');
 	Route::get('profile','InsurerController@profile')->name('insurer.profile');
 	Route::get('profile/{insurer}','InsurerController@show_profile')->name('insurer.show.profile');
 	Route::patch('profile/{insurer}','InsurerController@update_profile')->name('insurer.update.profile');
 	Route::get('list/of/client','InsurerController@list_client')->name('insurer.list.client');
 	Route::get('view/client/{client}','InsurerController@view_client')->name('insurer.view.client');
 	Route::get('list/client/invoice','InsurerController@list_invoice')->name('insurer.list.invoice');
 	Route::get('view/client/invoice/{clientInvoice}','InsurerController@view_invoice')->name('insurer.view.invoice');
 	Route::match(['get','post'],'add/new/client','InsurerController@add_client')->name('insurer.add.client');
});




