<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $layout = new LayoutController();

        return $layout->renderLayout('pages.administration.admin');
    }
}
