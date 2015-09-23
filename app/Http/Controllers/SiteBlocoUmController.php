<?php

namespace Rossina\Http\Controllers;

use Rossina\FerramentasBloco;
use Rossina\Http\Requests;
use Rossina\Http\Requests\SiteBlocoUmRequest;
use Rossina\Http\Requests\TituloBlocoRequest;
use Rossina\Http\Requests\FerramentasBlocoRequest;
use Rossina\SiteBlocoUm;
use Rossina\TituloBloco;

class SiteBlocoUmController extends Controller
{
    private $blocoumModel;
    private $tituloBloco;
    private $ferModel;

    public function __construct(SiteBlocoUm $blocoumModel, TituloBloco $tituloBloco, FerramentasBloco $ferModel )
    {
        $this->blocoumModel = $blocoumModel;
        $this->tituloBloco = $tituloBloco;
        $this->ferModel = $ferModel;

    }

    public function index()
    {
        $blocoumModel = $this->blocoumModel->all();
        $tituloBloco = $this->tituloBloco->all();
        $ferModel = $this->ferModel->all();

        return view('painel.adm.blocoum.blocoum', compact('blocoumModel', 'tituloBloco', 'ferModel'));
    }

    public function create()
    {
        return view('painel.adm.blocoum.create');
    }

    public function createTitulo()
    {
        return view('painel.adm.blocoum.createtitulo');
    }

    public function createFerramenta()
    {
        return view('painel.adm.blocoum.createferramenta');
    }

    public function store(SiteBlocoUmRequest $request)
    {
        $input = $request->all();

        $blocoumModel = $this->blocoumModel->fill($input);

        $blocoumModel->save();

        return redirect()->route('blocoum');
    }

    public function storeTitulo(TituloBlocoRequest $request)
    {
        $input = $request->all();

        $tituloBloco = $this->tituloBloco->fill($input);

        $tituloBloco->save();

        return redirect()->route('blocoum');
    }

    public function storeFerramenta(FerramentasBlocoRequest $request)
    {
        $input = $request->all();

        $ferModel = $this->ferModel->fill($input);

        $ferModel->save();

        return redirect()->route('blocoum');
    }

    public function edit($id)
    {
        $blocoumModel = $this->blocoumModel->find($id);

        return view('painel.adm.blocoum.edit', compact('blocoumModel'));
    }

    public function editTitulo($id)
    {
        $tituloBloco = $this->tituloBloco->find($id);

        return view('painel.adm.blocoum.edittitulo', compact('tituloBloco'));
    }

    public function editFerramenta($id)
    {
        $ferModel = $this->ferModel->find($id);

        return view('painel.adm.blocoum.editferramenta', compact('ferModel'));
    }

    public function update(SiteBlocoUmRequest $request, $id)
    {
        $this->blocoumModel->find($id)->update($request->all());

        return redirect()->route('blocoum');
    }

    public function updateTitulo(TituloBlocoRequest $request, $id)
    {
        $this->tituloBloco->find($id)->update($request->all());

        return redirect()->route('blocoum');
    }

    public function updateFerramenta(FerramentasBlocoRequest $request, $id)
    {
        $this->ferModel->find($id)->update($request->all());

        return redirect()->route('blocoum');
    }

    public function destroy($id)
    {
        $blocoumModel = $this->blocoumModel->find($id)->delete();

        return redirect()->route('blocoum');
    }

    public function destroyTitulo($id)
    {
        $tituloBloco = $this->tituloBloco->find($id)->delete();

        return redirect()->route('blocoum');
    }

    public function destroyFerramenta($id)
    {
        $ferModel = $this->ferModel->find($id)->delete();

        return redirect()->route('blocoum');
    }
}
