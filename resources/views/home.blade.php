@extends('layout')
@section('title', 'Essa é a página Home')
@section('conteudo')

{{-- Isso é um comentario 
    {{$teste ?? 'padrão'}}
    --}}

{{-- Estrutura de controle--}}

{{--
<h1>Nosshome</h1>

@include('includes.mensagem', ['titulo'=>'Mensagem de sucesso'])

@component('components.sidebar')
    @slot('paragrafo')
        Texto qualquer vindo do slot
    @endslot
    
@endcomponent
--}}


<div class="row container">

    @foreach($produtos as $produto)

    <div class="col s12 m4">
        <div class="card">
            <div class="card-image">
              <img src="{{ $produto->imagem }}">
              <a href="{{ route('details', $produto->slug)}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
                <span class="card-title">{{$produto->nome}}</span>

              <p style="text-overflow: ellipsis">{{ Str::limit($produto->descricao,20) }}</p>
            </div>
          </div>
        </div>
    @endforeach

    
</div>

<div class="row center">
    {{ $produtos->links('custom.pagination')}}
</div>

@endsection