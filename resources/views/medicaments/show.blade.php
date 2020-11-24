@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  {{ $medicament->nomCommercial }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('medicaments.index') }}" title="Retour"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom Commercial:</strong>
                {{ $medicament->nomCommercial }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Composition:</strong>
                {{ $medicament->composition }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Effets:</strong>
                {{ $medicament->effets }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contre Indications:</strong>
                {{ $medicament->contreIndications }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contre Indications:</strong>
                {{ $medicament->$famille[idFamille]->libelle }}
            </div>
        </div>
    </div>
@endsection
