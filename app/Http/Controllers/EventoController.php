<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Models\TipoEvento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class EventoController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $eventos = Evento::all();



        return view('eventos', compact('eventos'));
    }

    public  function postnewevento(Request $request)
    {
        $evt = new Evento();
        $evt->tipoevento = $request->tipoevt;
        $evt->nome = $request->nomeevento;
        $evt->local  =   $request->localevento;
        $evt->diahora  =   $request->dataevento." ".$request->horarioevento;
        $evt->limite  =   $request->maxpart;
        $evt->valor  =   $request->valor;


        return dd($evt->save());
    }

    public  function getnewevento()
    {
        $tipoEvento = DB::table('tipo-evt')->select('nome', 'id')->get();
        return view('forms.addeventos', compact('tipoEvento'));
    }

}
