<?php

namespace Rossina\Http\Controllers;

use Illuminate\Http\Request;
use Rossina\Http\Requests;

class PainelController extends Controller
{

    public function index()
    {
        return view('painel.pages.index');
    }

    public function forms()
    {
        return view('painel.pages.forms');
    }

    public function blank()
    {
        return view('painel.pages.blank');
    }

    public function buttons()
    {
        return view('painel.pages.buttons');
    }

    public function flot()
    {
        return view('painel.pages.flot');
    }

    public function grid()
    {
        return view('painel.pages.grid');
    }

    public function icons()
    {
        return view('painel.pages.icons');
    }

    public function login()
    {
        return view('painel.pages.login');
    }

    public function morris()
    {
        return view('painel.pages.morris');
    }

    public function notifications()
    {
        return view('painel.pages.notifications');
    }

    public function panels()
    {
        return view('painel.pages.panels');
    }

    public function tables()
    {
        return view('painel.pages.tables');
    }

    public function typography()
    {
        return view('painel.pages.typography');
    }
}
