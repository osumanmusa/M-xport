<?php

  

use Illuminate\Support\Facades\Route;

  

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Auth\AdminRegController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RegformsController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\PrimeregController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecruitController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\admin\SignedrouteController;

  

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
Route::get('admin/register', function () {

    return view('admin.auth.register');

});
Route::get('admin/login', function () {

    return view('admin.auth.login');

});
Route::get('manager/register', function () {

    return view('manager.auth.register');

});
Route::get('manager/login', function () {

    return view('manager.auth.login');

});
  

Route::post('/login',[LoginController::class, 'login'])->name('login');
Route::post('/user-register',[RegisterController::class, 'create'])->name('user.register');

Route::post('/admin.register',[AdminRegController::class, 'create'])->name('admin.register');
Route::post('/admin.login',[AdminLoginController::class, 'login'])->name('admin.login');

Route::get('/userlog',[SignedrouteController::class, 'login'])->name('getlogin')->middleware('signed');

Auth::routes();

  

/*------------------------------------------

--------------------------------------------

All Normal Users Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function () {

  

    Route::get('/user/home', [HomeController::class, 'index'])->name('user.home');
/*
---------------------------------------------------------
                
                Training

---------------------------------------------------------*/
    Route::get('/user/regforms', [RegformsController::class, 'index'])->name('user.regforms.list');
    Route::get('/user/create-regforms', [RegformsController::class, 'create'])->name('user.regforms.create');
    Route::post('/user/store-regforms', [RegformsController::class, 'store'])->name('user.regforms.store');
    Route::get('/user/show-regforms/{id}', [RegformsController::class, 'show'])->name('user.regforms.show');
    Route::get('/user/edit-regforms/{id}', [RegformsController::class, 'edit'])->name('user.regforms.edit');
    Route::post('/user/update-regforms/{id}', [RegformsController::class, 'update'])->name('user.regforms.update');
    Route::get('/user/delete-regforms/{id}', [RegformsController::class, 'destroy'])->name('user.regforms.destroy');

    Route::get('/regforms/pdf', [RegformsController::class, 'createPDF']);

    Route::post('file-import', [RegformsController::class, 'FormsImport'])->name('file-import');
    Route::get('/regforms/excel', [RegformsController::class, 'createcsv']);

/*
---------------------------------------------------------
                
                Prime Properties

---------------------------------------------------------*/
    Route::get('/user/primereg', [PrimeregController::class, 'index'])->name('user.primereg.list');
    Route::get('/user/create-primereg', [PrimeregController::class, 'create'])->name('user.primereg.create');
    Route::post('/user/store-primereg', [PrimeregController::class, 'store'])->name('user.primereg.store');
    Route::get('/user/edit-primereg/{id}', [PrimeregController::class, 'edit'])->name('user.primereg.edit');
    Route::get('/user/show-primevending/{id}', [PrimeregController::class, 'vshow'])->name('user.primereg.vshow');
    Route::get('/user/show-prime/{id}', [PrimeregController::class, 'show'])->name('user.primereg.show');
    Route::post('/user/update-primereg/{id}', [PrimeregController::class, 'update'])->name('user.primereg.update');
    Route::get('/user/delete-primereg/{id}', [PrimeregController::class, 'destroy'])->name('user.primereg.destroy');
    Route::get('/user/primevending', [PrimeregController::class, 'vindex'])->name('user.primevending.list');
    Route::get('/user/create-primevending', [PrimeregController::class, 'createreg'])->name('user.primevending.create');
    Route::post('/user/store-primevending', [PrimeregController::class, 'vstore'])->name('user.primevending.store');
    Route::get('/user/edit-primevending/{id}', [PrimeregController::class, 'vedit'])->name('user.primevending.edit');
    Route::post('/user/update-primevending/{id}', [PrimeregController::class, 'vupdate'])->name('user.primereg.update');
    Route::get('/user/delete-primevending/{id}', [PrimeregController::class, 'vdestroy'])->name('user.primereg.destroy');

/*
---------------------------------------------------------
                
                Sales & Makerting

---------------------------------------------------------*/
    Route::get('/user/sales', [SalesController::class, 'index'])->name('user.sales.list');
    Route::get('/user/create-sales', [SalesController::class, 'create'])->name('user.sales.create');
    Route::get('/user/view-sales/{id}', [SalesController::class, 'show'])->name('user.sales.show');
    Route::post('/user/store-sales', [SalesController::class, 'store'])->name('user.sales.store');
    Route::get('/user/edit-sales/{id}', [SalesController::class, 'edit'])->name('user.sales.edit');
    Route::post('/user/update-sales/{id}', [SalesController::class, 'update'])->name('user.sales.update');
    Route::get('/user/delete-sales/{id}', [SalesController::class, 'destroy'])->name('user.sales.destroy');

/*
---------------------------------------------------------
                
                Recruitment

---------------------------------------------------------*/
    Route::get('/user/recruit', [RecruitController::class, 'index'])->name('user.recruit.list');
    Route::get('/user/recruit1', [RecruitController::class, 'index2'])->name('user.recruit1.list');
    Route::get('/user/recruits-all', [RecruitController::class, 'index3'])->name('user.recruit2.list');
    Route::get('/user/create-recruit', [RecruitController::class, 'create'])->name('user.recruit.create');
    Route::post('/user/store-recruit', [RecruitController::class, 'store'])->name('user.recruit.store');
    Route::get('/user/show-recruit/{id}', [RecruitController::class, 'show'])->name('user.recruit.show');
    Route::get('/user/edit-recruit/{id}', [RecruitController::class, 'edit'])->name('user.recruit.edit');
    Route::post('/user/update-recruit/{id}', [RecruitController::class, 'update'])->name('user.recruit.update');
    Route::get('/user/delete-recruit/{id}', [RecruitController::class, 'destroy'])->name('user.recruit.destroy');

/*
---------------------------------------------------------
                
                Insurance (STIB)

---------------------------------------------------------*/
    Route::get('/user/policing', [InsuranceController::class, 'index'])->name('user.policing.list');
    Route::get('/user/commission', [InsuranceController::class, 'commission'])->name('user.commission.list');
    Route::get('/user/create-insurance', [InsuranceController::class, 'create'])->name('user.insurance.create');
    Route::get('/user/create-commission', [InsuranceController::class, 'createcommission'])->name('user.commission.create');
    Route::post('/user/store-insurance', [InsuranceController::class, 'store'])->name('user.insurance.store');
    Route::post('/user/store-commission', [InsuranceController::class, 'storecommission'])->name('user.commission.store');
    Route::get('/user/edit-insurance/{id}', [InsuranceController::class, 'edit'])->name('user.insurance.edit');
    Route::post('/user/update-insurance/{id}', [InsuranceController::class, 'update'])->name('user.insurance.update');
    Route::get('/user/delete-insurance/{id}', [InsuranceController::class, 'destroy'])->name('user.insurance.destroy');


/*
---------------------------------------------------------
                
                User Settings

---------------------------------------------------------*/
    Route::get('/user/edit-profile/{id}', [ProfileController::class, 'edit'])->name('user.profile.edit');
    Route::post('/user/update-profile/{id}', [ProfileController::class, 'update'])->name('user.profile.update');
    Route::get('/user/change-photo/{id}', [ProfileController::class, 'changephoto'])->name('user.image.edit');
    Route::post('/user/update-photo/{id}', [ProfileController::class, 'imageupdate'])->name('user.image.update');




});

  

/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:admin'])->group(function () {

  

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
/*
---------------------------------------------------------
                
                Training

---------------------------------------------------------*/
    Route::get('/admin/regforms', [App\Http\Controllers\admin\RegformsController::class, 'index'])->name('admin.regforms.list');
    Route::get('/admin/create-regforms', [App\Http\Controllers\admin\RegformsController::class, 'create'])->name('admin.regforms.create');
    Route::post('/admin/store-regforms', [App\Http\Controllers\admin\RegformsController::class, 'store'])->name('admin.regforms.store');
    Route::get('/admin/show-regforms/{id}', [App\Http\Controllers\admin\RegformsController::class, 'show'])->name('admin.regforms.show');
    Route::get('/admin/edit-regforms/{id}', [App\Http\Controllers\admin\RegformsController::class, 'edit'])->name('admin.regforms.edit');
    Route::post('/admin/update-regforms/{id}', [App\Http\Controllers\admin\RegformsController::class, 'update'])->name('admin.regforms.update');
    Route::get('/admin/delete-regforms/{id}', [App\Http\Controllers\admin\RegformsController::class, 'destroy'])->name('admin.regforms.destroy');

    Route::get('/admin/regforms/pdf', [App\Http\Controllers\admin\RegformsController::class, 'createPDF']);

    Route::post('admin/file-import', [App\Http\Controllers\admin\RegformsController::class, 'FormsImport'])->name('file-import');
    Route::get('/admin/regforms/excel', [App\Http\Controllers\admin\RegformsController::class, 'createcsv']);

/*
---------------------------------------------------------
                
                Prime Properties

---------------------------------------------------------*/
    Route::get('/admin/primereg', [App\Http\Controllers\admin\PrimeregController::class, 'index'])->name('admin.primereg.list');
    Route::get('/admin/create-primereg', [App\Http\Controllers\admin\PrimeregController::class, 'create'])->name('admin.primereg.create');
    Route::post('/admin/store-primereg', [App\Http\Controllers\admin\PrimeregController::class, 'store'])->name('admin.primereg.store');
    Route::get('/admin/edit-primereg/{id}', [App\Http\Controllers\admin\PrimeregController::class, 'edit'])->name('admin.primereg.edit');
    Route::get('/admin/show-primevending/{id}', [App\Http\Controllers\admin\PrimeregController::class, 'vshow'])->name('admin.primereg.vshow');
    Route::get('/admin/show-prime/{id}', [App\Http\Controllers\admin\PrimeregController::class, 'show'])->name('admin.primereg.show');
    Route::post('/admin/update-primereg/{id}', [App\Http\Controllers\admin\PrimeregController::class, 'update'])->name('admin.primereg.update');
    Route::get('/admin/delete-primereg/{id}', [App\Http\Controllers\admin\PrimeregController::class, 'destroy'])->name('admin.primereg.destroy');
    Route::get('/admin/primevending', [App\Http\Controllers\admin\PrimeregController::class, 'vindex'])->name('admin.primevending.list');
    Route::get('/admin/create-primevending', [App\Http\Controllers\admin\PrimeregController::class, 'createreg'])->name('admin.primevending.create');
    Route::post('/admin/store-primevending', [App\Http\Controllers\admin\PrimeregController::class, 'vstore'])->name('admin.primevending.store');
    Route::get('/admin/edit-primevending/{id}', [App\Http\Controllers\admin\PrimeregController::class, 'vedit'])->name('admin.primevending.edit');
    Route::post('/admin/update-primevending/{id}', [App\Http\Controllers\admin\PrimeregController::class, 'vupdate'])->name('admin.primereg.update');
    Route::get('/admin/delete-primevending/{id}', [App\Http\Controllers\admin\PrimeregController::class, 'vdestroy'])->name('admin.primereg.destroy');

/*
---------------------------------------------------------
                
                Sales & Makerting

---------------------------------------------------------*/
    Route::get('/admin/sales', [App\Http\Controllers\admin\SalesController::class, 'index'])->name('admin.sales.list');
    Route::get('/admin/create-sales', [App\Http\Controllers\admin\SalesController::class, 'create'])->name('admin.sales.create');
    Route::get('/admin/view-sales/{id}', [App\Http\Controllers\admin\SalesController::class, 'show'])->name('admin.sales.show');
    Route::post('/admin/store-sales', [App\Http\Controllers\admin\SalesController::class, 'store'])->name('admin.sales.store');
    Route::get('/admin/edit-sales/{id}', [App\Http\Controllers\admin\SalesController::class, 'edit'])->name('admin.sales.edit');
    Route::post('/admin/update-sales/{id}', [App\Http\Controllers\admin\SalesController::class, 'update'])->name('admin.sales.update');
    Route::get('/admin/delete-sales/{id}', [App\Http\Controllers\admin\SalesController::class, 'destroy'])->name('admin.sales.destroy');

/*
---------------------------------------------------------
                
                Recruitment

---------------------------------------------------------*/
    Route::get('/admin/recruit', [App\Http\Controllers\admin\RecruitController::class, 'index'])->name('admin.recruit.list');
    Route::get('/admin/recruit1', [App\Http\Controllers\admin\RecruitController::class, 'index2'])->name('admin.recruit1.list');
    Route::get('/admin/recruits-all', [App\Http\Controllers\admin\RecruitController::class, 'index3'])->name('admin.recruit2.list');
    Route::get('/admin/create-recruit', [App\Http\Controllers\admin\RecruitController::class, 'create'])->name('admin.recruit.create');
    Route::post('/admin/store-recruit', [App\Http\Controllers\admin\RecruitController::class, 'store'])->name('admin.recruit.store');
    Route::get('/admin/show-recruit/{id}', [App\Http\Controllers\admin\RecruitController::class, 'show'])->name('admin.recruit.show');
    Route::get('/admin/edit-recruit/{id}', [App\Http\Controllers\admin\RecruitController::class, 'edit'])->name('admin.recruit.edit');
    Route::post('/admin/update-recruit/{id}', [App\Http\Controllers\admin\RecruitController::class, 'update'])->name('admin.recruit.update');
    Route::get('/admin/delete-recruit/{id}', [App\Http\Controllers\admin\RecruitController::class, 'destroy'])->name('admin.recruit.destroy');

/*
---------------------------------------------------------
                
                Insurance (STIB)

---------------------------------------------------------*/
    Route::get('/admin/policing', [App\Http\Controllers\admin\InsuranceController::class, 'index'])->name('admin.policing.list');
    Route::get('/admin/commission', [App\Http\Controllers\admin\InsuranceController::class, 'commission'])->name('admin.commission.list');
    Route::get('/admin/create-insurance', [App\Http\Controllers\admin\InsuranceController::class, 'create'])->name('admin.insurance.create');
    Route::get('/admin/create-commission', [App\Http\Controllers\admin\InsuranceController::class, 'createcommission'])->name('admin.commission.create');
    Route::post('/admin/store-insurance', [App\Http\Controllers\admin\InsuranceController::class, 'store'])->name('admin.insurance.store');
    Route::post('/admin/store-commission', [App\Http\Controllers\admin\InsuranceController::class, 'storecommission'])->name('admin.commission.store');
    Route::get('/admin/edit-insurance/{id}', [App\Http\Controllers\admin\InsuranceController::class, 'edit'])->name('admin.insurance.edit');
    Route::post('/admin/update-insurance/{id}', [App\Http\Controllers\admin\InsuranceController::class, 'update'])->name('admin.insurance.update');
    Route::get('/admin/delete-insurance/{id}', [App\Http\Controllers\admin\InsuranceController::class, 'destroy'])->name('admin.insurance.destroy');


/*
---------------------------------------------------------
                
                admin Manage Users

---------------------------------------------------------*/

    Route::get('/admin/users-list', [App\Http\Controllers\admin\UsersController::class, 'index'])->name('admin.list-users');
    Route::post('/admin/users-store', [App\Http\Controllers\admin\UsersController::class, 'store'])->name('admin.store-users');
    Route::get('/admin/users-delete/{id}', [App\Http\Controllers\admin\UsersController::class, 'destroy'])->name('admin.delete-users');


/*
---------------------------------------------------------
                
                admin Settings

---------------------------------------------------------*/
    Route::get('/admin/edit-profile/{id}', [App\Http\Controllers\admin\ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::post('/admin/update-profile/{id}', [App\Http\Controllers\admin\ProfileController::class, 'update'])->name('admin.profile.update');
    Route::get('/admin/change-photo/{id}', [App\Http\Controllers\admin\ProfileController::class, 'changephoto'])->name('admin.image.edit');
    Route::post('/admin/update-photo/{id}', [App\Http\Controllers\admin\ProfileController::class, 'imageupdate'])->name('admin.image.update');




});

  

/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:manager'])->group(function () {

  

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');

});

 
