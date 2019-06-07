<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Telzir</title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset('assets/css/material-kit.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
</head>
<style>
    .logo-image {
        width: 120px;
        height: 50px;
        overflow: hidden;
        margin-top: -6px;   
    }
</style>
<body class="landing-page sidebar-collapse" data-spy="scroll" data-target="#sectionsNav" data-offset="1">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg bg-white" color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="/">
                    <div class="logo-image">
                        <img src="../assets/img/logo.png" class="img-fluid">
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse ">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" rel="tooltip"  data-placement="bottom" href="#Planos" data-original-title="Conheça nossos planos"> 
                        <i class="material-icons">apps</i> Planos</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" data-placement="bottom" href="#FaleMais" data-original-title="Entenda o que é o FaleMais" >
                        <i class="material-icons">help</i> FaleMais</a>
                    </li>                     
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/celular1.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">Cansado de gastar dinheiro em ligações Interurbanas?</h1>
                    <h4>Faça um teste, click abaixo e veja o valor que você irá pagar em um ligação interurbana com nossos pacotes. </h4>
                    <br>
                    <a href="{{route('origem')}}"   class="btn btn-info btn-raised btn-lg">
                        Simule agora!
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container"id="FaleMais">
            <div class="section text-center">
                <div class="section" >
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">O que é o FaleMais?</h2>
                        <h5 class="description">FaleMais é um plano voltado para você que realiza várias ligações interurbanas. 
                        Com o nosso plano você fala mais e paga menos.</h5>
                    </div>
                </div>
                <div class="features">
                    <div class="row">
                        <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                            <i class="material-icons">monetization_on</i>
                            </div>
                            <h4 class="info-title">Economia</h4>
                            <p>Chega de tomar susto com sua fatura todo mês. Nossos planos tem valores fixos, com isso você pode fazer ligações despreocupado.</p>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-info">
                            <i class="material-icons">cell_wifi</i>
                            </div>
                            <h4 class="info-title">Cobertura</h4>
                            <p>Cobertura é de extrema importância, do que adianta ter uma plano barato mas não conseguir fazer ligações? Foi pensando nisso que hoje temos a maior cobertura do Brasil.</p>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                            <i class="material-icons">access_time</i>
                            </div>
                            <h4 class="info-title">Tempo de sobra</h4>
                            <p>Fale a vontade e não se preocupe com o tempo de ligação, com nossos planos você não se preocupa mais com tempo. </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section text-center" id="Planos">
                <h2 class="title" >Nossos Planos</h2>            
            </div>                
        </div>
        <div class="row">
            <div class="card card-nav-tabs col-md-3" style="display: inline-block;margin-right:3%;margin-left:4%">
                <h4 class="card-header card-header-info">FaleMais 30</h4>
                <div class="card-body">
                    <h4 class="card-title">Fale de graça por 30 minutos</h4>
                    <p class="card-text">Um plano para quem precisa fazer poucas ligações interurbanas.</p>
                    <a href="#0" class="btn btn-primary">Contrate Agora</a>
                </div>
            </div>
            <div class="card card-nav-tabs col-md-3"style="display: inline-block;margin-right:3%;margin-left:4%">
                <h4 class="card-header card-header-success">FaleMais 60</h4>
                <div class="card-body">
                    <h4 class="card-title">Fale de graça por 60 minutos</h4>
                    <p class="card-text">Uma plano para quem costuma fazer ligações interurbanas com uma frequencia maior.</p>
                    <a href="#0" class="btn btn-primary">Contrate Agora</a>
                </div>
            </div>
            <div class="card card-nav-tabs col-md-3"style="display: inline-block;margin-right:3%;margin-left:4%">
                <h4 class="card-header card-header-warning">FaleMais 120</h4>
                <div class="card-body">
                    <h4 class="card-title">Fale de graça por 120 minutos</h4>
                    <p class="card-text">Um plano criado para quem faz muitas ligações interurbanas, com esse plano você pode ligar a vontade.</p>
                    <a href="#0" class="btn btn-primary">Contrate Agora</a>
                </div>
            </div>
        </div>        
  </div>
  <footer class="footer footer-default">
    <div class="container">
      
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, Todos os direitos reservados a Telzir 
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset('assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/material-kit.js')}}" type="text/javascript"></script>
</body>

</html>