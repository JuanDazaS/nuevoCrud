@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Roles</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                        @can('crear-rol')
                        <a class="btn btn-warning" href="{{ route('roles.create')}}">Nuevo</a>
                        @endcan

                        <table class="table table-striped at-2">
                                <thead style="background-color: #6777ef;">
                                  <th style="display: none;">ID</th>
                                  <th style="color: #fff;">Rol</th>
                                  <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($roles as $role)
                                    <tr>
                                        <td style="display: none;">{{$role->id}}</td>
                                        <td>{{$role->name}}</td>
                                        <td>
                                            @can('editar-rol')
                                            <a class="btn btn-info" href="{{ route('usuarios.edit', $role->id) }}">Editar</a>
                                            @endcan
                                            
                                            <form method="POST" action="/delete">
                                            <a class="btn btn-danger" href="{{ route('usuarios.destroy', $role->id) }}">Borrar</a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
