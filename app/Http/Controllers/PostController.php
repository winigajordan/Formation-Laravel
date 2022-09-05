<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $title = "jordan is the best";
        $title2 = "Call me jord";
        $liste = ["jordan is the best",  "Call me jord"];
        //return view('articles')->with(['titre'=>$title, 'titre2'=>$title2]);
        //return view('articles', compact('liste'));
        return view('articles', [
            'liste' => $liste
        ]);
    }

    public function show($id){
        $posts = [
            1=>'mon titre 1',
            2=>'mon titre 2',
            3=>'mon titre 3',
        ];
        $post = $posts[$id] ?? 'pas de titre ';
        return view('article', ['article'=>$post]);
    }

    public function contact(){
        return view('contact');
    }
}
