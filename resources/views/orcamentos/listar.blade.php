@extends('layouts.app')
@section('content')
<link href="{{ asset('css/barrapesquisa.css') }}" rel="stylesheet">
<div class="container" color="red">
    <div class="row justify-content-center">
        <div class="col-md-20 col-md-offset-1" margin="5px">
            <div class="card-body">
                @if (session()->has('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif                              
            </div>
            <div class="card">                                            
               <div class="breadcrumb panel-heading">                                   
                    <div class="input-field col s5 m4">
                        <a class="btn btn-success" href="{{ route('orcamentos.adicionar') }}">Adicionar</a>
                    </div>    
                   <form action="{{ route('orcamentos.pesquisar') }}">
                        @csrf
                        <div >
                            <input placeholder="Pesquisar..." id="barrapesquisa" type="text">
                            <button style="border-radius: 20px;" type="submit" class="btn btn-light">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                  </svg>
                            </button>
                        </div>                                               
                    </form>
                        <div>
                            <input id="date" style="margin-top: 5px" class="btn btn-sm" type="date"/> 
                        </div>
                        <button style="border-radius: 20px;" type="submit" class="btn btn-light">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                              </svg>
                        </button>                      
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped active">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Vendedor</th>
                                <th>Cliente</th>
                                <th>Descrição</th>
                                <th>Data e Hora</th>
                                <th style="width= 100%;">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                                                   
                        @foreach($orcamentos as $orcamento)
    
                            <tr>
                                <td scope="row">{{ $orcamento->id }}</td>
                                <td>{{$orcamento->vendedor}}</td>
                                <td>{{$orcamento->cliente}}</td>
                                <td>{{$orcamento->descricao}}</td>
                                <td>{{$orcamento->created_at}}</td>
                                <td>
                                <a class="btn-group btn-group-xs closebtn"  role="group" href="{{ route('orcamentos.editar', $orcamento->id) }}">Editar</a>
                                <a class="btn-group btn-group-xs" name="deletar" role="group"  href="javascript:(confirm('Deletar esse orçamento?') 
                                ? window.location.href='{{ route('orcamentos.deletar', $orcamento->id) }}' : console.log('false'))">Deletar</a>
                                </td>                                
                            </tr>           
                        @endforeach
                        </tbody>
                    </table>
                    <div>
                        {!! $orcamentos->links()!!}
                     </div>                   
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection
