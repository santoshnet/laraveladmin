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
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission; 

// Route::get('/', function () {
// 	    return view('welcome');
// 	});


Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    
    //Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/', function () {
	    return view('dashboard');
	});
  
	 Route::get('/basicform', function () {
	    return view('form.basicform');
    	})->name('basicform');

        Route::get('/advanceform', function () {
	     return view('form.advanceform');
    	})->name('advanceform');



	Route::get('chart', function () {
	    return view('chart');
	});

	Route::get('table', function () {
	    return view('table');
	});

	Route::get('logout', function (){
        Auth::logout();
        return redirect('/');
    });

   
    Route::resource('users', 'UserController');

    Route::resource('roles', 'RoleController');

    Route::resource('permissions', 'PermissionController');

    Route::resource('posts', 'PostController');

});

 // Route::get('/create_role_permission', function(){
 //        $role = Role::create(['name'=> 'Administer']);
 //        $permission = Permission::create(['name'=> 'Administer roles & permissions']);
 //        auth()->user()->assignRole('Administer');
 //        auth()->user()->givePermissionTo('Administer roles & permissions');
 //    });