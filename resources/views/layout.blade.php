<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

  <ul id='dropdown1' class='dropdown-content'>
    @foreach($categoriasMenu as $categoriaM)
    <li><a href="{{route('categoria', $categoriaM->id)}}">{{$categoriaM->nome}}</a></li>
    @endforeach
   </ul>

    <nav class="red">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo center">Nossbit</a>
          <ul id="nav-mobile" class="left">
            <li><a href="{{ route('site.index')}}">Home</a></li>
            <li><a href="" class="dropdown-trigger" data-target="dropdown1">Categorias <i class="material-icons right">expand_more</i></a></li>
            <li><a href="{{ route('carrinho')}}">Carrinho<span class="badge yellow" data-badge-caption="">{{\Cart::getContent()->count()}}</span></a></li>
          </ul>
        </div>
      </nav> 
            
      
     
            


@yield('conteudo')




<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
  var elemDrop = document.querySelectorAll('.dropdown-trigger');
  var instanceDrop = M.Dropdown.init(elemDrop,{
    coverTrigger:false,
    constrainWidth:false
  });
</script>

</body>
</html>