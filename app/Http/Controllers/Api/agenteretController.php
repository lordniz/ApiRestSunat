<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AgenteRet;
use Illuminate\Http\Request;

class agenteretController extends Controller
{
    public function index(){
        $agente_ret = AgenteRet::all();
        if($agente_ret->isEmpty()){
            $data = [
                'message' => 'No se encontraron estudiantes',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        return response()->json($agente_ret, 200);
    }

    public function show(AgenteRet $agente_ret) {
        if($agente_ret->isEmpty()){
            $data = [
                'message' => 'No se encontraron estudiantes',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        return response()->json($agente_ret, 200);
    }
}
