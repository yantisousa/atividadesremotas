<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\Atividades;
use App\Models\Disciplines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AtividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $disciplinasID = Disciplines::find($id);
        $idProfessor = Auth::user()->id;
        $atividades = Activities::where('teacher_id', $idProfessor)->where('discipline_id', $id)->get();
        return view('atividades.index', compact('atividades', 'disciplinasID'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $disciplinasID = $id;
        return view('atividades.create', compact('disciplinasID'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->filepath = $request->filepath->store('produtos', 'public');
        $idProfessor = Auth::user()->id;
        Activities::create([
            'teacher_id' => $idProfessor,
            'discipline_id' => $id,
            'name' => $request->name,
            'filepath' => $request->filepath,
            'description' => $request->description,
        ]);
        return redirect()->route('atividades.index', compact('id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atividadeID = Activities::find($id);
        return $atividadeID;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        dd($file = $request->file('file'));
        $dados = Activities::find($request->id);
        $testando = explode("/", $request->filepath);
        dd($testando);
        $teste = $request->filepath->store('produtos', 'public');
        $dados->update([
            'name' => $request->name,
            'filepath' => $teste,
            'description' => $request->description,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
