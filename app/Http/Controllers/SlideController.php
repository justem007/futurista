<?php

namespace Rossina\Http\Controllers;

use Rossina\Http\Requests;
use Rossina\Http\Requests\SlideRequest;
use Rossina\Slide;

class SlideController extends Controller
{
    private $slideModel;

    public function __construct(Slide $slideModel)
    {
         $this->slideModel = $slideModel;
    }

    public function index()
    {
        $slideModel = $this->slideModel->all();

        return view('painel.adm.slide.slide', compact('slideModel'));
    }

    public function create()
    {
        return view('painel.adm.slide.create');
    }

    public function store(SlideRequest $request)
    {
        $input = $request->all();

        $slideModel = $this->slideModel->fill($input);

        $slideModel->save();

        return redirect()->route('slide');
    }

    public function edit($id)
    {
        $slides = $this->slideModel->find($id);

        return view('painel.adm.slide.edit', compact('slides'));
    }

    public function update(SlideRequest $request, $id)
    {
        $this->slideModel->find($id)->update($request->all());

        return redirect()->route('slide');
    }

    public function destroy($id)
    {
        $slide = $this->slideModel->find($id)->delete();

        return redirect()->route('slide');
    }
}
