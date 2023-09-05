<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $nuevoPost = new Post();
        $nuevoPost->nombre = $request->nombre;
        $nuevoPost->documento = $request->documento;
        $nuevoPost->save();
        return view("/exito");
    }
}
