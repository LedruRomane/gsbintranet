@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editer Médicaments</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('medicaments.index') }}" title="Retour"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oups!</strong> Il y a un problème avec votre entrée.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('medicaments.update', $medicament->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom Commercial:</strong>
                    <input type="text" name="nomCommercial" class="form-control" placeholder="Nom Commercial" value="{{ $medicament->nomCommercial }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Composition:</strong>
                    <textarea class="form-control" style="height:50px" name="composition"
                              placeholder="{{ $medicament->composition }}" value="{{ $medicament->composition }}"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Effets:</strong>
                    <textarea class="form-control" style="height:50px" name="effets"
                              placeholder="{{ $medicament->effets }}" value="{{ $medicament->effets }}"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contre Indications:</strong>
                    <textarea class="form-control" style="height:50px" name="contreIndications"
                              placeholder="{{ $medicament->contreIndications }}" value="{{ $medicament->contreIndications }}"></textarea>
                </div>
            </div>
            <div class="form-group">
                <select class="form-control" name="idFamille">
                    @foreach($familles as $famille)
                        <option value="{{$famille->id}}">{{$famille->libelle}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
