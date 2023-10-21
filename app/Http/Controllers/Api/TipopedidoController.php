<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TipopedidoRequest;
use App\Http\Resources\Tipopedido as TipopedidoResource;
use App\Models\Tipopedido;

//Class API Tipopedidos
class TipopedidoController extends Controller
{
    /**
     * @OA\Get(
     *    path="/api/tipopedidos",
     *    operationId="tipopedido/index",
     *    tags={"Tipopedidos"},
     *    summary="Listar Tipopedidos",
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
        $tipopedidos = tipopedido::paginate(10);
        return tipopedidoResource::collection($tipopedidos);
    }

    /**
     * @OA\Post(
     *      path="/api/tipopedido",
     *      operationId="tipopedido/store",
     *      tags={"Tipopedidos"},
     *      summary="Cadastrar Tipopedido",
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *            required={"aluno_id", "materia_id", "periodo_id", "tipopedido", "aprovado"},
     *            @OA\Property(property="aluno_id", type="integer", format="integer", example="1"),
     *            @OA\Property(property="materia_id", type="integer", format="integer", example="1"),
     *            @OA\Property(property="periodo_id", type="integer", format="integer", example="1"),
     *            @OA\Property(property="tipopedido", type="integer", format="integer", example="9"),
     *            @OA\Property(property="aprovado", type="string", format="string", example="Sim"),
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
    public function store(TipopedidoRequest $request)
    {
        $tipopedido = new Tipopedido;
        $tipopedido->aluno_id = $request->aluno_id;
        $tipopedido->materia_id = $request->materia_id;
        $tipopedido->periodo_id = $request->periodo_id;
        $tipopedido->tipopedido = $request->tipopedido;
        $tipopedido->aprovado = $request->aprovado;

        if($tipopedido->save()){
            return new TipopedidoResource( $tipopedido );
        }
    }

    /**
     * @OA\Get(
     *    path="/api/tipopedido/{id}",
     *    operationId="tipopedido/show",
     *    tags={"Tipopedidos"},
     *    summary="Pesquisar Tipopedido",
     *    @OA\Parameter(name="id", in="path", description="Id Tipopedido", required=true,
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
        $tipopedido = Tipopedido::findOrFail($id);
        return new TipopedidoResource( $tipopedido );
    }

    /**
     * @OA\Put(
     *     path="/api/tipopedido/{id}",
     *     operationId="tipopedido/update",
     *     tags={"Tipopedidos"},
     *     summary="Editar Tipopedido",
     *     @OA\Parameter(name="id", in="path", description="Id Tipopedido", required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *        required=true,
     *         @OA\JsonContent(
     *            required={"aluno_id", "materia_id", "periodo_id", "tipopedido", "aprovado"},
     *            @OA\Property(property="aluno_id", type="integer", format="integer", example="1"),
     *            @OA\Property(property="materia_id", type="integer", format="integer", example="1"),
     *            @OA\Property(property="periodo_id", type="integer", format="integer", example="1"),
     *            @OA\Property(property="tipopedido", type="integer", format="integer", example="9"),
     *            @OA\Property(property="aprovado", type="string", format="string", example="Sim"),
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
    public function update(TipopedidoRequest $request, $id)
    {
        $tipopedido = Tipopedido::findOrFail($id);

        $tipopedido->aluno_id = $request->aluno_id;
        $tipopedido->materia_id = $request->materia_id;
        $tipopedido->periodo_id = $request->periodo_id;
        $tipopedido->tipopedido = $request->tipopedido;
        $tipopedido->aprovado = $request->aprovado;

        if($tipopedido->save()){
            return new TipopedidoResource( $tipopedido );
        }
    }

    /**
     * @OA\Delete(
     *    path="/api/tipopedido/{id}",
     *    operationId="tipopedido/destroy",
     *    tags={"Tipopedidos"},
     *    summary="Excluir Tipopedido",
     *    @OA\Parameter(name="id", in="path", description="Id Tipopedido", required=true,
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
        $tipopedido = tipopedido::findOrFail($id);

        if($tipopedido->delete() ){
            return new tipopedidoResource( $tipopedido );
        }
    }
}
