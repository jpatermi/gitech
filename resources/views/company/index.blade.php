@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header h4">
                    Lista de Compañías
                    <a class="btn btn-primary float-right"
                        href="{{ route('company.create') }}"
                    >
                        Nueva
                    </a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Razón Social</th>
                            <th scope="col">Nombre Comercial</th>
                            <th class="text-justify-center" scope="col" colspan="3">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                            @for ($i=0; $i<count($companies); $i++)
                                <tr>
                                    <th scope="row">{{ $i + 1 }}</th>
                                    <td>{{ $companies[$i]['social_reason'] }}</td>
                                    <td>{{ $companies[$i]['tradename'] }}</td>
                                    <td><a class="btn btn-primary" href="{{ route('company.show', $companies[$i]['id']) }}">Ver</a></td>
                                    <td><a class="btn btn-primary" href="{{ route('company.edit', $companies[$i]['id']) }}">Editar</a></td>
                                    <td>
                                        <form action="{{ route('company.destroy', $companies[$i]['id']) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-primary"
                                                onclick="return confirm('¿Esta seguro de eliminar la compañía: {{ $companies[$i]['social_reason'] }}?')"
                                            >
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
