@extends('site.master.layout')

@section('content')

    <section>
        
        <div class="container">
            <div class="row" id="row-home">

                <div class="col-lg-8">
                    
                    <nav id="menu-pesquisa" class="navbar navbar-expand-lg col-12">
                        <ul class="navbar-nav mr-auto text-uppercase">
                            <li class="nav-item">
                                <a href="{{route('site.home')}}">
                                    Cardápio
                                </a> 
                            </li>
                            <span>|</span>
                            <li class="nav-item dropdown">
                                <a href="">
                                    Categorias
                                </a>   
                            </li>
                            <span>|</span>
                            <li class="nav-item">
                                <a href="{{route('site.sobre.horario')}}">
                                    Aberto/fechado
                                </a>    
                            </li>
                            <span>|</span>
                            <li class="nav-item">
                                <a href="">
                                    Regiões de entrega
                                </a>    
                            </li>
                        </ul>
                    </nav>
                    
                    
                    <div >
                        <div class="col-12 d-flex justify-content-between" id="area-pesquisa">
                            <input type="text" name="pesquisa" placeholder="Procure algum produto" class="input-search form-control border-0 fs-s p-xs-0 bg-light-gray px-xs-5 fs-1-4">
                            <button class="btn btn-primary text-center text-uppercase">
                                <i aria-hidden="true" class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>


                    <div id="lista-catalogo">
                        <?php foreach($categoria as $cat):?>
                            <div class="item-catalogo" id="item-catalogo">
                                <div class="categoria-{{$cat->id}}" id="categoria">
                                    <div data-toggle="collapse" role="button" id="produto-colapsado" aria-expanded="false" href="#collapseProduct{{$cat->id}}" aria-controls="collapseProduct1" class="category-collapsed bg-white py-15 px-20 bb-1-gray pointer collapsed">
                                        <span>{{$cat->categoria}}</span>
                                        <i class="fas fa-plus float-right"></i>
                                    </div>
                                        @foreach($produto as $pro)
                                            <?php if(($pro->id_categoria==$cat->id)){ ?>
                                            <div id="collapseProduct{{$cat->id}}" class="collapse">
                                                <div class="card card-body br-0">
                                                    <div>
                                                        <li class="media m-0 d-flex justify-between">
                                                            <div class="form-group-radio_group link-produc w-100  mt-3">
                                                                <span class="fs-m number" id="titulo-produto">{{$pro->nome_produto}}</span>
                                                                <?php if((!empty($pro->id_texto)) ) {?>
                                                                    <p class="fw-300 fs-1-2 mt-3" id="texto-produto-catalogo">
                                                                        {{$texto[$pro->id_texto-1]->texto}}
                                                                    </p>
                                                                <?php }?>
                                                                <div class="d-flex align-center justify-between mt-3">
                                                                    <div>
                                                                        <p class="price fs-m color-main" id="preco-produto-catalogo">
                                                                            <span>
                                                                                R$25,00
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="img-catalog ml-15 mt-3" id="imagem-catalogo" href="{{url('detalhes/'.$pro->id)}}">
                                                                <img src="{{asset('imagens/'.$imagem[$pro->id_imagem-1]->imagem)}}" class="img-fluid br-5" alt="">
                                                            </a> 
                                                        </li>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }?>
                                        @endforeach
                                </div>
                            </div>
                        <?php endforeach; ?>
                        
                    
                        <div id="lista-catalogo">
                            <div >
                                <div data-toogle="collapse" >


                                </div>
                            </div>
                        </div>                    
                    
                    </div>
                    


                </div>

               
                
                <div class="co-lg-4">
                        
                        <div class="col-12" id="menu-pedido">
                            <div>
                                <p id="titulo-pedido" class="font-weight-bold fw-900">SEU PEDIDO</p>
                            </div>
                            <hr>

                            @if(!(session()->exists("carro")))
                                <div>
                                    <p>CARRINHO VAZIO</p>
                                </div>
                            @else
                                <div>
                                    <a href="{{route('site.carrinho')}}" class="font-weight-bold fw-900">Ir para o carrinho</a>
                                </div>
                            @endif
                        </div>
                        
                        <div class="col-12" id="menu-pedido">
                            <div id="formas-pagamento">
                                <p>FORMAS DE PAGAMENTO</p>
                            </div>
                            <hr>
                            <div id="formas-pagamento">
                                <div>CRÉDITO</div>
                                <div>
                                    <ul>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="69" alt="American Express" title="American Express" src="https://vittocdn.com.br/assets/images/admin/cards/cre_americanexpress.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="70" alt="Hiper" title="Hiper" src="https://vittocdn.com.br/assets/images/admin/cards/cre_hiper.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="73" alt="Elo" title="Elo" src="https://vittocdn.com.br/assets/images/admin/cards/cre_elo.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="75" alt="Master Card" title="Master Card" src="https://vittocdn.com.br/assets/images/admin/cards/cre_master.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="76" alt="Visa" title="Visa" src="https://vittocdn.com.br/assets/images/admin/cards/cre_visa.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="204" alt="Hiper Credito" title="Hiper Credito" src="https://vittocdn.com.br/assets/images/admin/cards/hiper.jpg" class="forma-pagamento">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div id="formas-pagamento">
                                <div>DÉBITO</div>
                                <div>
                                    <ul>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="78" alt="Visa Electron" title="Visa Electron" src="https://vittocdn.com.br/assets/images/admin/cards/deb_visaelectron.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="75" alt="Master Card" title="Master Card" src="https://vittocdn.com.br/assets/images/admin/cards/cre_master.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="73" alt="Elo" title="Elo" src="https://vittocdn.com.br/assets/images/admin/cards/cre_elo.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="70" alt="Hiper" title="Hiper" src="https://vittocdn.com.br/assets/images/admin/cards/cre_hiper.jpg" class="forma-pagamento">  
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="155" alt="Banricompras Debito" title="Banricompras Debito" src="https://vittocdn.com.br/assets/images/admin/cards/deb_banricompras.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="213" alt="Sicredi Debito" title="Sicredi Debito" src="https://vittocdn.com.br/assets/images/admin/cards/deb_sicredi.jpg" class="forma-pagamento">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div id="formas-pagamento">
                                <div>DINHEIRO</div>
                                <div>
                                    <ul>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="80" alt="Dinheiro" title="Dinheiro" src="https://vittocdn.com.br/assets/images/admin/cards/dinheiro.jpg" class="forma-pagamento">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div id="formas-pagamento">
                                <div>PAGAMENTO ONLINE</div>
                                <div>
                                    <ul>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="70" alt="Hiper" title="Hiper" src="https://vittocdn.com.br/assets/images/admin/cards/cre_hiper.jpg" class="forma-pagamento">  
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="76" alt="Visa" title="Visa" src="https://vittocdn.com.br/assets/images/admin/cards/cre_visa.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="78" alt="Visa Electron" title="Visa Electron" src="https://vittocdn.com.br/assets/images/admin/cards/deb_visaelectron.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="231" alt="Banescard Credito" title="Banescard Credito" src="https://vittocdn.com.br/assets/images/admin/cards/banescard.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="232" alt="Cabal Credito" title="Cabal Credito" src="https://vittocdn.com.br/assets/images/admin/cards/cabal.png" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="233" alt="Cooper" title="Cooper" src="https://vittocdn.com.br/assets/images/admin/cards/cre_cooper.png" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="234" alt="Dinners" title="Dinners" src="https://vittocdn.com.br/assets/images/admin/cards/online-diners.png" class="forma-pagamento">
                                        </li>
                                        <br>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="235" alt="Discover" title="Discover" src="https://vittocdn.com.br/assets/images/admin/cards/online-discover.png" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="236" alt="Elo" title="Elo" src="https://vittocdn.com.br/assets/images/admin/cards/online-elo.png" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="237" alt="Hiper" title="Hiper" src="https://vittocdn.com.br/assets/images/admin/cards/hiper.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="238" alt="Hipercard" title="Hipercard" src="https://vittocdn.com.br/assets/images/admin/cards/cre_hiper.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="239" alt="Jcb" title="Jcb" src="https://vittocdn.com.br/assets/images/admin/cards/online-jcb.png" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="240" alt="Mais!" title="Mais!" src="https://vittocdn.com.br/assets/images/admin/cards/cre_mais.png" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="241" alt="Sorocred Credito" title="Sorocred Credito" src="https://vittocdn.com.br/assets/images/admin/cards/sorocred.png" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="242" alt="UnionPay" title="UnionPay" src="https://vittocdn.com.br/assets/images/admin/cards/cre_unionpay.png" class="forma-pagamento">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12" id="menu-pedido">
                            <div class="">
                                <div class="" id="">
                                    <p>REDES SOCIAIS</p>
                                </div>
                                <hr>
                                <div>
                                    <p><i class="fab fa-facebook"></i> 
                                        <a href="https://www.facebook.com/NewBistroivoti"> FACEBOOK</a> 
                                    </p>
                                </div>
                                <hr>
                                <div>
                                    <p><i class="fab fa-instagram"></i> 
                                        <a href=""> INSTAGRAM</a>    
                                    </p>
                                </div>
                            </div>
                        </div>

                   
                    
                    
                   
                
                
                </div>


            
            </div>



        </div>
    </section>

@endsection