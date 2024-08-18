<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ruc;
use Illuminate\Http\Request;

class rucController extends Controller
{
    //
    public function index(){
        $ruc = Ruc::all();
        if($ruc->isEmpty()){
            $data = [
                'message' => 'No se encontraron estudiantes',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        return response()->json($ruc, 200);
    }
}
