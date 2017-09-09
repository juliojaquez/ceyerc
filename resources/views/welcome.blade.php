<!DOCTYPE html>
<html>
    <head>

        {!!Html::script('https://code.jquery.com/jquery-2.1.4.min.js')!!}
        {!!Html::style('css/bootstrap.min.css')!!}
        {!!Html::style('css/main.css')!!}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Ceyerc | Ingeniería especializada en equipo médico</title>
    </head>
    
    
    <body>
      <div id="prenavegador">
        <a href=""><i class="fa fa-facebook-square" style="font-size:30px"></i></a>
        <a><i class="fa fa-amazon" style="font-size:27px"></i></a>
        <a><i class="fa fa-google-plus-square" style="font-size:27px"></i></a>
        
      </div>
        <header> 
            <a href="/"><img src="../img/ceyerc-logo.png" alt="Logo" class="img-logo"></a>
        </header>

  <!--Empieza NAV <-->
  <nav>
    <ul>
      <li>
        <a href="/">Inicio</a>
      </li>
      <li>
        <a href="#">¿Quienes somos?</a>
      </li>
      <li>
        <a href="#">Contáctenos</a>
      </li>
      <li>
        <a href="#">Contact</a>
      </li>
    </ul>
</nav>

  @yield('content')

  <!-- De aqui debe de mandarse un id al productos store para que filtre los productos de esa categoria
  y los mande a la vista. -->



        

        

    </body>
</html>
