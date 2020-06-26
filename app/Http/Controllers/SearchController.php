<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getResult(Request $request)
    {
        $articles = [];
        if ($request->has('term') && $request['term']) {
            $term = $request['term'];
            $articles = Article::where('titre', 'LIKE', "%{$term}%")
                            ->orWhere('type', 'LIKE', "%{$term}%")
                            ->orWhere('url', 'LIKE', "%{$term}%")
                            ->orWhere('auteurs', 'LIKE', "%{$term}%")
                            ->paginate(15);
            return view('search-result',['articles'=>$articles, 'title'=>"Liste d'articles", 'term'=>$term, 'title2'=>"Liste d'articles"]);
        }else{
        }

        if ($request->has('titre') && $request['titre']) {
            $titre = $request['titre'];
        }else{
            // return "kkk";
        }

        if ($request->has('auteur') && $request['auteur']) {
            $auteur = $request['auteur'];
            return "kkk";
        }else{
        }

        if ($request->has('laboratoire') && $request['laboratoire']) {
            $laboratoire = $request['laboratoire'];
            return "kkk";
        }else{
        }

        if ($request->has('equipe') && $request['equipe']) {
            $equipe = $request['equipe'];
            return "kkk";
        }else{
        }

        if ($request->has('etablissement') && $request['etablissement']) {
            $etablissement = $request['etablissement'];
            return "kkk";
        }else{
        }

        if (count($articles) > 0) {
            return "eee";
        }else{
            return redirect()->back();
        }

        // return $data;
        // Get articles and return them
        // $articles = Article::where('titre', 'LIKE', "%{$data}%")
        //                     ->orWhere('genre', 'LIKE', "%{$data}%")
        //                     ->orWhere('date_publication', 'LIKE', "%{$data}%")
        //                     ->orWhere('url', 'LIKE', "%{$data}%")
        //                     ->get();
        // return view('search-result',['articles'=>$articles]);
        // return $articles;
    }
}
