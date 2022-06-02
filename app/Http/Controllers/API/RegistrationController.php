<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * @OA\Get(
     *     path="/target-date",
     *     summary="Getting the target date",
     *     tags={"Registration"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *     ),
     *     @OA\Response(
     *         response="401",
     *         description="Unauthorized user",
     *     ),
     * )
     */
    public function targetDate() {
        return "hello";
    }
}
