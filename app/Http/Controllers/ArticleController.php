<?php

namespace App\Http\Controllers;

use App\Article;
use App\Auteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        $title = null;
        $title2 = "Tous les articles";
        return view('layouts.article.index', compact('articles','title','title2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.article.add', ['auteurs'=>Auteur::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre'=>'bail|required|string',
            'type'=>'bail|required|string',
            'annee_publication'=>'bail|numeric',
            'url'=>'bail|required|string',
            'source'=>'bail|required|string',
            'auteurs'=>'array|nullable',
        ]);
        $article = Article::create([
            'titre'=>$request['titre'],
            'type'=>$request['type'],
            'source'=>$request['source'],
            'annee_publication'=>$request['annee_publication'],
            'url'=>$request['url'],
        ]);
        foreach ($request['auteurs'] as $auteur_id) {
            $article_auteur = DB::select('select * from auteur_article where auteur_id = ? && article_id = ?', [$auteur_id,$article->id]);
            if (count($article_auteur) == 0) {
                if ($auteur_id!=0) {
                    DB::insert('insert into auteur_article (auteur_id, article_id) values (?, ?)', [$auteur_id, $article->id]);
                }
            }
        }

        return redirect()->route('home');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('layouts.article.modify', ['auteurs'=>Auteur::all(), 'article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'titre'=>'nullable|string',
            'genre'=>'nullable|string|max:255',
            'annee_publication'=>'nullable|numeric',
            'url'=>'nullable|string|max:255',
        ]);
        if ($request->has('titre')) {
            $article->titre = $request['titre'];
        }
        if ($request->has('genre')) {
            $article->genre = $request['genre'];
        }
        if ($request->has('annee_publication')) {
            $article->annee_publication = $request['annee_publication'];
        }
        if ($request->has('url')) {
            $article->url = $request['url'];
        }

        foreach ($request['auteurs'] as $auteur_id) {
            $article_auteur = DB::select('select * from auteur_article where auteur_id = ? && article_id = ?', [$auteur_id,$article->id]);
            if (count($article_auteur) == 0) {
                if ($auteur_id!=0) {
                    DB::insert('insert into auteur_article (auteur_id, article_id) values (?, ?)', [$auteur_id, $article->id]);
                }
            }
        }

        $article->save();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('home');
    }
}
