<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function() {

    return view('login');
    //

});
Route::post('login', function(Request $request) {

    $usuario = $request->input('usuario');
    $encontrado = Usuario::where('nombre', $usuario)->first();
    if(is_null($encontrado)){
       //return "EL USUARIO NO EXISTE";
       return redirect()->back();
    }else{

        $clave_dieron = $request->input('contraseña');
        $clave_guardada = $encontrado->contraseña;

        if(Hash::check($clave_dieron,$clave_guardada)){
            Auth::login($encontrado);
            
            //return "INICIO";
            return redirect('inicio');

        }else{
            
            //return "LA CLAVE ES INCORRECTA";
            return redirect()->back();
        }
    }


});
Route::get('inicio',function(){

    return view('bienvenida');

})->name('HOME');
;