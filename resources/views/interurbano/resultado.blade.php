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

</head>
<body>
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="../assets/img/logo.png" alt="" width="140" height="60">
            <h2>Pronto!</h2>
            <p class="lead">Não perca tempo, contrate nosso plano com ele você pode falar tranquilo.</p>
        </div>
    
        <div class="card py-5 text-center" style="width: 80rem;">
            <div class="card-body">
                <h5 class="card-title">Sem o Plano R${{$dados['semplano']}}</h5>
                @if($dados['complano'] =='')
                    <h5 class="card-title">Com o Plano R$0.00</h5>
                @else
                <h5 class="card-title">Com o plano R${{$dados['complano']}}</h5>
                @endif
                <p class="card-text">Quer simular outro valor? Click em Simular.</p>
                <a href="{{route('origem')}}" class="btn btn-primary">Simular</a>
                <a href="/" class="btn btn-primary">Voltar</a>
            </div>
        </div>
        
        
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
    &copy;    
    <script>
          document.write(new Date().getFullYear())
    </script>, Todos os direitos reservados a Telzir 
    </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://pastebin.com/raw/QkBYGVub"></script>
    <script type="text/javascript" src="https://pastebin.com/raw/neg3Zijg" ></script>
    <script type="text/javascript" src="https://pastebin.com/raw/10z8dxLQ"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>