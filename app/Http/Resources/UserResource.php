<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * @OA\Schema(
     *     schema="UserResource",
     *     type="object",
     *     title="User Resource",
     *     description="Данные пользователя",
     *     @OA\Property(property="id", type="integer", example=1),
     *     @OA\Property(property="name", type="string", example="Иван Иванов"),
     *     @OA\Property(property="email", type="string", format="email", example="ivan@example.com")
     * )
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
