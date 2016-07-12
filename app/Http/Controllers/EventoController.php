<?php

namespace App\Http\Controllers;

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
        $tipoEvento = DB::table('tipo-evt')->select('nome', 'id')->get();
       // dd($tipoEvento);
        return view('eventos', compact('tipoEvento'));
    }

    public  function postnewevento(Request $request)
    {
        return dd($request);
    }
}
