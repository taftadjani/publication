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
                        <span>Intitulé</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    <th>
                        <span>Adresse</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    <th>
                        <span id="date_pub">Url</span>
                        <span class="material-icons">unfold_more</span>
                    </th>
                    {{--  <th>
                        <span>Actions</span>
                        <span class="material-icons">unfold_more</span>
                    </th>  --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($etablissements as $etablissement)
                    <tr>
                        <td>{{$etablissement->intitule}}</td>
                        <td>{{$etablissement->adresse}}</td>
                        <td>{{ $etablissement->url }}</td>
                        {{--  <td class="actions">
                            <a href="{{ route('etablissements.edit',['etablissement'=>$etablissement->id]) }}">
                                modifier
                            </a>
                            <form action="{{ route('etablissements.destroy',['etablissement'=>$etablissement->id]) }}" method="POST">
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

