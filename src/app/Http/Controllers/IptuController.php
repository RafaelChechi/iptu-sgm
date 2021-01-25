<?php

namespace App\Http\Controllers;

use App\Models\Iptu;
use App\Traits\Http\APIResponse;

class IptuController extends Controller {

    use APIResponse;

    /**
     * @OA\Get(
     *     path="/api/iptu/{cpf}",
     *     operationId="listIptuByCpf",
     *     tags={"Iptu"},
     *     @OA\Parameter(
     *          name="cpf",
     *          description="CPF",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Iptu")
     *     ),
     *      @OA\Response(response=400, description="Bad request", @OA\JsonContent(ref="#/components/schemas/ApiResponse")),
     *      @OA\Response(response=404, description="Resource Not Found", @OA\JsonContent(ref="#/components/schemas/ApiResponse")),
     *      @OA\Response(response=500, description="Internal Error Server", @OA\JsonContent(ref="#/components/schemas/ApiResponse"))
     * )
     */
    public function listIptuByCpf($cpf) {
        $iptu = Iptu::where("cpf", $cpf)->get();
        if (!empty($iptu)) {
            return $this->json($iptu);
        } else {
            $message = trans('messages.iptu_not_found');
            return $this->badRequest($message);
        }
    }
}
