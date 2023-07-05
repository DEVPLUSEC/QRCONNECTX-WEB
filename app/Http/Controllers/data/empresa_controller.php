<?php

/* ===== Ruta de controlador ===== */
namespace App\Http\Controllers\data;

/* ===== Librerias, modelo y controladores de uso ===== */
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DateTime;

/* ===== Librerias de encriptado ===== */

/* ===== Clase del controlador ===== */
class empresa_controller extends Controller
{
    /* ========== Funciondes CRUD de empresas (sch_empresa.tuni_empresa) ========== */
    
    /* Funcion GET de empresas */
    public function get_empresa(Request $request){
        $datos = $request->all();
        dd($datos);
    }

    /* Funcion POST de empresas */
    public function post_empresa(Request $request){
        $datos = $request->all();
        dd($datos);
    }

    /* Funcion PUT de empresas */
    public function put_empresa(Request $request){
        $datos = $request->all();
        dd($datos);
    }

    /* Funcion DELETE de empresas */
    public function delete_empresa(Request $request){
        $datos = $request->all();
        dd($datos);
    }

}
