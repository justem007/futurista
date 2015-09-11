<?php

namespace Rossina\Http\Controllers;

use Illuminate\Http\Request;
use Rossina\Categorias;
use Rossina\Http\Requests;
use Rossina\Http\Requests\CategoriasRequest;

class CategoriasController extends Controller
{
    private $categoriaModel;

    public function __construct(Categorias $categoriaModel)
    {
        $this->categoriaModel = $categoriaModel;
    }

    public function index()
    {
        $categoriaModel = $this->categoriaModel->all();

        return view('painel.adm.categoria.categoria', compact('categoriaModel'));
    }

    public function create()
    {
        return view('painel.adm.categoria.create');
    }

    public function store(CategoriasRequest $request)
    {
        $input = $request->all();

        $categoriaModel = $this->categoriaModel->fill($input);

        $categoriaModel->save();

        return redirect()->route('categorias');
    }

    public function edit($id)
    {
        $categoriaModel = $this->categoriaModel->find($id);

        return view('painel.adm.categoria.edit', compact('categoriaModel'));
    }

    public function update(CategoriasRequest $request, $id)
    {
        $this->categoriaModel->find($id)->update($request->all());

        return redirect()->route('categorias');
    }

    public function destroy($id)
    {
        $categorias = $this->categoriaModel->find($id)->delete();

        return redirect()->route('categorias');
    }
}
