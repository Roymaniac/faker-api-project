<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

/**
 * Class UserService
 * @package App\Services
 */
class UserService
{
    /**
     * Get list of users
     */
    public function getUsers()
    {
        $response = Http::get("https://reqres.in/api/users/");
        $data = $response->json();
        return $data;
    }

    public function getSingleUser(int $id)
    {
        $response = Http::get("https://reqres.in/api/users/".$id);
        $data = $response->json();

        return $data["data"];
    }
}
