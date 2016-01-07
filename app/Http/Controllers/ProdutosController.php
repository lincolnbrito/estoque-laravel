<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutosController extends Controller
{
    public function lista()
    {
        $produtos = DB::select('select * from produtos');

        if(view()->exists('produto.listagem'))
        {
//        return view('listagem')->with('produtos', $produtos);
//        return view('listagem')->withProdutos($produtos);
            return view('produto.listagem', ['produtos'=>$produtos]);
        }
    }

    public function mostra($id)
    {
//        $id = Request::route('id');

        $resposta = DB::select('select * from produtos where id = ?', [$id]);

        if(empty($resposta))
        {
            return "Esse produto não existe";
        }

        return view('produto.detalhes',['p' => $resposta[0]]);
    }
}