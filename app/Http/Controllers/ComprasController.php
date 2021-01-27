<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Imagem;
use App\Models\Texto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function index() {

    }

    public function adicionar(Request $request) {

        $dados = array();

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

            $produtos = array();
            $todos = $request->session()->all();

            foreach($todos as $k => $t){
                echo $k;
                echo "<br>";
                //array_push($produtos , DB::select('select * from produto where id='.$k));
                
            }   

            print_r($produtos);
            exit;


            foreach($produto as $pro){
                $categoria = $pro->id_categoria;
                $imagem = $pro->id_imagem;
                $texto = $pro->id_texto;
            }
            
            $categoria = DB::table('categoria')->where('id', $categoria)->value('categoria');//Categoria::where('id', '1');
            $imagem = DB::table('imagem')->where('id', $imagem)->value('imagem');
            $texto = DB::table('texto')->where('id', $texto)->value('texto');
            
            $dados = array(
                'request'=>$request,
                'produto'=>$produto,
                'categoria'=>$categoria,
                "imagem"=>$imagem,
                "texto"=>$texto
            );
    
            
            return view('site.carrinho', $dados);
        
        }
        
        
        return view('site.home', $dados);


        /*echo "ID: ".$request->session()->pull('id')."<br>";
        echo "QT ".$request->session()->pull('qt');
        exit;*/

    }

}
