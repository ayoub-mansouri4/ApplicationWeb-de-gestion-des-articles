<?php

use App\Models\Articale;
use App\Models\Planning;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
Route::group(['middleware' => 'prevent-back-history'],function(){
Auth::routes(['verify'=>true]);
Route::get('/', function () {
    $doctors=User::cursor();
    $articales=Articale::cursor();
    $plannings=Planning::cursor();
    return view('index',['doctors'=>$doctors,'articales'=>$articales,'plannings'=>$plannings]);
})->name('index');
Route::get('/uploadArticale', [App\Http\Controllers\FileController::class, 'index'])->name('indexArticale');
Route::post('/uploadArticale', [App\Http\Controllers\FileController::class, 'uploadFile'])->name('uploadArticale');
Route::get('/ViewArticales','App\Http\Controllers\FileController@getFile')->name('getFiles');
Route::get('ViewArticales/{Articale?}', function ($Articale) {
    return view('Home.Doc.viewArticale',['Articale'=>$Articale]);
})->name('viewArticale');
Route::auth();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::resource('/profile','App\Http\Controllers\CrudController')->only(['edit','update']);

Route::get('/addCriteria','App\Http\Controllers\CriteriaController@index')->name('addCriteria');
Route::get('/storeCriteria','App\Http\Controllers\CriteriaController@store')->name('storeCriteria');
Route::get('/validateFile/{id}','App\Http\Controllers\FileController@validateFile')->name('validateFile');
Route::get('/deleteFile/{id}','App\Http\Controllers\FileController@deletFile')->name('deletFile');
Route::get('/viewCriterion','App\Http\Controllers\CriteriaController@viewCriterion')->name('viewCriterion');
Route::get('/affectArticales','App\Http\Controllers\AffectArticaleController@affect')->name('affect');
Route::get('/storeAffect','App\Http\Controllers\AffectArticaleController@store')->name('storeAffect');
Route::get('/planning','App\Http\Controllers\PlanningController@index')->name('ShowPlanning');
Route::get('/storePlanning','App\Http\Controllers\PlanningController@store')->name('storePlanning');
Route::get('/workshops','App\Http\Controllers\PlanningController@workshops')->name('workshops');
});




