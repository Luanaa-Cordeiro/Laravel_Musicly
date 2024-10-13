<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Musica; 

class MusicaController extends Controller
{
    public readonly Musica $musica;

    public function __construct(){
        $this->musica = new Musica();
    }

    public function index()
    {

        $musicas = Musica::with(['artista', 'album', 'genero'])
        ->select('id', 'nome', 'id_artista', 'id_album', 'id_genero')
        ->get()
        ->map(function ($musica) {
            return [
                'id' => $musica->id,
                'nome' => $musica->nome,
                'Artista' => $musica->artista->nome ?? 'N/A',
                'Álbum' => $musica->album->nome ?? 'N/A',
                'Gênero' => $musica->genero->nome ?? 'N/A',
            ];
        });

        $musica = $this->musica->all();
        return view('musicas', ['musicas' => $musica]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
