<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dependente;
use App\Models\Pagamento;
use App\Models\Plano;
use App\Models\Socio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    protected $params, $socio, $plano, $dependente, $pagamento;

    public function __construct() {

        // PARAMS DEFAULT
        $this->params['titulo']='Bem vindo';
        $this->params['main_route']='admin.index';
        $this->params['url_route']='admin';

    }



    public function index()
    {



        $data= [];

        $params = $this->params;
        return view('admin.home', compact('params','data'));
    }

}
