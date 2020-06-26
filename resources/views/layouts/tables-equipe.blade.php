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
                    <th class="titre">
                        <span>Nom de l'equipe</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    <th>
                        <span>Laboratoire</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    <th class="source">
                        <span>Responsable</span>
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
                @if ($equipes)
                    @foreach ($equipes as $equipe)
                        <tr>
                            <td>{{$equipe->nom_equipe}}</td>
                            <td>
                                @if ($equipe->laboratoire)
                                    {{$equipe->laboratoire->nom_laboratoire}}
                                @endif
                            </td>
                            <td>
                                @foreach ($equipe->auteurs as $auteur)
                                    <span>
                                        @if (strlen($auteur->nom)>0)
                                            {{ $auteur->nom[0] }}.
                                        @endif {{ $auteur->prenom }},
                                    </span>
                                @endforeach
                            </td>
                            <td>
                                @if ($equipe->responsable_labo)
                                    {{ $equipe->responsable_labo->nom }} {{ $equipe->responsable_labo->prenom }}
                                @endif
                            </td>
                            {{--  <td class="actions">
                                <a href="{{ route('equipes.edit',['equipe'=>$equipe->id]) }}">
                                    modifier
                                </a>
                                <form action="{{ route('equipes.destroy',['equipe'=>$equipe->id]) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit">delete</button>
                                </form>
                            </td>  --}}
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

