<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 *   @OA\Info(
 *     title="Laravel Swagger API Documentation",
 *     version="1.0.0",
 *   )
 *   @OA\Tag(
 *     name="Registration",
 *     description="",
 *   )
 *   @OA\Server(
 *     url="https://localhost/api/",
 *     description="Laravel Swagger API"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
