<?php

namespace App\Http\Controllers\Colaboradores;

use App\Colaborador;
use App\Contrato_Colaborador;
use App\Endereco;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

class ColaboradorController extends Controller
{

    public $request;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }

    public function viewColaboradores()
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        $colaboradores = Colaborador::all();

        return view('colaboradores.index', compact('user', 'uriAtual', 'colaboradores'));
    }

    public function newColaboradores()
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        return view('colaboradores.novo', compact('user', 'uriAtual'));
    }

    public function insertColaboradores(Request $request)
    {
        $colaborador = new Colaborador();
        //Array assossiativo, somente um exemplo
        //$colaborador->create([$request->except(['_token'])]);

        // Forma certa de se cadastrar
        $colaborador->nome = $request->inputNome;
        $colaborador->nascimento = $request->nascimento;
        $colaborador->civil = $request->estCivil;
        $colaborador->rg = $request->inputRG;
        $colaborador->cpf = $request->inputCPF;
        $colaborador->save();

        return redirect()->route('colaboradores');
    }

    public function dadosColaborador(Colaborador $colaborador)
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        $address = $colaborador->endereco()->get();
        $address_head = 'col-md-10';
        $address_plus = 'col-md-2';
        foreach($address as $endereco) {
            $endereco->id;

            if($endereco->id != ''){
                $address_head = 'col-md-12';
                $address_plus = 'hidden';
            }
        }


        $contratos = $colaborador->contrato()->get();
        $contrato_head = 'col-md-10';
        $contrato_plus = 'col-md-2';
        foreach($contratos as $contrato) {
            $contrato->id;

            if($contrato->id != ''){
                $contrato_head = 'col-md-12';
                $contrato_plus = 'hidden';
            }
        }

        //MODIFICANDO MODO DE EXIBIÇÃO DO "RG"
        $rgColab = $colaborador->rg;
        $rg = substr_replace($rgColab, '.', 2, 0);
        $rg = substr_replace($rg, '.', 6, 0);
        $rg = substr_replace($rg, '-', 10, 0);

        //MODIFICANDO MODO DE EXIBIÇÃO DO "CPF"
        $cpfColab = $colaborador->cpf;
        $cpf = substr_replace($cpfColab, '.', 3, 0);
        $cpf = substr_replace($cpf, '.', 7, 0);
        $cpf = substr_replace($cpf, '-', 11, 0);

        return view('colaboradores.colaborador', compact('user', 'uriAtual', 'colaborador', 'rg' , 'cpf' ,'address', 'contratos', 'contrato_head', 'contrato_plus', 'address_head', 'address_plus'));
    }

    public function editformColaborador(Colaborador $colaborador)
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        return view('colaboradores.colaboradoredit', compact('user', 'uriAtual', 'colaborador'));
    }

    public function editColaborador(Colaborador $colaborador, Request $request)
    {
        $colaborador->nome = $request->inputNome;
        $colaborador->nascimento = $request->nascimento;
        $colaborador->civil = $request->estCivil;
        $colaborador->rg = $request->inputRG;
        $colaborador->cpf = $request->inputCPF;

        $colaborador->save();

        return redirect()->route('colaborador.dados',['colaborador' => $request->inputIdColaborador ]);
    }

    public function formEndereco(Colaborador $colaborador)
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        return view('colaboradores.endereco', compact('user', 'uriAtual', 'colaborador'));
    }

    public function addEnderecoColaborador(Request $request)
    {
        $endereco = new Endereco();
        $endereco->colaborador = $request->inputIdColaborador;
        $endereco->cep = $request->inputCEP;
        $endereco->logradouro = $request->inputLogradouro;
        $endereco->complemento = $request->inputComplemento;
        $endereco->bairro = $request->inputBairro;
        $endereco->cidade = $request->inputCidade;
        $endereco->uf = $request->inputUF;
        $endereco->pais = $request->inputPais;

        $endereco->save();

        return redirect()->route('colaborador.dados',['colaborador' => $request->inputIdColaborador ]);

    }

    public function editformEndereco(Colaborador $colaborador)
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        $endereco = $colaborador->endereco()->first();

        if($endereco){
            $address = $endereco;
        }

        return view('colaboradores.enderecoedit', compact('user', 'uriAtual', 'colaborador', 'address'));
    }

    public function editEndereco(Endereco $endereco, Request $request)
    {
        $endereco->colaborador = $request->inputIdColaborador;
        $endereco->cep = $request->inputCEP;
        $endereco->logradouro = $request->inputLogradouro;
        $endereco->complemento = $request->inputComplemento;
        $endereco->bairro = $request->inputBairro;
        $endereco->cidade = $request->inputCidade;
        $endereco->uf = $request->inputUF;
        $endereco->pais = $request->inputPais;

        $endereco->save();

        return redirect()->route('colaborador.dados',['colaborador' => $request->inputIdColaborador ]);
    }

    public function deleteEndereco(Endereco $endereco)
    {
        $colaborador = $endereco->colaborador;

        $endereco->delete();

        return redirect()->route('colaborador.dados',['colaborador' => $colaborador ]);
    }

    public function formContrato(Colaborador $colaborador)
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        return view('colaboradores.contrato', compact('user', 'uriAtual', 'colaborador'));
    }

    public function addContrato(Request $request)
    {

        $contrato = new Contrato_Colaborador();
        $contrato->colaborador = $request->inputIdColaborador;
        $contrato->salario = $request->inputSalario;
        $contrato->carga_horaria = $request->inputCarga;
        $contrato->ocupacao = $request->inputOcupacao;
        $contrato->status = $request->inputStatus;
        $contrato->registro = $request->inputEntrada;
        $contrato->demicao = $request->inputSaida;

        $contrato->save();

        return redirect()->route('colaborador.dados',['colaborador' => $request->inputIdColaborador ]);
    }

    public function editFormContrato(Colaborador $colaborador)
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        $contratos = $colaborador->contrato()->first();

        if($contratos->status == 'ativo'){
            $status_ativo = 'checked';
            $status_inativo = '';
        }else if($contratos->status == 'inativo'){
            $status_ativo = '';
            $status_inativo = 'checked';
        }

        return view('colaboradores.contratoedit', compact('user', 'uriAtual', 'colaborador', 'contratos', 'status_ativo', 'status_inativo'));
    }

    public function editContrato(Contrato_Colaborador $contrato, Request $request)
    {
        $contrato->salario = $request->inputSalario;
        $contrato->carga_horaria = $request->inputCarga;
        $contrato->ocupacao = $request->inputOcupacao;
        $contrato->status = $request->inputStatus;
        $contrato->registro = $request->inputEntrada;
        $contrato->demicao = $request->inputSaida;

        $contrato->save();

        return redirect()->route('colaborador.dados',['colaborador' => $request->inputIdColaborador ]);
    }
}
