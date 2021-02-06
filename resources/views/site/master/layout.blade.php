<!DOCTYPE html>
<html lang='en'>
    <head> 
        <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Home</title>
      <link rel="stylesheet" href="{{ asset('sit/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('sit/style.css') }}">
      <link rel="stylesheet" href="{{asset('sit/magnific-popup/magnific-popup.css')}}">
    </head>
    @if(session()->has("carro"))
        <?php $valores = session()->get("carro"); ?>
    @endif
   

    <body>
    
        <header class="mb-15 mb-xs-10">
            <section class="container d-flex justify-content-between">
                <a href="{{route('site.home')}}">
                    <img class="brand-img brand-img-l d-none d-lg-block mt-15" src="{{asset('/imagens/img37.jpg')}}" alt="">
                </a>
                <div>
                    <ul>
                        <li></li>
                        <li> @if(date('H') >= 23 && date('H') <= 17 ) <font style="font-weight:700; font-size: 20px" color='red'>FECHADO</font>
                            @else <font style="font-weight:600; font-size: 20px" color='green'>ABERTO</font>
                            @endif
                        </li>
                        <li><a href="{{route('site.home')}}"><i aria-hidden="true" class="mr-6 fa fa-home"></i> Home</a></li>
                        <li><a href="{{route('site.sobre.contato')}}"><i aria-hidden="true" class="mr-6 icon-app icon-info"></i> Info</a></li>
                        <li><a href="{{route('site.sobre.entrega')}}"><i aria-hidden="true" class="mr-6 icon-app icon-login"></i> Entrega</a></li>
                        <li><span></span> Login</li>
                    </ul>
                </div>
            </section>

        </header>
 
        @yield('content')

        <footer class="nav-bottom text-center color-white bg-main w-100">
            <div class="container text-left fs-1-2 footer-desktop d-none d-lg-block mt-60" id="contato-infos">
                <div class="row">
                    <div class="col-4 mt-30 mb-30">
                        <p class="text-uppercase mb-15 fs-1-2">ENTRE EM CONTATO</p>
                        <p class="mb-15"><i class="fa fa-phone flip-h mr-10"></i> (051)99999-9999</p>
                        <p class="mb-15"><i class="far fa-envelope mr-10"></i> email@email.com</p>
                        <p class="mb-15"><i class="fas fa-location-arrow mr-10"></i> endreço tal, numero x - cidade - bairro</p>
                    </div>
                    <div class="col-4 mt-30 mb-30">
                        <p class="text-uppercase mb-15 fs-1-2">INFORMAÇÕES</p>
                        <p><i class="fas fa-clock mr-10"></i> Horários de funcionamento</p>
                        <p><i class="fas fa-map-marker-alt mr-10"></i> Regiões de entrega</p>
                        <p><i class="far fa-file-alt mr-10"></i> Política de privacidade</p>
                    </div>
                    <div class="col-4 mt-30 mb-30"></div>
                </div>
            </div>
            <div class="text-right p-15 o-50 copyright d-none d-lg-block" id="desenvolvido-por">
                Desenvolvido por <span><a href="">Híperion</a></span>
            </div>
        </footer >

        <script src="{{ asset('sit/jquery.js') }}"></script>
        <script src="{{ asset('sit/bootstrap.js') }}"></script>
        <script src="{{ asset('sit/script.js') }}"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </body>

</html>