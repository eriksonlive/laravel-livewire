<?php

namespace App\Http\Controllers;

class LayoutController extends Controller
{
    public function renderLayout(string $view, array $data = [])
    {
        $header = $data['header'] ?? 'layouts.header.head';
        $sidebar = $data['sidebar'] ?? 'layouts.sidebar.side';
        $footer = $data['footer'] ?? 'layouts.footer.foot';

        return view('layouts.app', [
            'slot' => view($view, $data)->render(),
            'header' => $header,
            'sidebar' => $sidebar,
            'footer' => $footer,
            'menu' => $this->sideMenu()
        ]);
    }

    public function sideMenu()
    {

        return config('menu');
    }
}
