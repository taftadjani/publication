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
                        <span>Nom de laboratoire</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    <th>
                        <span>Etablissement</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    <th class="source">
                        <span>Directeur du laboratoire</span>
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
                @foreach ($laboratoires as $laboratoire)
                    <tr>
                        <td>{{$laboratoire->nom_laboratoire}}</td>
                        <td>{{$laboratoire->etablissement->intitule}}</td>
                        <td>
                            @if ($laboratoire->directeur)
                                {{ $laboratoire->directeur->nom }} {{ $laboratoire->directeur->prenom }}
                            @endif
                        </td>
                        {{--  <td class="actions">
                            <a href="{{ route('laboratoires.edit',['laboratoire'=>$laboratoire->id]) }}">
                                modifier
                            </a>
                            <form action="{{ route('laboratoires.destroy',['laboratoire'=>$laboratoire->id]) }}" method="POST">
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

