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


Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('/admin/companies','CompanyController',['only'=>['edit','update']])->names('companies');
Route::resource('/admin/contacts', 'ContactController',['only'=>['edit','update']])->names('contacts');
Route::resource('/mail', 'MailController',['only'=>['store']])->names('mail');
Route::resource('/admin/pages', 'PageController',['only'=>['index']])->names('pages');
Route::resource('/admin/sliders', 'SliderController',['only'=>['edit','update']])->names('sliders');
Route::resource('/admin/socials', 'SocialController',['except'=>['index','show']])->names('socials');
Route::resource('/subscribe', 'SubscribeController',['only'=>['store']])->names('subscribe');


// CRUD
Route::resource('/admin/tags', 'TagController')->names('tags');
Route::resource('/admin/categories', 'CategoryController')->names('categories');
Route::resource('/admin/portfolios', 'PortfolioController')->names('portfolios');
Route::resource('/admin/services', 'ServiceController')->names('services');
Route::resource('/admin/roles', 'RoleController')->names('roles');
Route::resource('/admin/users', 'UserController')->names('users');

Route::get('/admin', 'DashboardController@index')->name('dashboard');

// WEB
Route::get('/', 'WebController@index')->name('index.web');
Route::get('/about', 'WebController@about')->name('about.web');
Route::get('/portfolio', 'WebController@portfolio')->name('portfolio.web');
Route::get('/service', 'WebController@service')->name('service.web');
Route::get('/contact', 'WebController@contact')->name('contact.web');

Route::get('/portafolio\{slug}', 'WebController@portfolioSingles')->name('portfolio.single');
Route::get('/servicio\{slug}', 'WebController@serviceSingles')->name('service.single');

Route::get('/categoria\{slug}', 'WebController@category')->name('category.web');
Route::get('/etiquetas\{slug}', 'WebController@tag')->name('tag.web');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::middleware('throttle:2,5')->group(function () {
//     Route::resource('/mail', 'MailController')->names('mail');
// });

