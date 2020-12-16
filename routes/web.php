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

Route::name('training.')->prefix('training')->group(function(){
	Route::get('home','TrainingController@home')->name('home');
	Route::get('about','TrainingController@about')->name('about');
	Route::get('projects/completed','ProjectController@completed_projects')->name('completed.projects');
	Route::get('projects/ongoing','ProjectController@ongoing_projects')->name('ongoing.projects');
	Route::get('projects/completed/{project_alias}','ProjectController@view_completed_projects')->name('project.completed.view');
	Route::get('projects/ongoing/{project_alias}','ProjectController@view_ongoing_projects')->name('project.ongoing.view');
	Route::get('gallery','TrainingController@gallery')->name('gallery');
});

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
      Route::get('flpp/categories/{package_alias}','LegalSupportController@flpp_categories')->name('flpp.category');
      Route::get('plpp/categories/{package_alias}','LegalSupportController@plpp_categories')->name('plpp.category');
      Route::get('blpp/categories/{package_alias}','LegalSupportController@blpp_categories')->name('blpp.category');
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
	Route::get('profile/edit','UserController@edit_profile')->name('user.profile.edit');
	Route::patch('profile/{alias}/edit','UserController@update_profile')->name('user.profile.update');
	Route::get('profile/edit/password','UserController@edit_password')->name('user.password.edit');
	Route::patch('profile/edit/password/{alias}','UserController@update_password')->name('user.password.update');
	Route::get('profile/edit/email','UserController@edit_email')->name('user.email.edit');
	Route::patch('profile/edit/email/{alias}','UserController@update_email')->name('user.email.update');
	Route::get('profile/activate/email','UserController@activate_email')->name('user.email.activate');
	Route::patch('profile/activate/email/{alias}','UserController@activation_email')->name('user.email.activation');
	Route::get('plan/purchase/invoice/{category_alias}','InvoiceController@index')->name('user.invoice'); 
	Route::get('appointments','UserController@appointments')->name('user.appointments');
	Route::get('package/{category_alias}','UserController@package_details')->name('user.viewPackage');
	Route::get('appointments/{booking}','UserController@view_appointment')->name('user.viewAppointment');

	Route::get('book-lawyer/{lawyer}',"BookingController@book")->name('book');
    Route::get('get-date',"BookingController@getdate")->name('getdate');
    Route::get('build-calendar',"BookingController@build_calendar")->name('buildcalendar');
    Route::get('checkSlots',"BookingController@checkSlots")->name('checkSlots');
    Route::get('booking/{date}/{lawyer_id}',"BookingController@booking")->name('booking');
    Route::post('booking/{date}',"BookingController@submitbook")->name('submitbook');
    Route::delete('delete/{id}/{date}', 'BookingController@destroy');


});



/* ADMIN ROUTES */
Route::group(['middleware'=>['admin','auth'],'prefix'=>'admin'],function(){
	Route::get('dashboard','AdminController@dashboard')->name('admin.dashboard');
	Route::get('profile','AdminController@profile')->name('admin.profile');
    Route::patch('profile/{admin}','AdminController@update_profile')->name('admin.profile.update');
    Route::match(['get','post'],'add/new/admin','AdminController@add_admin')->name('admin.add');
	Route::match(['get','post'],'add/new/lawyer','AdminController@add_lawyer')->name('lawyer.add');
	Route::match(['get','post'],'add/new/insurer','AdminController@add_insurer')->name('insurer.add');
	Route::get('create/project','ProjectController@showProjectForm')->name('project.show');
	Route::post('create/project','ProjectController@create_project')->name('project.create');
	Route::get('upload/photo','PhotoController@showPhotoUploadForm')->name('photo.show');
	Route::post('create/album','PhotoController@createAlbum')->name('create.album');
	Route::post('upload/photo','PhotoController@uploadPhoto')->name('photo.upload');
	Route::get('album/{album_alias}/view','PhotoController@albumPhotos')->name('view.album.photos');
	Route::get('photos/list','PhotoController@list_photo')->name('admin.list.photo');
    Route::get('photos/delete/{photo}','PhotoController@delete_photo')->name('admin.delete.photo');


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
	Route::get('list/invoice','AdminController@invoices')->name('admin.invoices');
	Route::get('list/project','AdminController@projects')->name('admin.list.projects');
	Route::get('project/edit/{project_alias}','ProjectController@edit_project')->name('admin.edit.project');
	Route::patch('project/update/{project_alias}','ProjectController@update_project')->name('admin.update.project');
	Route::get('project/delete/{project_alias}','ProjectController@delete_project')->name('admin.delete.project');
});


/* LAWYER ROUTES */
Route::group(['middleware'=>['lawyer','auth'],'prefix'=>'lawyer'],function(){
	Route::get('dashboard','LawyerController@dashboard')->name('lawyer.dashboard');
	Route::get('list/of/client','LawyerController@list_client')->name('lawyer.list.client');
	Route::get('profile','LawyerController@profile')->name('lawyer.profile');
	Route::get('profile/edit','LawyerController@show_profile')->name('lawyer.show.profile');
	Route::patch('profile/edit/{lawyer}','LawyerController@update_profile')->name('lawyer.update.profile');
 	Route::get('profile/edit/password','LawyerController@edit_password')->name('lawyer.password.edit');
 	Route::patch('profile/edit/password/{lawyer}','LawyerController@update_password')->name('lawyer.password.update');
 	Route::get('profile/edit/email','LawyerController@edit_email')->name('lawyer.email.edit');
 	Route::patch('profile/edit/email/{lawyer}','LawyerController@update_email')->name('lawyer.email.update');
	Route::get('profile/activate/email','LawyerController@activate_email')->name('lawyer.email.activate');
	Route::patch('profile/activate/email/{lawyer}','LawyerController@activation_email')->name('lawyer.email.activation');
    
	Route::get('appointments/{appointment}','LawyerController@view_appointment')->name('lawyer.appointment');
	Route::get('clients/{id}/view','LawyerController@view_client')->name('lawyer.view.client');
	Route::get('clients/appointment/approve/{book}','LawyerController@approve_appointment')->name('lawyer.approve');
});


// INSURER ROUTES //
Route::group(['middleware'=>['insurer','auth'],'prefix'=>'insurer'],function(){
	Route::get('dashboard','InsurerController@dashboard')->name('insurer.dashboard');
 	Route::get('profile','InsurerController@view_profile')->name('insurer.profile');
 	Route::get('profile/edit','InsurerController@edit_profile')->name('insurer.show.profile');
 	Route::patch('profile/{alias}','InsurerController@update_profile')->name('insurer.update.profile');
 	Route::get('profile/edit/password','InsurerController@edit_password')->name('insurer.password.edit');
 	Route::patch('profile/edit/password/{alias}','InsurerController@update_password')->name('insurer.password.update');
 	Route::get('profile/edit/email','InsurerController@edit_email')->name('insurer.email.edit');
 	Route::patch('profile/edit/email/{insurer}','InsurerController@update_email')->name('insurer.email.update');
	Route::get('profile/activate/email','InsurerController@activate_email')->name('insurer.email.activate');
	Route::patch('profile/activate/email/{insurer}','InsurerController@activation_email')->name('insurer.email.activation');
 	Route::get('view/client/{alias}','InsurerController@view_client')->name('insurer.view.client');
 	Route::get('list/client','InsurerController@list_client')->name('insurer.list.client');
 	// Route::get('client/{alias}/delete','InsurerController@destroy_client')->name('insurer.delete.client');
 	Route::get('list/client/invoice','InvoiceController@list_invoice')->name('insurer.list.invoice');
 	Route::get('view/client/invoice/{invoice_alias}','InvoiceController@view_invoice')->name('insurer.view.invoice');
	Route::get('delete/invoice/{invoice}','InvoiceController@delete')->name('insurer.delete.invoice');
	Route::get('list/packages','InsurerController@list_package')->name('insurer.list.package');
 	Route::match(['get','post'],'add/new/client','InsurerController@add_client')->name('insurer.add.client');
 	Route::get('view/client/package/{package}','InsurerController@view_package')->name('insurer.view.package');
 	Route::get('delete/client/{package}/package/','InsurerController@delete_package')->name('insurer.delete.package');
 	Route::get('activate/client/{package}/package','InsurerController@activate_package')->name('insurer.activate.package');
 	Route::get('deactivate/client/{package}/package','InsurerController@deactivate_package')->name('insurer.deactivate.package');
});




