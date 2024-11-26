<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    protected $params, $photo;

    public function __construct(Photo $photos) {

        // PARAMS DEFAULT
        $this->params['titulo']='Fotos';
        $this->params['main_route']='admin.photos';
        $this->params['url_route']='admin';

        $this->photo = $photos;
    }

    public function index()
    {

        // PARAMS DEFAULT
        $this->params['subtitulo']='Fotos do Site';
        $this->params['arvore'][0] = [
                    'url' => 'admin/photos',
                    'titulo' => 'Fotos'
        ];

        $params = $this->params;
        $data = $this->photo->paginate(50);
        return view($this->params['main_route'].'.index',compact('params','data'));
    }

    public function create()
    {
        // PARAMS DEFAULT
        $this->params['subtitulo']='Cadastrar Recibo';
        $this->params['arvore']=[
           [
               'url' => 'admin/receipt',
               'titulo' => 'Recibo'
           ],
           [
               'url' => '',
               'titulo' => 'Cadastrar'
           ]];
       $params = $this->params;

       return view($this->params['main_route'].'.create',compact('params'));
    }

    public function store(Request $request)
    {

        // Validação dos arquivos
        $request->validate([
            'url' => 'required',
            'url.*' => 'mimes:jpg,jpeg,png,pdf,docx|max:2048', // Validação para tipos de arquivos
        ]);

        $dataForm  = $request->file('url');
        foreach($dataForm as $i => $item){
            // dd($dataForm[$i]->hasFile('url'));
            $path = $item->store('photos', 'public');
            $data['url'] = $path;
            $insert = $this->photo->create($data);
            if(!$insert){
                continue;
            }
        }
        if($insert){
            return redirect()->route($this->params['main_route'].'.index');
        }
        return redirect()->route($this->params['main_route'].'.create')->withErrors(['Falha ao fazer Inserir.']);

    }


    public function destroy($id){
        // Localizar o registro da imagem no banco de dados
        $photo = $this->photo->findOrFail($id);

        // Remover o arquivo físico do armazenamento
        if (Storage::disk('public')->exists($photo->url)) {
            Storage::disk('public')->delete($photo->url);
            if($photo->delete()){
                return redirect()->route($this->params['main_route'].'.index');
            }
        }
        return redirect()->route($this->params['main_route'].'.create')->withErrors(['Falha ao deletar']);
    }

}
