@extends('layout')
@section('title', 'Carrinho')
@section('conteudo')


<div class="row container">

    @if($mensagem = Session::get('sucesso'))
       

        <div class="card green">
          <div class="card-content white-text">
            <span class="card-title">Parabéns</span>
            <p> {{$mensagem}}</p>
          </div>
        </div>
    @endif

    <h4>Seu carrinho possui {{$itens->count()}} produtos.</h4>


    <table class="striped">
        <thead>
          <tr>
              <th></th>
              <th>Nome</th>
              <th>Preço</th>
              <th>Quantidade</th>
              <th></th>
          </tr>
        </thead>

        <tbody>



        @foreach($itens as $item)

          <tr>
            <td><img src="{{$item->attributes->image}}" alt="" width="70" class="responsive-img circle"></td>
            <td>{{$item->name}}</td>
            <td>{{number_format($item->price, 2, ',','.')}}</td>
            <td><input style="width:40px; font-weight:900;" class="white center" type="number" name="quantity" value="{{$item->quantity}}"></td>
            <td>
                <button class="btn-floating waves-effect waves-light orange"><i class="material-icons">refresh</i></button>
                <button class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>

            </td>
          </tr>
          
        @endforeach




        </tbody>
      </table>

      <div class="row container center">
        <button class="btn-large waves-effect waves-light blue">Continuar comprando<i class="material-icons right">arrow_back</i></button>
        <button class="btn-large waves-effect waves-light blue">Limpar carrinho<i class="material-icons right">clear</i></button>
        <button class="btn-large waves-effect waves-light green">Finalizar pedido<i class="material-icons right">check</i></button>

      </div>

    
</div>

<div class="row center">

</div>

@endsection