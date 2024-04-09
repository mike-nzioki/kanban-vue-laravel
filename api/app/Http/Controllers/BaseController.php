<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    /**
     * SuccessResponse
     *
     * @param [type] $data
     * @param [type] $message
     * @return void
     */
    public function successResponse($data,$message)
    {
        $response = [
            'success' => true,
            'data' => $data,
            'message'=> $message,
        ];
        return response()->json($response, 200);
    }

    /**
     * errorMessage
     *
     * @param [type] $error
     * @param [type] $errorMessage
     * @param integer $code
     * @return void
     */
    public function errorResponse($error, $errorMessage = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message'=> $error,
        ];

        if ( !empty( $errorMessage ) )
        {
            $reponse['data'] = $errorMessage;
        }

        return response()->json($response, $code);
    }
}
