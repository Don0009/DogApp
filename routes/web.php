<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PDFController;

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
    return redirect('login');
});

Route::get('/amocrm/get_token', [\App\Http\Controllers\AmoCRMController::class, 'get_token'])
    ->middleware('auth') // Add this to integrate with Fortify and get your key safer and only in control panel
    ->name('amocrm.integrate');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('dashboard');

//Route::get('/', 'Admin\AdminController@index')->name('dashboard');
    Route::resource('permissions', 'Admin\PermissionController');
    Route::resource('roles', 'Admin\RoleController');
    Route::resource('users', 'Admin\UserController');

    Route::resource('internet_home', 'orange\InternetHomeController');
    Route::resource('mobile_phone', 'orange\MobilePhoneController');
    Route::resource('number_porting', 'orange\NumberPortingController');
    Route::resource('number_porting_du', 'orange\NumberPortingDuController');
    Route::resource('electricity_natural_gas', 'lampiris\ElectricityNaturalControllers');
    Route::resource('internet_tv', 'OrangeInternetTvController');
    Route::resource('engie', 'EngieContractController');
    Route::resource('contract_professionele', 'ContractResidentileController');
    Route::resource('pad_services', 'PadServicesController');
    Route::get('/generate-pdf', 'PdfController@generatePDF');
});
