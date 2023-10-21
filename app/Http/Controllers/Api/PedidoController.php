<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PedidoRequest;
use App\Http\Resources\Pedido as PedidoResource;
use App\Models\Pedido;

//Class API Pedidos
class PedidoController extends Controller
{
    /**
     * @OA\Get(
     *    path="/api/pedidos",
     *    operationId="pedido/index",
     *    tags={"Pedidos"},
     *    summary="Listar Pedidos",
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
        $pedidos = Pedido ::paginate(10);
        return PedidoResource::collection($pedidos);
    }

    /**
     * @OA\Post(
     *      path="/api/pedido",
     *      operationId="pedido/store",
     *      tags={"Pedidos"},
     *      summary="Cadastrar Pedido",
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *            required={"title", "content", "status"},
     *            @OA\Property(property="nome", type="string", format="string", example="Pedido Teste"),
     *            @OA\Property(property="logradouro", type="string", format="string", example="Logradouro Teste"),
     *            @OA\Property(property="numero", type="integer", format="integer", example="99"),
     *            @OA\Property(property="bairro", type="string", format="string", example="Bairro Teste"),
     *            @OA\Property(property="cidade", type="string", format="string", example="Cidade Teste"),
     *            @OA\Property(property="cep", type="integer", format="integer", example="99999999"),
      *            @OA\Property(property="estado", type="string", format="string", example="SP"),
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
    public function store(PedidoRequest $request)
    {
        $pedido = new Pedido;
        $pedido->nome = $request->nome;
        $pedido->logradouro = $request->logradouro;
        $pedido->numero = $request->numero;
        $pedido->bairro = $request->bairro;
        $pedido->cidade = $request->cidade;
        $pedido->cep = $request->cep;
        $pedido->estado = $request->estado;

        if($pedido->save()){
            return new PedidoResource( $pedido );
        }
    }

    /**
     * @OA\Get(
     *    path="/api/pedido/{id}",
     *    operationId="pedido/show",
     *    tags={"Pedidos"},
     *    summary="Pesquisar Pedido",
     *    @OA\Parameter(name="id", in="path", description="Id Pedido", required=true,
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
        $pedido = Pedido::findOrFail($id);
        return new PedidoResource( $pedido );
    }

    /**
     * @OA\Put(
     *     path="/api/pedido/{id}",
     *     operationId="pedido/update",
     *     tags={"Pedidos"},
     *     summary="Editar Pedido",
     *     @OA\Parameter(name="id", in="path", description="Id Pedido", required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *        required=true,
     *         @OA\JsonContent(
     *            required={"title", "content", "status"},
     *            @OA\Property(property="nome", type="string", format="string", example="Pedido Teste"),
     *            @OA\Property(property="logradouro", type="string", format="string", example="Logradouro Teste"),
     *            @OA\Property(property="numero", type="integer", format="integer", example="99"),
     *            @OA\Property(property="bairro", type="string", format="string", example="Bairro Teste"),
     *            @OA\Property(property="cidade", type="string", format="string", example="Cidade Teste"),
     *            @OA\Property(property="cep", type="integer", format="integer", example="99999999"),
      *            @OA\Property(property="estado", type="string", format="string", example="SP"),
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
    public function update(PedidoRequest $request, $id)
    {
        $pedido = Pedido::findOrFail($id);

        $pedido = new Pedido;
        $pedido->nome = $request->nome;
        $pedido->logradouro = $request->logradouro;
        $pedido->numero = $request->numero;
        $pedido->bairro = $request->bairro;
        $pedido->cidade = $request->cidade;
        $pedido->cep = $request->cep;
        $pedido->estado = $request->estado;

        if($pedido->save()){
            return new PedidoResource( $pedido );
        }
    }

    /**
     * @OA\Delete(
     *    path="/api/pedido/{id}",
     *    operationId="pedido/destroy",
     *    tags={"Pedidos"},
     *    summary="Excluir Pedido",
     *    @OA\Parameter(name="id", in="path", description="Id Pedido", required=true,
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
        $pedido = Pedido::findOrFail($id);

        if($pedido->delete() ){
            return new PedidoResource( $pedido );
        }
    }
}
