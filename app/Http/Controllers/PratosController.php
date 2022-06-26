<?php

namespace App\Http\Controllers;

use App\Models\Prato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PratosController extends Controller
{

    public function index(){
        $pratos = Prato::all();

        return view('pratos/index', ['pratos' => $pratos]);
    }

    public function lista(){
        $pratos = Prato::all();

        return view('pratos/pratos', ['pratos' => $pratos]);
    }

    public function detalhes($id){
        $prato = Prato::find($id);

        return view('pratos/detalhes', ['prato' => $prato]);
    }

    public function create(){
        return view('pratos/adicionar');
    }

    public function store(Request $request){
        $nome = $request->nome;
        $descricao = $request->descricao;
        $preco = $request->preco;
        $imageName = '';

        // Tratamento da imagem
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;

            $requestImage->move(public_path('img/pratos'), $imageName);

        }

        Prato::create([
            'nome' => $nome,
            'descricao' => $descricao,
            'preco' => $preco,
            'imagem' => $imageName
        ]);

        return redirect()->route('pratos-lista');

    }

    public function edit($id){
        $prato = Prato::where('id', $id)->first();
        if($prato == null){
            return redirect()->route('pratos-lista');
        } else {
            return view('pratos/editar', ['prato' => $prato]);
        }
    }

    public function update(Request $request, $id){
        
        $prato = Prato::find($id);

        if($request->hasFile('image') && $request->file('image')->isValid()){

            File::delete(public_path('img/pratos/') . $prato->imagem);

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;

            $requestImage->move(public_path('img/pratos'), $imageName);

            $prato->update([
                'imagem' => $imageName
            ]);

        }
        
        $prato->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco  
        ]);
        
        return redirect()->route('pratos-lista');
    }

    public function delete($id){
        $prato = Prato::find($id);

        File::delete(public_path('img/pratos/') . $prato->imagem);

        $prato->delete();
        
        return redirect()->route('pratos-lista');
    }
}
