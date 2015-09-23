<?php

namespace Rossina\Http\Controllers;

use Rossina\FerramentasBloco;
use Rossina\Http\Requests;
use Rossina\Menu;
use Rossina\SiteBlocoUm;
use Rossina\Slide;
use Rossina\TituloBloco;

class SiteRossinaController extends Controller
{
    private $modelSlide;
    private $modelMenu;
    private $blocoumModel;
    private $tituloBloco;
    private $ferModel;

    public function __construct(Slide $modelSlide, Menu $modelMenu, SiteBlocoUm $blocoumModel, TituloBloco $tituloBloco,
                                FerramentasBloco $ferModel)
    {
        $this->modelSlide = $modelSlide;
        $this->modelMenu = $modelMenu;
        $this->blocoumModel = $blocoumModel;
        $this->tituloBloco = $tituloBloco;
        $this->ferModel = $ferModel;
    }

    public function index()
    {
        $modelSlide   = $this->modelSlide->all();
        $modelMenu    = $this->modelMenu->all();
        $blocoumModel = $this->blocoumModel->all();
        $tituloBloco = $this->tituloBloco->all();
        $ferModel = $this->ferModel->all();

        return view('rossina.site.index', compact('modelSlide', 'modelMenu', 'blocoumModel', 'tituloBloco', 'ferModel'));
    }

    public function loja()
    {
        $modelMenu    = $this->modelMenu->all();

        return view('rossina.loja.loja', compact('modelMenu'));
    }

    public function estamparia()
    {
        $modelMenu    = $this->modelMenu->all();

        return view('rossina.estamparia.estamparia_digital', compact('modelMenu'));
    }

    public function camisetas()
    {
        $modelMenu    = $this->modelMenu->all();

        return view('rossina.camisetas.camiseta', compact('modelMenu'));
    }

    public function tecidos()
    {
        $modelMenu    = $this->modelMenu->all();

        return view('rossina.tecidos.tecidos_digital', compact('modelMenu'));
    }

    public function sobre()
    {
        $modelMenu    = $this->modelMenu->all();

        return view('rossina.sobre.sobre', compact('modelMenu'));
    }

    public function blog()
    {
        $modelMenu    = $this->modelMenu->all();

        return view('rossina.blog.blog', compact('modelMenu'));
    }

    public function contatos()
    {
        $modelMenu    = $this->modelMenu->all();

        return view('rossina.contatos.contatos', compact('modelMenu'));
    }

    public function faqs()
    {
        $modelMenu    = $this->modelMenu->all();

        return view('rossina.faqs.faqs', compact('modelMenu'));
    }

    public function compras()
    {
        $modelMenu    = $this->modelMenu->all();

        return view('rossina.loja.loja_compras', compact('modelMenu'));
    }

    public function checkout()
    {
        $modelMenu    = $this->modelMenu->all();

        return view('rossina.loja.loja_checkout_page', compact('modelMenu'));
    }

    public function registrar()
    {
        $modelMenu    = $this->modelMenu->all();

        return view('rossina.registrar.registrar', compact('modelMenu'));
    }

    public function login()
    {
        $modelMenu    = $this->modelMenu->all();

        return view('rossina.login.login', compact('modelMenu'));
    }

    public function username()
    {
        $modelMenu    = $this->modelMenu->all();

        return view('rossina.login.username', compact('modelMenu'));
    }

    public function password()
    {
        $modelMenu    = $this->modelMenu->all();

        return view('rossina.login.password', compact('modelMenu'));
    }

    public function detalhe()
    {
        $modelMenu    = $this->modelMenu->all();

        return view('rossina.loja.produto_detalhe', compact('modelMenu'));
    }
}

