<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = [];
        for($i = 1; $i <= 5; $i++)
            $posts[$i] = [
                "titulo" => " Post #$i",
                "texto" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur ornare lectus.
                            Sed eu vehicula leo. Praesent efficitur ornare lectus, ut faucibus libero pharetra id.
                            Fusce ullamcorper iaculis purus mollis maximus."
                ];
      return view('home.index', compact('posts'));
    }
}
