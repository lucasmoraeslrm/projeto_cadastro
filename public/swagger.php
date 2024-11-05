<?php
require 'vendor/autoload.php';

/**
 * @OA\Info(title="API de Clientes", version="1.0")
 */

/**
 * @OA\Post(
 *     path="/",
 *     summary="Insere um novo cliente",
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             required={"nome", "cpf", "telefone", "email"},
 *             @OA\Property(property="nome", type="string"),
 *             @OA\Property(property="cpf", type="string"),
 *             @OA\Property(property="telefone", type="string"),
 *             @OA\Property(property="email", type="string")
 *         )
 *     ),
 *     @OA\Response(response="200", description="Cliente inserido com sucesso")
 * )
 */

/**
 * @OA\Get(
 *     path="/",
 *     summary="Retorna todos os clientes",
 *     @OA\Response(response="200", description="Lista de clientes")
 * )
 */

/**
 * @OA\Get(
 *     path="/{id}",
 *     summary="Retorna um cliente pelo ID",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="string")),
 *     @OA\Response(response="200", description="Dados do cliente")
 * )
 */

/**
 * @OA\Put(
 *     path="/{id}",
 *     summary="Atualiza um cliente pelo ID",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="string")),
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             required={"nome", "cpf", "telefone", "email"},
 *             @OA\Property(property="nome", type="string"),
 *             @OA\Property(property="cpf", type="string"),
 *             @OA\Property(property="telefone", type="string"),
 *             @OA\Property(property="email", type="string")
 *         )
 *     ),
 *     @OA\Response(response="200", description="Cliente atualizado com sucesso")
 * )
 */

/**
 * @OA\Delete(
 *     path="/{id}",
 *     summary="Exclui um cliente pelo ID",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="string")),
 *     @OA\Response(response="200", description="Cliente excluído com sucesso")
 * )
 */
?>
