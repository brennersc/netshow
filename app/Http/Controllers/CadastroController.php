<?php

namespace App\Http\Controllers;
use Validator;
use App\Cadastro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CadastroController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Validações 

        $validator = Validator::make(
            $request->all(),
            [
                'nome'      => 'required',
                'email'     => 'required|email',
                'telefone'  => 'required|celular_com_ddd|',                
                'mensagem'  => 'required',
                'file'      => 'required|mimes:pdf,doc,docx,odt,txt|max:500'
            ],
            [
                'required'  => 'O :attribute é obrigatorio!',
                'email'     => 'O campo email deve ser válido.',
                'regex'     => 'O campo telefone é inválido.',
                'min'       => 'O :attribute não pode ter menos de :min digitos!',
                'max'       => 'O :attribute não pode ter mais de :max kb!',
                'mimes'     => 'O arquivo anexo deve ser de alguns dos tipos: pdf, doc, docx, odt ou txt.',
            ]
        );

        // Retorno das Validações
        if ($validator->fails()){
            return redirect('/')->withErrors($validator)->withInput();
        }

        // Cadastro
        try {
            $cadastro = new Cadastro($request->all());
            $cadastro->ip = $request->ip();
            $cadastro->file = $request->file->store('arquivos');
            $cadastro->save();

            $mail = Mail::send('email.email', ['dados' => $request], function ($message) use ($request, $cadastro) {
                $message->from('brennersc@gmail.com', 'NetShow');
                $message->to($request->email);
                $message->subject('Cadastro!');
                $message->attach(storage_path('app/'.$cadastro->file));
            });

            return redirect('/')->with('mensagem', 'Cadastrado');

        } catch (\Exception $e) {
            $json = [
                'success' => false,
                'error' => [
                    'code' => $e->getCode(),
                    'message' => $e->getMessage(),
                ],
            ];

            return response()->json($json, 400);
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
