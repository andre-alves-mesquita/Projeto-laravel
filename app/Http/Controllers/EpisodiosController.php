<?php

namespace App\Http\Controllers;

use App\Models\Temporada;

use Illuminate\Http\Request;

class EpisodiosController extends Controller
{
    public function index(Temporada $temporada)
    {

        $episodios = $temporada->episodios;
        $temporadaId = $temporada->id;

        return view('episodios.index', [
            'episodios' => $temporada->episodios,
            'temporadaId'  => $temporada->id
        ]);
    }

    public function assistir(Temporada $temporada, Request $request)
    {
        var_dump($request->episodios);
    }
}
