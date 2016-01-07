<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller
{
    public function lista()
    {
        $produtos = DB::select('select * from produtos');

        if(view()->exists('listagem'))
        {
//        return view('listagem')->with('produtos', $produtos);
//        return view('listagem')->withProdutos($produtos);
            return view('listagem', ['produtos'=>$produtos]);
        }
    }
}