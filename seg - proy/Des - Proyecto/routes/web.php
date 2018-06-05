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


Route::get("/","HomeController@home");
Route::get("/crear","MiControlador@create");
Route::get("/articulos","MiControlador@store");
Route::get("/mostrar","MiControlador@show");
Route::get("/contacto","MiControlador@contactar");

/* USER ROUTES */
Route::get("/registro", "UserController@registerUser");
Route::post("/register/comprobar", "UserController@getEmail");
Route::get('/register/verify/{token}', 'Auth\RegisterController@verifyUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Usuarios
//--------
Route::get('/usuarios', 'UserController@index')->name('usuarios')->middleware('auth');
Route::get('/usuarios/profile', 'UserController@viewProfile')->name('profile')->middleware('auth');
Route::get('usuarios/profile/modify', 'UserController@modifyProfileNormal')->name('modifyprofilenormal')->middleware('auth');
Route::get('usuarios/edit', 'UserController@editUser')->name('editusuario')->middleware('auth');
Route::post('/usuarios', 'UserController@usuarioDoEdit')->name('usuariodoedit')->middleware('auth');
Route::get('usuarios/delete', 'UserController@deleteUser')->name('deleteusuario')->middleware('auth');
Route::post('/usuarios/subirfoto', 'UserController@subirFoto')->name('subirfoto')->middleware('auth');
Route::get('/usuarios/verfoto', 'UserController@verfoto')->name('verfoto')->middleware('auth');
Route::get('/user/perfil', 'UserController@edicion')->middleware('auth');
Route::post('/user/name', 'UserController@editName')->middleware('auth');
Route::post('/user/password', 'UserController@editPass')->middleware('auth');
Route::get('/salir', 'UserController@salir')->name('cerrarsesion')->middleware('auth');
//--------
//--------

//EMPRESA
//--------
Route::get('/empresa/register', 'EmpresaController@viewregister')->name('registerempresa');
Route::post('/empresa/register/success', 'EmpresaController@register')->name('regemp');
Route::get('/empresa/servicios', 'ServicioController@getEmpresa')->middleware('auth');
//--------
//--------

//AMIGOS
//--------
Route::get('/amigos', 'AmigosController@index')->middleware('auth');
Route::get('/amigos/solicitudes', 'AmigosController@verSolicitudes')->middleware('auth');
Route::post('/amigos/buscar', 'UserController@getFromEmail')->middleware('auth');
Route::get('/amigos/chat', 'AmigosController@startChat')->name('chat')->middleware('auth');
//--------
//--------

//MENSAJERÍA
//--------
Route::get('/chat', 'ChatsController@index')->middleware('auth');
Route::get('messages', 'ChatsController@fetchMessages')->middleware('auth');
Route::post('messages', 'ChatsController@sendMessage')->middleware('auth');
//--------
//--------

//SERVICIOS
//--------
Route::get('/servicio', 'ServicioController@index')->name('servicios')->middleware('auth');
Route::post('servicio/insertar', 'ServicioController@registerServicio')->name('registerservice')->middleware('auth');
Route::get('servicio/edit', 'ServicioController@editServicio')->name('editservice')->middleware('auth');
Route::get('servicio/delete', 'ServicioController@deleteServicio')->name('deleteservice')->middleware('auth');
Route::post('/servicio', 'ServicioController@servicioDoEdit')->name('serviciodoedit')->middleware('auth');
//---------
//---------

//FIESTAS
//---------
Route::get('/fiesta', 'FiestaController@index')->name('fiestas')->middleware('auth');
Route::get('/fiesta/publica', 'FiestaController@showPublic')->middleware('auth');
Route::get('/fiesta/user', 'FiestaController@personalUser')->middleware('auth');
Route::post('/fiesta/insertar', 'FiestaController@registerFiesta')->name('registerfiesta')->middleware('auth');
Route::get('fiesta/unirse', 'FiestaController@unirseFiesta')->name('unirse')->middleware('auth');
Route::get('fiesta/program', 'FiestaController@programFiesta')->name('programfiesta')->middleware('auth');
Route::get('fiesta/edit', 'FiestaController@editFiesta')->name('editfiesta')->middleware('auth');
Route::post('/fiesta', 'FiestaController@fiestaDoEdit')->name('fiestadoedit')->middleware('auth');
Route::get('fiesta/delete', 'FiestaController@destroy')->name('deletefiesta')->middleware('auth');
Route::get('/fiesta/personal', 'FiestaController@personalUserData')->middleware('auth');
Route::get('/fiesta/participa', 'FiestaController@personalUserParticipa')->middleware('auth');
Route::get('/fiesta/user/all', 'FiestaController@personalUserAll')->middleware('auth');
//---------
//---------

//CONTROL DE FIESTAS
//---------
Route::post('/anadir/servicio', 'ContratarController@usarServicio')->name('usarservicio')->middleware('auth');
Route::post('/anadir/herramienta', 'UsarController@usarHerramienta')->name('usarherramienta')->middleware('auth');
//---------
//---------

//HERRAMIENTAS
//---------
Route::get('/herramientas', 'HerramientasController@index')->name('herramientas')->middleware('auth');
Route::post('herramientas/insertar', 'HerramientasController@registerHerramienta')->name('registerherramienta')->middleware('auth');
Route::get('herramientas/edit', 'HerramientasController@editHerramienta')->name('editherramienta')->middleware('auth');
Route::get('herramientas/delete', 'HerramientasController@deleteHerramienta')->name('deleteherramienta')->middleware('auth');
Route::post('/herramientas', 'HerramientasController@herramientaDoEdit')->name('herramientadoedit')->middleware('auth');
//---------
//---------


//PAYPAL
//---------
//---------------------------
// route for view/blade file
//---------------------------
Route::get('addPayment','PaymentController@addPayment')->name('addPayment');

//-------------------------
// route for post request
//-------------------------
Route::get('suscribirse', 'PaymentController@postPaymentWithpaypal')->name('suscribirse');

//---------------------------------
// route for check status responce
//---------------------------------
Route::get('paypal','PaymentController@getPaymentStatus')->name('status');
//---------
//---------