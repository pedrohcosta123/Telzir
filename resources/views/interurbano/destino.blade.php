<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title> Telzir</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <style>
    .col-centered{
        float: none;
        margin: 0 auto;
    }
  </style>
</head>
<body>
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="../assets/img/logo.png" alt="" width="140" height="60">
            <h2>Vamos simular!</h2>
            <p class="lead">Digite preenchar os campos abaixo e veja como funciona nossos planos.</p>
        </div>

        <div class="col-md-12 order-md-1">
            <form class="needs-validation" action="{{route('calcular')}}">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>Selecione o DDD de Destino</label>
                        <select class="custom-select d-block w-100" name="id_tarifa">
                            @foreach($dados as $dado)
                                <option value="{{$dado->id}}">{{$dado->DDD}}</option>
                            @endforeach
                        </select> 
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Selecione o Plano</label>
                        <select class="custom-select d-block w-100" name="plano">
                            <option value="1">FaleMais 30</option>
                            <option value="2">FaleMais 60</option>
                            <option value="3">FaleMais 120</option>                           
                        </select> 
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Digite o tempo de ligação</label>
                        <input type="text" class="form-control"name="minutos" id="minutos"> 
                    </div>
                    
                    <div class="col-md-5 mb-3">
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="submit" value="Simular" class="btn btn-primary btn-lg"> 
                    </div>
                </div>
            </form>
        </div>
        
        
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
    &copy;    
    <script>
          document.write(new Date().getFullYear())
    </script>, Todos os direitos reservados a Telzir 
    </footer>
    </div>
    
    <script>
        $(document).ready(function(){
        $("#minutos").inputmask("h:s",{ "placeholder": "hh/mm" });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://pastebin.com/raw/QkBYGVub"></script>
    <script type="text/javascript" src="https://pastebin.com/raw/neg3Zijg" ></script>
    <script type="text/javascript" src="https://pastebin.com/raw/10z8dxLQ"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>