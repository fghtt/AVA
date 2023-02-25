<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke()
    {
        return view('index');
    }
}
