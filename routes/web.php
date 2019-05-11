<?php
// start dashboard routes
Route::group(['namespace' => 'dashboard'  , 'middleware' => 'adminlogin'] , function (){

    // User Routes
    Route::get('adminpanel', 'usersController@index');
    Route::get('users/add-new-user', 'usersController@addNewUser');
    Route::post('users/add-new-user', 'usersController@saveNewUser');
    Route::get('users/all-user', 'usersController@allUser');
    Route::get('users/edit/{id}', 'usersController@editUser');
    Route::post('users/update/{id}', 'usersController@updateUser');
    Route::post('users/update/{id}', 'usersController@updatePasswordAndImageUser');
    Route::get('users/delete/{id}', 'usersController@deleteUser');

    // site Settings Routes
    Route::get('all-settings', 'siteSettingController@allsetting');
    Route::get('all-settings/edit/{name}', 'siteSettingController@editsiteSetting');
    Route::post('all-settings/update/{name}', 'siteSettingController@updateSiteSetting');

    // My Works Routes
    Route::get('all-works', 'myWorksController@allWorks');
    Route::get('add-new-work', 'myWorksController@addNewWork');
    Route::post('add-new-work', 'myWorksController@saveNewWork');
    Route::get('work/edit/{id}', 'myWorksController@editWork');
    Route::post('work/update/{id}', 'myWorksController@updateWork');
    Route::get('work/delete/{id}', 'myWorksController@deleteWork');

    // My Services Routes
    Route::get('all-services', 'servicesController@allservices');
    Route::get('add-new-service', 'servicesController@addNewservice');
    Route::post('add-new-service', 'servicesController@saveNewService');
    Route::get('service/edit/{id}', 'servicesController@editService');
    Route::post('service/update/{id}', 'servicesController@updateService');
    Route::get('service/delete/{id}', 'servicesController@deleteService');

    // Testmonilas Routes
    Route::get('all-testmonials', 'testmonialController@allTestmonial');
    Route::get('add-new-testmonial', 'testmonialController@addNewTestmonial');
    Route::post('add-new-testmonial', 'testmonialController@saveNewSeTestmonial');
    Route::get('testmonial/edit/{id}', 'testmonialController@editTestmonial');
    Route::post('testmonial/update/{id}', 'testmonialController@updateTestmonial');
    Route::get('testmonial/delete/{id}', 'testmonialController@deleteTestmonial');
});

//Route::group(['middleware' => 'auth'] , $myDashboardRoutes);

// end dashboard routes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('website/welcome');
});

Route::group(['namespace' => 'website'] , function(){
    Route::get('/', 'websiteController@allFunction');
});
