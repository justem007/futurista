<?php

namespace Rossina\Http\Controllers;

use Rossina\Http\Requests;
use Rossina\Slide;

class SiteRossinaController extends Controller
{
    private $slideModel;

    public function __construct(Slide $slideModel)
    {
        $this->slideModel = $slideModel;
    }

    public function index()
    {
        $slides = $this->slideModel->all();

        return view('rossina.site.index', compact('slides'));
    }

    public function loja()
    {
        return view('rossina.loja.loja');
    }

    public function estamparia()
    {
        return view('rossina.estamparia.estamparia_digital');
    }

    public function camisetas()
    {
        return view('rossina.camisetas.camiseta');
    }

    public function tecidos()
    {
        return view('rossina.tecidos.tecidos_digital');
    }

    public function sobre()
    {
        return view('rossina.sobre.sobre');
    }

    public function blog()
    {
        return view('rossina.blog.blog');
    }

    public function contatos()
    {
        return view('rossina.contatos.contatos');
    }

    public function faqs()
    {
        return view('rossina.faqs.faqs');
    }

    public function compras()
    {
        return view('rossina.loja.loja_compras');
    }

    public function checkout()
    {
        return view('rossina.loja.loja_checkout_page');
    }

    public function registrar()
    {
        return view('rossina.registrar.registrar');
    }

    public function login()
    {
        return view('rossina.login.login');
    }

    public function username()
    {
        return view('rossina.login.username');
    }

    public function password()
    {
        return view('rossina.login.password');
    }

    public function detalhe()
    {
        return view('rossina.loja.produto_detalhe');
    }
}

