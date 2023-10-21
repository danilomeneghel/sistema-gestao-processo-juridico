<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessoRequest;
use App\Http\Resources\Processo as ProcessoResource;
use App\Models\Processo;

//Class API Processos
class ProcessoController extends Controller
{
    /**
     * @OA\Get(
     *    path="/api/processos",
     *    operationId="processo/index",
     *    tags={"Processos"},
     *    summary="Listar Processos",
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
        $processos = processo::paginate(10);
        return processoResource::collection($processos);
    }

    /**
     * @OA\Post(
     *      path="/api/processo",
     *      operationId="processo/store",
     *      tags={"Processos"},
     *      summary="Cadastrar Processo",
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *            required={"codigo"},
     *            @OA\Property(property="codigo", type="integer", format="integer", example="1"),
     *            @OA\Property(property="nome", type="string", format="string", example="Matéria Teste"),
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
    public function store(ProcessoRequest $request)
    {
        $processo = new Processo;
        $processo->codigo = $request->codigo;
        $processo->nome = $request->nome;

        if($processo->save()){
            return new ProcessoResource( $processo );
        }
    }

    /**
     * @OA\Get(
     *    path="/api/processo/{id}",
     *    operationId="processo/show",
     *    tags={"Processos"},
     *    summary="Pesquisar Processo",
     *    @OA\Parameter(name="id", in="path", description="Id Processo", required=true,
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
        $processo = Processo::findOrFail($id);
        return new ProcessoResource( $processo );
    }

    /**
     * @OA\Put(
     *     path="/api/processo/{id}",
     *     operationId="processo/update",
     *     tags={"Processos"},
     *     summary="Editar Processo",
     *     @OA\Parameter(name="id", in="path", description="Id Processo", required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *        required=true,
     *         @OA\JsonContent(
     *            required={"codigo"},
     *            @OA\Property(property="codigo", type="integer", format="integer", example="1"),
     *            @OA\Property(property="nome", type="string", format="string", example="Matéria Teste"),
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
    public function update(ProcessoRequest $request, $id)
    {
        $processo = Processo::findOrFail($id);

        $processo->codigo = $request->codigo;
        $processo->nome = $request->nome;

        if($processo->save()){
            return new ProcessoResource( $processo );
        }
    }

    /**
     * @OA\Delete(
     *    path="/api/processo/{id}",
     *    operationId="processo/destroy",
     *    tags={"Processos"},
     *    summary="Excluir Processo",
     *    @OA\Parameter(name="id", in="path", description="Id Processo", required=true,
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
        $processo = processo::findOrFail($id);

        if($processo->delete() ){
            return new processoResource( $processo );
        }
    }
}
