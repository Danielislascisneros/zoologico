<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class principalController extends Controller
{
    public function __invoke() {

        echo '<center><h1>zoologico</h1></center>';
        echo '<center><a href="http://127.0.0.1:8000/mascotas/raton"> <h2> raton</h2> </a></center> ';
        echo '<center><a href="http://127.0.0.1:8000/mascotas/gato"> <h2> gato </h2> </a> </center>';
        echo '<center><a href="http://127.0.0.1:8000/mascotas/chivo"> <h2> chivo </h2> </a> </center>';
    }

}
