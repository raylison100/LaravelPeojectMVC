<?php

namespace App\Http\Controllers;

use App\Entities\Automovel;
use App\Services\AutomovelService;
use App\Validators\AutomovelValidator;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Controllers\Controller as Controller;


class AutomoveisController extends Controller
{
    protected $service;
    protected $validator;

    public function __construct(AutomovelService $service, AutomovelValidator $validator)
    {
        $this->service = $service;
        $this->validator  = $validator;
    }

    public function index()
    {
          $title = "Listagem de Automoveis";
//          $automovel = $this->service->all();
          $automovel = Automovel::all();
          return view('painel.automovel.index', compact('automovel', 'title'));

    }


    public function create()
    {
        $title = " Cadastrar novo Automovel";
        $errors = null;
        return view('painel.automovel.create', compact('errors','title'));
    }

    public function store(Request $request)
    {

        //Pegando dados do Formulario
        $dataForm  = $request->except('_token');
        // Valida dados
        try{
            if($this->validator){
                $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);
            }
            $this->service->create($dataForm);
            return redirect()->route('automoveis.index');
        }catch (ValidatorException $e)
        {
            $title = " Cadastrar novo Automovel";
            $errors = $e->getMessageBag()->getMessages();
            return view('painel.automovel.create', compact('errors','title' ));

        }
    }

    public function show(Request $request)
    {
        $automovel = Automovel::where('placa',$request->search)->first();;
        if (isset($automovel)){
            $title = "Listagem de Automoveis";
            return view('painel.automovel.search', compact('automovel', 'title'));
        }else
            return redirect()->back();
    }
}
