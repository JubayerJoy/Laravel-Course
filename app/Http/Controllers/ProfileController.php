<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class ProfileController extends Controller
{
    /**
     * @param string $id
     * @return Response
     */
    public function index(string $id): Response
    {
        // Declare your variables and assign the values stated in Question
        $name = "Donal Trump";
        $age = "75";

        // Add three variables in $data variable as associative array with values stated in the question
        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age,
        ];

        // Set your cookie variables stated in the question
        $name = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER["SERVER_NAME"];
        $secure = false;
        $httpOnly = true;

        // Add the return statement with the response method along with $data
        // and status-code and set the cookie stated in the question.
        $response = new Response($data, 200);
        $response->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);

        return $response;
    }
}
