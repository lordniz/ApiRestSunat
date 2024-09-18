<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AgenteRet;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

/**
*
* @OA\Server(url="http://localhost/ApiRestSunat/public")
*/
class agenteretController extends Controller
{
    
    /**
     * Información de Entidad
     * @OA\Get (
     *     path="/api/agenteret/{agenteret}",
     *     tags={"RETENCION"},
     *     @OA\Parameter(
     *         in="path",
     *         name="agenteret",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *              @OA\Property(property="ruc", type="string", example="10008228774"),
     *              @OA\Property(property="nombre_razon_social", type="string", example="CELIZ CRUZ JOSE ANTONIO"),
     *              @OA\Property(property="fecha_inicio", type="string", example="15/05/2023"),
     *              @OA\Property(property="resolucion_sunat", type="string", example="RS R.S.186-2023")
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
    public function show($agenteret) {
        try {
            $entidad = AgenteRet::findOrFail($agenteret);
            return response()->json($entidad, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'RUC no encontrado'], 404);
        }
    }
}
