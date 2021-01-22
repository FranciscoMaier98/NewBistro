<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Imagem;
use App\Models\Texto;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function index() {

    }

    public function adicionar(Request $request) {

        
        if(!empty($request->id_produto)) {

            $id = $request->id_produto;
            $qt = $request->qt_produto;

            if($request->session()->exists($id)) {
                $valor_atual = $request->session()->get($id);
                $valor_atual = $valor_atual + $qt;
                $request->session()->put($id, $valor_atual);
                echo "if";
            } else {
                $request->session()->put($id, $qt);
                echo "else";
            }

            print_r($request->session()->get($id));

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
            return view('site.home', $dados);

            /*
            exit;

            $request->session()->put('id', $id);
            $request->session()->put('qt', $qt);
            */
        }



        /*echo "ID: ".$request->session()->pull('id')."<br>";
        echo "QT ".$request->session()->pull('qt');
        exit;*/

    }

}
