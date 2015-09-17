<?php

namespace Rossina\Http\Controllers;

use Rossina\Http\Requests;
use Rossina\Http\Requests\MenuRequest;
use Rossina\Menu;

class MenuController extends Controller
{

    private $menuModel;

    public function __construct(Menu $menuModel)
    {
        $this->menuModel = $menuModel;
    }

    public function index()
    {
        $menuModel = $this->menuModel->all();

        return view('painel.adm.menu.menu', compact('menuModel'));
    }

    public function create()
    {
        return view('painel.adm.menu.create');
    }

    public function store(MenuRequest $request)
    {
        $input = $request->all();

        $menuModel = $this->menuModel->fill($input);

        $menuModel->save();

        return redirect()->route('menu');
    }

    public function edit($id)
    {
        $menuModel = $this->menuModel->find($id);

        return view('painel.adm.menu.edit', compact('menuModel'));
    }

    public function update(MenuRequest $request, $id)
    {
        $this->menuModel->find($id)->update($request->all());

        return redirect()->route('menu');
    }

    public function destroy($id)
    {
        $menu = $this->menuModel->find($id)->delete();

        return redirect()->route('menu');
    }
}
