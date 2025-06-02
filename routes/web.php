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

Route::get('/', function () {
    return view('auth/login');
});

//Route::get('about', function(){
//	return view('about');
//});

Route::get('principal', function(){
	return view('principal');
});


//Route::get('index2', function(){
//	return view('index2');
//});
//Route::get('/', function () {
//    return view('welcome');
//});




Route::resource('datos/generales','RpacienteController');//rutas Paciente
Route::resource('expediente/formatos/sic','SolicitudIController');//rutas formatos
Route::get('expediente/formatos/sic/create/{id}','SolicitudIController@create');//ruta  INGRESO
Route::resource('datos/medico','MedicoController');//rutas Médicos
Route::resource('expediente/formatos/hclinica','HClinicaController');//rutas Historia Clínica
Route::get('expediente/formatos/hclinica/create/{id}','HClinicaController@create');//ruta  INGRESO
Route::resource('expediente/formatos/nurgencias','NUrgenciasController');//rutas Nota de Urgencias
Route::get('expediente/formatos/nurgencias/create/{id}','NUrgenciasController@create');//ruta  INGRESO
Route::resource('expediente/formatos/lab','LaboratorioController');//rutas Laboratorio
Route::resource('expediente/formatos/rx','RxController');//rutas Laboratorio
Route::resource('expediente/formatos/nie','NIEController');//rutas nota de ingreso especialista
Route::get('expediente/formatos/nie/create/{id}','NIEController@create');//ruta  INGRESO
Route::resource('expediente/formatos/ne','NEvolucionController');//rutas nota de evolución
Route::get('expediente/formatos/ne/create/{id}','NEvolucionController@create');//ruta  INGRESO
Route::resource('expediente/formatos/neg','NotaEgresoController');//rutas nota de evolución
Route::get('expediente/formatos/neg/create/{id}','NotaEgresoController@create');//ruta  INGRESO
Route::resource('expediente/formatos/receta','RecetaController');//rutas nota de evolución
Route::resource('expediente/formatos/svitales/nu','SVitalesController');//rutas signos vitalesNOTA DE URGENCIAS
Route::resource('expediente/formatos/svitales/ni','SVitalesNIController');//rutas signos vitalesNOTA DE INGRESO ESPECIALISTA
Route::resource('expediente/formatos/svitales/nev','SVitalesNEController');//rutas signos vitalesNOTA DE EVOLUCIÓN
Route::resource('expediente/formatos/svitales/negs','SVitalesNEGController');//rutas signos vitalesNOTA DE EGRESO
Route::resource('expediente/formatos/svitales/hc','SVitalesHCController');//rutas signos vitalesHISTORIA CLINICA

Route::resource('datos/agenda','AgendaController');//rutas agenda médico
Route::resource('expediente/formatos/im/imnu','IMedicasController');//rutas indicaciones medicas nota de urgencias
Route::resource('expediente/formatos/im/imni','IMedicasNIController');//rutas indicaciones medicas nota de ingreso especialista
Route::resource('expediente/formatos/im/imnev','IMedicasNEVController');//rutas indicaciones medicas nota de evolucion
Route::resource('expediente/formatos/im/imne','IMedicasNEController');//rutas signos vitalesNOTA DE EGRESO



Route::get('expediente/formatos/svitales/nu/create/{idnu}/{idp}','SVitalesController@create');//ruta Svitales@create que recibe dos parametros NOTA DE URGENCIAS
Route::get('expediente/formatos/svitales/ni/create/{idni}/{idp}','SVitalesNIController@create');//ruta Svitales@create que recibe dos parametros NOTA DE INGRESO ESPECILISTA
Route::get('expediente/formatos/svitales/neg/create/{idneg}/{idp}','SVitalesNEGController@create');//ruta Svitales@create que recibe dos parametros NOTA DE EGRESO
Route::get('expediente/formatos/svitales/hc/create/{idhc}/{idp}','SVitalesHCController@create');//ruta Svitales@create que recibe dos parametros HISTORIA CLÍNICA
Route::get('expediente/formatos/svitales/ne/create/{idne}/{idp}','SVitalesNEController@create');//ruta Svitales@create que recibe dos parametros NOTA DE EVOLUCION


Route::get('expediente/formatos/im/imnu/create/{idnu}/{idp}','IMedicasController@create');//ruta Svitales@create que recibe dos parametros INDICACIONE MEDICAS NOTA DE URGENCIAS
Route::get('expediente/formatos/im/imni/create/{idni}/{idp}','IMedicasNIController@create');//ruta Svitales@create que recibe dos parametros INDICACIONES MEDICAS NOTA DE INGRESO ESPECILISTA
Route::get('expediente/formatos/im/imne/create/{idne}/{idp}','IMedicasNEController@create');//ruta Svitales@create que recibe dos parametros INDICACIONES MEDICAS NOTA DE EGRESO
Route::get('expediente/formatos/im/imnev/create/{idnev}/{idp}','IMedicasNEVController@create');//ruta Svitales@create que recibe dos parametros INDICACIONES MEDICAS NOTA DE EVOLUCION



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//rutas para generar los PDF's
//Route::get('expediente/formatos/nurgencias/pdf','NUrgenciasController@generarpdf')->name('generarpdf');//ruta Nota de Urgencias pdf
