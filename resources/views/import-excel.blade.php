@extends('layouts.app')

@section('title')
    Importer
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/add-article.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
    <style>
        .end{
            margin-bottom: 2rem !important;
        }
    </style>
@endsection

@section('main')
    @include('layouts.navigation')
   <div class="container">
        <div class="create">
            <form action="{{ route('articles.store_csv') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row title">
                    <h3>Importer des articles à partir d'excel</h3>
                </div>
                 <div class="row">
                   <div class="col">
                        <div class="title">
                            <span>Données</span>
                        </div>
                        <div class="value">
                           <input type="file" name="file_csv" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="title">
                            <span>Format des données(Doit contenir)</span>
                        </div>
                        <div class="value format-title">
                            <span>titre</span>
                            <span>source</span>
                            <span>type</span>
                            <span>annee_publication</span>
                            <span>url</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="value error">
                            <span>{{ $errors->first('file_csv')}}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                         <div class="value check">
                            <input type="checkbox" name="header" checked id="header-check" required>
                            <label for="header-check">
                                File contains header row?
                            </label>
                         </div>
                     </div>
                 </div>


                <div class="row actions">
                    <button type="submit">
                        <span>Importer</span>
                    </button>
                </div>
            </form>
        </div>
   </div>
   <div class="container">
        <div class="create">
            <form action="{{ route('auteurs.store_csv') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row title">
                    <h3>Importer des auteurs à partir d'excel</h3>
                </div>
                <div class="row">
                <div class="col">
                        <div class="title">
                            <span>Données</span>
                        </div>
                        <div class="value">
                        <input type="file" name="file_csv" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="title">
                            <span>Format des données(Doit contenir)</span>
                        </div>
                        <div class="value format-title">
                            <span>etablissement_id</span>
                            <span>nom</span>
                            <span>prenom</span>
                            <span>som</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="value error">
                            <span>{{ $errors->first('file_csv')}}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="value check">
                            <input type="checkbox" name="header" checked id="header-check" required>
                            <label for="header-check">
                                File contains header row?
                            </label>
                        </div>
                    </div>
                </div>


                <div class="row actions">
                    <button type="submit">
                        <span>Importer</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="create">
             <form action="{{ route('etablissements.store_csv') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="row title">
                     <h3>Importer des établissements à partir d'excel</h3>
                 </div>
                 <div class="row">
                 <div class="col">
                         <div class="title">
                             <span>Données</span>
                         </div>
                         <div class="value">
                         <input type="file" name="file_csv" required>
                         </div>
                     </div>
                     <div class="col">
                         <div class="title">
                             <span>Format des données(Doit contenir)</span>
                         </div>
                         <div class="value format-title">
                             <span>intitule</span>
                             <span>adresse</span>
                             <span>url</span>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col">
                         <div class="value error">
                             <span>{{ $errors->first('file_csv')}}</span>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col">
                         <div class="value check">
                             <input type="checkbox" name="header" checked id="header-check" required>
                             <label for="header-check">
                                 File contains header row?
                             </label>
                         </div>
                     </div>
                 </div>


                 <div class="row actions">
                     <button type="submit">
                         <span>Importer</span>
                     </button>
                 </div>
             </form>
         </div>
    </div>

    <div class="container">
        <div class="create">
             <form action="{{ route('laboratoires.store_csv') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="row title">
                     <h3>Importer des laboratoires à partir d'excel</h3>
                 </div>
                 <div class="row">
                 <div class="col">
                         <div class="title">
                             <span>Données</span>
                         </div>
                         <div class="value">
                         <input type="file" name="file_csv" required>
                         </div>
                     </div>
                     <div class="col">
                         <div class="title">
                             <span>Format des données(Doit contenir)</span>
                         </div>
                         <div class="value format-title">
                             <span>etablissement_id</span>
                             <span>directeur_labo(id)</span>
                             <span>nom_laboratoire</span>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col">
                         <div class="value error">
                             <span>{{ $errors->first('file_csv')}}</span>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col">
                         <div class="value check">
                             <input type="checkbox" name="header" checked id="header-check" required>
                             <label for="header-check">
                                 File contains header row?
                             </label>
                         </div>
                     </div>
                 </div>


                 <div class="row actions">
                     <button type="submit">
                         <span>Importer</span>
                     </button>
                 </div>
             </form>
         </div>
    </div>
    <div class="container end">
        <div class="create">
             <form action="{{ route('equipes.store_csv') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="row title">
                     <h3>Importer des equipes à partir d'excel</h3>
                 </div>
                 <div class="row">
                 <div class="col">
                         <div class="title">
                             <span>Données</span>
                         </div>
                         <div class="value">
                         <input type="file" name="file_csv" required>
                         </div>
                     </div>
                     <div class="col">
                         <div class="title">
                             <span>Format des données(Doit contenir)</span>
                         </div>
                         <div class="value format-title">
                             <span>laboratoire_id</span>
                             <span>responsable(id)</span>
                             <span>nom_equipe</span>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col">
                         <div class="value error">
                             <span>{{ $errors->first('file_csv')}}</span>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col">
                         <div class="value check">
                             <input type="checkbox" name="header" checked id="header-check" required>
                             <label for="header-check">
                                 File contains header row?
                             </label>
                         </div>
                     </div>
                 </div>


                 <div class="row actions">
                     <button type="submit">
                         <span>Importer</span>
                     </button>
                 </div>
             </form>
         </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/navigation.js') }}"></script>
@endsection

