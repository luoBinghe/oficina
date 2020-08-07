@extends('layouts.app')
@section('content')
<link href="{{ asset('css/error.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Orçamento') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('orcamentos.salvar') }}">
                        @csrf

                        <div class="form-group row {{ $errors->has('vendedor') ? 'has-error' : '' }}">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Vendedor:') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="vendedor" placeholder="Vendedor" autofocus>
                            </div>
                            @if($errors->has('vendedor'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('vendedor') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('cliente') ? ' has-error' : '' }}">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Cliente:') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Cliente" type="text" class="form-control" name="cliente" autofocus>
                            </div>
                            @if($errors->has('cliente'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cliente') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('descricao') ? 'has-error' : '' }}">
                            <label for="descricao" class="col-md-4 col-form-label text-md-right">{{ __('Descrição:') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="descricao" class="form-control" style="width: 100%; height: 130px;" maxlength="250">
                            </div>
                            @if($errors->has('descricao'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('descricao') }}</strong>
                                </span>
                            @endif
                        </div>
 
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Data:</label>
                            <div class="col-md-6">
                                <input class="form-control" style="width: 50%;" id="timestamps" type="date"/>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Concluído') }}
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
