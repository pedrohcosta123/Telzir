<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class InterurbanoController extends Controller
{
    function origem(){

        $dados = \App\Origem::all();         
        return view('interurbano.index',compact('dados'));
    }

    function destino(Request $request){ 
       
        $dados = DB::table('tarifa')
                    ->join('destino','tarifa.destino_id','=','destino.id')
                    ->select('tarifa.id','destino.DDD','tarifa.preco')
                    ->where("tarifa.origem_id","=",$request->id)
                    ->get()->toArray();  
                    
                    // dd($dados);
        return view('interurbano.destino',compact('dados'));
    }

    function calcular(Request $request){
        
        if($request->plano == '1'){
        
           $horas = explode(":",$request->minutos);
           $horas[0] = intval($horas[0]);
           $horas[1] = intval($horas[1]); 
           $minutos = $horas[0] * 60;
           $tlminutos = $minutos+$horas[1];

           if($tlminutos < 31){
               $preco = 0;
               $dados['complano'] = $preco;
               $tarifa = \App\Tarifa::find($request->id_tarifa);
               $semplano = $tarifa->preco;
               $dados['semplano'] = $tlminutos * $tarifa->preco;
            return view('interurbano.resultado',compact('dados'));
           }

           else{

                $tarifa = \App\Tarifa::find($request->id_tarifa);
                $semplano = $tlminutos * floatval($tarifa->preco);
                $tlminutos = $tlminutos - 30;
                $tarifa->preco = floatval($tarifa->preco);
                $complano = $tarifa->preco * 1.1;
                $preco = $tlminutos * $complano;
                $dados['complano'] = $preco;
                $dados['semplano'] = $semplano;
                return view('interurbano.resultado',compact('dados'));                
           }
        }
        if($request->plano == '2'){
        
            $horas = explode(":",$request->minutos);
           $horas[0] = intval($horas[0]);
           $horas[1] = intval($horas[1]); 
           $minutos = $horas[0] * 60;
           $tlminutos = $minutos+$horas[1];

           if($tlminutos < 61){
               $preco = 0;
               $dados['complano'] = $preco;
               $tarifa = \App\Tarifa::find($request->id_tarifa);
               $semplano = $tarifa->preco;
               $dados['semplano'] = $tlminutos * $tarifa->preco;
            return view('interurbano.resultado',compact('dados'));
           }

           else{

                $tarifa = \App\Tarifa::find($request->id_tarifa);
                $semplano = $tlminutos * floatval($tarifa->preco);
                $tlminutos = $tlminutos - 60;
                $tarifa->preco = floatval($tarifa->preco);
                $complano = $tarifa->preco * 1.1;
                $preco = $tlminutos * $complano;
                $dados['complano'] = $preco;
                $dados['semplano'] = $semplano;
                return view('interurbano.resultado',compact('dados'));                
           }
        }
        if($request->plano == '3'){
        
            $horas = explode(":",$request->minutos);
           $horas[0] = intval($horas[0]);
           $horas[1] = intval($horas[1]); 
           $minutos = $horas[0] * 60;
           $tlminutos = $minutos+$horas[1];
        //    dd($lminutos);

           if($tlminutos < 121){
               $preco = 0;
               $dados['complano'] = $preco;
               $tarifa = \App\Tarifa::find($request->id_tarifa);
               $semplano = $tarifa->preco;
               $dados['semplano'] = $tlminutos * $tarifa->preco;
            return view('interurbano.resultado',compact('dados'));
           }

           else{

                $tarifa = \App\Tarifa::find($request->id_tarifa);
                $semplano = $tlminutos * floatval($tarifa->preco);
                $tlminutos = $tlminutos - 120;
                $tarifa->preco = floatval($tarifa->preco);
                $complano = $tarifa->preco * 1.1;
                $preco = $tlminutos * $complano;
                $dados['complano'] = $preco;
                $dados['semplano'] = $semplano;
                return view('interurbano.resultado',compact('dados'));                
           }
        }         
    }
}
