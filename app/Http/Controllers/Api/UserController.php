<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\User as UserResource;
use App\Models\User;

//Class API Users
class UserController extends Controller
{
    /**
     * @OA\Get(
     *    path="/api/users",
     *    operationId="users/index",
     *    tags={"Usuários"},
     *    summary="Listar Usuários",
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
        $users = User::paginate(10);
        return UserResource::collection($users);
    }

    /**
     * @OA\Post(
     *      path="/api/user",
     *      operationId="user/store",
     *      tags={"Usuários"},
     *      summary="Cadastrar Usuário",
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *            required={"name", "email", "username", "password"},
     *            @OA\Property(property="name", type="string", format="string", example="Usuário Teste"),
     *            @OA\Property(property="email", type="string", format="string", example="teste@teste.com"),
     *            @OA\Property(property="username", type="string", format="string", example="user"),
     *            @OA\Property(property="password", type="string", format="string", example="user123"),
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
    public function store(UserRequest $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);

        if($user->save()){
            return new UserResource( $user );
        }
    }

     /**
     * @OA\Get(
     *    path="/api/user/{id}",
     *    operationId="user/show",
     *    tags={"Usuários"},
     *    summary="Pesquisar Usuário",
     *    @OA\Parameter(name="id", in="path", description="Id User", required=true,
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
        $user = User::findOrFail($id);
        return new UserResource( $user );
    }

    /**
     * @OA\Put(
     *     path="/api/user/{id}",
     *     operationId="user/update",
     *     tags={"Usuários"},
     *     summary="Editar Usuário",
     *     @OA\Parameter(name="id", in="path", description="Id User", required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *            required={"name", "email", "username", "password"},
     *            @OA\Property(property="name", type="string", format="string", example="Usuário Teste"),
     *            @OA\Property(property="email", type="string", format="string", example="teste@teste.com"),
     *            @OA\Property(property="username", type="string", format="string", example="user"),
     *            @OA\Property(property="password", type="string", format="string", example="user123"),
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
    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);

        if($user->save()){
            return new UserResource( $user );
        }

    }

    /**
     * @OA\Delete(
     *    path="/api/user/{id}",
     *    operationId="user/destroy",
     *    tags={"Usuários"},
     *    summary="Excluir Usuário",
     *    @OA\Parameter(name="id", in="path", description="Id User", required=true,
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
        $user = User::findOrFail($id);

        if($user->delete() ){
            return new UserResource( $user );
        }
    }
}
