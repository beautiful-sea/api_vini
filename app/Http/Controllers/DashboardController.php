<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $atividades = auth()->user()->atividades();

        $integralizadas = $atividades->sum('carga_horaria_integraliza');
        $submetidas = $atividades->get();
        $aguardando_validacao = $atividades->where('status','em_validacao')->get();
        $recusadas = $atividades->where('status','recusado')->get();

        return response()->json([
           'horas_integralizadas' =>$integralizadas,
            'submetidas'    =>  $submetidas,
            'aguardando_validacao'  =>  $aguardando_validacao,
            'recusadas' =>  $recusadas
        ]);
    }
}
