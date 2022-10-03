<?php

namespace App\Http\Controllers;

use App\Models\Confronto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ConfrontoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obj['page'] = "";
        // $obj['upd'] = ((isset($user) ? $user : []));
        // $obj['profiles'] = Profile::orderBy('name', 'asc')->get();
        // $obj['users'] = User::with('profile')->orderBy('first_name', 'asc')->get();
        $obj['breadcrumbItems']= [
            'Grupos' => "",
            'Lista' => action('\App\Http\Controllers\ConfrontoController@index', ['index'])
        ];

        $obj['grupo_a'] = Confronto::with('selecaoCasa', 'selecaoVisitante')->where(['grupo_id' => 1, 'etapa_id' => 1])->get();
        $obj['grupo_b'] = Confronto::with('selecaoCasa', 'selecaoVisitante')->where(['grupo_id' => 2, 'etapa_id' => 1])->get();
        $obj['grupo_c'] = Confronto::with('selecaoCasa', 'selecaoVisitante')->where(['grupo_id' => 3, 'etapa_id' => 1])->get();
        $obj['grupo_d'] = Confronto::with('selecaoCasa', 'selecaoVisitante')->where(['grupo_id' => 4, 'etapa_id' => 1])->get();
        $obj['grupo_e'] = Confronto::with('selecaoCasa', 'selecaoVisitante')->where(['grupo_id' => 5, 'etapa_id' => 1])->get();
        $obj['grupo_f'] = Confronto::with('selecaoCasa', 'selecaoVisitante')->where(['grupo_id' => 6, 'etapa_id' => 1])->get();
        $obj['grupo_g'] = Confronto::with('selecaoCasa', 'selecaoVisitante')->where(['grupo_id' => 7, 'etapa_id' => 1])->get();
        $obj['grupo_h'] = Confronto::with('selecaoCasa', 'selecaoVisitante')->where(['grupo_id' => 8, 'etapa_id' => 1])->get();

        $obj['oitavas'] = Confronto::with('classificado_casa.selecao', 'classificado_visitante.selecao')->where(['etapa_id' => 2])->get()->toArray();

        // echo "<pre>"; print_r($obj['oitavas']);
        // exit;

        // $obj['grupo_1a_2b'] = [
        //     "selecaoCasa" => Confronto::with('selecaoCasa', 'selecaoVisitante')->where(['grupo_id' => 1])->get(),
        //     "selecaoVisitante" => Confronto::with('selecaoVisitante')->where(['grupo_id' => 2])->get(),
        // ];
        // $obj['grupo_1c_2d'] = [
        //     "selecaoCasa" => Confronto::with('selecaoCasa', 'selecaoVisitante')->where(['grupo_id' => 3])->get(),
        //     "selecaoVisitante" => Confronto::with('selecaoVisitante')->where(['grupo_id' => 4])->get(),
        // ];
        // $obj['grupo_1e_2f'] = [
        //     "selecaoCasa" => Confronto::with('selecaoCasa', 'selecaoVisitante')->where(['grupo_id' => 5])->get(),
        //     "selecaoVisitante" => Confronto::with('selecaoVisitante')->where(['grupo_id' => 6])->get(),
        // ];
        // $obj['grupo_1g_2h'] = [
        //     "selecaoCasa" => Confronto::with('selecaoCasa', 'selecaoVisitante')->where(['grupo_id' => 7])->get(),
        //     "selecaoVisitante" => Confronto::with('selecaoVisitante')->where(['grupo_id' => 8])->get(),
        // ];
        // $obj['grupo_1b_2a'] = [
        //     "selecaoCasa" => Confronto::with('selecaoCasa', 'selecaoVisitante')->where(['grupo_id' => 2])->get(),
        //     "selecaoVisitante" => Confronto::with('selecaoVisitante')->where(['grupo_id' => 1])->get(),
        // ];
        // $obj['grupo_1d_2c'] = [
        //     "selecaoCasa" => Confronto::with('selecaoCasa', 'selecaoVisitante')->where(['grupo_id' => 4])->get(),
        //     "selecaoVisitante" => Confronto::with('selecaoVisitante')->where(['grupo_id' => 3])->get(),
        // ];
        // $obj['grupo_1f_2e'] = [
        //     "selecaoCasa" => Confronto::with('selecaoCasa', 'selecaoVisitante')->where(['grupo_id' => 6])->get(),
        //     "selecaoVisitante" => Confronto::with('selecaoVisitante')->where(['grupo_id' => 5])->get(),
        // ];
        // $obj['grupo_1h_2g'] = [
        //     "selecaoCasa" => Confronto::with('selecaoCasa', 'selecaoVisitante')->where(['grupo_id' => 8])->get()->toArray(),
        //     "selecaoVisitante" => Confronto::with('selecaoVisitante')->where(['grupo_id' => 7])->get()->toArray(),
        // ];

        // $obj['oitavas'] = Confronto::where('grupo_id', 2)->get();
        // $obj['quartas'] = Confronto::where('grupo_id', 3)->get();
        // $obj['semi'] = Confronto::where('grupo_id', 4)->get();
        // $obj['terceiro'] = Confronto::where('grupo_id', 5)->get();
        // $obj['campeao'] = Confronto::where('grupo_id', 6)->get();

        // echo "<pre>"; print_r($obj['oitavas']); exit;

        return View::make('confrontos.index')->with('obj', $obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Confronto  $confronto
     * @return \Illuminate\Http\Response
     */
    public function show(Confronto $confronto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Confronto  $confronto
     * @return \Illuminate\Http\Response
     */
    public function edit(Confronto $confronto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Confronto  $confronto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Confronto $confronto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Confronto  $confronto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Confronto $confronto)
    {
        //
    }
}
