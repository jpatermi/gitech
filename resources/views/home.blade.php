@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tablero Estadístico</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    Aquí irá todo el contenido estadístico que verá el cliente...!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
