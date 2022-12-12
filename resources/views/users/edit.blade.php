@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row align-items-center my-4">
                <div class="col">
                    <h2 class="h3 mb-0 page-title">{{ __('Edit User') }}</h2>
                </div>
                <div class="col-auto">
                    <a href="{{route('user.index')}}" class="btn btn-primary" style="color:white">
                        <span style="color:white"></span> {{ __('Retour') }}
                    </a>
                </div>
            </div>
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item"><a href="{{route('user.index')}}">{{ __('Users') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('Edit User') }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card shadow mb-4">
                <div class="card-body">
                    {!! Form::model($user, ['method' => 'PATCH','route' => ['user.update', $user->id]]) !!}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Nom') }}:</strong>
                            {!! Form::text('nom', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Prénom') }}:</strong>
                            {!! Form::text('prenom', null, array('placeholder' => 'Prénom','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Postnom') }}:</strong>
                            {!! Form::text('postnom', null, array('placeholder' => 'Postnom','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Lieu de Naissance') }}:</strong>
                            {!! Form::text('lieu_de_naissance', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Nom de la mère') }}:</strong>
                            {!! Form::text('nom_mere', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Nom du père') }}:</strong>
                            {!! Form::text('nom_pere', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Pays') }}:</strong>
                            {!! Form::text('pays', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Sexe') }}:</strong>
                            {!! Form::text('sexe', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Age') }}:</strong>
                            {!! Form::text('age', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('État civil') }}:</strong>
                            {!! Form::text('etat_civil', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Province') }}:</strong>
                            {!! Form::text('province', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Commune') }}:</strong>
                            {!! Form::text('commune', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Nationalité') }}:</strong>
                            {!! Form::text('nationalite', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Quartier') }}:</strong>
                            {!! Form::text('quartier', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Avenue') }}:</strong>
                            {!! Form::text('avenue', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-warning">{{ __('Modifier') }}</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div> <!-- / .card -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->

@endsection