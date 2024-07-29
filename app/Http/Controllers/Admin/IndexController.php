<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dependente;
use App\Models\Pagamento;
use App\Models\Plano;
use App\Models\Receipt;
use App\Models\Socio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    protected $params, $receipt;

    public function __construct(Receipt $receipts) {

        // PARAMS DEFAULT
        $this->params['titulo']='Bem vindo';
        $this->params['main_route']='admin.index';
        $this->params['url_route']='admin';

        $this->receipt = $receipts;
    }



    public function index()
    {
        $data['receipt']= $this->receipt->count();
        $data['sum_receipt']= $this->receipt->sum('value');

        $params = $this->params;
        return view('admin.home', compact('params','data'));
    }

}
