<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function success($data, $message = null)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data,
        ]);
    }

    public function error($message, $data = null)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => $data,
        ]);
    }


}
