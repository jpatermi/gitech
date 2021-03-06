@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Compañía</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('company.update', $company['id']) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="social_reason" class="col-md-4 col-form-label text-md-right">Razón Social</label>

                            <div class="col-md-6">
                                <input id="social_reason" type="text" class="form-control @error('social_reason') is-invalid @enderror" name="social_reason" value="{{ $company['social_reason'], old('social_reason') }}" required autocomplete="social_reason" autofocus>

                                @error('social_reason')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tradename" class="col-md-4 col-form-label text-md-right">Nombre Comercial</label>

                            <div class="col-md-6">
                                <input id="tradename" type="text" class="form-control @error('tradename') is-invalid @enderror" name="tradename" value="{{ $company['tradename'], old('tradename') }}" required>

                                @error('tradename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
