<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function SayHello(Request $request)
    {
        $name = $request->input('name');
        $lastname = $request->input('lastname');

        $result = "Hello $name $lastname";

        return json_encode(
            array(
                'status' => 200,
                'response' => array(
                    'mensaje' => $result
                )
            )
        );
    }
}
