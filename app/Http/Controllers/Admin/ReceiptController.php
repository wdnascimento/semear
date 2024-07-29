<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Reciept\RecieptCreateRequest;
use App\Http\Requests\Admin\Reciept\RecieptUpdateRequest;
use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceiptController extends Controller
{
    protected $receipt,  $params;

    public function __construct(Receipt $receipts)
    {
        $this->receipt = $receipts;

        // Default values
        $this->params['titulo']='Recibos';
        $this->params['main_route']='admin.receipt';

    }

    public function index()
    {
        // PARAMS DEFAULT
        $this->params['subtitulo']='Recibos Cadastrados';
        $this->params['arvore'][0] = [
                    'url' => 'admin/receipt',
                    'titulo' => 'Recibos'
        ];

        $params = $this->params;
        $data = $this->receipt->get();
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

    public function store(RecieptCreateRequest $request)
    {
        $dataForm  = $request->all();
        $dataForm['value'] = (float) str_replace(',', '.', $dataForm['value']);

        $insert = $this->receipt->create($dataForm);
        if($insert){
            return redirect()->route($this->params['main_route'].'.index');
        }
        return redirect()->route($this->params['main_route'].'.create')->withErrors(['Falha ao fazer Inserir.']);
    }

    public function show($id)
    {
        $this->params['subtitulo']='Deletar Recibo';
        $this->params['arvore']=[
           [
               'url' => 'admin/receipt',
               'titulo' => 'Recibo'
           ],
           [
               'url' => '',
               'titulo' => 'Deletar'
           ]];
        $params = $this->params;

        $data = $this->receipt->find($id);
        return view($this->params['main_route'].'.show',compact('params','data'));
    }

    public function edit($id)
    {
        $this->params['subtitulo']='Editar Recibo';
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


        $data = $this->receipt->find($id);

        return view($this->params['main_route'].'.create',compact('params', 'data'));
    }

    public function update(RecieptUpdateRequest $request, $id)
    {
        $dataForm  = $request->all();
        $dataForm['value'] = (float) str_replace(',', '.', $dataForm['value']);

        if($this->receipt->find($id)->update($dataForm)){
            return redirect()->route($this->params['main_route'].'.index');
        }else{
            return redirect()->route($this->params['main_route'].'.create')->withErrors(['Falha ao editar.']);
        }
    }

    public function destroy($id)
    {
        if($this->receipt->find($id)->delete()){
            return redirect()->route($this->params['main_route'].'.index');
        }else{
            return redirect()->route($this->params['main_route'].'.create')->withErrors(['Falha ao deletar']);
        }
    }

    public function print($id)
    {
        $data = $this->receipt->find($id);
        return view($this->params['main_route'].'.print',compact('data'));
    }

    public function report(Request $request){
        $this->params['subtitulo']='Relatório de Recibos';
        $this->params['arvore']=[
           [
               'url' => 'admin/receipt',
               'titulo' => 'Recibo'
           ],
           [
               'url' => '',
               'titulo' => 'Relatórios'
           ]];

        $params = $this->params;

        $searchFields = $request->except('_token');
        $searchFields['begin']= isset($searchFields['begin'])?$searchFields['begin']: \Carbon\Carbon::now()->format('Y-m-d');
        $searchFields['end']= isset($searchFields['end'])?$searchFields['end']: \Carbon\Carbon::now()->format('Y-m-d');


        $data = $this   ->receipt->whereRaw(DB::raw("DATE(created_at) BETWEEN DATE('" .$searchFields['begin']."') and DATE('".$searchFields['end']."')"))
                        ->orderBy("created_at","desc")
                        ->paginate(50);

        return view($this->params['main_route'].'.report', compact('params','data','searchFields'));
    }


}
