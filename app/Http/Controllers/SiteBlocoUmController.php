<?php

namespace Rossina\Http\Controllers;

use Rossina\Http\Requests;
use Rossina\Http\Requests\SiteBlocoUmRequest;
use Rossina\SiteBlocoUm;

class SiteBlocoUmController extends Controller
{
    private $blocoumModel;

    public function __construct(SiteBlocoUm $blocoumModel )
    {
        $this->blocoumModel = $blocoumModel;

    }

    public function index()
    {
        $blocoumModel = $this->blocoumModel->all();

        return view('painel.adm.blocoum.blocoum', compact('blocoumModel'));
    }

    public function create()
    {
        return view('painel.adm.blocoum.create');
    }

    public function store(SiteBlocoUmRequest $request)
    {
        $input = $request->all();

        $blocoumModel = $this->blocoumModel->fill($input);

        $blocoumModel->save();

        return redirect()->route('blocoum');
    }

    public function edit($id)
    {
        $blocoumModel = $this->blocoumModel->find($id);

        return view('painel.adm.blocoum.edit', compact('blocoumModel'));
    }

    public function update(SiteBlocoUmRequest $request, $id)
    {
        $this->blocoumModel->find($id)->update($request->all());

        return redirect()->route('blocoum');
    }

    public function destroy($id)
    {
        $blocoumModel = $this->blocoumModel->find($id)->delete();

        return redirect()->route('blocoum');
    }
}
