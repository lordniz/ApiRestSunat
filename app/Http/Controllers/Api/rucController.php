<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ruc;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

/**
* @OA\Info(
*             title="API SUNAT RUC", 
*             version="1.0",
*             description="Listado de Ruc"
* )
*
* @OA\Server(url="http://localhost/ApiRestSunat/public")
*/

class rucController extends Controller
{
    // /**
    //  * Listado de todos los Ruc registrados en SUNAT
    //  * @OA\Get (
    //  *     path="/api/ruc",
    //  *     tags={"SUNAT"},
    //  *     @OA\Response(
    //  *         response=200,
    //  *         description="OK",
    //  *         @OA\JsonContent(
    //  *             @OA\Property(
    //  *                 type="array",
    //  *                 property="rows",
    //  *                 @OA\Items(
    //  *                     type="object",
    //  *                     @OA\Property(
    //  *                         property="ruc",
    //  *                         type="string",
    //  *                         example="10000000979"
    //  *                     ),
    //  *                     @OA\Property(
    //  *                         property="ubigeo",
    //  *                         type="string",
    //  *                         example="250105"
    //  *                     ),
    //  *                     @OA\Property(
    //  *                         property="tipo_via",
    //  *                         type="string",
    //  *                         example="JR."
    //  *                     ),
    //  *                     @OA\Property(
    //  *                         property="nombre_via",
    //  *                         type="string",
    //  *                         example="NUEVA LUZ DE FATIMA"
    //  *                     ),
    //  *                     @OA\Property(
    //  *                         property="codigo_zona",
    //  *                         type="string",
    //  *                         example="NULL"
    //  *                     ),
    //  *                     @OA\Property(
    //  *                         property="tipo_zona",
    //  *                         type="string",
    //  *                         example="NULL"
    //  *                     ),
    //  *                     @OA\Property(
    //  *                         property="numero",
    //  *                         type="string",
    //  *                         example="82"
    //  *                     ),
    //  *                     @OA\Property(
    //  *                         property="kilometro",
    //  *                         type="string",
    //  *                         example="NULL"
    //  *                     ),
    //  *                     @OA\Property(
    //  *                         property="interior",
    //  *                         type="string",
    //  *                         example="14"
    //  *                     ),
    //  *                     @OA\Property(
    //  *                         property="lote",
    //  *                         type="string",
    //  *                         example="NULL"
    //  *                     ),
    //  *                     @OA\Property(
    //  *                         property="departamento",
    //  *                         type="string",
    //  *                         example="NULL"
    //  *                     ),
    //  *                     @OA\Property(
    //  *                         property="manzana",
    //  *                         type="string",
    //  *                         example="NULL"
    //  *                     )
    //  *                 )
    //  *             )
    //  *         )
    //  *     )
    //  * )
    //  */
    // public function index(){
    //     $ruc = Ruc::all();
    //     if($ruc->isEmpty()){
    //         $data = [
    //             'message' => 'No se persona juridica',
    //             'status' => 404
    //         ];
    //         return response()->json($data, 404);
    //     }

    //     return response()->json($ruc, 200);
    // }

     /**
     * Información de Entidad
     * @OA\Get (
     *     path="/api/ruc/{ruc}",
     *     tags={"SUNAT"},
     *     @OA\Parameter(
     *         in="path",
     *         name="ruc",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *              @OA\Property(property="ruc", type="string", example="10000000979"),
     *              @OA\Property(property="ubigeo", type="string", example="250105"),
     *              @OA\Property(property="tipo_via", type="string", example="JR."),
     *              @OA\Property(property="nombre_via", type="string", example="NUEVA LUZ DE FATIMA"),
     *              @OA\Property(property="codigo_zona", type="string", example="NULL"),
     *              @OA\Property(property="tipo_zona", type="string", example="NULL"),
     *              @OA\Property(property="numero", type="string", example="82"),
     *              @OA\Property(property="kilometro", type="string", example="NULL"),
     *              @OA\Property(property="interior", type="string", example="12"),
     *              @OA\Property(property="lote", type="string", example="NULL"),
     *              @OA\Property(property="departamento", type="string", example="NULL"),
     *              @OA\Property(property="manzana", type="string", example="NULL")
     *         )
     *     ),
     *      @OA\Response(
     *          response=404,
     *          description="NO ENCONTRADO",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="No ubieron resultados."),
     *          )
     *      )
     * )
     */
    public function show($ruc) {
        try {
            $entidad = Ruc::findOrFail($ruc);
            return response()->json($entidad, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'RUC no encontrado'], 404);
        }
    }
}
