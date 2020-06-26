@extends('layouts.app')

@section('title')
    Modifier un article
@endsection

@section('links')
<link rel="stylesheet" href="{{ asset('css/add-article.css') }}">

@endsection

@section('main')
   <div class="container">
        <div class="create">
            <form action="{{ route('articles.update', ['article'=>$article->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row title">
                    <div class="principal-title">
                        <span>Modifier un article</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                         <div class="title">
                             <span>Titre</span>
                         </div>
                         <div class="value">
                             <textarea name="titre"  required placeholder="Titre" >{{ $article->titre }}</textarea>
                         </div>
                    </div>
                    <div class="col">
                         <div class="title">
                             <span>Année de publication</span>
                         </div>
                         <div class="value">
                             <input type="number" name="annee_publication" min="0" value="{{ $article->annee_publication }}">
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                         <div class="title">
                             <span>Genre</span>
                         </div>
                         <div class="value">
                            <select name="genre">
                                <option value="journal" @if ($article->genre == 'journal')
                                    checked
                                @endif>Journal</option>
                                <option value="conference" @if ($article->genre == 'conference')
                                    checked
                                @endif>Conference</option>
                            </select>
                         </div>
                   </div>
                   <div class="col">
                        <div class="title">
                            <span>Url</span>
                        </div>
                        <div class="value">
                           <input type="text" name="url"  placeholder="Url" value="{{ $article->url }}">
                        </div>
                  </div>
                </div>
                <div class="row">
                   <div class="col">
                        <div class="title">
                            <span>Auteurs</span>
                        </div>
                        <div class="value">
                            <select name="auteurs[]" multiple  class="multiple">
                                <option value="0">Nothing</option>
                                @foreach ($auteurs as $auteur)
                                    <option value="{{ $auteur->id }}">{{ $auteur->nom }} {{ $auteur->prenom }}</option>
                                @endforeach
                            </select>
                        </div>
                  </div>
               </div>

                <div class="row actions">
                    <button type="submit">
                        <span>Modifier article</span>
                    </button>
                </div>
            </form>
        </div>
   </div>
@endsection

@section('scripts')
@endsection

