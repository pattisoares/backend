<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recado;

class RecadoController extends Controller
{
    // LISTAR recados do usuário logado
    public function index()
    {
        return auth()->user()->recados;
    }

    // CRIAR recado
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'texto'  => 'required|string',
        ]);

        return auth()->user()->recados()->create([
            'titulo' => $request->titulo,
            'texto' => $request->texto,
        ]);
    }

    // DELETAR recado
    public function destroy($id)
    {
        $recado = Recado::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $recado->delete();

        return response()->json([
            'message' => 'Recado deletado com sucesso'
        ], 204);
    }
}