{{--  Hero   --}}
<div class="container">
    <div class="search-wrapper">
        @if ($title)
            <div class="title no-selectable-text">
                <h3> {{ $title }}</h3>
            </div>
        @endif
        <div id="search-root"></div>
    </div>
    <div class="wrapper-tables table-wrapper">
        <table class="content-table table-sortable articles" id="data-table">
            <thead>
                <tr>
                    <th>
                        <span>Nom</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    <th>
                        <span>Prenom</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    <th>
                        <span id="date_pub">Som</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    <th>
                        <span>Etablissement</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    {{--  <th>
                        <span>Actions</span>
                        <span class="material-icons">unfold_more</span>
                    </th>  --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($auteurs as $auteur)
                    <tr>
                        <td>{{$auteur->nom}}</td>
                        <td>{{$auteur->prenom}}</td>
                        <td>{{$auteur->som}}</td>
                        <td>
                            @if ($auteur->etablissement)
                                {{$auteur->etablissement->intitule}}
                            @endif
                        </td>
                        {{--  <td class="actions">
                            <a href="{{ route('auteurs.edit',['auteur'=>$auteur->id]) }}">
                                modifier
                            </a>
                            <form action="{{ route('auteurs.destroy',['auteur'=>$auteur->id]) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit">delete</button>
                            </form>
                        </td>  --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

