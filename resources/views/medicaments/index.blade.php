@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>GSB INTRANET </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('medicaments.create') }}" title="Créer un médicament"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Numéro</th>
            <th>Nom Commercial</th>
            <th>Composition</th>
            <th>Effets</th>
            <th>Contre Indications</th>
            <th>Famille</th>
        </tr>
        @foreach ($medicaments as $medicament)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $medicament->nomCommercial }}</td>
                <td>{{ $medicament->composition }}</td>
                <td>{{ $medicament->effets }}</td>
                <td>{{ $medicament->contreIndications }}</td>
                <td>{{ $medicament->famille->libelle }}</td>
                <td>
                    <form action="{{ route('medicaments.destroy', $medicament->id) }}" method="POST">

                        <a href="{{ route('medicaments.show', $medicament->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('medicaments.edit', $medicament->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $medicaments->links() !!}

@endsection
