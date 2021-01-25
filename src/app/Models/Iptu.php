<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Iptu
 *
 * @OA\Schema(
 *     title="Iptu model",
 *     description="Iptu model",
 * )
 */
class Iptu extends Model {
    use HasFactory;

    /**
     * @OA\Property(
     *     title="ID",
     *     example=1
     * )
     *
     * @var integer
     *
     */
    private $id;
    /**
     * @OA\Property(
     *     title="Full Name",
     *     example="Rafael Chechi"
     * )
     *
     * @var string
     */
    private $full_name;
    /**
     * @OA\Property(
     *     title="CPF",
     *     example="01343444055"
     * )
     *
     * @var string
     */
    private $cpf;
    /**
     * @OA\Property(
     *     title="Immobile",
     *     example="Casa"
     * )
     *
     * @var string
     */
    private $immobile;
    /**
     * @OA\Property(
     *     title="City",
     *     example="Aratiba"
     * )
     *
     * @var string
     */
    private $city;
    /**
     * @OA\Property(
     *     title="Address",
     *     example="Rua Coronel Pedro Pinto de Souza"
     * )
     *
     * @var string
     */
    private $address;
    /**
     * @OA\Property(
     *     title="Amount",
     *     example="10.15"
     * )
     *
     * @var string
     */
    private $amount;
    /**
     * @OA\Property(
     *     title="Created Date",
     *     example="2020-12-09T15:57:50.000000Z"
     * )
     *
     * @var string
     */
    private $created_at;
    /**
     * @OA\Property(
     *     title="Updated Date",
     *     example="2021-01-09T15:57:50.000000Z"
     * )
     *
     * @var string
     */
    private $updated_at;

    protected $fillable = [
        'id',
        'immobile',
        'city',
        'address'
    ];
}
