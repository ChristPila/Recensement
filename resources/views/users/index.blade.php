@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="row mb-2"><br>
                    <div class="col-sm-6"><br>
                        <h2 class="h3 mb-0 page-title">{{ __('Liste de personnes recensées') }}</h2>
                    </div>
                    <div class="col-sm-6"><br>
                        <ol class="breadcrumb float-sm-right"><br>
                            <li class="breadcrumb-item"><a href="{{route('home')}}">{{ __('Dashboard') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Users') }}</li>
                        </ol>
                    </div>
                    <div class="col-sm-12">
                        <div class="breadcrumb float-sm-right">
                            <a href="{{route('user.create')}}" class="btn btn-success" style="color:white">
                                <span style="color:white"></span> {{ __('Nouveau') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-18">
                <div class="card shadow">
                    <div class="card-body">
                        <!-- table -->
                        <table class="table datatables" id="dataTable-1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('Nom') }}</th>
                                    <th>{{ __('Prenom') }}</th>
                                    <th>{{ __('Postnom') }}</th>
                                    <th>{{ __('Lieu de naissance') }}</th>
                                    <th>{{ __('Pays') }}</th>
                                    <th>{{ __('Sexe') }}</th>
                                    <th>{{ __('Province') }}</th>
                                    <th>{{ __('Nationalité') }}</th>
                                    <th>{{ __('Province') }}</th>
                                    <th>{{ __('Quartier') }}</th>
                                    <th>{{ __('Avenue') }}</th>
                                    <th width="280px">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            @foreach ($data as $key => $user)
                            <tbody>
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->nom }}</td>
                                    <td>{{ $user->prenom }}</td>
                                    <td>{{ $user->postnom }}</td>
                                    <td>{{ $user->lieu_de_naissance }}</td>
                                    <td>{{ $user->pays }}</td>
                                    <td>{{ $user->sexe }}</td>
                                    <td>{{ $user->province }}</td>
                                    <td>{{ $user->nationalite }}</td>
                                    <td>{{ $user->commune }}</td>
                                    <td>{{ $user->quartier }}</td>
                                    <td>{{ $user->avenue }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">{{
                                            __('Edit') }}</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['user.destroy',
                                        $user->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        {!! $data->render() !!}
                        <!-- end table -->
                    </div>
                </div>
            </div> <!-- .col-md-12 -->
        </div> <!-- end section row my-4 -->
    </div> <!-- .col-12 -->
</div> <!-- .row -->
@endsection