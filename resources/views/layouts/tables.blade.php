{{--  Hero   --}}
<div class="container">
    <div class="search-wrapper">
        @if ($title2)
            <div class="title no-selectable-text">
                <h3> {{ $title2 }}</h3>
            </div>
        @endif
        <div id="search-root"></div>
    </div>
    <div class="wrapper-tables table-wrapper">
        @if ($title)
            <div class="table-title">
                <h3 class="no-selectable-text">
                    {{ $title }}
                </h3>
            </div>
        @endif
        <table class="content-table table-sortable articles" id="data-table">
            <thead>
                <tr>
                    <th class="titre">
                        <span>Titre</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    <th>
                        <span>Type</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    <th class="source">
                        <span>Source</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    <th class="date-publication number">
                        <span>Date de publication</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    <th>
                        <span>Url</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    <th class="auteurs">
                        <span>Auteurs</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    {{--  @auth
                        <th class="actions">
                            <span>Actions</span>
                            <span class="material-icons">unfold_more</span>
                        </th>
                    @endauth  --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article->titre}} </td>
                            <td>{{ $article->type}} </td>
                            <td>{{ $article->source}} </td>
                            <td>{{ $article->annee_publication}} </td>
                            <td>
                                <a href="{{ $article->url}}" target="_blank">lien</a>
                            </td>
                            <td>
                                {{$article->auteurs}}
                                {{--  @foreach ( as $auteur)
                                    <div class="auteur">
                                        <span>{{ $auteur->nom }} {{ $auteur->prenom }}</span>
                                    </div>
                                @endforeach  --}}
                            </td>
                        </tr>
                    {{--  @endif  --}}
                @endforeach
            </tbody>
        </table>
        <div class="pagination"> {{ $articles->links() }} </div>
    </div>
</div>

