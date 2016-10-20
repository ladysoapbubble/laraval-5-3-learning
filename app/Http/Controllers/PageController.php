<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function about() {
        $data = [
            'name' => 'Helen',
            'lastname' => 'Fuente'
        ];
        return view('pages.about', $data);
    }

    public function contact() {
        return view('pages.contact');
    }
}
