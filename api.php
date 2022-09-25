<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//create new SMS messages
Route::post('create-sms', [SmsController::class, 'createSms']);

//get SMS
Route::get('get-sms/{limit?}', [SmsController::class, 'getSms']);

//get total number Sms
Route::get('get-total-sms', [SmsController::class, 'getTotalNumberSms']);

//get list all Sms
Route::get('get-list-sms', [SmsController::class, 'getListOfSms']);