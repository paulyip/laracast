<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $name = 'Paul Yip <span style="color: red;">123</span>';
        $first = 'Paul';
        $last = 'Yip';

        $people =
            [
                'Taylor Otwell', 'Dayle Rees', 'Eric Barnes'
            ];
        $people = [];

        return view('pages.about', compact('first', 'last', 'people'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
