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
class equipo_controller extends Controller
{
    /* ========== Funciondes CRUD de equipos (sch_equipo.tuni_equipo) ========== */
    
    /* Funcion GET de equipos */
    public function get_equipo(Request $request){

        /* Recibir parametros */
        $datos = $request->all();
        
        /* Ejecutar consulta */
        $obtener = DB::select("SELECT * FROM sch_equipo.tuni_equipo");

        /* Retorno de respuesta */
        return $obtener;

    }

    /* Funcion POST de equipos */
    public function post_equipo(Request $request){

        /* Recibir parametros */
        $datos = $request->all();

        /* Ejecutar consulta */
        $insertar = DB::insert("INSERT INTO sch_equipo.tuni_equipo  (id, nombre, tipo, marca, caracteristicas, descripcion, 
                                                                    observaciones, evidencia, usuario_modificacion)
                                                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);", 
                                                                    [$datos["id"], $datos["nombre"],$datos["tipo"],$datos["marca"],$datos["caracteristicas"],$datos["descripcion"],
                                                                    $datos["observaciones"],$datos["evidencia"],$datos["usuario_modificacion"]]);

        /* Retorno de respuesta */
        return ($insertar);

    }

    /* Funcion PUT de equipos */
    public function put_equipo(Request $request){

        /* Recibir parametros */
        $datos = $request->all();

        //dd($datos);

        /* Ejecutar consulta */
        $actualizar = DB::update("UPDATE sch_equipo.tuni_equipo SET nombre = ?, tipo = ?, marca = ?, caracteristicas = ?, descripcion = ?, 
                                                                    observaciones = ?, evidencia = ?, usuario_modificacion = ?, fecha_actualizacion = ?
                                                                WHERE id = ?;"
                                                                , [$datos["nombre"], $datos["tipo"], $datos["marca"], $datos["caracteristicas"], $datos["descripcion"], 
                                                                  $datos["observaciones"], $datos["evidencia"], $datos["usuario_modificacion"], 'now()',$datos["id"]]);

        /* Retorno de respuesta */
        return ($actualizar);

    }

    /* Funcion DELETE de equipos */
    public function delete_equipo(Request $request){

        /* Recibir parametros */
        $datos = $request->all();
        
        /* Ejecutar consulta */
        $borrar = DB::delete("DELETE FROM sch_equipo.tuni_equipo WHERE id = ?", [$datos["id"]]);

        /* Retorno de respuesta */
        return ($borrar);

    }

    /* ========== Funciondes CRUD de tipo de equipos (sch_equipo.tgen_tipo_equipo) ========== */
    
    /* Funcion GET de tipo de equipos */
    public function get_tipo_equipo(Request $request){

        /* Recibir parametros */
        $datos = $request->all();
        
        /* Ejecutar consulta */
        $obtener = DB::select("SELECT * FROM sch_equipo.tgen_tipo_equipo");

        /* Retorno de respuesta */
        return $obtener;

    }

    /* Funcion POST de tipo de equipos */
    public function post_tipo_equipo(Request $request){
        
        /* Recibir parametros */
        $datos = $request->all();

        /* Ejecutar consulta */
        $insertar = DB::insert("INSERT INTO sch_equipo.tgen_tipo_equipo(definicion, usuario_modificacion)
                                                                        VALUES (?, ?);", 
                                                                    [$datos["definicion"],$datos["usuario_modificacion"]]);

        /* Retorno de respuesta */
        return ($insertar);

    }

    /* Funcion PUT de tipo de equipos */
    public function put_tipo_equipo(Request $request){
        
        /* Recibir parametros */
        $datos = $request->all();

        //dd($datos);

        /* Ejecutar consulta */
        $actualizar = DB::update("UPDATE sch_equipo.tgen_tipo_equipo SET definicion=?, estado=?, usuario_modificacion=?, fecha_actualizacion=?
                                                                         WHERE id = ?;"
                                                                , [$datos["definicion"], $datos["estado"], $datos["usuario_modificacion"], 'now()' ,$datos["id"]]);

        /* Retorno de respuesta */
        return ($actualizar);

    }

    /* Funcion DELETE de tipo de equipos */
    public function delete_tipo_equipo(Request $request){
        
        /* Recibir parametros */
        $datos = $request->all();
        
        /* Ejecutar consulta */
        $borrar = DB::delete("DELETE FROM sch_equipo.tgen_tipo_equipo WHERE id = ?", [$datos["id"]]);

        /* Retorno de respuesta */
        return ($borrar);

    }

    /* ========== Funciondes CRUD de mantenimientos (sch_equipo.tuni_mantenimiento) ========== */
    
    /* Funcion GET de mantenimientos */
    public function get_mantenimiento(Request $request){
        
        /* Recibir parametros */
        $datos = $request->all();
        
        /* Ejecutar consulta */
        $obtener = DB::select("SELECT * FROM sch_equipo.tuni_mantenimiento");

        /* Retorno de respuesta */
        return $obtener;

    }

    /* Funcion POST de mantenimientos */
    public function post_mantenimiento(Request $request){
        
        /* Recibir parametros */
        $datos = $request->all();

        /* Ejecutar consulta */
        $insertar = DB::insert("INSERT INTO sch_equipo.tuni_mantenimiento(equipo, tipo, descripcion, observacion, estado_inicial, evidencia_inicial, 
                                                                          estado_final, evidencia_final, usuario_modificacion)
                                                                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);", 
                                                                    [$datos["equipo"],$datos["tipo"],$datos["descripcion"],$datos["observacion"],$datos["estado_inicial"],$datos["evidencia_inicial"],
                                                                    $datos["estado_final"],$datos["evidencia_final"],$datos["usuario_modificacion"]]);

        /* Retorno de respuesta */
        return ($insertar);

    }

    /* Funcion PUT de mantenimientos */
    public function put_mantenimiento(Request $request){

        /* Recibir parametros */
        $datos = $request->all();

        //dd($datos);

        /* Ejecutar consulta */
        $actualizar = DB::update("UPDATE sch_equipo.tuni_mantenimiento  SET tipo=?, descripcion=?, observacion=?, estado_inicial=?, evidencia_inicial=?, 
                                                                            estado_final=?, evidencia_final=?, usuario_modificacion=?, fecha_actualizacion=?
                                                                        WHERE id = ?;"
                                                                , [ $datos["tipo"], $datos["descripcion"], $datos["observacion"], $datos["estado_inicial"], $datos["evidencia_inicial"],
                                                                    $datos["estado_final"], $datos["evidencia_final"], $datos["usuario_modificacion"], 'now()', $datos["id"]]);

        /* Retorno de respuesta */
        return ($actualizar);
    }

    /* Funcion DELETE de mantenimientos */
    public function delete_mantenimiento(Request $request){
        
        /* Recibir parametros */
        $datos = $request->all();
        
        /* Ejecutar consulta */
        $borrar = DB::delete("DELETE FROM sch_equipo.tuni_mantenimiento WHERE id = ?", [$datos["id"]]);

        /* Retorno de respuesta */
        return ($borrar);

    }

    /* ========== Funciondes CRUD de tipo de mantenimiento (sch_equipo.tgen_tipo_mantenimiento) ========== */
    
    /* Funcion GET de tipo de mantenimiento */
    public function get_tipo_mantenimiento(Request $request){

         /* Recibir parametros */
         $datos = $request->all();
        
         /* Ejecutar consulta */
         $obtener = DB::select("SELECT * FROM sch_equipo.tgen_tipo_mantenimiento");
 
         /* Retorno de respuesta */
         return $obtener;
    }

    /* Funcion POST de tipo de mantenimiento */
    public function post_tipo_mantenimiento(Request $request){
        
        /* Recibir parametros */
        $datos = $request->all();

        /* Ejecutar consulta */
        $insertar = DB::insert("INSERT INTO sch_equipo.tgen_tipo_mantenimiento(definicion, usuario_modificacion)
                                                                        VALUES (?, ?);", 
                                                                    [$datos["definicion"],$datos["usuario_modificacion"]]);

        /* Retorno de respuesta */
        return ($insertar);

    }

    /* Funcion PUT de tipo de mantenimiento */
    public function put_tipo_mantenimiento(Request $request){
        
        /* Recibir parametros */
        $datos = $request->all();

        //dd($datos);

        /* Ejecutar consulta */
        $actualizar = DB::update("UPDATE sch_equipo.tgen_tipo_mantenimiento SET definicion=?, estado=?, usuario_modificacion=?, fecha_actualizacion=?
                                                                         WHERE id = ?;"
                                                                , [$datos["definicion"], $datos["estado"], $datos["usuario_modificacion"], 'now()' ,$datos["id"]]);

        /* Retorno de respuesta */
        return ($actualizar);

    }

    /* Funcion DELETE de tipo de mantenimiento */
    public function delete_tipo_mantenimiento(Request $request){
        
        /* Recibir parametros */
        $datos = $request->all();
        
        /* Ejecutar consulta */
        $borrar = DB::delete("DELETE FROM sch_equipo.tgen_tipo_mantenimiento WHERE id = ?", [$datos["id"]]);

        /* Retorno de respuesta */
        return ($borrar);

    }

}
