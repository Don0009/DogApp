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
    ->middleware('auth')// Add this to integrate with Fortify and get your key safer and only in control panel
    ->name('amocrm.integrate');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('dashboard');

    Route::resource('permissions', 'Admin\PermissionController');
    Route::resource('roles', 'Admin\RoleController');
    Route::resource('users', 'Admin\UserController');

    // Orange Routes
    Route::resource('internet_home', 'orange\InternetHomeController');
    Route::resource('internet_tv', 'OrangeInternetTvController');
    Route::resource('mobile_phone', 'orange\MobilePhoneController');
    Route::resource('number_porting', 'orange\NumberPortingController');
    Route::resource('number_porting_du', 'orange\NumberPortingDuController');
    Route::resource('internet_home_du', 'orange\OrangeInternetHomeDuController');

    // Telenet Forms
    Route::resource('telenet_new_subs', 'telenet\NewsubController');
    Route::resource('telenet_question', 'telenet\QuestionController');
    Route::resource('contractapp', 'telenet\ContractAppController');

    // Engie Forms
    Route::resource('electricity_natural_gas', 'lampiris\ElectricityNaturalControllers');
    Route::resource('engie', 'EngieContractController');
    Route::resource('contract_professionele', 'ContractResidentileController');
    Route::resource('pad_services', 'PadServicesController');
    Route::get('/generate-pdf', 'PdfController@generatePDF');

    // scarlet
    Route::resource('application_form', 'scarlet\ApplicationFormController');
    Route::resource('mobile_application_form', 'scarlet\MobileApplicationController');

    // Octa
    Route::resource('regi_form', 'octa\OctaController');

    //base
    Route::resource('number_request', 'base\NumberRequestController');
    Route::resource('subscription_request', 'base\SubscriptionRequestController');
    //lampiris
    Route::resource('lampiris', 'lampiris\LampirisController');

    //Overnamedocument Forms
    Route::resource('energy_transfer_document', 'EnergyTransferDocumentController');

    Route::resource('mega', 'MegaController');

    Route::resource('comfy_pro_contract', 'ComfyProContractController');
    Route::resource('comfy_en_comfyflex', 'ComfyEnComfyflexController');
    Route::resource('comfypro_en_comfyflex_pro', 'ComfyproEnComfyflexProController');
    Route::resource('lum_res_comfy', 'LumResComfyController');


    // Proximus Forms 6 in number
    Route::resource('proximus_connection_request_du', 'proximus\ProximusConnectionRequestDUController');
    Route::resource('proximus_connection_request_fr', 'proximus\ProximusConnectionRequestFRController');
    Route::resource('proximus_number_porting_du', 'proximus\ProximusNumberPortingFormDUController');
    Route::resource('proximus_number_porting_fr', 'proximus\ProximusNumberPortingFormFRController');
    Route::resource('proximus_multi_contact_du', 'proximus\ProximusMultiContactDUController');
    Route::resource('proximus_multi_contact_fr', 'proximus\ProximusMultiContactControllerFR');

});
