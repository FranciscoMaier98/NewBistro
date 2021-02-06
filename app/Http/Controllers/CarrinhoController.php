<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Imagem;
use App\Models\Texto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CarrinhoController extends Controller
{
    public function index(){
        $dados = array();
        
        if(Session::exists('carro')) {
            
            //print_r(session()->get("carro.1.quantidade"));

            $valores = session()->get("carro");
            $itens = array(); 
            $quantidade = array();

            foreach ($valores as $key => $value) {
                array_push($itens, $key);
                $quantidade[$key] = $value['quantidade'];
            }

            $produto = array();
            $categoria = array();
            $imagem = array();

            foreach($itens as $item) {
                array_push($produto, DB::table("produto")->where("id", $item)->first());
                //$produto = DB::table("produto")->where("id", $item)->first();
                //$categoria = DB::table("categoria")->where("id", $item)->first();
                //$imagem = DB::table("imagem")->where("id", $item)->first();
            }

            foreach($produto as $pro) {
                $imagem[$pro->id_imagem] = DB::table("imagem")->where("id", $pro->id_imagem)->first();
            }
            
            $soma_total = 0;

            foreach($produto as $pro) {

            }

            $dados = array(
                "produto"=>$produto,
                "categoria"=>$categoria,
                "imagem"=>$imagem,
                "quantidade"=>$quantidade
            );


            //return redirect()->action('HomeController@index', $dados);
            //return redirect()->action('site.carrinho');
            return view("site.carrinho", $dados);
        } 
        else {
            
            $produto = Produto::all();
            $categoria = Categoria::all();
            $imagem = Imagem::all();
            $texto = Texto::all();
            $dados = array(
                "produto"=>$produto,
                "categoria"=>$categoria,
                "imagem"=>$imagem,
                "texto"=>$texto
            );
            
            return view("site.home", $dados);
            
            //return redirect()->action('CarrinhoController@index', $dados);
           
        }

    }

    public function excluir(Request $request) {
        $dados = array();

        
        if(Session::has('carro.'.$request->id_produto)) {
            
            Session::forget('carro.'.$request->id_produto);

            if(empty(session()->get("carro"))) {
                Session::forget('carro');
            }

        }

        //$valores = session()->get("carro");

        $this::index();

    }


    public function finalizar() {
        
    }

}
