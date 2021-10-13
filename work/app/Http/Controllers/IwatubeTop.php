<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class IwatubeTop extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $movies = Movie::orderBy('id', 'asc')->get();
        return view('iwatube',[
            "movies" => $movies
        ]);
    }
}
