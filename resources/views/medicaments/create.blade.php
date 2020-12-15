@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="margin-top:2%;margin-bottom:2%;">
                <h2>Ajouter Médicament</h2>
            </div>
            <div class="pull-right" style="margin-top:2%;margin-bottom:2%;">
                <a class="btn btn-primary" href="{{ route('medicaments.index') }}" title="Retour"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Attention!</strong> Il y a un problème avec votre entrée.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('medicaments.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom Commercial:</strong>
                    <input type="text" name="nomCommercial" class="form-control" placeholder="Nom Commercial">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Composition:</strong>
                    <textarea class="form-control" style="height:50px" name="composition"
                              placeholder="composition"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Effets:</strong>
                    <textarea class="form-control" style="height:50px" name="effets"
                              placeholder="effets"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contre Indications:</strong>
                    <textarea class="form-control" style="height:50px" name="contreIndications"
                              placeholder="contre Indications"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Famille: </strong>
                    <select class="form-control" name="idFamille">
                        @foreach($familles as $famille)
                            <option value="{{$famille->id}}">{{$famille->libelle}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>

    </form>
@endsection
