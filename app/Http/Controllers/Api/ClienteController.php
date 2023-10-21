<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClienteRequest;
use App\Http\Resources\Cliente as ClienteResource;
use App\Models\Cliente;

//Class API Clientes
class ClienteController extends Controller
{
    /**
     * @OA\Get(
     *    path="/api/clientes",
     *    operationId="clientes/index",
     *    tags={"Clientes"},
     *    summary="Listar Clientes",
     *    @OA\Parameter(name="limit", in="query", description="limit", required=false,
     *        @OA\Schema(type="integer")
     *    ),
     *    @OA\Parameter(name="page", in="query", description="the page number", required=false,
     *        @OA\Schema(type="integer")
     *    ),
     *    @OA\Parameter(name="order", in="query", description="order  accepts 'asc' or 'desc'", required=false,
     *        @OA\Schema(type="string")
     *    ),
     *     @OA\Response(
     *          response=200, description="Success",
     *          @OA\JsonContent(
     *             @OA\Property(property="status", type="integer", example="200"),
     *             @OA\Property(property="data",type="object")
     *          )
     *       )
     *  )
     */
    public function index()
    {
        $clientes = Cliente::paginate(10);
        return ClienteResource::collection($clientes);
    }

    /**
     * @OA\Post(
     *      path="/api/cliente",
     *      operationId="cliente/store",
     *      tags={"Clientes"},
     *      summary="Cadastrar Cliente",
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *            required={"nome", "telefone", "genero"},
     *            @OA\Property(property="nome", type="string", format="string", example="Cliente Teste"),
     *            @OA\Property(property="email", type="string", format="string", example="teste@teste.com"),
     *            @OA\Property(property="telefone", type="integer", format="integer", example="99999999999"),
     *            @OA\Property(property="data_nascimento", type="integer", format="integer", example="1111-11-11"),
     *            @OA\Property(property="genero", type="string", format="string", example="Masculino"),
     *         ),
     *      ),
     *     @OA\Response(
     *          response=200, description="Success",
     *          @OA\JsonContent(
     *             @OA\Property(property="status", type="integer", example=""),
     *             @OA\Property(property="data",type="object")
     *          )
     *       )
     *  )
     */
    public function store(ClienteRequest $request)
    {
        $cliente = new Cliente;
        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->telefone = $request->telefone;
        $cliente->data_nascimento = $request->data_nascimento;
        $cliente->genero = $request->genero;

        if($cliente->save()){
            return new ClienteResource( $cliente );
        }
    }

     /**
     * @OA\Get(
     *    path="/api/cliente/{id}",
     *    operationId="cliente/show",
     *    tags={"Clientes"},
     *    summary="Pesquisar Cliente",
     *    @OA\Parameter(name="id", in="path", description="Id Cliente", required=true,
     *        @OA\Schema(type="integer")
     *    ),
     *     @OA\Response(
     *          response=200,
     *          description="Success",
     *          @OA\JsonContent(
     *          @OA\Property(property="status_code", type="integer", example="200"),
     *          @OA\Property(property="data",type="object")
     *           ),
     *        )
     *       )
     *  )
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return new ClienteResource( $cliente );
    }

    /**
     * @OA\Put(
     *     path="/api/cliente/{id}",
     *     operationId="cliente/update",
     *     tags={"Clientes"},
     *     summary="Editar Cliente",
     *     @OA\Parameter(name="id", in="path", description="Id Cliente", required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *        required=true,
     *         @OA\JsonContent(
     *            required={"nome", "telefone", "genero"},
     *            @OA\Property(property="nome", type="string", format="string", example="Cliente Teste"),
     *            @OA\Property(property="email", type="string", format="string", example="teste@teste.com"),
     *            @OA\Property(property="telefone", type="integer", format="integer", example="99999999999"),
     *            @OA\Property(property="data_nascimento", type="integer", format="integer", example="1111-11-11"),
     *            @OA\Property(property="genero", type="string", format="string", example="Masculino"),
     *         ),
     *      ),
     *     @OA\Response(
     *          response=200, description="Success",
     *          @OA\JsonContent(
     *             @OA\Property(property="status_code", type="integer", example="200"),
     *             @OA\Property(property="data",type="object")
     *          )
     *       )
     *  )
     */
    public function update(ClienteRequest $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->telefone = $request->telefone;
        $cliente->data_nascimento = $request->data_nascimento;
        $cliente->genero = $request->genero;

        if($cliente->save()){
            return new ClienteResource( $cliente );
        }

    }

    /**
     * @OA\Delete(
     *    path="/api/cliente/{id}",
     *    operationId="cliente/destroy",
     *    tags={"Clientes"},
     *    summary="Excluir Cliente",
     *    @OA\Parameter(name="id", in="path", description="Id Cliente", required=true,
     *        @OA\Schema(type="integer")
     *    ),
     *    @OA\Response(
     *         response=200,
     *         description="Success",
     *         @OA\JsonContent(
     *         @OA\Property(property="status_code", type="integer", example="200"),
     *         @OA\Property(property="data",type="object")
     *          ),
     *       )
     *      )
     *  )
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);

        if($cliente->delete() ){
            return new ClienteResource( $cliente );
        }
    }
}
